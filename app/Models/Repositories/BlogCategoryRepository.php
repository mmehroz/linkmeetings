<?php
namespace App\Models\Repositories;
use App\Models\BlogCategories;
use App\Models\BlogCategoriesDescription;
use App\Models\Languages;


class BlogCategoryRepository extends AbstractRepository
{
    public $model;
    protected $table                            = 'blog_categories';
    protected $categories_description_table     = 'blog_categories_description';
    protected $foriegn_key                      = 'blog_category_id';
    protected $primary_key                      = 'id';

    /**
     * Creates a new model instance
     * @param App\Models\Page $page
     *
     * @return void
     */
    public function __construct(
        BlogCategories $blogcategories,
        BlogCategoriesDescription $blogcategoriesDescription
    ) {
        $this->model                = $blogcategories;
        $this->categories_description_model    = $blogcategoriesDescription;
    }

    public function getDescriptionById($id,$language_id)
    {
        // $language_id = getlanguage()->id;
        $category_blog_description = BlogCategoriesDescription::where('blog_category_id',$id)
            ->where('language_id',$language_id)
            ->first();
        return $category_blog_description;
    }

    public function getParentBlogs($language_id=0,$id_not=0)
    {
        if($language_id == 0)
        {
            $language_id = getlanguage()->id;
        }

        if($id_not != 0)
        {
            $category_blog_description = BlogCategoriesDescription::where('language_id',$language_id)->where('blog_category_id','!=',$id_not)->where('parent_id',0)->get();
        }
        else
        {
            $category_blog_description = BlogCategoriesDescription::where('language_id',$language_id)->where('parent_id',0)->get();
        }

        return $category_blog_description;
    }

    public function getcategoryBlogsList()
    {
        $language_id = getlanguage()->id;

        $joinParm   = $this->categories_description_table.'.'.$this->foriegn_key;
        $joinParm2  = $this->table.'.'.$this->primary_key;

        return $this->model::join(
            $this->categories_description_table,
            $joinParm,
            '=',
            $joinParm2
        )
            ->where($this->categories_description_table.'.language_id',$language_id)
            ->select(['blog_categories.id','blog_categories_description.status','blog_categories.slug','blog_categories_description.title','blog_categories_description.description']);
    }

    public function getFrontPageBySlug($slug)
    {
        $language_id = getlanguage()->id;

        $joinParm   = $this->categories_description_table.'.'.$this->foriegn_key;
        $joinParm2  = $this->table.'.'.$this->primary_key;

        return $this->model::join(
            $this->categories_description_table,
            $joinParm,
            '=',
            $joinParm2
        )
            ->where($this->categories_description_table.'.status','Active')
            ->where($this->categories_description_table.'.language_id',$language_id)
            ->where($this->table.'.slug',$slug)
            ->select(['blog_categories.*', 'blog_categories_description.*'])
            ->first();
    }

    public function add($data)
    {
        $language               = getlanguage();
        $language_id            = $language->id;
        
        $slug                   = $this->createSlug($data->slug);
        $user                   = isUserLoggedIn();
        $language               = getlanguage();
        $language_id            = $language->id;

        $insert                 = new $this->model;
        $insert->slug           = $slug;
        // $insert->created_by     = ($user) ? $user['user_id'] : 0;
        $insert->save();

        $languages = Languages::where('status','Active')->get();

        foreach($languages as $language)
        {
        $category_blog_id                = $insert->id;


        $category_description_title             = $data->{'title-'.$language->id};
        $category_description_description       = $data->{'description-'.$language->id};

        $insert_description                     = new $this->categories_description_model;
        $insert_description->parent_id          = $data->{'parent_id-'.$language->id};
        $insert_description->status             = $data->{'status-'.$language->id};
        $insert_description->blog_category_id   = $category_blog_id;
        $insert_description->language_id        = $language->id;
        $insert_description->title              = $category_description_title;
        $insert_description->description        = $category_description_description;
        $insert_description->save();
        
        
        }
        return $category_blog_id;
    }

    public function update($data,$category_blog_id)
    {

        // $language               = getlanguage();
        // $language_id            = $language->id;

        $languages = Languages::where('status','Active')->get();

        foreach($languages as $language)
        {
        
            $language_id = $language->id;
        
        $category_description_title             = $data->{'title-'.$language->id};
        $category_description_description       = $data->{'description-'.$language->id};

        $insert_description                     = $this->categories_description_model::where('blog_category_id',$category_blog_id)->where('language_id',$language_id)->first();
        $insert_description->parent_id          = $data->{'parent_id-'.$language->id};
        $insert_description->status             = $data->{'status-'.$language->id};
        //$insert_description->blog_category_id   = $category_blog_id;
        //$insert_description->language_id        = $language_id;
        $insert_description->title              = $category_description_title;
        $insert_description->description        = $category_description_description;
        $insert_description->save();

       
        }
        return $category_blog_id;
    }

    public function remove($id)
    {
        $delete         = $this->model::where($this->primary_key,$id)->delete();
        $delete_desc    = $this->categories_description_model::where($this->foriegn_key,$id)->delete();

        if($delete && $delete_desc)
            return TRUE;
        else
            return FALSE;
    }
}
