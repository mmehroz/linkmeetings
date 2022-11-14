<?php
namespace App\Models\Repositories;
use App\Models\Hotel;
use App\Models\HotelDescription;
use App\Models\AmenityToHotel;
use App\Models\FacilityToHotel;
use App\Models\ServiceToHotel;
use App\Models\RecreationalActivityToHotel;
use App\Models\VenueAccess;
use App\Models\VenueAccessDescription;
use App\Models\VenueAccessToHotel;
use App\Models\EquipmentToHotel;
use App\Models\MeetingSpaceFloorPlan;
use App\Models\HotelRoom;
use App\Models\HotelRoomDescription;
use App\Models\HotelGuestRoom;
use App\Models\HotelGuestRoomDetail;
use App\Models\HotelGuestRoomDetailDescription;
use App\Models\RoomFacilityToHotel;
use App\Models\ResturantBar;
use App\Models\ResturantBarDescription;
use App\Models\NearbyPlace;
use App\Models\TagToHotel;
use App\Models\HotelGallery;
use App\Models\Languages;
use Illuminate\Support\Str;
use File;


class HotelRepository  extends AbstractRepository
{
    public $model;
    protected $table                                        = 'hotels';
    protected $description_table                            = 'hotel_description';
    protected $amenity_to_hotel_table                       = 'amenities_to_hotels';
    protected $facility_to_hotel_table                      = 'facilities_to_hotels';
    protected $services_to_hotel_table                      = 'services_to_hotels';
    protected $recreational_actiivities_to_hotel_table      = 'recreational_activities_to_hotels';
    protected $venue_access_table                           = 'venue_access';
    protected $venue_access_description_table               = 'venue_access_description';
    protected $venue_access_to_hotel_table                  = 'venue_access_to_hotels';
    protected $equipments_to_hotel_table                    = 'equipments_to_hotels';
    protected $meeting_space_for_plans_table                = 'meeting_space_floor_plans';
    protected $hotel_rooms_table                            = 'hotel_rooms';
    protected $hotel_rooms_description_table                = 'hotel_rooms_description';
    protected $foriegn_key                                  = 'hotel_id';
    protected $primary_key                                  = 'id';

    protected $amenity_to_hotel_model;
    protected $facility_to_hotel_model;
    protected $service_to_hotel_model;
    protected $recreationa_activity_to_hotel_model;
    protected $venue_access_to_hotel_model;



    /**
     * Creates a new model instance
     * @param App\Models\Page $page
     *
     * @return void
     */
    public function __construct(
        Hotel $hotel,
        HotelDescription $hotelDescription,
        AmenityToHotel $amenityToHotel,
        FacilityToHotel $facilityToHotel,
        ServiceToHotel $serviceToHotel,
        RecreationalActivityToHotel $recreationaActivityToHotel,
        VenueAccess $venueAccess,
        VenueAccessDescription $venueAccessDescription,
        VenueAccessToHotel $venueAccessToHotel,
        EquipmentToHotel $equipmentToHotel,
        MeetingSpaceFloorPlan $meetingSpaceFloorplan,
        HotelRoom $hotelRoom,
        HotelRoomDescription $hotelRoomDescription,
        HotelGuestRoom $hotelGuestRoom,
        HotelGuestRoomDetail $hotelGuestRoomDetail,
        HotelGuestRoomDetailDescription $hotelGuestRoomDetailDescription,
        RoomFacilityToHotel $roomFacilityToHotel,
        ResturantBar $resturantBar,
        ResturantBarDescription $resturantBarDescription,
        NearbyPlace $nearByPlace,
        TagToHotel $tagToHotel,
        HotelGallery $hotelGallery
    ) {
        $this->model                                        = $hotel;
        $this->description_model                            = $hotelDescription;
        $this->amenity_to_hotel_model                       = $amenityToHotel;
        $this->facility_to_hotel_model                      = $facilityToHotel;
        $this->service_to_hotel_model                       = $serviceToHotel;
        $this->recreational_activity_to_hotel_model         = $recreationaActivityToHotel;
        $this->venue_access_model                           = $venueAccess;
        $this->venue_access_description_model               = $venueAccessDescription;
        $this->venue_access_to_hotel_model                  = $venueAccessToHotel;
        $this->equipment_to_hotel_model                     = $equipmentToHotel;
        $this->meeting_space_floor_plan_model               = $meetingSpaceFloorplan;
        $this->hotel_room_model                             = $hotelRoom;
        $this->hotel_room_description_model                 = $hotelRoomDescription;
        $this->hotel_guest_room_model                       = $hotelGuestRoom;
        $this->hotel_guest_room_detail_model                = $hotelGuestRoomDetail;
        $this->hotel_guest_room_detail_description_model    = $hotelGuestRoomDetailDescription;
        $this->hotel_guest_room_facility_to_hotel_model     = $roomFacilityToHotel;
        $this->resturant_bar_model                          = $resturantBar;
        $this->resturant_bar_description_model              = $resturantBarDescription;
        $this->near_by_place_model                          = $nearByPlace;
        $this->tag_to_hotel_model                           = $tagToHotel;
        $this->hotel_gallery_model                          = $hotelGallery;
    }

    public function getDescriptionById($id,$language_id)
    {
        $description = HotelDescription::where('hotel_id',$id)
            ->where('language_id',$language_id)
            ->first();
        return $description;
    }

