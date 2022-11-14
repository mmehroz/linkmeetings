<?php
namespace App\Models\Repositories;
use App\Models\Page;
use App\Models\PageDescription;
use App\Models\Languages;

class PageRepository  extends AbstractRepository
{
    public $model;
    protected $table                = 'pages';
    protected $description_table    = 'pages_description';
    protected $foriegn_key          = 'page_id';
    protected $primary_key          = 'id';

    /**
     * Creates a new model instance
     * @param App\Models\Page $page
     *
     * @return void
     */
    public function __construct(
        Page $page,
        PageDescription $pageDescription
    ) {
        $this->model                = $page;
        $this->description_model    = $pageDescription;
    }

    public function getDescriptionById($id,$language_id=0)
    {

        if($language_id == 0)
        {
            $language_id = getlanguage()->id;
        }

        $page_description = PageDescription::where('page_id',$id)
            ->where('language_id',$language_id)
            ->first();
        return $page_description;
    }

    public function getPagesList()
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
            ->select(['pages.id', 'pages_description.title', 'pages_description.short_title', 'pages.slug', 'pages_description.status', 'pages.created_at'])->get();
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
            ->select(['pages.*', 'pages_description.*'])
            ->first();
    }

    public function add($data)
    {
        // dd($data);
        $language               = getlanguage();
        $language_id            = $language->id;
        $slug                   = $this->createSlug($data->{'short_title-'.$language->id});
        $user                   = isUserLoggedIn();


        $insert                 = new $this->model;
        $insert->slug           = $slug;
        $insert->order          = $this->model->count()+1;
        $insert->created_by     = ($user) ? $user['user_id'] : 0;
        $insert->save();

        $languages = Languages::where('status','Active')->get();


        foreach($languages as $language)
        {


        $page_id                = $insert->id;

        $template_content       = serialize( $this->templateContent($data,$language_id) ); //Get Content for each template

        $template                               = $data->{'template-'.$language->id};
        $title                                  = $data->{'title-'.$language->id};
        $short_title                            = $data->{'short_title-'.$language->id};
//        $content                                = $data->{'content-'.$language->id};
//        $short_content                          = $data->{'short_content-'.$language->id};
        $meta_title                             = $data->{'meta_title-'.$language->id};
        $meta_keywords                          = $data->{'meta_keywords-'.$language->id};
        $meta_description                       = $data->{'meta_description-'.$language->id};
        $status                                 = $data->{'status-'.$language->id};
        $page_video                             = $data->{'page_video-'.$language->id};
        $image                                  = str_replace(url('/'),'',$data->{'page_image-'.$language->id});





        $insert_description                     = new $this->description_model;
        $insert_description->page_id            = $page_id;
        $insert_description->language_id        = $language->id;
        $insert_description->template           = $template;
        $insert_description->title              = $title;
        $insert_description->short_title        = $short_title;
//        $insert_description->content            = $content;
//        $insert_description->short_content      = $short_content;
        $insert_description->meta_title         = $meta_title;
        $insert_description->meta_keywords      = $meta_keywords;
        $insert_description->meta_description   = $meta_description;
        $insert_description->image              = $image;
        $insert_description->status             = $status;
        $insert_description->page_video         = $page_video;
        $insert_description->template_content   = $template_content;
        $insert_description->save();

        }

        return $page_id;
    }

    public function update($data,$page_id)
    {
        // print_b($data->all());
        // exit;
        $languages = Languages::where('status','Active')->get();

        foreach($languages as $language)
        {
            $language_id = $language->id;

        $template_content       = serialize( $this->templateContent($data,$language_id) ); //Get Content for each template
        // print_b($template_content);
        // exit;
        $insert_description                     = $this->description_model::where('page_id',$page_id)->where('language_id',$language_id)->first();
        $insert_description->page_id            = $page_id;
        $insert_description->language_id        = $language->id;
        $insert_description->template           = $data->{'template-'.$language->id};
        $insert_description->title              = $data->{'title-'.$language->id};;
        $insert_description->short_title        = $data->{'short_title-'.$language->id};;
//        $insert_description->content            = $data->{'content-'.$language->id};;
//        $insert_description->short_content      = $data->{'short_content-'.$language->id};;
        $insert_description->meta_title         = $data->{'meta_title-'.$language->id};;
        $insert_description->meta_keywords      = $data->{'meta_keywords-'.$language->id};;
        $insert_description->meta_description   = $data->{'meta_description-'.$language->id};;
        $insert_description->image              = str_replace(url('/'),'',$data->{'page_image-'.$language->id});
        $insert_description->status             = $data->{'status-'.$language->id};
        $insert_description->page_video         = $data->{'page_video-'.$language->id};
        $insert_description->template_content   = $template_content;
        $insert_description->save();
        }

        return $page_id;
    }

    public function templateContent($data, $language_id) //Set fields as per template
    {
        $template_content = array();

        if($data->{'template-'.$language_id} == 'home')
        {
            $template_content['search_title-'.$language_id]        = $data->{'search_title-'.$language_id};
            $template_content['section_1-'.$language_id]            = $data->{'section_1-'.$language_id};
            $template_content['section_2-'.$language_id]            = $data->{'section_2-'.$language_id};
            $template_content['section_3-'.$language_id]            = $data->{'section_3-'.$language_id};
            $template_content['section_4-'.$language_id]            = $data->{'section_4-'.$language_id};
            $template_content['section_5-'.$language_id]            = $data->{'section_5-'.$language_id};
            $template_content['section_6-'.$language_id]            = $data->{'section_6-'.$language_id};

        }

        if($data->{'template-'.$language_id} == 'list-your-hotel')
        {
            $template_content['package_title-'.$language_id]        = $data->{'package_title-'.$language_id};
            $template_content['sub_title-'.$language_id]            = $data->{'sub_title-'.$language_id};
            $template_content['pprice-'.$language_id]               = $data->{'pprice-'.$language_id};
            $template_content['package_1-'.$language_id]            = $data->{'package_1-'.$language_id};
            $template_content['package_link-'.$language_id]         = $data->{'package_link-'.$language_id};
            $template_content['package_link_title-'.$language_id]   = $data->{'package_link_title-'.$language_id};

            $template_content['package_title2-'.$language_id]       = $data->{'package_title2-'.$language_id};
            $template_content['sub_title2-'.$language_id]           = $data->{'sub_title2-'.$language_id};
            $template_content['pprice2-'.$language_id]              = $data->{'pprice2-'.$language_id};
            $template_content['package_2-'.$language_id]            = $data->{'package_2-'.$language_id};
            $template_content['package_link2-'.$language_id]        = $data->{'package_link2-'.$language_id};
            $template_content['package_link_title2-'.$language_id]  = $data->{'package_link_title2-'.$language_id};

            $template_content['package_title3-'.$language_id]       = $data->{'package_title3-'.$language_id};
            $template_content['sub_title3-'.$language_id]           = $data->{'sub_title3-'.$language_id};
            $template_content['pprice3-'.$language_id]              = $data->{'pprice3-'.$language_id};
            $template_content['package_3-'.$language_id]            = $data->{'package_3-'.$language_id};
            $template_content['package_link3-'.$language_id]        = $data->{'package_link3-'.$language_id};
            $template_content['package_link_title3-'.$language_id]  = $data->{'package_link_title3-'.$language_id};
        }

        if($data->{'template-'.$language_id} == 'list-your-dmc')
        {
            $template_content['package_titledmc-'.$language_id]        = $data->{'package_titledmc-'.$language_id};
            $template_content['sub_titledmc-'.$language_id]            = $data->{'sub_titledmc-'.$language_id};
            $template_content['ppricedmc-'.$language_id]               = $data->{'ppricedmc-'.$language_id};
            $template_content['packagedmc_1-'.$language_id]            = $data->{'packagedmc_1-'.$language_id};
            $template_content['package_linkdmc-'.$language_id]         = $data->{'package_linkdmc-'.$language_id};
            $template_content['package_link_titledmc-'.$language_id]   = $data->{'package_link_titledmc-'.$language_id};

            $template_content['package_titledmc2-'.$language_id]       = $data->{'package_titledmc2-'.$language_id};
            $template_content['sub_titledmc2-'.$language_id]           = $data->{'sub_titledmc2-'.$language_id};
            $template_content['ppricedmc2-'.$language_id]              = $data->{'ppricedmc2-'.$language_id};
            $template_content['package_dmc2-'.$language_id]            = $data->{'package_dmc2-'.$language_id};
            $template_content['package_linkdmc2-'.$language_id]        = $data->{'package_linkdmc2-'.$language_id};
            $template_content['package_link_titledmc2-'.$language_id]  = $data->{'package_link_titledmc2-'.$language_id};

            $template_content['package_titledmc3-'.$language_id]       = $data->{'package_titledmc3-'.$language_id};
            $template_content['sub_titledmc3-'.$language_id]           = $data->{'sub_titledmc3-'.$language_id};
            $template_content['ppricedmc3-'.$language_id]              = $data->{'ppricedmc3-'.$language_id};
            $template_content['package_dmc3-'.$language_id]            = $data->{'package_dmc3-'.$language_id};
            $template_content['package_linkdmc3-'.$language_id]        = $data->{'package_linkdmc3-'.$language_id};
            $template_content['package_link_titledmc3-'.$language_id]  = $data->{'package_link_titledmc3-'.$language_id};
        }
        if($data->{'template-'.$language_id} == 'privacy-policy')
        {
            $template_content['content-'.$language_id]        = $data->{'content-'.$language_id};
        }

        return $template_content;
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
}
