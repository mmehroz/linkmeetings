<?php
namespace App\Models\Repositories;

use App\Models\Repositories\RfpRepository;
use App\Models\Repositories\MembershipRepository;
use App\Models\Repositories\PackageRepository;
use App\Models\Languages;
use App\Models\DMC;
use App\Models\DMCDescription;
use App\Models\DMCSections;
use App\Models\DMCSectionsDescription;
use App\Models\DMCFleet;
use App\Models\DMCFleetDescription;
use App\Models\Hotel;
use App\User;
use Activation;
use Sentinel;
use Session;
use Stripe;
use File;
// use Helpers;

class DmcRepository  extends AbstractRepository
{
    /**
     * Creates a new model instance
     * @param App\Models\SiteSetting $site_setting
     *
     * @return void
     */
    public $model;
    protected $DMCDescription;

    protected $DMCSections;
    protected $DMCSectionsDescription;

    protected $DMCFleet;
    protected $DMCFleetDescription;

    protected $table = 'dmc';
    protected $hotel;

    public function __construct(
        User $user, 
        Hotel $hotel, 

        DMC $dmc, 
        DMCDescription $DMCDescription,

        DMCSections $DMCSections,
        DMCSectionsDescription $DMCSectionsDescription,

        DMCFleet $DMCFleet,
        DMCFleetDescription $DMCFleetDescription
         )
    {
        $this->model   =   $dmc;
        $this->DMCDescription   =   $DMCDescription;

        $this->DMCSections   =   $DMCSections;        
        $this->DMCSectionsDescription   =   $DMCSectionsDescription;

        $this->DMCFleet   =   $DMCFleet;
        $this->DMCFleetDescription   =   $DMCFleetDescription;

        $this->hotel   =   $hotel;
    }

    public function getHotelsCities() {
        $result =  $this->hotel::select('city')->groupBy('city')->get();
        return $result->toArray();
    }

    public function add($data)
    {
     
        $languages = Languages::where('status','Active')->get();
        $language               = getlanguage();
        $language_id            = $language->id;
        $slug                   = $this->createSlug($data->{'dmc_name-'.$language->id});
        $user                   = isUserLoggedIn();

        //dmc and dmc description
        $insert                 = new $this->model;
        $insert->slug           = $slug;
        $insert->location           = $data->dmc_location;
        $insert->city           = $data->city;
        $insert->state           = $data->state;
        $insert->zip           = $data->zip;
        $insert->latitude           = $data->latitude;
        $insert->longitude      = $data->longitude;
        $insert->created_by     = ($user) ? $user['user_id'] : 0;
        $insert->save();
        $id = $insert->id;
        foreach ($languages as $key => $language) {
            $insert_description                  = new $this->DMCDescription;
            $insert_description->dmc_id             = $id;
            $insert_description->language_id      =   $language->id;
            $insert_description->name   =   $data->{'dmc_name-'.$language->id};
            $insert_description->save();
        }

        $dmc_dir = public_path() . '/uploads/dmc/' . $id;
        if (!file_exists($dmc_dir)) {
            mkdir($dmc_dir, 0777, true);
        }

        if($dmc_image = $data->file('hotelLogo'))
        {
            $update_dmc         = $this->model::find($id);
            $fileName        = $dmc_image->getClientOriginalName();
            $extension       = $dmc_image->getClientOriginalExtension() ?: 'png';
            $folderName      = '/uploads/dmc/'.$id.'/';
            $destinationPath = public_path() . $folderName;
            $safeName        = $fileName;
            $dmc_image->move($destinationPath, $safeName);

            //delete old pic if exists
            if(File::exists(public_path() . $folderName.$update_dmc->hotelLogo))
            {
                File::delete(public_path() . $update_dmc->hotelLogo);
            }

            $update_dmc = $this->model::find($id);
            $update_dmc->image  = $safeName;
            $update_dmc->save();
        }


        // section top
        for ($i=0; $i <count($data->section_top) ; $i++) { 
            if( !empty( $data->file('section_image')[$i] ) ) {
                $value = $data->file('section_image')[$i];
                $fileName        = $value->getClientOriginalName();
                $extension       = $value->getClientOriginalExtension() ?: 'png';
                $folderName      = '/uploads/dmc/'.$id.'/';
                $destinationPath = public_path() . $folderName;
                $safeName        = $fileName;
                $value->move($destinationPath, $safeName);
                }

                $insert_section             = new $this->DMCSections;
                $insert_section->dmc_id     = $id;
                $insert_section->type       = 'top';
                $insert_section->image      = $safeName ?? '';
                $insert_section->save();   

                foreach ($languages as $key => $language) {               
                    $DMCSectionsDescription                  = new $this->DMCSectionsDescription;
                    $DMCSectionsDescription->dmc_section_id             = $insert_section->id;
                    $DMCSectionsDescription->language_id      =   $language->id;
                    if( !empty($data->{'heading-'.$language->id}[$i]) )
                        $DMCSectionsDescription->title  =   $data->{'heading-'.$language->id}[$i];
                    if( !empty($data->{'paragraph-'.$language->id}[$i]) )
                        $DMCSectionsDescription->description  =   $data->{'paragraph-'.$language->id}[$i];
                    $DMCSectionsDescription->save();
            }

        }
              //fleet
        // echo count( $data->fleet ); exit;
        for ($i=0; $i <count($data->fleet) ; $i++) { 
            if( !empty( $data->file('fleet_image')[$i] ) ) {
                $value = $data->file('fleet_image')[$i];
                $fileName        = $value->getClientOriginalName();
                $extension       = $value->getClientOriginalExtension() ?: 'png';
                $folderName      = '/uploads/dmc/'.$id.'/';
                $destinationPath = public_path() . $folderName;
                $safeName        = $fileName;
                $value->move($destinationPath, $safeName);
                }

                $insert_section             = new $this->DMCFleet;
                $insert_section->dmc_id     = $id;
                $insert_section->image      = $safeName ?? '';
                $insert_section->save();   

                foreach ($languages as $key => $language) {               
                    $DMCFleetDescription                  = new $this->DMCFleetDescription;
                    $DMCFleetDescription->dmc_fleet_id             = $insert_section->id;
                    $DMCFleetDescription->language_ide     =   $language->id;
                    if( !empty($data->{'vehicle_name-'.$language->id}[$i]) )
                        $DMCFleetDescription->name  =   $data->{'vehicle_name-'.$language->id}[$i];
                    if( !empty($data->{'capacity-'.$language->id}[$i]) )
                        $DMCFleetDescription->capacity  =   $data->{'capacity-'.$language->id}[$i];
                    $DMCFleetDescription->save();
                }

        }

        //section bottom
        for ($i=0; $i <count($data->section_bottom) ; $i++) { 
            if( !empty( $data->file('section_bottom')[$i] ) ) {
                $value = $data->file('section_image_bottom')[$i];
                $fileName        = $value->getClientOriginalName();
                $extension       = $value->getClientOriginalExtension() ?: 'png';
                $folderName      = '/uploads/dmc/'.$id.'/';
                $destinationPath = public_path() . $folderName;
                $safeName        = $fileName;
                $value->move($destinationPath, $safeName);
                }

                $insert_section             = new $this->DMCSections;
                $insert_section->dmc_id     = $id;
                $insert_section->type       = 'bottom';
                $insert_section->image      = $safeName ?? '';
                $insert_section->save();   

                foreach ($languages as $key => $language) {               
                    $DMCSectionsDescription                  = new $this->DMCSectionsDescription;
                    $DMCSectionsDescription->dmc_section_id             = $insert_section->id;
                    $DMCSectionsDescription->language_id      =   $language->id;
                    if( !empty($data->{'heading_name-'.$language->id}[$i]) )
                        $DMCSectionsDescription->title  =   $data->{'heading_name-'.$language->id}[$i];
                    if( !empty($data->{'paragraph_bottom-'.$language->id}[$i]) )
                        $DMCSectionsDescription->description  =   $data->{'paragraph_bottom-'.$language->id}[$i];
                    $DMCSectionsDescription->save();
            }

        }      

    }    

