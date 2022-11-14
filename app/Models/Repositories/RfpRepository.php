<?php
namespace App\Models\Repositories;

use App\Models\Rfp;
use Session;

class RfpRepository  extends AbstractRepository
{
    /**
     * Creates a new model instance
     * @param App\Models\SiteSetting $site_setting
     *
     * @return void
     */
    public $model;

    public function __construct(Rfp $Rfp) {
        $this->model            =   $Rfp; 
    }

    public function add($data, $user_id = 0)
    {
        $type       =   strtolower(session::get('type'));
        
         if( !empty( $data ) ) {
            for ($i=0; $i < count($data->rfp_name) ; $i++) { 
                $insert                 =   new $this->model;
                $insert->user_id        =   $user_id;
                $insert->rfp_name       =   $data->rfp_name[$i] ?? '';
                $insert->rfp_position   =   $data->rfp_position[$i] ?? '';
                $insert->rfp_email      =   $data->rfp_email[$i] ?? '';
                $insert->rfp_phone      =   $data->rfp_phone[$i] ?? '';
                $insert->type           =   $type;
                if( $insert->rfp_name != '' || $insert->rfp_position != '' || $insert->rfp_email != '' || $insert->rfp_phone != '') {
                    $insert->save();                
                }
            }
            
        }
    }

}