    public function getList()
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
            ->select([$this->table.'.*', $this->description_table.'.*']);
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
            //->where($this->description_table.'.status','Active')
            ->where($this->description_table.'.language_id',$language_id)
            ->where($this->table.'.slug',$slug)
            ->select([$this->table.'.*', $this->description_table.'.*'])
            ->first();
    }

    public function add($data)
    {
        $language               = getlanguage();
        $language_id            = $language->id;
        $slug                   = $this->createSlug($data->{'hotel_name-'.$language->id});
        $user                   = isUserLoggedIn();
        $created_by             = ($user) ? $user['user_id'] : 1;
        $manage_by              = ($user) ? $user['user_id'] : 1;
        $languages              = Languages::where('status','Active')->get();

        if($data->user)
        {
            $created_by = $data->user;
            $manage_by = $data->user;
        }

        if($data->manage_by)
            $manage_by = $data->manage_by;


        //hotels
        $hotel                                      = new $this->model;
        $hotel->slug                                = $slug;
        $hotel->address                             = $data->hotel_address;
        $hotel->latitude                            = $data->latitude;
        $hotel->longitude                           = $data->longitude;
        $hotel->city                                = $data->city;
        $hotel->state                               = $data->state;
        $hotel->zip                                 = $data->zip;
        $hotel->space_meeting_room                  = $data->space_meeting_room;
        $hotel->space_meeting_space                 = $data->space_meeting_space;
        $hotel->space_guest_rooms                   = $data->space_guest_rooms;
        $hotel->space_restuatrant_bars              = $data->space_restuatrant_bars;
        $hotel->space_chain_name                    = $data->space_chain_name;
        $hotel->space_built_year                    = $data->space_built_year;
        $hotel->space_total_meeting_space_area      = $data->space_total_meeting_space_area;
        $hotel->space_brand_name                    = $data->space_brand_name;
        $hotel->space_dmc                           = '';
        $hotel->space_renovation_year               = $data->space_renovation_year;
        $hotel->space_all_inclusive_hotel           = $data->space_all_inclusive_hotel;
        $hotel->space_aaa_rating                    = $data->space_aaa_rating;
        $hotel->space_trip_advisor_rating           = $data->space_trip_advisor_rating;
        $hotel->total_meeting_space                 = $data->total_meeting_space;
        $hotel->largest_room                        = $data->largest_room;
        $hotel->second_largest_room                 = $data->second_largest_room;
        $hotel->exhibit_space                       = $data->exhibit_space;
        //$hotel->catering_service_image              = '';
        $hotel->terms_conditions                    = $data->terms_conditions;

        if($data->is_featured)
        {
            $hotel->is_featured = $data->is_featured;
        }

        $hotel->created_by                          = $created_by;
        $hotel->manage_by                           = $manage_by;
        $hotel->save();

        $hotel_id   =   $hotel->id;

        $hotel_dir = public_path() . '/uploads/hotels/' . $hotel_id;

        if (!file_exists($hotel_dir)) {
            mkdir($hotel_dir, 0777, true);
        }

        if($catering_image = $data->file('catering_service_image'))
        {
            $fileName        = $catering_image->getClientOriginalName();
            $extension       = $catering_image->getClientOriginalExtension() ?: 'png';
            $folderName      = '/uploads/hotels/'.$hotel_id.'/';
            $destinationPath = public_path() . $folderName;
            $safeName        = $fileName;
            $catering_image->move($destinationPath, $safeName);

            $update_hotels = $this->model::find($hotel_id);
            $update_hotels->catering_service_image  = $safeName;
            $update_hotels->save();
        }

        //amenities_to_hotels
        $get_amenities = $data->amenities;
        if($get_amenities)
        {
            foreach($get_amenities as $amenity_id)
            {
                $amenities                  = new $this->amenity_to_hotel_model;
                $amenities->amenity_id      = $amenity_id;
                $amenities->hotel_id        = $hotel_id;
                $amenities->save();
            }
        }

        //facilities_to_hotels
        $get_facilities = $data->facilities;
        if($get_facilities)
        {
            foreach($get_facilities as $facility_id)
            {
                $facilities                 = new $this->facility_to_hotel_model;
                $facilities->facility_id    = $facility_id;
                $facilities->hotel_id       = $hotel_id;
                $facilities->save();
            }
        }

        //services_to_hotels
        $get_services = $data->services;
        if($get_services)
        {
            foreach($get_services as $service_id)
            {
                $services                 = new $this->service_to_hotel_model;
                $services->service_id    = $service_id;
                $services->hotel_id       = $hotel_id;
                $services->save();
            }
        }

        //recreational_activities_to_hotels
        $get_recreational_activities_to_hotels = $data->recreational_activities;
        if($get_recreational_activities_to_hotels)
        {
            foreach($get_recreational_activities_to_hotels as $activity_id)
            {
                $services                 = new $this->recreational_activity_to_hotel_model;
                $services->activity_id    = $activity_id;
                $services->hotel_id       = $hotel_id;
                $services->save();
            }
        }

        //venue_access
        $get_venue_access = $data->venue_access_by;
        if($get_venue_access)
        {
            $venue_access           = new $this->venue_access_model;
            $venue_access->icon     = '';
            $venue_access->save();

            $venue_access_id    = $venue_access->id;

            //venue_access_description
            foreach($languages as $language)
            {
                $venue_access_description                   = new $this->venue_access_description_model;
                $venue_access_description->name             = $data->venue_access_by;
                $venue_access_description->venue_access_id  = $venue_access_id;
                $venue_access_description->language_id      = $language->id;
                $venue_access_description->save();
            }

            //venue_access_to_hotels
            $venue_access_to_hotel_model                    = new $this->venue_access_to_hotel_model;
            $venue_access_to_hotel_model->venue_access_id   = $venue_access_id;
            $venue_access_to_hotel_model->hotel_id          = $hotel_id;
            $venue_access_to_hotel_model->save();
        }

        //equipments_to_hotels
        $get_equipments = $data->equipments;
        if($get_equipments)
        {
            foreach($get_equipments as $equipment_id)
            {
                $equipments                 = new $this->equipment_to_hotel_model;
                $equipments->equipment_id   = $equipment_id;
                $equipments->hotel_id       = $hotel_id;
                $equipments->save();
            }
        }


        if( is_array($data->floor_plans) && !empty($data->floor_plans))
        {
            foreach($data->floor_plans as $floor_plan)
            {
                $destinationPath        = public_path() . '/uploads/hotels/temp/';
                $newDestinationPath     = public_path() . '/uploads/hotels/'.$hotel_id.'/';
                $completePathName       = $destinationPath . $floor_plan;
                $newCompletePathName    = $newDestinationPath . $floor_plan;

                if( File::exists($completePathName) )
                {
                    $move = File::move($completePathName, $newCompletePathName);

                    if($move)
                    {
                        $meeting_space_floor_plan               = new $this->meeting_space_floor_plan_model;
                        $meeting_space_floor_plan->hotel_id     = $hotel_id;
                        $meeting_space_floor_plan->file         = $floor_plan;
                        $meeting_space_floor_plan->save();
                    }
                }
            }
        }


        //hotel_rooms
        if($data->{'room_name-1'})
        {
            $total_rooms = count( $data->{'room_name-1'} );

            for($i = 0; $i < $total_rooms; $i++)
            {
                //print_b($data->room_area); exit;
                $data->room_area = array_values($data->room_area);
                $data->room_height = array_values($data->room_height);
                $data->room_size = array_values($data->room_size);
                $data->room_cocktail = array_values($data->room_cocktail);
                $data->room_theatre = array_values($data->room_theatre);
                $data->room_school = array_values($data->room_school);
                $data->room_banquet = array_values($data->room_banquet);
                $data->room_imperial = array_values($data->room_imperial);
                $data->room_ushape = array_values($data->room_ushape);


                $hotel_room             = new $this->hotel_room_model;
                $hotel_room->area       = $data->room_area[$i];
                $hotel_room->height     = $data->room_height[$i];
                $hotel_room->size       = $data->room_size[$i];
                $hotel_room->cocktail   = $data->room_cocktail[$i];
                $hotel_room->theatre    = $data->room_theatre[$i];
                $hotel_room->school     = $data->room_school[$i];
                $hotel_room->banquet    = $data->room_banquet[$i];
                $hotel_room->imperial   = $data->room_imperial[$i];
                $hotel_room->ushape     = $data->room_ushape[$i];
                $hotel_room->hotel_id   = $hotel_id;
                $hotel_room->created_by = $created_by;
                $hotel_room->save();

                $hotel_room_id  =   $hotel_room->id;

                //hotel_rooms_description
                foreach($languages as $language)
                {
                    $data->{'room_name-'.$language->id} = array_values($data->{'room_name-'.$language->id});

                    $hotel_room_name     =   $data->{'room_name-'.$language->id}[$i];

                    if($hotel_room_name)
                    {
                        $hotel_room_description                     = new $this->hotel_room_description_model;
                        $hotel_room_description->name               = $hotel_room_name;
                        $hotel_room_description->hotel_room_id      = $hotel_room_id;
                        $hotel_room_description->language_id        = $language->id;
                        $hotel_room_description->save();
                    }
                }
            }
        }//hotel_rooms



        //hotel_guest_rooms
        if($data->total_guest_rooms)
        {
            $hotel_guest_rooms                      = new $this->hotel_guest_room_model;
            $hotel_guest_rooms->total_guest_rooms   = $data->total_guest_rooms;
            $hotel_guest_rooms->doubles_guest_room  = $data->doubles_guest_room;
            $hotel_guest_rooms->guest_room_suits    = $data->guest_room_suits;
            $hotel_guest_rooms->tax                 = $data->tax;
            $hotel_guest_rooms->type_of_tax         = $data->type_of_tax;
            $hotel_guest_rooms->hotel_id            = $hotel_id;
            $hotel_guest_rooms->created_by          = $created_by;
            $hotel_guest_rooms->save();

            $hotel_guest_room_id = $hotel_guest_rooms->id;

            //hotel_guest_room_details
            if($data->{'guest_room_room_name-1'})
            {
                $total_guest_rooms = count( $data->{'guest_room_room_name-1'} );

                for($i = 0; $i < $total_guest_rooms; $i++)
                {
                    $data->guest_room_room_quantity = array_values($data->guest_room_room_quantity);

                    $hotel_guest_room_detail                        = new $this->hotel_guest_room_detail_model;
                    $hotel_guest_room_detail->quantity              = (int)$data->guest_room_room_quantity[$i];
                    $hotel_guest_room_detail->hotel_guest_room_id   = $hotel_guest_room_id;
                    //$hotel_guest_room_detail->room_facility_id      = '';
                    //$hotel_guest_room_detail->image                 = '';
                    $hotel_guest_room_detail->save();

                    $hotel_guest_room_detail_id = $hotel_guest_room_detail->id;

                    //guest room image
                    if( isset($data->guest_room_room_image[$i]) &&  $data->guest_room_room_image[$i] != null)
                    {
                        $guest_room_file = $data->guest_room_room_image[$i];

                        $fileName        = $guest_room_file->getClientOriginalName();
                        $extension       = $guest_room_file->getClientOriginalExtension() ?: 'png';
                        $folderName      = '/uploads/hotels/'.$hotel_id.'/';
                        $destinationPath = public_path() . $folderName;
                        $safeName        = Str::random(10).'.'.$extension;//$fileName;
                        $guest_room_file->move($destinationPath, $safeName);

                        $update_guest_room = $this->hotel_guest_room_detail_model::where('id',$hotel_guest_room_detail_id)->update([
                            'image' =>  $safeName
                        ]);
                    }

                    //hotel_guest_room_details_description
                    foreach($languages as $language)
                    {
                        $guest_room_room_name     =   $data->{'guest_room_room_name-'.$language->id}[$i];

                        if($guest_room_room_name)
                        {
                            $hotel_guest_room_detail_description                                = new $this->hotel_guest_room_detail_description_model;
                            $hotel_guest_room_detail_description->hotel_guest_room_detail_id    = $hotel_guest_room_detail_id;
                            $hotel_guest_room_detail_description->name                          = $guest_room_room_name;
                            $hotel_guest_room_detail_description->language_id                   = $language->id;
                            $hotel_guest_room_detail_description->save();
                        }
                    }

                    //room_facilities_to_hotels
                    if( isset($data->guest_room_room_facility[$i]) && $data->guest_room_room_facility[$i] !== null)
                    {
                        foreach($data->guest_room_room_facility[$i] as $room_facility_id)
                        {
                            $hotel_guest_room_facility_to_hotel                     = new $this->hotel_guest_room_facility_to_hotel_model;
                            $hotel_guest_room_facility_to_hotel->room_facility_id   = $room_facility_id;
                            $hotel_guest_room_facility_to_hotel->hotel_id           = $hotel_id;
                            $hotel_guest_room_facility_to_hotel->guest_room_id      = $hotel_guest_room_detail_id;
                            $hotel_guest_room_facility_to_hotel->save();
                        }
                    }
                }
            }
        }


        //resturant_bar
        if($data->{'restaurant_bar_name-1'})
        {
            $total_restaurant_bars = count( $data->{'restaurant_bar_name-1'} );

            for($i = 0; $i < $total_restaurant_bars; $i++)
            {
                $data->restaurant_bar_cuisine = array_values($data->restaurant_bar_cuisine);
                $data->restaurant_bar_opening_time = array_values($data->restaurant_bar_opening_time);
                $data->restaurant_bar_dress_code = array_values($data->restaurant_bar_dress_code);
                $data->restaurant_bar_access = array_values($data->restaurant_bar_access);

                $resturant_bar                  = new $this->resturant_bar_model;
                $resturant_bar->cuisine         = $data->restaurant_bar_cuisine[$i];
                $resturant_bar->opening_time    = $data->restaurant_bar_opening_time[$i];
                $resturant_bar->dress_code      = $data->restaurant_bar_dress_code[$i];
                $resturant_bar->access          = $data->restaurant_bar_access[$i];
                $resturant_bar->hotel_id        = $hotel_id;
                $resturant_bar->created_by      = $created_by;
                $resturant_bar->save();

                $resturant_bar_id   = $resturant_bar->id;

                //restaurant bar image
                if( isset($data->restaurant_bar_image[$i]) &&  $data->restaurant_bar_image[$i] != null)
                {
                    $guest_room_file = $data->restaurant_bar_image[$i];

                    $fileName        = $guest_room_file->getClientOriginalName();
                    $extension       = $guest_room_file->getClientOriginalExtension() ?: 'png';
                    $folderName      = '/uploads/hotels/'.$hotel_id.'/';
                    $destinationPath = public_path() . $folderName;
                    $safeName        = Str::random(10).'.'.$extension;//$fileName;
                    $guest_room_file->move($destinationPath, $safeName);

                    $update_guest_room = $this->resturant_bar_model::where('id',$resturant_bar_id)->update([
                        'image' =>  $safeName
                    ]);
                }

                //resturant_bar_description
                foreach($languages as $language)
                {
                    $data->{'restaurant_bar_name-'.$language->id} = array_values($data->{'restaurant_bar_name-'.$language->id});
                    $data->{'restaurant_bar_more_information-'.$language->id} = array_values($data->{'restaurant_bar_more_information-'.$language->id});

                    $resturant_bar_name = $data->{'restaurant_bar_name-'.$language->id}[$i];
                    $resturant_bar_info = $data->{'restaurant_bar_more_information-'.$language->id}[$i];

                    if($resturant_bar_name)
                    {
                        $resturant_bar_description                      = new $this->resturant_bar_description_model;
                        $resturant_bar_description->name                = $resturant_bar_name;
                        $resturant_bar_description->information         = $resturant_bar_info;
                        $resturant_bar_description->resturant_bar_id    = $resturant_bar_id;
                        $resturant_bar_description->language_id         = $language->id;
                        $resturant_bar_description->save();
                    }
                }
            }
        }

        //nearby_places
        if($data->nearby_place)
        {
            $total_nearby_places = count($data->nearby_place);
            for($i = 0; $i < $total_nearby_places; $i++)
            {
                $data->nearby_place = array_values($data->nearby_place);

                $near_by_place              = new $this->near_by_place_model;
                $near_by_place->place_name  = $data->nearby_place[$i];
                $near_by_place->latitude    = $data->nearby_latitude[$i];
                $near_by_place->longitude   = $data->nearby_longitude[$i];
                $near_by_place->hotel_id    = $hotel_id;
                $near_by_place->created_by  = $created_by;
                $near_by_place->save();
            }
        }

        //tags_to_hotels
        $get_tags = $data->tags;
        if($get_tags)
        {
            foreach($get_tags as $tag_id)
            {
                $tags                   = new $this->tag_to_hotel_model;
                $tags->tag_id           = $tag_id;
                $tags->hotel_id         = $hotel_id;
                $tags->save();
            }
        }

        //hotel_description
        foreach($languages as $language)
        {
            $hotel_name                                 = $data->{'hotel_name-'.$language->id};
            $catering_service                           = $data->{'catering_service-'.$language->id};

            $hotel_description                          = new $this->description_model;
            $hotel_description->name                    = $hotel_name;
            $hotel_description->catering_service        = $catering_service;
            $hotel_description->hotel_id                = $hotel_id;
            $hotel_description->language_id             = $language->id;
            $hotel_description->save();
        }

        //print_b( $data->all() ); exit;


        //hotel_gallery
        if( is_array($data->hotel_gallery) && !empty($data->hotel_gallery))
        {
            foreach($data->hotel_gallery as $hotel_gallery_img)
            {
                $destinationPath2        = public_path() . '/uploads/hotels/temp/';
                $newDestinationPath2     = public_path() . '/uploads/hotels/'.$hotel_id.'/';
                $completePathName2       = $destinationPath2 . $hotel_gallery_img;
                $newCompletePathName2    = $newDestinationPath2 . $hotel_gallery_img;

                if( File::exists($completePathName2) )
                {
                    $move = File::move($completePathName2, $newCompletePathName2);

                    if($move)
                    {
                        $is_primary = 0;

                        if($data->primary_image == $hotel_gallery_img)
                        {
                            $is_primary = 1;
                        }

                        $hotel_gallery_mod              =  new $this->hotel_gallery_model;
                        $hotel_gallery_mod->hotel_id    =  $hotel_id;
                        $hotel_gallery_mod->file        =  $hotel_gallery_img;
                        $hotel_gallery_mod->type        =  'image';
                        $hotel_gallery_mod->is_primary  =  $is_primary;
                        $hotel_gallery_mod->created_by  =  $created_by;
                        $hotel_gallery_mod->save();
                    }
                }
            }
        }

        return $hotel_id;
    }

    public function update($data,$id)
    {
        $language               = getlanguage();
        $language_id            = $language->id;
        //$slug                   = $this->createSlug($data->{'hotel_name-'.$language->id});
        $user                   = isUserLoggedIn();
        $created_by             = ($user) ? $user['user_id'] : 1;
        $manage_by              = ($user) ? $user['user_id'] : 1;
        $languages              = Languages::where('status','Active')->get();

        if($data->user)
        {
            $created_by = $data->user;
            $manage_by = $data->user;
        }

        if($data->manage_by)
            $manage_by = $data->manage_by;

        $hotel                                      = $this->model::find($id);
        $hotel->address                             = $data->hotel_address;
        $hotel->latitude                            = $data->latitude;
        $hotel->longitude                           = $data->longitude;
        $hotel->city                                = $data->city;
        $hotel->state                               = $data->state;
        $hotel->zip                                 = $data->zip;
        $hotel->space_meeting_room                  = $data->space_meeting_room;
        $hotel->space_meeting_space                 = $data->space_meeting_space;
        $hotel->space_guest_rooms                   = $data->space_guest_rooms;
        $hotel->space_restuatrant_bars              = $data->space_restuatrant_bars;
        $hotel->space_chain_name                    = $data->space_chain_name;
        $hotel->space_built_year                    = $data->space_built_year;
        $hotel->space_total_meeting_space_area      = $data->space_total_meeting_space_area;
        $hotel->space_brand_name                    = $data->space_brand_name;
        $hotel->space_dmc                           = '';
        $hotel->space_renovation_year               = $data->space_renovation_year;
        $hotel->space_all_inclusive_hotel           = $data->space_all_inclusive_hotel;
        $hotel->space_aaa_rating                    = $data->space_aaa_rating;
        $hotel->space_trip_advisor_rating           = $data->space_trip_advisor_rating;
        $hotel->total_meeting_space                 = $data->total_meeting_space;
        $hotel->largest_room                        = $data->largest_room;
        $hotel->second_largest_room                 = $data->second_largest_room;
        $hotel->exhibit_space                       = $data->exhibit_space;
        $hotel->catering_service_image              = $data->catering_service_existing_image;
        $hotel->terms_conditions                    = $data->terms_conditions;

        if($data->is_featured)
        {
            $hotel->is_featured = $data->is_featured;
        }
        $hotel->created_by                          = $created_by;
        $hotel->manage_by                           = $manage_by;
        $hotel->save();

        $hotel_id   =   $id;

        $hotel_dir = public_path() . '/uploads/hotels/' . $hotel_id;

        if (!file_exists($hotel_dir)) {
            mkdir($hotel_dir, 0777, true);
        }

        if($catering_image = $data->file('catering_service_image'))
        {
            $update_hotels  = $this->model::find($hotel_id);

            $fileName        = $catering_image->getClientOriginalName();
            $extension       = $catering_image->getClientOriginalExtension() ?: 'png';
            $folderName      = '/uploads/hotels/'.$hotel_id.'/';
            $destinationPath = public_path() . $folderName;
            $safeName        = $fileName;
            $catering_image->move($destinationPath, $safeName);

            //delete old pic if exists
            if(File::exists(public_path() . $folderName.$update_hotels->catering_service_image))
            {
                File::delete(public_path() . $update_hotels->catering_service_image);
            }

            $update_hotels = $this->model::find($hotel_id);
            $update_hotels->catering_service_image  = $safeName;
            $update_hotels->save();
        }

        //amenities_to_hotels
        $get_amenities = $data->amenities;
        //deleting existin amenities
        $this->amenity_to_hotel_model::where('hotel_id',$hotel_id)->forceDelete();

        if($get_amenities)
        {
            foreach($get_amenities as $amenity_id)
            {
                $amenities                  = new $this->amenity_to_hotel_model;
                $amenities->amenity_id      = $amenity_id;
                $amenities->hotel_id        = $hotel_id;
                $amenities->save();
            }
        }

        //facilities_to_hotels
        $get_facilities = $data->facilities;
        $this->facility_to_hotel_model::where('hotel_id',$hotel_id)->forceDelete();
        if($get_facilities)
        {
            foreach($get_facilities as $facility_id)
            {
                $facilities                 = new $this->facility_to_hotel_model;
                $facilities->facility_id    = $facility_id;
                $facilities->hotel_id       = $hotel_id;
                $facilities->save();
            }
        }

        //services_to_hotels
        $get_services = $data->services;
        $this->service_to_hotel_model::where('hotel_id',$hotel_id)->forceDelete();
        if($get_services)
        {
            foreach($get_services as $service_id)
            {
                $services                 = new $this->service_to_hotel_model;
                $services->service_id    = $service_id;
                $services->hotel_id       = $hotel_id;
                $services->save();
            }
        }

        //recreational_activities_to_hotels
        $get_recreational_activities_to_hotels = $data->recreational_activities;
        $this->recreational_activity_to_hotel_model::where('hotel_id',$hotel_id)->forceDelete();
        if($get_recreational_activities_to_hotels)
        {
            foreach($get_recreational_activities_to_hotels as $activity_id)
            {
                $services                 = new $this->recreational_activity_to_hotel_model;
                $services->activity_id    = $activity_id;
                $services->hotel_id       = $hotel_id;
                $services->save();
            }
        }

        //venue_access
        $get_venue_access = $data->venue_access_by;
        $this->venue_access_to_hotel_model::where('hotel_id',$hotel_id)->forceDelete();
        if($get_venue_access)
        {
            $venue_access           = new $this->venue_access_model;
            $venue_access->icon     = '';
            $venue_access->save();

            $venue_access_id    = $venue_access->id;

            //venue_access_description
            foreach($languages as $language)
            {
                $venue_access_description                   = new $this->venue_access_description_model;
                $venue_access_description->name             = $data->venue_access_by;
                $venue_access_description->venue_access_id  = $venue_access_id;
                $venue_access_description->language_id      = $language->id;
                $venue_access_description->save();
            }

            //venue_access_to_hotels
            $venue_access_to_hotel_model                    = new $this->venue_access_to_hotel_model;
            $venue_access_to_hotel_model->venue_access_id   = $venue_access_id;
            $venue_access_to_hotel_model->hotel_id          = $hotel_id;
            $venue_access_to_hotel_model->save();
        }

        //equipments_to_hotels
        $get_equipments = $data->equipments;
        $this->equipment_to_hotel_model::where('hotel_id',$hotel_id)->forceDelete();
        if($get_equipments)
        {
            foreach($get_equipments as $equipment_id)
            {
                $equipments                 = new $this->equipment_to_hotel_model;
                $equipments->equipment_id   = $equipment_id;
                $equipments->hotel_id       = $hotel_id;
                $equipments->save();
            }
        }

        //meeting_space_floor_plans
        //deleting old floor plans
        $this->meeting_space_floor_plan_model::where('hotel_id',$hotel_id)->forceDelete();
        if( is_array($data->floor_plans) && !empty($data->floor_plans))
        {
            foreach($data->floor_plans as $floor_plan)
            {
                $newDestinationPath     = public_path() . '/uploads/hotels/'.$hotel_id.'/';
                $newCompletePathName    = $newDestinationPath . $floor_plan;

                if( File::exists($newCompletePathName) )
                {
                    $meeting_space_floor_plan               = new $this->meeting_space_floor_plan_model;
                    $meeting_space_floor_plan->hotel_id     = $hotel_id;
                    $meeting_space_floor_plan->file         = $floor_plan;
                    $meeting_space_floor_plan->save();
                }
            }
        }


        //hotel_rooms
        //deleting
        $get_hotel_rooms = $this->hotel_room_model::where('hotel_id',$hotel_id)->get();

        if($get_hotel_rooms->count())
        {
            foreach($get_hotel_rooms as $rec_hotel_room)
            {
                $this->hotel_room_description_model::where('hotel_room_id',$rec_hotel_room->id)->forceDelete();
            }

            $this->hotel_room_model::where('hotel_id',$hotel_id)->forceDelete();
        }
        //deleting

        if($data->{'room_name-1'})
        {
            $total_rooms = count( $data->{'room_name-1'} );

            for($i = 0; $i < $total_rooms; $i++)
            {
                //print_b($data->room_area); exit;
                $data->room_area = array_values($data->room_area);
                $data->room_height = array_values($data->room_height);
                $data->room_size = array_values($data->room_size);
                $data->room_cocktail = array_values($data->room_cocktail);
                $data->room_theatre = array_values($data->room_theatre);
                $data->room_school = array_values($data->room_school);
                $data->room_banquet = array_values($data->room_banquet);
                $data->room_imperial = array_values($data->room_imperial);
                $data->room_ushape = array_values($data->room_ushape);

                $hotel_room             = new $this->hotel_room_model;
                $hotel_room->area       = $data->room_area[$i];
                $hotel_room->height     = $data->room_height[$i];
                $hotel_room->size       = $data->room_size[$i];
                $hotel_room->cocktail   = $data->room_cocktail[$i];
                $hotel_room->theatre    = $data->room_theatre[$i];
                $hotel_room->school     = $data->room_school[$i];
                $hotel_room->banquet    = $data->room_banquet[$i];
                $hotel_room->imperial   = $data->room_imperial[$i];
                $hotel_room->ushape     = $data->room_ushape[$i];
                $hotel_room->hotel_id   = $hotel_id;
                $hotel_room->created_by = $created_by;
                $hotel_room->save();

                $hotel_room_id  =   $hotel_room->id;

                //hotel_rooms_description
                foreach($languages as $language)
                {
                    $data->{'room_name-'.$language->id} = array_values($data->{'room_name-'.$language->id});

                    $hotel_room_name     =   $data->{'room_name-'.$language->id}[$i];

                    if($hotel_room_name)
                    {
                        $hotel_room_description                     = new $this->hotel_room_description_model;
                        $hotel_room_description->name               = $hotel_room_name;
                        $hotel_room_description->hotel_room_id      = $hotel_room_id;
                        $hotel_room_description->language_id        = $language->id;
                        $hotel_room_description->save();
                    }
                }
            }
        }//hotel_rooms

        //hotel_guest_rooms
        //deleting
        $get_hotel_guest_rooms = $this->hotel_guest_room_model::where('hotel_id',$hotel_id)->get();

        if($get_hotel_guest_rooms->count())
        {
            foreach($get_hotel_guest_rooms as $rec_hotel_guest_room)
            {
                $get_guest_room_detail = $this->hotel_guest_room_detail_model::where('hotel_guest_room_id',$rec_hotel_guest_room->id)->get();

                if($get_guest_room_detail->count())
                {
                    foreach($get_guest_room_detail as $rec_guest_room_detail)
                    {
                        $this->hotel_guest_room_detail_description_model::where('hotel_guest_room_detail_id',$rec_guest_room_detail->id)->forceDelete();
                        $this->hotel_guest_room_facility_to_hotel_model::where('guest_room_id',$rec_guest_room_detail->id)->forceDelete();
                    }

                    $this->hotel_guest_room_detail_model::where('hotel_guest_room_id',$rec_hotel_guest_room->id)->forceDelete();
                }
            }

            $this->hotel_guest_room_model::where('hotel_id',$hotel_id)->forceDelete();
        }
        //deleting

        if($data->total_guest_rooms)
        {
            $hotel_guest_rooms                      = new $this->hotel_guest_room_model;
            $hotel_guest_rooms->total_guest_rooms   = $data->total_guest_rooms;
            $hotel_guest_rooms->doubles_guest_room  = $data->doubles_guest_room;
            $hotel_guest_rooms->guest_room_suits    = $data->guest_room_suits;
            $hotel_guest_rooms->tax                 = $data->tax;
            $hotel_guest_rooms->type_of_tax         = $data->type_of_tax;
            $hotel_guest_rooms->hotel_id            = $hotel_id;
            $hotel_guest_rooms->created_by          = $created_by;
            $hotel_guest_rooms->save();

            $hotel_guest_room_id = $hotel_guest_rooms->id;

            //hotel_guest_room_details
            if($data->{'guest_room_room_name-1'})
            {
                $total_guest_rooms = count( $data->{'guest_room_room_name-1'} );

                for($i = 0; $i < $total_guest_rooms; $i++)
                {
                    $data->guest_room_room_quantity = array_values($data->guest_room_room_quantity);

                    $hotel_guest_room_detail                        = new $this->hotel_guest_room_detail_model;
                    $hotel_guest_room_detail->quantity              = (int)$data->guest_room_room_quantity[$i];
                    $hotel_guest_room_detail->hotel_guest_room_id   = $hotel_guest_room_id;
                    //$hotel_guest_room_detail->room_facility_id      = '';
                    //$hotel_guest_room_detail->image                 = '';
                    $hotel_guest_room_detail->save();

                    $hotel_guest_room_detail_id = $hotel_guest_room_detail->id;

                    //guest room image
                    if( isset( $data->guest_room_room_existing_image[$i] ) &&  $data->guest_room_room_existing_image[$i] != null)
                    {
                        $folderName      = '/uploads/hotels/'.$hotel_id.'/';
                        $destinationPath = public_path() . $folderName;
                        $safeName = $data->guest_room_room_existing_image[$i];

                        if( File::exists( $destinationPath . $safeName ) )
                        {
                            $update_guest_room = $this->hotel_guest_room_detail_model::where('id',$hotel_guest_room_detail_id)->update([
                                'image' =>  $safeName
                            ]);
                        }
                    }
                    elseif( isset($data->guest_room_room_image[$i]) &&  $data->guest_room_room_image[$i] != null)
                    {
                        $guest_room_file = $data->guest_room_room_image[$i];

                        $fileName        = $guest_room_file->getClientOriginalName();
                        $extension       = $guest_room_file->getClientOriginalExtension() ?: 'png';
                        $folderName      = '/uploads/hotels/'.$hotel_id.'/';
                        $destinationPath = public_path() . $folderName;
                        $safeName        = Str::random(10).'.'.$extension;//$fileName;
                        $guest_room_file->move($destinationPath, $safeName);

                        $update_guest_room = $this->hotel_guest_room_detail_model::where('id',$hotel_guest_room_detail_id)->update([
                            'image' =>  $safeName
                        ]);
                    }

                    //hotel_guest_room_details_description
                    foreach($languages as $language)
                    {
                        $guest_room_room_name     =   $data->{'guest_room_room_name-'.$language->id}[$i];

                        if($guest_room_room_name)
                        {
                            $hotel_guest_room_detail_description                                = new $this->hotel_guest_room_detail_description_model;
                            $hotel_guest_room_detail_description->hotel_guest_room_detail_id    = $hotel_guest_room_detail_id;
                            $hotel_guest_room_detail_description->name                          = $guest_room_room_name;
                            $hotel_guest_room_detail_description->language_id                   = $language->id;
                            $hotel_guest_room_detail_description->save();
                        }
                    }

                    //room_facilities_to_hotels
                    if( isset($data->guest_room_room_facility[$i]) && $data->guest_room_room_facility[$i] !== null)
                    {
                        foreach($data->guest_room_room_facility[$i] as $room_facility_id)
                        {
                            $hotel_guest_room_facility_to_hotel                     = new $this->hotel_guest_room_facility_to_hotel_model;
                            $hotel_guest_room_facility_to_hotel->room_facility_id   = $room_facility_id;
                            $hotel_guest_room_facility_to_hotel->hotel_id           = $hotel_id;
                            $hotel_guest_room_facility_to_hotel->guest_room_id      = $hotel_guest_room_detail_id;
                            $hotel_guest_room_facility_to_hotel->save();
                        }
                    }
                }
            }
        }

        //print_b( $data->all() ); exit;

        //resturant_bar
        //deleting
        $get_resturant_bars = $this->resturant_bar_model::where('hotel_id',$hotel_id)->get();

        if($get_resturant_bars->count())
        {
            foreach($get_resturant_bars as $rec_resturant_bars)
            {
                $this->resturant_bar_description_model::where('resturant_bar_id',$rec_resturant_bars->id)->forceDelete();
            }
        }
        $get_resturant_bars = $this->resturant_bar_model::where('hotel_id',$hotel_id)->forceDelete();
        //deleting

        if($data->{'restaurant_bar_name-1'})
        {
            $total_restaurant_bars = count( $data->{'restaurant_bar_name-1'} );

            for($i = 0; $i < $total_restaurant_bars; $i++)
            {
                $data->restaurant_bar_cuisine = array_values($data->restaurant_bar_cuisine);
                $data->restaurant_bar_opening_time = array_values($data->restaurant_bar_opening_time);
                $data->restaurant_bar_dress_code = array_values($data->restaurant_bar_dress_code);
                $data->restaurant_bar_access = array_values($data->restaurant_bar_access);

                $resturant_bar                  = new $this->resturant_bar_model;
                $resturant_bar->cuisine         = $data->restaurant_bar_cuisine[$i];
                $resturant_bar->opening_time    = $data->restaurant_bar_opening_time[$i];
                $resturant_bar->dress_code      = $data->restaurant_bar_dress_code[$i];
                $resturant_bar->access          = $data->restaurant_bar_access[$i];
                $resturant_bar->hotel_id        = $hotel_id;
                $resturant_bar->created_by      = $created_by;
                $resturant_bar->save();

                $resturant_bar_id   = $resturant_bar->id;

                //restaurant bar image
                if( isset( $data->restaurant_bar_existing_image[$i] ) &&  $data->restaurant_bar_existing_image[$i] != null)
                {
                    $folderName      = '/uploads/hotels/'.$hotel_id.'/';
                    $destinationPath = public_path() . $folderName;
                    $safeName = $data->restaurant_bar_existing_image[$i];

                    if( File::exists( $destinationPath . $safeName ) )
                    {
                        $update_guest_room = $this->resturant_bar_model::where('id',$resturant_bar_id)->update([
                            'image' =>  $safeName
                        ]);
                    }
                }
                elseif( isset($data->restaurant_bar_image[$i]) &&  $data->restaurant_bar_image[$i] != null)
                {
                    $guest_room_file = $data->restaurant_bar_image[$i];

                    $fileName        = $guest_room_file->getClientOriginalName();
                    $extension       = $guest_room_file->getClientOriginalExtension() ?: 'png';
                    $folderName      = '/uploads/hotels/'.$hotel_id.'/';
                    $destinationPath = public_path() . $folderName;
                    $safeName        = Str::random(10).'.'.$extension;//$fileName;
                    $guest_room_file->move($destinationPath, $safeName);

                    $update_guest_room = $this->resturant_bar_model::where('id',$resturant_bar_id)->update([
                        'image' =>  $safeName
                    ]);
                }

                //resturant_bar_description
                foreach($languages as $language)
                {

                    $data->{'restaurant_bar_name-'.$language->id} = array_values($data->{'restaurant_bar_name-'.$language->id});
                    $data->{'restaurant_bar_more_information-'.$language->id} = array_values($data->{'restaurant_bar_more_information-'.$language->id});

                    $resturant_bar_name = $data->{'restaurant_bar_name-'.$language->id}[$i];
                    $resturant_bar_info = $data->{'restaurant_bar_more_information-'.$language->id}[$i];

                    if($resturant_bar_name)
                    {
                        $resturant_bar_description                      = new $this->resturant_bar_description_model;
                        $resturant_bar_description->name                = $resturant_bar_name;
                        $resturant_bar_description->information         = $resturant_bar_info;
                        $resturant_bar_description->resturant_bar_id    = $resturant_bar_id;
                        $resturant_bar_description->language_id         = $language->id;
                        $resturant_bar_description->save();
                    }
                }
            }
        }

        //nearby_places
        //deleting
        $this->near_by_place_model::where('hotel_id',$hotel_id)->forceDelete();
        //deleting

        if($data->nearby_place)
        {
            $total_nearby_places = count($data->nearby_place);
            for($i = 0; $i < $total_nearby_places; $i++)
            {
                $data->nearby_place = array_values($data->nearby_place);

                $near_by_place              = new $this->near_by_place_model;
                $near_by_place->place_name  = $data->nearby_place[$i];
                $near_by_place->latitude    = $data->nearby_latitude[$i];
                $near_by_place->longitude   = $data->nearby_longitude[$i];
                $near_by_place->hotel_id    = $hotel_id;
                $near_by_place->created_by  = $created_by;
                $near_by_place->save();
            }
        }

        //tags_to_hotels
        //deleting
        $this->tag_to_hotel_model::where('hotel_id',$hotel_id)->forceDelete();
        //deleting

        $get_tags = $data->tags;
        if($get_tags)
        {
            foreach($get_tags as $tag_id)
            {
                $tags                   = new $this->tag_to_hotel_model;
                $tags->tag_id           = $tag_id;
                $tags->hotel_id         = $hotel_id;
                $tags->save();
            }
        }

        //hotel_description
        //deleting
        $this->description_model::where('hotel_id',$hotel_id)->forceDelete();
        //deleting
        foreach($languages as $language)
        {
            $hotel_name                                 = $data->{'hotel_name-'.$language->id};
            $catering_service                           = $data->{'catering_service-'.$language->id};

            $hotel_description                          = new $this->description_model;
            $hotel_description->name                    = $hotel_name;
            $hotel_description->catering_service        = $catering_service;
            $hotel_description->hotel_id                = $hotel_id;
            $hotel_description->language_id             = $language->id;
            $hotel_description->save();
        }


        //hotel_gallery
        $this->hotel_gallery_model::where('hotel_id',$hotel_id)->forceDelete(); //deleting the existing gallery

        //hotel_gallery
        if( is_array($data->hotel_gallery) && !empty($data->hotel_gallery))
        {
            foreach($data->hotel_gallery as $hotel_gallery_img)
            {
                $newDestinationPath2     = public_path() . '/uploads/hotels/'.$hotel_id.'/';
                $newCompletePathName2    = $newDestinationPath2 . $hotel_gallery_img;

                if( File::exists($newCompletePathName2) )
                {
                    $is_primary = 0;

                    if($data->primary_image == $hotel_gallery_img)
                    {
                        $is_primary = 1;
                    }

                    $hotel_gallery_mod              =  new $this->hotel_gallery_model;
                    $hotel_gallery_mod->hotel_id    =  $hotel_id;
                    $hotel_gallery_mod->file        =  $hotel_gallery_img;
                    $hotel_gallery_mod->type        =  'image';
                    $hotel_gallery_mod->is_primary  =  $is_primary;
                    $hotel_gallery_mod->created_by  =  $created_by;
                    $hotel_gallery_mod->save();
                }
            }
        }

        return $hotel_id;
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
        // $language_id = getlanguage()->id;

        // $joinParm   = $this->description_table.'.'.$this->foriegn_key;
        // $joinParm2  = $this->table.'.'.$this->primary_key;
        // $joinParm3  = $this->blogtocategory_table.'.'.$this->foriegn_key1;
        // $joinParm4  = $this->description_table.'.'.$this->primary_key;

        // return $this->model::join(

        //     $this->description_table,
        //     $joinParm,
        //     '=',
        //     $joinParm2
        // )
        //     ->join(
        //         $this->blogtocategory_table,
        //         $joinParm3,
        //         '=',
        //         $joinParm4
        //     )
        //     ->join(
        //         $this->blogcategoryDescription_table,
        //         $joinParm2,
        //         '=',
        //         $joinParm3
        //     )
        //     ->where($this->description_table.'.language_id',$language_id)
        //     ->where($this->blogcategoryDescription_table.'.language_id',$language_id)
        //     ->where($this->table.'.is_feature',0)
        //     ->where($this->description_table.'.status','Active')
        //     // ->where($this->blogtocategory_table.'.blog_id',$blog_id)
        //     ->select(['blogs.*','blog_to_categories.*','blog_categories_description.title as ttitle','blogs_description.*'])->get();

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
            ->select(['blogs.*','blog_to_categories.*','blog_categories_description.title as ttitle','blogs_description.*'])->paginate(12);

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
            ->select(['blogs.*','blog_to_categories.*','blog_categories_description.title as ttitle','blogs_description.*'])->get();
    }

    public function getAllhotels($user_id = 0){
        $language = getlanguage();

        if($user_id)
        {
            $hotels = $this->model::join('hotel_description','hotels.id','=','hotel_id')
                ->where('hotel_description.language_id',$language->id)
                ->where('hotels.created_by',$user_id)
                ->select('hotel_description.*','hotels.*','hotels.id as hotel_id')
                ->orderBy('hotels.created_at','ASC')
                ->get();
        }
        else
        {
            $hotels = $this->model::join('hotel_description','hotels.id','=','hotel_id')
                ->where('hotel_description.language_id',$language->id)
                ->select('hotel_description.*','hotels.*','hotels.id as hotel_id')
                ->orderBy('hotels.created_at','ASC')
                ->get();
        }

        return $hotels;
    }

    public function getFeaturedHotel(){
        $language = getlanguage();
        $hotels = $this->model::join('hotel_description','hotels.id','=','hotel_id')->
        where('hotel_description.language_id',$language->id)->
        select('hotel_description.*','hotels.*','hotels.id as hotel_id')->
        where('hotels.is_featured',1)->
        get();
        return $hotels;
    }

    public function hotelDetails($slug){
        $language = getlanguage();
        $hotels = $this->model::join('hotel_description','hotels.id','=','hotel_description.hotel_id')->
        where('hotel_description.language_id',$language->id)->
        select('hotel_description.*','hotels.*','hotels.id as id')->
        where('hotels.slug',$slug)->
        first();
        return $hotels;
    }

    public function amenities($id){
        $language = getlanguage();
        $amenities = $this->amenity_to_hotel_model::join('amenities_description','amenities_to_hotels.amenity_id','=','amenities_description.amenity_id')->
        join('amenities','amenities_to_hotels.amenity_id','=','amenities.id')->
        where('amenities_description.language_id',$language->id)->
        where('amenities_to_hotels.hotel_id',$id)->
        get();
        return $amenities;
    }

    public function facilities($id){
        $language = getlanguage();
        $facilities = $this->facility_to_hotel_model::join('facilities_description','facilities_to_hotels.facility_id','=','facilities_description.facility_id')->
        join('facilities','facilities_to_hotels.facility_id','=','facilities.id')->
        where('facilities_description.language_id',$language->id)->
        where('facilities_to_hotels.hotel_id',$id)->
        get();
        return $facilities;
    }

    public function services($id){
        $language = getlanguage();
        // $services = $this->service_to_hotel_model::join('services_description','services_to_hotels.service_id','=','services_description.service_id')->
        // join('services','services_to_hotels.service_id','=','services.id')->
        // where('services_description.language_id',$language->id)->
        // where('services_to_hotels.hotel_id',$id)->
        // get();
        return $services;
    }

    public function recreational_activities($id){
        $language = getlanguage();
        $recreational = $this->recreationa_activity_to_hotel_model::join('recreational_activities_description','recreational_activities_to_hotels.activity_id','=','recreational_activities_description.recreational_id')->
        join('recreational_activities','recreational_activities_to_hotels.recreational_id','=','recreational_activities.id')->
        where('recreational_activities_description.language_id',$language->id)->
        where('recreational_activities_to_hotels.hotel_id',$id)->
        get();
        return $recreational;
    }

    public function venue_accesses($id){
        $language = getlanguage();
        $venue_access = $this->venue_access_to_hotel_model::join('venue_access_description','venue_access_to_hotels.recreational_id','=','venue_access_description.facility_id')->
        join('venue_access','venue_access_to_hotels.facility_id','=','venue_access.id')->
        where('venue_access_description.language_id',$language->id)->
        where('venue_access_to_hotels.hotel_id',$id)->
        get();
        return $venue_access;
    }
}