    //update
    public function update($data, $id)
    {
        // print_b($data->all());  echo $id; exit;
     
        $languages = Languages::where('status','Active')->get();
        $language               = getlanguage();
        $language_id            = $language->id;
        // $slug                   = $this->createSlug($data->{'dmc_name-'.$language->id});
        $user                   = isUserLoggedIn();

        //dmc and dmc description
        $insert                 = $this->model::where('id',$id)->first(); 
        // $insert->slug           = $slug;
        $insert->location       = $data->dmc_location ;
        $insert->city           = $data->city;
        $insert->state          = $data->state;
        $insert->zip            = $data->zip;
        $insert->latitude       = $data->latitude;
        $insert->longitude      = $data->longitude;
        // $insert->created_by     = ($user) ? $user['user_id'] : 0;
        $insert->save();
        $id = $insert->id;
        // exit;
        // foreach ($languages as $key => $language) {
        //     $insert_description                  = new $this->DMCDescription;
        //     $insert_description->dmc_id             = $id;
        //     $insert_description->language_id      =   $language->id;
        //     $insert_description->name   =   $data->{'dmc_name-'.$language->id};
        //     $insert_description->save();
        // }

        // $dmc_dir = public_path() . '/uploads/dmc/' . $id;
        // if (!file_exists($dmc_dir)) {
        //     mkdir($dmc_dir, 0777, true);
        // }

        // if($dmc_image = $data->file('hotelLogo'))
        // {
        //     $update_dmc         = $this->model::find($id);
        //     $fileName        = $dmc_image->getClientOriginalName();
        //     $extension       = $dmc_image->getClientOriginalExtension() ?: 'png';
        //     $folderName      = '/uploads/dmc/'.$id.'/';
        //     $destinationPath = public_path() . $folderName;
        //     $safeName        = $fileName;
        //     $dmc_image->move($destinationPath, $safeName);

        //     //delete old pic if exists
        //     if(File::exists(public_path() . $folderName.$update_dmc->hotelLogo))
        //     {
        //         File::delete(public_path() . $update_dmc->hotelLogo);
        //     }

        //     $update_dmc = $this->model::find($id);
        //     $update_dmc->image  = $safeName;
        //     $update_dmc->save();
        // }


        // // section top
        // for ($i=0; $i <count($data->section_top) ; $i++) { 
        //     if( !empty( $data->file('section_image')[$i] ) ) {
        //         $value = $data->file('section_image')[$i];
        //         $fileName        = $value->getClientOriginalName();
        //         $extension       = $value->getClientOriginalExtension() ?: 'png';
        //         $folderName      = '/uploads/dmc/'.$id.'/';
        //         $destinationPath = public_path() . $folderName;
        //         $safeName        = $fileName;
        //         $value->move($destinationPath, $safeName);
        //         }

        //         $insert_section             = new $this->DMCSections;
        //         $insert_section->dmc_id     = $id;
        //         $insert_section->type       = 'top';
        //         $insert_section->image      = $safeName ?? '';
        //         $insert_section->save();   

        //         foreach ($languages as $key => $language) {               
        //             $DMCSectionsDescription                  = new $this->DMCSectionsDescription;
        //             $DMCSectionsDescription->dmc_section_id             = $insert_section->id;
        //             $DMCSectionsDescription->language_id      =   $language->id;
        //             if( !empty($data->{'heading-'.$language->id}[$i]) )
        //                 $DMCSectionsDescription->title  =   $data->{'heading-'.$language->id}[$i];
        //             if( !empty($data->{'paragraph-'.$language->id}[$i]) )
        //                 $DMCSectionsDescription->description  =   $data->{'paragraph-'.$language->id}[$i];
        //             $DMCSectionsDescription->save();
        //     }

        // }
        //       //fleet
        // // echo count( $data->fleet ); exit;
        // for ($i=0; $i <count($data->fleet) ; $i++) { 
        //     if( !empty( $data->file('fleet_image')[$i] ) ) {
        //         $value = $data->file('fleet_image')[$i];
        //         $fileName        = $value->getClientOriginalName();
        //         $extension       = $value->getClientOriginalExtension() ?: 'png';
        //         $folderName      = '/uploads/dmc/'.$id.'/';
        //         $destinationPath = public_path() . $folderName;
        //         $safeName        = $fileName;
        //         $value->move($destinationPath, $safeName);
        //         }

        //         $insert_section             = new $this->DMCFleet;
        //         $insert_section->dmc_id     = $id;
        //         $insert_section->image      = $safeName ?? '';
        //         $insert_section->save();   

        //         foreach ($languages as $key => $language) {               
        //             $DMCFleetDescription                  = new $this->DMCFleetDescription;
        //             $DMCFleetDescription->dmc_fleet_id             = $insert_section->id;
        //             $DMCFleetDescription->language_ide     =   $language->id;
        //             if( !empty($data->{'vehicle_name-'.$language->id}[$i]) )
        //                 $DMCFleetDescription->name  =   $data->{'vehicle_name-'.$language->id}[$i];
        //             if( !empty($data->{'capacity-'.$language->id}[$i]) )
        //                 $DMCFleetDescription->capacity  =   $data->{'capacity-'.$language->id}[$i];
        //             $DMCFleetDescription->save();
        //         }

        // }

        // //section bottom
        // for ($i=0; $i <count($data->section_bottom) ; $i++) { 
        //     if( !empty( $data->file('section_bottom')[$i] ) ) {
        //         $value = $data->file('section_image_bottom')[$i];
        //         $fileName        = $value->getClientOriginalName();
        //         $extension       = $value->getClientOriginalExtension() ?: 'png';
        //         $folderName      = '/uploads/dmc/'.$id.'/';
        //         $destinationPath = public_path() . $folderName;
        //         $safeName        = $fileName;
        //         $value->move($destinationPath, $safeName);
        //         }

        //         $insert_section             = new $this->DMCSections;
        //         $insert_section->dmc_id     = $id;
        //         $insert_section->type       = 'bottom';
        //         $insert_section->image      = $safeName ?? '';
        //         $insert_section->save();   

        //         foreach ($languages as $key => $language) {               
        //             $DMCSectionsDescription                  = new $this->DMCSectionsDescription;
        //             $DMCSectionsDescription->dmc_section_id             = $insert_section->id;
        //             $DMCSectionsDescription->language_id      =   $language->id;
        //             if( !empty($data->{'heading_name-'.$language->id}[$i]) )
        //                 $DMCSectionsDescription->title  =   $data->{'heading_name-'.$language->id}[$i];
        //             if( !empty($data->{'paragraph_bottom-'.$language->id}[$i]) )
        //                 $DMCSectionsDescription->description  =   $data->{'paragraph_bottom-'.$language->id}[$i];
        //             $DMCSectionsDescription->save();
        //     }

        // }      

    }

    public function getDMCByUserID($id=0) {
        return $this->model::where('created_by',$id)->get();
    }

}
