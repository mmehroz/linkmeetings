<?php
namespace App\Models\Repositories;
use App\Models\Blog;
use App\Models\BlogDescription;
use App\Models\BlogToCategories;
use App\Models\BlogCategoriesDescription;
use App\Models\Languages;


class BlogRepository  extends AbstractRepository
{
    public $model;
    protected $table                            = 'blogs';
    protected $description_table                = 'blogs_description';
    protected $blogtocategory_table             = 'blog_to_categories';
    protected $blogcategoryDescription_table    = 'blog_categories_description';
    protected $foriegn_key                      = 'blog_id';
    protected $primary_key                      = 'id';
    protected $foriegn_key1                     = 'blog_description_id';
    protected $page_limit                       = 12;


    /**
     * Creates a new model instance
     * @param App\Models\Page $page
     *
     * @return void
     */
    public function __construct(
        Blog $blog,
        BlogDescription $blogDescription,
        BlogToCategories $blogToCategories,
        BlogCategoriesDescription $blogCategoriesDescription
    ) {
        $this->model                                = $blog;
        $this->description_model                    = $blogDescription;
        $this->blogtocategories_model               = $blogToCategories;
        $this->blogcategoriesDescription_model      = $blogCategoriesDescription;
    }

    public function getDescriptionById($id,$language_id)
    {
        //$language_id = getlanguage()->id;
        $blog_description = BlogDescription::where('blog_id',$id)
            // ->whereIn('language_id', [1, 2, 3])
            ->where('language_id',$language_id)
            ->first();
        // dd($blog_description->toArray());
        return $blog_description;
    }

    public function getcategoriesById($id)
    {
        $language_id = getlanguage()->id;
        $blog_categories = BlogToCategories::where('blog_description_id',$id)
            ->first();
        return $blog_categories;
    }

    public function getBlogPagination()
    {
        $language_id = getlanguage()->id;

        $joinParm   = $this->description_table.'.'.$this->foriegn_key;
        $joinParm2  = $this->table.'.'.$this->primary_key;

        return $this->model::join(
            $this->description_table,
            $joinParm,
            '=',
            $joinParm2
        )
            ->where($this->description_table.'.status','Active')
            ->where($this->description_table.'.language_id',$language_id)
            ->paginate($this->page_limit);
            //->select(['blogs.id', 'blogs_description.title','blogs.is_feature', 'blogs_description.short_title', 'blogs.slug', 'blogs_description.status', 'blogs.created_at']);
    }

    public function getBlogsList()
    {
        $language_id = getlanguage()->id;

        $joinParm   = $this->description_table.'.'.$this->foriegn_key;
        $joinParm2  = $this->table.'.'.$this->primary_key;

        return $this->model::join(
            $this->description_table,
            $joinParm,
            '=',
            $joinParm2
        )
            ->where($this->description_table.'.language_id',$language_id)
            ->select(['blogs.id', 'blogs_description.title','blogs.is_feature', 'blogs_description.short_title', 'blogs.slug', 'blogs_description.status', 'blogs.created_at']);
    }

    public function getFrontPageBySlug($slug)
    {
        $language_id = getlanguage()->id;

        $joinParm   = $this->description_table.'.'.$this->foriegn_key;
        $joinParm2  = $this->table.'.'.$this->primary_key;

        return $this->model::join(
            $this->description_table,
            $joinParm,
            '=',
            $joinParm2
        )
            ->where($this->description_table.'.status','Active')
            ->where($this->description_table.'.language_id',$language_id)
            ->where($this->table.'.slug',$slug)
            ->select(['blogs.*', 'blogs_description.*'])
            ->first();
    }

