<?php
namespace App\Models\Repositories;
use App\Models\Menu;
use App\Models\MenuDescription;
use App\Models\Languages;
use App\Models\Page;
use App\Models\PageDescription;


class MenuRepository  extends AbstractRepository
{
    public $model;
    protected $table                            = 'menu';
    protected $description_table                = 'menu_description';
    protected $page_table                       = 'pages';
    protected $page_description_table           = 'pages_description';
    protected $foriegn_key                      = 'menu_id';
    protected $primary_key                      = 'id';
    protected $foriegn_key_page                 = 'page_id';
    

    /**
     * Creates a new model instance
     * @param App\Models\Menu $page
     *
     * @return void
     */
    public function __construct(
        Menu $menu,
        MenuDescription $menuDescription,
        Page $page,
        PageDescription $pageDescription
       
    ) {
        $this->model                                = $menu;
        $this->description_model                    = $menuDescription;
        $this->page_model                           = $page;
        $this->page_description_model               = $pageDescription;
    }

    public function getDescriptionById($id,$language_id)
    {
        //$language_id = getlanguage()->id;
        $menu_description = MenuDescription::where('menu_id',$id)
            ->where('language_id',$language_id)
            ->first();
        // dd($blog_description->toArray());
        return $menu_description;
    }

    public function getMenuListforpage()
    {
        $language_id = getlanguage()->id;
        
        return  $getdetails = MenuDescription::leftJoin('pages', 'menu_description.page_id', '=', 'pages.id')
                                    // ->leftJoin('menu_description', 'pages_description.page_id', '=', 'menu_description.page_id')
                                    // ->leftJoin('pages_description', 'pages.id', '=', 'pages_description.page_id')
                                    ->where('menu_description.language_id', '=' , $language_id)
                                    ->select('menu_description.title','pages.slug')
                                    ->get();
    }
    

    public function getMenuList()
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
            ->select(['menu.id','menu_description.type', 'menu.section', 'menu.status', 'menu_description.title', 'menu_description.url','menu.created_at']);
    }


    public function add($data)
    {
        
        $language               = getlanguage();
        $language_id            = $language->id;
        $user                   = isUserLoggedIn();
        // dd($user);
        // $is_feature = ($data->{'is_feature-'.$language->id}) ? $data->{'is_feature-'.$language->id} : 0;

        $insert                 = new $this->model;
        // $insert->type           = $data->{'type-'.$language->id};
        $insert->section        = $data->{'section-'.$language->id};
        $insert->status         = $data->{'status-'.$language->id};
        // $insert->is_feature     = ($data->is_feature) ? $data->is_feature : 0;
        $insert->created_by     = ($user) ? $user['user_id'] : 0;
        $insert->save();

        
       $languages = Languages::where('status','Active')->get();
       

        foreach($languages as $language)
        {

        $menu_id                                = $insert->id;
        $type                                   = $data->{'type-'.$language->id};
        $page_id                                = $data->{'page_id-'.$language->id};
        $title                                  = $data->{'title-'.$language->id};
        $url                                    = $data->{'url-'.$language->id};
       
        $insert_description                     = new $this->description_model;
        $insert_description->menu_id            = $menu_id;
        $insert_description->page_id            = $page_id;
        $insert_description->language_id        = $language->id;
        $insert_description->title              = $title;
        $insert_description->type               = $type;
        $insert_description->url                = $url;
        $insert_description->save();

        }

        return $menu_id;
    }

    public function update($data,$menu_id)
    {
        $languages = Languages::where('status','Active')->get();

        foreach($languages as $language)
        {

        $language_id = $language->id;

        $insert                                 = $this->model::where('id',$menu_id)->first();

        // $type                                   = $data->{'type-'.$language->id};
        $section                                = $data->{'section-'.$language->id};
        $status                                 = $data->{'status-'.$language->id};
       
        // $insert->type                           = $type;
        $insert->section                        = $section;
        $insert->status                         = $status;
        $insert->save();



        $insert_description                     = $this->description_model::where('menu_id',$menu_id)->where('language_id',$language_id)->first();

        $insert_description->menu_id            = $menu_id;
        $insert_description->language_id        = $language_id;

        $type                                   = $data->{'type-'.$language->id};
        $page_id                                = $data->{'page_id-'.$language->id};
        $title                                  = $data->{'title-'.$language->id};
        $url                                    = $data->{'url-'.$language->id};

        $insert_description->menu_id            = $menu_id;
        $insert_description->type               = $type;
        $insert_description->page_id            = $page_id;
        $insert_description->language_id        = $language_id;
        $insert_description->title              = $title;
        $insert_description->url                = $url;
        $insert_description->save();

        }
       
        return $menu_id;
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
