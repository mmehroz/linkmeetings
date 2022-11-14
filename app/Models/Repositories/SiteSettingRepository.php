<?php
namespace App\Models\Repositories;
use App\Models\SiteSetting;
use App\Models\Languages;

class SiteSettingRepository  extends AbstractRepository
{
    /**
     * Creates a new model instance
     * @param App\Models\SiteSetting $site_setting
     *
     * @return void
     */
    public function __construct(
        SiteSetting $site_setting
    ) {
        $this->model    = $site_setting;
    }

    public function update($id=0,$data=array())
    {
        $getSetting = $this->model::find($id);
            // print_b($data);
        // exit;
        $template_content       = serialize( $this->templateContent($data) );
        $quickLink              = serialize( $this->quickLink($data) );
        $help              = serialize( $this->help($data) );
        $partner              = serialize( $this->partner($data) );
        $subcribe_text              = serialize( $this->subcribe_text($data) );

        $data['site_title'] = $template_content;
        $data['quick_link'] = $quickLink;
        $data['help'] = $help;
        $data['partner'] = $partner;
        $data['subcribe_text'] = $subcribe_text;
    
        unset($data['site_title_en']);
        unset($data['site_title_es']);
        unset($data['site_title_pt']);   

        unset($data['quick_link_en']);
        unset($data['quick_link_es']);
        unset($data['quick_link_pt']);       

        unset($data['help_en']);
        unset($data['help_es']);
        unset($data['help_pt']);

        unset($data['partner_en']);
        unset($data['partner_es']);
        unset($data['partner_pt']);        

        unset($data['subcribe_text_en']);
        unset($data['subcribe_text_es']);
        unset($data['subcribe_text_pt']);

        if(!empty($data))
        {
            if($getSetting)
                $this->model->where('id',$id)->update($data);
            else
            {
                $data['id'] = $id;
                $this->model->insert($data);
            }
        }

        return true;
    }

    public function templateContent($data)  { //Set fields as per template        
            $template_content['site_title_en']        = $data['site_title_en'];
            $template_content['site_title_es']        = $data['site_title_es'];
            $template_content['site_title_pt']        = $data['site_title_pt'];
            return $template_content; 

    } 

    public function quickLink($data) { //Set fields as per template
            $template_content['quick_link_en']        = $data['quick_link_en'] ?? '';
            $template_content['quick_link_es']        = $data['quick_link_es'] ?? '';
            $template_content['quick_link_pt']        = $data['quick_link_pt'] ?? '';
            return $template_content;
    } 

    public function help($data) { //Set fields as per template
            $template_content['help_en']        = $data['help_en'] ?? '';
            $template_content['help_es']        = $data['help_es'] ?? '';
            $template_content['help_pt']        = $data['help_pt'] ?? '';
            return $template_content;    
    }    

    public function partner($data) { //Set fields as per template
            $template_content['partner_en']        = $data['partner_en'] ?? '';
            $template_content['partner_es']        = $data['partner_es'] ?? '';
            $template_content['partner_pt']        = $data['partner_pt'] ?? '';
            return $template_content;
    }    

    public function subcribe_text($data) { //Set fields as per template
            $template_content['subcribe_text_en']        = $data['subcribe_text_en'] ?? '';
            $template_content['subcribe_text_es']        = $data['subcribe_text_es'] ?? '';
            $template_content['subcribe_text_pt']        = $data['subcribe_text_pt'] ?? '';
            return $template_content;   
    }

}