    public function add($data)
    {

        $language               = getlanguage();
        $language_id            = $language->id;
        $slug                   = $this->createSlug($data->{'short_title-'.$language->id});
        $user                   = isUserLoggedIn();


        $is_feature = ($data->{'is_feature-'.$language->id}) ? $data->{'is_feature-'.$language->id} : 0;


        $insert                 = new $this->model;
        $insert->slug           = $slug;
        $insert->is_feature     = $is_feature;
        // $insert->is_feature     = ($data->is_feature) ? $data->is_feature : 0;
        $insert->order          = $this->model->count()+1;
        $insert->created_by     = ($user) ? $user['user_id'] : 0;
        $insert->save();


       $languages = Languages::where('status','Active')->get();


        foreach($languages as $language)
        {

        $blog_id                                = $insert->id;
        if( isset($data->{'title-'.$language->id}) ) {
            $title                                  = $data->{'title-'.$language->id};
            $short_title                            = $data->{'short_title-'.$language->id};
            $content                                = $data->{'content-'.$language->id};
            $short_content                          = $data->{'short_content-'.$language->id};
            $meta_title                             = $data->{'meta_title-'.$language->id};
            $meta_keywords                          = $data->{'meta_keywords-'.$language->id};
            $meta_description                       = $data->{'meta_description-'.$language->id};
            $status                                 = $data->{'status-'.$language->id};
            $image                                  = str_replace(url('/'),'',$data->{'image-'.$language->id});


            $insert_description                     = new $this->description_model;
            $insert_description->blog_id            = $blog_id;
            $insert_description->language_id        = $language->id;
            $insert_description->title              = $title;
            $insert_description->short_title        = $short_title;
            $insert_description->content            = $content;
            $insert_description->short_content      = $short_content;
            $insert_description->meta_title         = $meta_title;
            $insert_description->meta_keywords      = $meta_keywords;
            $insert_description->meta_description   = $meta_description;
            $insert_description->image              = $image;
            $insert_description->status             = $status;
            //$insert_description->page_video         = $data->page_video;
            $insert_description->save();


        $blog_description_id                             = $insert_description->id;

        $category_id                                     = $data->{'blogcategory-'.$language->id};

        $blog_categories                                 = new $this->blogtocategories_model;

        $blog_categories->blog_description_id            = $blog_description_id;
        $blog_categories->category_id                    = $category_id;
        $blog_categories->save();
        }
    }
        return $blog_id;
        }

    public function addIn($data, $id=0, $language_id = 0)
    {

        $language = Languages::where('status','Active')->get();
        $language->id = $language_id;

       

        $blog_id                                = $id;
        if( isset($data->{'title-'.$language->id}) ) {
            $title                                  = $data->{'title-'.$language->id};
            $short_title                            = $data->{'short_title-'.$language->id};
            $content                                = $data->{'content-'.$language->id};
            $short_content                          = $data->{'short_content-'.$language->id};
            $meta_title                             = $data->{'meta_title-'.$language->id};
            $meta_keywords                          = $data->{'meta_keywords-'.$language->id};
            $meta_description                       = $data->{'meta_description-'.$language->id};
            $status                                 = $data->{'status-'.$language->id};
            $image                                  = str_replace(url('/'),'',$data->{'image-'.$language->id});


            $insert_description                     = new $this->description_model;
            $insert_description->blog_id            = $blog_id;
            $insert_description->language_id        = $language->id;
            $insert_description->title              = $title;
            $insert_description->short_title        = $short_title;
            $insert_description->content            = $content;
            $insert_description->short_content      = $short_content;
            $insert_description->meta_title         = $meta_title;
            $insert_description->meta_keywords      = $meta_keywords;
            $insert_description->meta_description   = $meta_description;
            $insert_description->image              = $image;
            $insert_description->status             = $status;
            //$insert_description->page_video         = $data->page_video;
            $insert_description->save();


        $blog_description_id                             = $insert_description->id;

        $category_id                                     = $data->{'blogcategory-'.$language->id};

        $blog_categories                                 = new $this->blogtocategories_model;

        $blog_categories->blog_description_id            = $blog_description_id;
        $blog_categories->category_id                    = $category_id;
        $blog_categories->save();
        
        }
        return $blog_id;
    }

    public function update($data,$blog_id)
    {
        // print_r($data->all());
        // exit;
        $language               = getlanguage();
        $language_id            = $language->id;

        $languages = Languages::where('status','Active')->get();
        $is_feature = ($data->{'is_feature-'.$language->id}) ? $data->{'is_feature-'.$language->id} : 0;
        $insert                 = $this->model::where('id',$blog_id)->first();
        $insert->is_feature = $is_feature;
        $insert->save();
        // $language_id = Languages::where('id' ,'>' ,0)->get('id');


        // dd($languages);

        foreach($languages as $language)
        {

        $language_id = $language->id;

        $insert_description                     = $this->description_model::where('blog_id',$blog_id)->where('language_id',$language_id)->first();
        if( !$insert_description ) {
            $id = $this->addIn($data, $blog_id, $language->id);
            return $id;
        } 

        $insert_description->blog_id            = $blog_id;
        $insert_description->language_id        = $language_id;

        $title                                  = $data->{'title-'.$language->id};
        $short_title                            = $data->{'short_title-'.$language->id};
        $content                                = $data->{'content-'.$language->id};
        $short_content                          = $data->{'short_content-'.$language->id};
        $meta_title                             = $data->{'meta_title-'.$language->id};
        $meta_keywords                          = $data->{'meta_keywords-'.$language->id};
        $meta_description                       = $data->{'meta_description-'.$language->id};
        $status                                 = $data->{'status-'.$language->id};
        $image                                  = str_replace(url('/'),'',$data->{'image-'.$language->id});

        $insert_description->title              = $title;
        $insert_description->short_title        = $short_title;
        $insert_description->content            = $content;
        $insert_description->short_content      = $short_content;
        $insert_description->meta_title         = $meta_title;
        $insert_description->meta_keywords      = $meta_keywords;
        $insert_description->meta_description   = $meta_description;
        $insert_description->image              = $image;
        $insert_description->status             = $status;
        //$insert_description->page_video         = $data->page_video;
        $insert_description->save();


        $blog_categories                                 = $this->blogtocategories_model::where('blog_description_id',$blog_id)->first();

        // $blog_description_id                             = $insert_description->id;

        $category_id                                     = $data->{'blogcategory-'.$language->id};

        $blog_categories->blog_description_id            = $blog_id;
        $blog_categories->category_id                    = $category_id;
        $blog_categories->save();
        }
        // exit;
        // dd($blog_id);
        return $blog_id;
    }

    public function remove($id)
    {
        $delete         = $this->model::where($this->primary_key,$id)->delete();
        $delete_desc    = $this->description_model::where($this->foriegn_key,$id)->delete();

        if($delete && $delete_desc)
            return TRUE;
        else
            return FALSE;
    }

    public function BlogsListforfront()
    {
        $language_id = getlanguage()->id;


        $joinParm   = $this->description_table.'.'.$this->foriegn_key;
        $joinParm2  = $this->table.'.'.$this->primary_key;
        $joinParm3  = $this->blogtocategory_table.'.'.$this->foriegn_key1;

        return $this->model::join(

            $this->description_table,
            $joinParm,
            '=',
            $joinParm2
        )
            ->join(
                $this->blogtocategory_table,
                $joinParm3,
                '=',
                $joinParm
            )
            ->join(
                $this->blogcategoryDescription_table,
                $joinParm2,
                '=',
                $joinParm3
            )
            ->where($this->description_table.'.language_id',$language_id)
            ->where($this->blogcategoryDescription_table.'.language_id',$language_id)
            ->where($this->table.'.is_feature',0)
            ->where($this->description_table.'.status','Active')
            ->where($this->description_table.'.language_id',$language_id)
            // ->where($this->blogtocategory_table.'.blog_id',$blog_id)
            ->select(['blogs.*','blog_to_categories.*','blog_categories_description.title as ttitle','blogs_description.*'])->paginate(1);


//        $language_id = getlanguage()->id;
//
//
//        $joinParm   = $this->description_table.'.'.$this->foriegn_key;
//        $joinParm2  = $this->table.'.'.$this->primary_key;
//        $joinParm3  = $this->blogtocategory_table.'.'.$this->foriegn_key1;
//
//        return $this->model::join(
//
//            $this->description_table,
//            $joinParm,
//            '=',
//            $joinParm2
//        )
//            ->join(
//                $this->blogtocategory_table,
//                $joinParm3,
//                '=',
//                $joinParm
//            )
//            ->join(
//                $this->blogcategoryDescription_table,
//                $joinParm2,
//                '=',
//                $joinParm3
//            )
//            ->where($this->description_table.'.language_id',$language_id)
//            ->where($this->blogcategoryDescription_table.'.language_id',$language_id)
//            ->where($this->table.'.is_feature',0)
//            ->where($this->description_table.'.status','Active')
//            ->where($this->description_table.'.language_id',$language_id)
//            // ->where($this->blogtocategory_table.'.blog_id',$blog_id)
//            ->select(['blogs.*','blog_to_categories.*','blog_categories_description.title as ttitle','blogs_description.*'])->paginate(12);

    }

    public function featuredBlogsListforfront()

    {
        $language_id = getlanguage()->id;


        $joinParm   = $this->description_table.'.'.$this->foriegn_key;
        $joinParm2  = $this->table.'.'.$this->primary_key;
        $joinParm3  = $this->blogtocategory_table.'.'.$this->foriegn_key1;

        return $this->model::join(

            $this->description_table,
            $joinParm,
            '=',
            $joinParm2
        )
            ->join(
                $this->blogtocategory_table,
                $joinParm3,
                '=',
                $joinParm
            )
            ->join(
                $this->blogcategoryDescription_table,
                $joinParm2,
                '=',
                $joinParm3
            )
            ->where($this->description_table.'.language_id',$language_id)
            ->where($this->blogcategoryDescription_table.'.language_id',$language_id)
            ->where($this->table.'.is_feature',1)
            ->where($this->description_table.'.status','Active')
            ->where($this->description_table.'.language_id',$language_id)
            // ->where($this->blogtocategory_table.'.blog_id',$blog_id)
            ->select(['blogs.*','blog_to_categories.*','blog_categories_description.title as ttitle','blogs_description.*'])->paginate(1);
    }
}
