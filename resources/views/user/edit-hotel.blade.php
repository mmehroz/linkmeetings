@extends('layout.user.master')

@section('page-title')
    @lang('general.site_name') | @lang('hotel/edit.page_title')
@stop

@section('meta-keywords')
    @lang('general.site_name') | @lang('hotel/edit.page_title')
@stop

@section('meta-description')
    @lang('general.site_name') | @lang('hotel/edit.page_title')
@stop
@section('body-class') add-hotel-pg @stop
@section('header-scripts')
    <link rel="stylesheet" type="text/css" href="{{ asset('dropzone/dropzone.css') }}" />
@stop
@section('content')
    <?php
    //getting data from db
    $current_language = getlanguage();
    $hotel_amenities                = array();
    $hotel_facilities               = array();
    $hotel_services                 = array();
    $hotel_recreational_activities  = array();
    $hotel_equipments               = array();
    $hotel_gallery                  = array();
    $hotel_floor_plans              = array();
    $hotel_venue_access             = '';

    if($hotel->HotelsGallery)
    {
        foreach($hotel->HotelsGallery as $gallery)
        {
            $hotel_gallery[] = $gallery->file;
        }
    }

    if($hotel->MeetingSpaceFloorPlans)
    {
        foreach($hotel->MeetingSpaceFloorPlans as $floor_plan)
        {
            $hotel_floor_plans[] = $floor_plan->file;
        }
    }


    if($hotel->VenueAccessToHotels)
    {
        foreach($hotel->VenueAccessToHotels as $venue_to_hotel)
        {
            if($venue_to_hotel->venueAccess)
            {
                $get_venue_des = $venue_to_hotel->venueAccess->venuAccessDescriptionLanguage($current_language->id);
                $hotel_venue_access = $get_venue_des->name;
            }
        }
    }

    if($hotel->AmenityToHotels)
    {
        foreach($hotel->AmenityToHotels as $amenity) { $hotel_amenities[] = $amenity->amenity_id; }
    }

    if($hotel->FacilityToHotels)
    {
        foreach($hotel->FacilityToHotels as $amenity) { $hotel_facilities[] = $amenity->facility_id; }
    }

    if($hotel->ServiceToHotels)
    {
        foreach($hotel->ServiceToHotels as $amenity) { $hotel_services[] = $amenity->service_id; }
    }

    if($hotel->RecreationalActivityToHotels)
    {
        foreach($hotel->RecreationalActivityToHotels as $amenity) { $hotel_recreational_activities[] = $amenity->activity_id; }
    }

    if($hotel->EquipmentToHotels)
    {
        foreach($hotel->EquipmentToHotels as $amenity) { $hotel_equipments[] = $amenity->equipment_id; }
    }

    //defining indexes to avoid errors
    $hotel_rooms_data['room_area']          = array();
    $hotel_rooms_data['room_height']        = array();
    $hotel_rooms_data['room_size']          = array();
    $hotel_rooms_data['room_cocktail']      = array();
    $hotel_rooms_data['room_theatre']       = array();
    $hotel_rooms_data['room_school']        = array();
    $hotel_rooms_data['room_banquet']       = array();
    $hotel_rooms_data['room_imperial']      = array();
    $hotel_rooms_data['room_ushape']        = array();

    if($languages->count())
    {
        foreach($languages as $language)
        {
            $hotel_rooms_data['room_name-'.$language->id] = array();
        }
    }


    $hotel_room_index = 0;

    if($hotel->HotelRooms)
    {
        foreach($hotel->HotelRooms as  $rec_hotel_room)
        {
            if($rec_hotel_room)
            {
                $hotel_rooms_data['room_area'][$hotel_room_index] = $rec_hotel_room->area;
                $hotel_rooms_data['room_height'][$hotel_room_index] = $rec_hotel_room->height;
                $hotel_rooms_data['room_size'][$hotel_room_index] = $rec_hotel_room->size;
                $hotel_rooms_data['room_cocktail'][$hotel_room_index] = $rec_hotel_room->cocktail;
                $hotel_rooms_data['room_theatre'][$hotel_room_index] = $rec_hotel_room->theatre;
                $hotel_rooms_data['room_school'][$hotel_room_index] = $rec_hotel_room->school;
                $hotel_rooms_data['room_banquet'][$hotel_room_index] = $rec_hotel_room->banquet;
                $hotel_rooms_data['room_imperial'][$hotel_room_index] = $rec_hotel_room->imperial;
                $hotel_rooms_data['room_ushape'][$hotel_room_index] = $rec_hotel_room->ushape;

                if($rec_hotel_room->hotelRoomDescription)
                {
                    foreach($rec_hotel_room->hotelRoomDescription as $rec_hotel_room_desc)
                    {
                        $hotel_rooms_data['room_name-'.$rec_hotel_room_desc->language_id][$hotel_room_index] = $rec_hotel_room_desc->name;
                    }
                }

                $hotel_room_index++;
            }
        }
    }

    //defining indexes to avoid errors
    $guest_rooms_data['guest_room_room_quantity']           = array();
    $guest_rooms_data['guest_room_room_image']              = array();
    $guest_rooms_data['guest_room_room_facility']           = array();

    if($languages->count())
    {
        foreach($languages as $language)
        {
            $guest_rooms_data['guest_room_room_name-'.$language->id] = array();
        }
    }

    $hotel_guest_room_index = 0;

    if($hotel->HotelGuestRooms)
    {
        if($hotel->HotelGuestRooms->guestRoomDetails)
        {
            foreach($hotel->HotelGuestRooms->guestRoomDetails as $rec_guestroom_details)
            {
                $guest_rooms_data['guest_room_room_quantity'][$hotel_guest_room_index] = $rec_guestroom_details->quantity;
                $guest_rooms_data['guest_room_room_image'][$hotel_guest_room_index] = array(
                    'id'            => $rec_guestroom_details->id,
                    'file_name'     =>  $rec_guestroom_details->image
                );

                //$guest_rooms_data['guest_room_room_facility'][$hotel_guest_room_index] = $rec_guestroom_details->area;

                if($rec_guestroom_details->guestRoomDetailDescription)
                {
                    foreach($rec_guestroom_details->guestRoomDetailDescription as $rec_gestroom_deatils_desc)
                    {
                        $guest_rooms_data['guest_room_room_name-'.$rec_gestroom_deatils_desc->language_id][$hotel_guest_room_index] = $rec_gestroom_deatils_desc->name;
                    }
                }

                if($rec_guestroom_details->guestRoomFacilitiesToHotel)
                {
                    foreach($rec_guestroom_details->guestRoomFacilitiesToHotel as $rec_room_facility)
                    {
                        $guest_rooms_data['guest_room_room_facility'][$hotel_guest_room_index][] = $rec_room_facility->room_facility_id;
                    }
                }

                $hotel_guest_room_index++;
            }
        }
    }


    //defining indexes to avoid errors
    $restaurant_bars_data['restaurant_bar_cuisine']         = array();
    $restaurant_bars_data['restaurant_bar_opening_time']    = array();
    $restaurant_bars_data['restaurant_bar_dress_code']      = array();
    $restaurant_bars_data['restaurant_bar_access']          = array();
    $restaurant_bars_data['restaurant_bar_image']           = array();

    if($languages->count())
    {
        foreach($languages as $language)
        {
            $restaurant_bars_data['restaurant_bar_name-'.$language->id] = array();
            $restaurant_bars_data['restaurant_bar_more_information-'.$language->id] = array();
        }
    }

    $hotel_restaurant_bars_index = 0;

    if($hotel->ResturantsBars)
    {
        foreach($hotel->ResturantsBars as $rec_restaurant_bars)
        {
            $restaurant_bars_data['restaurant_bar_cuisine'][$hotel_restaurant_bars_index]           = $rec_restaurant_bars->cuisine;
            $restaurant_bars_data['restaurant_bar_opening_time'][$hotel_restaurant_bars_index]      = $rec_restaurant_bars->opening_time;
            $restaurant_bars_data['restaurant_bar_dress_code'][$hotel_restaurant_bars_index]        = $rec_restaurant_bars->dress_code;
            $restaurant_bars_data['restaurant_bar_access'][$hotel_restaurant_bars_index]            = $rec_restaurant_bars->access;
            $restaurant_bars_data['restaurant_bar_image'][$hotel_restaurant_bars_index]             = array(
                'id'            => $rec_restaurant_bars->id,
                'file_name'     => $rec_restaurant_bars->image
            );
            //$rec_restaurant_bars->image;




            if($rec_restaurant_bars->ResturantBarDescription)
            {
                foreach($rec_restaurant_bars->ResturantBarDescription as $rec_restaurant_bar_desc)
                {
                    $restaurant_bars_data['restaurant_bar_name-'.$rec_restaurant_bar_desc->language_id][$hotel_restaurant_bars_index] = $rec_restaurant_bar_desc->name;
                    $restaurant_bars_data['restaurant_bar_more_information-'.$rec_restaurant_bar_desc->language_id][$hotel_restaurant_bars_index] = $rec_restaurant_bar_desc->information;
                }
            }

            $hotel_restaurant_bars_index++;
        }
    }


    //defining indexes to avoid errors
    $nearby_places_data['nearby_place']         = array();

    $hotel_nearby_places_index = 0;

    if($hotel->NearByPlaces)
    {
        foreach($hotel->NearByPlaces as $rec_nearby_place)
        {
            $nearby_places_data['nearby_place'][$hotel_nearby_places_index] = $rec_nearby_place->place_name;
            $nearby_places_data['nearby_latitude'][$hotel_nearby_places_index] = $rec_nearby_place->latitude;
            $nearby_places_data['nearby_longitude'][$hotel_nearby_places_index] = $rec_nearby_place->longitude;

            $hotel_nearby_places_index++;
        }
    }

    //defining indexes to avoid errors
    $tags_data['tags']         = array();

    $hotel_tags_index = 0;

    if($hotel->TagsToHotels)
    {
        foreach($hotel->TagsToHotels as $rec_tags)
        {
            $tags_data['tags'][] = $rec_tags->tag_id;
        }
    }

    //getting data from db ends here


    $old_amenities                  = ( old('amenities',$hotel_amenities) != null) ? old('amenities',$hotel_amenities) : array();
    $old_facilities                 = ( old('facilities',$hotel_facilities) != null ) ? old('facilities',$hotel_facilities) : array();
    $old_services                   = ( old('services',$hotel_services) != null ) ? old('services',$hotel_services) : array();
    $old_recreational_activities    = ( old('recreational_activities',$hotel_recreational_activities) != null ) ? old('recreational_activities',$hotel_recreational_activities) : array();
    $old_equipments                 = ( old('equipments',$hotel_equipments) != null ) ? old('equipments',$hotel_equipments) : array();

    //Rooms
    $old_room_names                 = ( old('room_name-1',$hotel_rooms_data['room_name-1']) != null ) ? old('room_name-1',$hotel_rooms_data['room_name-1']) : array();
    $old_room_area                  = old('room_area',$hotel_rooms_data['room_area']);
    $old_room_height                = old('room_height',$hotel_rooms_data['room_height']);
    $old_room_size                  = old('room_size',$hotel_rooms_data['room_size']);
    $old_room_cocktail              = old('room_cocktail',$hotel_rooms_data['room_cocktail']);
    $old_room_theatre               = old('room_theatre',$hotel_rooms_data['room_theatre']);
    $old_room_school                = old('room_school',$hotel_rooms_data['room_school']);
    $old_room_banquet               = old('room_banquet',$hotel_rooms_data['room_banquet']);
    $old_room_imperial              = old('room_imperial',$hotel_rooms_data['room_imperial']);
    $old_room_ushape                = old('room_ushape',$hotel_rooms_data['room_ushape']);

    $room_names                     = array();
    $total_rooms                    = count($old_room_names);

    if(!empty($old_room_names))
    {
        foreach($languages as $language)
        {
            $room_names[$language->id] = !empty(old('room_name-'.$language->id, $hotel_rooms_data['room_name-'.$language->id])) ? old('room_name-'.$language->id, $hotel_rooms_data['room_name-'.$language->id]) : array();
        }
    }


    //Guest Room
    $old_guest_room_room_names          = ( old('guest_room_room_name-1',$guest_rooms_data['guest_room_room_name-1']) != null ) ? old('guest_room_room_name-1',$guest_rooms_data['guest_room_room_name-1']) : array();
    $old_guest_room_room_quantity       = ( old('guest_room_room_quantity',$guest_rooms_data['guest_room_room_quantity']) != null ) ? old('guest_room_room_quantity',$guest_rooms_data['guest_room_room_quantity']) : array();
    $old_guest_room_room_facility       = ( old('guest_room_room_facility',$guest_rooms_data['guest_room_room_facility']) != null ) ? old('guest_room_room_facility',$guest_rooms_data['guest_room_room_facility']) : array();
    $old_guest_room_room_image          = ( old('guest_room_room_image',$guest_rooms_data['guest_room_room_image']) != null ) ? old('guest_room_room_image',$guest_rooms_data['guest_room_room_image']) : array();

    $guest_room_names                     = array();
    $total_guest_rooms                    = count($old_guest_room_room_names);

    if(!empty($old_guest_room_room_names))
    {
        foreach($languages as $language)
        {
            $guest_room_names[$language->id] = !empty(old('guest_room_room_name-'.$language->id, $guest_rooms_data['guest_room_room_name-'.$language->id] )) ? old('guest_room_room_name-'.$language->id, $guest_rooms_data['guest_room_room_name-'.$language->id] ) : array();
        }
    }

    //Restaurants & Bars
    $old_restaurant_bar_names                       = ( old('restaurant_bar_name-1',$restaurant_bars_data['restaurant_bar_name-1']) != null ) ? old('restaurant_bar_name-1',$restaurant_bars_data['restaurant_bar_name-1']) : array();
    $old_restaurant_bar_more_information            = ( old('restaurant_bar_more_information-1',$restaurant_bars_data['restaurant_bar_more_information-1']) != null ) ? old('restaurant_bar_more_information-1',$restaurant_bars_data['restaurant_bar_more_information-1']) : array();

    $old_restaurant_bar_cuisine                     = ( old('restaurant_bar_cuisine',$restaurant_bars_data['restaurant_bar_cuisine']) != null ) ? old('restaurant_bar_cuisine',$restaurant_bars_data['restaurant_bar_cuisine']) : array();
    $old_restaurant_bar_opening_time                = ( old('restaurant_bar_opening_time',$restaurant_bars_data['restaurant_bar_opening_time']) != null ) ? old('restaurant_bar_opening_time',$restaurant_bars_data['restaurant_bar_opening_time']) : array();
    $old_restaurant_bar_dress_code                  = ( old('restaurant_bar_dress_code',$restaurant_bars_data['restaurant_bar_dress_code']) != null ) ? old('restaurant_bar_dress_code',$restaurant_bars_data['restaurant_bar_dress_code']) : array();
    $old_restaurant_bar_access                      = ( old('restaurant_bar_access',$restaurant_bars_data['restaurant_bar_access']) != null ) ? old('restaurant_bar_access',$restaurant_bars_data['restaurant_bar_access']) : array();
    $old_restaurant_bar_image                       = ( old('restaurant_bar_image',$restaurant_bars_data['restaurant_bar_image']) != null ) ? old('restaurant_bar_image',$restaurant_bars_data['restaurant_bar_image']) : array();

    $restaurant_bar_names                           = array();
    $total_restaurant_bar                           = count($old_restaurant_bar_names);

    $restaurant_bar_more_information                = array();
    $total_restaurant_bar_more_information          = count($old_restaurant_bar_more_information);

    if(!empty($old_restaurant_bar_names))
    {
        foreach($languages as $language)
        {
            $restaurant_bar_names[$language->id] = !empty(old('restaurant_bar_name-'.$language->id,$restaurant_bars_data['restaurant_bar_name-'.$language->id])) ? old('restaurant_bar_name-'.$language->id,$restaurant_bars_data['restaurant_bar_name-'.$language->id]) : array();
        }
    }

    if(!empty($old_restaurant_bar_more_information))
    {
        foreach($languages as $language)
        {
            $restaurant_bar_more_information[$language->id] = !empty(old('restaurant_bar_more_information-'.$language->id,$restaurant_bars_data['restaurant_bar_more_information-'.$language->id])) ? old('restaurant_bar_more_information-'.$language->id,$restaurant_bars_data['restaurant_bar_more_information-'.$language->id]) : array();
        }
    }

    //Nearby Places
    $old_nearby_place                     = ( old('nearby_place',$nearby_places_data['nearby_place']) != null ) ? old('nearby_place',$nearby_places_data['nearby_place']) : array();
    $old_nearby_latitude                  = ( old('nearby_latitude',$nearby_places_data['nearby_latitude']) != null ) ? old('nearby_latitude',$nearby_places_data['nearby_latitude']) : array();
    $old_nearby_longitude                 = ( old('nearby_longitude',$nearby_places_data['nearby_longitude']) != null ) ? old('nearby_longitude',$nearby_places_data['nearby_longitude']) : array();


    $total_nearby_place                   = count($old_nearby_place);


    //Tags
    $old_tags = ( old('tags',$tags_data['tags']) != null ) ? old('tags',$tags_data['tags']) : array();

    //Users
    $old_users = ( old('users') != null ) ? old('users') : array();

    //Hotel Gallery
    $old_hotel_gallery      = ( old('hotel_gallery',$hotel_gallery) != null ) ? old('hotel_gallery',$hotel_gallery) : array();
    $total_hotel_gallery    = count($old_hotel_gallery);

    $old_primary_image      = ( old('primary_image',$hotel->getAdminPrimaryImage()) != null ) ? old('primary_image',$hotel->getAdminPrimaryImage()) : '';

    //floor_plans
    $old_floor_plans        = ( old('floor_plans',$hotel_floor_plans) != null ) ? old('floor_plans',$hotel_floor_plans) : array();
    $total_floor_plans      = count($old_floor_plans);
    ?>

    <div class="content-area">
        <div class="container-fluid">

            @if ($errors->any())
                <div class="has-error">
                    <div class="alert alert-danger alert-dismissable">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            @endif

            <div class="row">
                <div class="col-12">
                    <div class="panel">
                        <div class="row">
                            <div class="col-md-12 col-sm-12 col-xl-11">

                                {!! Form::open(['route' => array('edit_hotel_process',$hotel->id), 'method' => 'POST', 'class' => 'contactForm', 'id' => 'contact-form', 'enctype'=> 'multipart/form-data']) !!}

                                <input type="hidden" name="update_hotel" value="update" />

                                <div class="row">
                                    <div class="col-xl-8">
                                        <h2>@lang('hotel/edit.page_title')</h2>

                                        @if($languages->count())
                                            @foreach($languages as $language)
                                                <?php $iso = $language->{'iso_639-1'}; ?>
                                                <?php $hotel_description = $hotel_repo->getDescriptionById($hotel->id,$language->id); ?>
                                                <div class="row">
                                                    <div class="col-sm-12">
                                                        <div class="field lang-{{ $iso }}">
                                                            <label>@lang('hotel/edit.name')*</label>
                                                            <input type="text" name="hotel_name-{{ $language->id }}" placeholder="@lang('hotel/edit.name') {{ $language->name }}" value="{{ old('hotel_name-'.$language->id,$hotel_description->name) }}" />
                                                        </div>
                                                    </div>
                                                </div>
                                            @endforeach
                                        @endif



                                        <div class="row">
                                            <div class="col-sm-12">
                                                <div class="field">
                                                    <label>@lang('hotel/edit.address')*</label>
                                                    <input type="text" name="hotel_address" id="hotel_address" value="{{ old('hotel_address',$hotel->address) }}" />
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-sm-4">
                                                <div class="field">
                                                    <label>@lang('hotel/edit.city')*</label>
                                                    <input type="text" name="city" value="{{ old('city',$hotel->city) }}" id="locality" />
                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <div class="field">
                                                    <label>@lang('hotel/edit.state')*</label>
                                                    <input type="text" name="state" value="{{ old('state',$hotel->state) }}" id="administrative_area_level_1" />
                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <div class="field">
                                                    <label>@lang('hotel/edit.zip')</label>
                                                    <input type="text" name="zip" value="{{ old('zip',$hotel->zip) }}" id="postal_code" />
                                                </div>
                                            </div>
                                            <input type="hidden" value="{{ old('latitude',$hotel->latitude) }}" name="latitude" id="latitude" />
                                            <input type="hidden" value="{{ old('longitude',$hotel->longitude) }}" name="longitude" id="longitude" />
                                        </div>

                                        <div class="row">
                                            <div class="col-sm-12">
                                                <h4>@lang('hotel/edit.space')</h4>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-sm-6 col-md-3">
                                                <div class="field">
                                                    <label>@lang('hotel/edit.meeting_room')*</label>
                                                    <input type="text" name="space_meeting_room" value="{{ old('space_meeting_room',$hotel->space_meeting_room) }}" />
                                                </div>
                                            </div>
                                            <div class="col-sm-6 col-md-3">
                                                <div class="field">
                                                    <label>@lang('hotel/edit.meeting_space')*</label>
                                                    <input type="text" name="space_meeting_space" value="{{ old('space_meeting_space',$hotel->space_meeting_space) }}" />
                                                </div>
                                            </div>
                                            <div class="col-sm-6 col-md-3">
                                                <div class="field">
                                                    <label>@lang('hotel/edit.guest_room')*</label>
                                                    <input type="text" name="space_guest_rooms" value="{{ old('space_guest_rooms',$hotel->space_guest_rooms) }}" />
                                                </div>
                                            </div>
                                            <div class="col-sm-6 col-md-3">
                                                <div class="field">
                                                    <label>@lang('hotel/edit.restaurant_bars')*</label>
                                                    <input type="text" name="space_restuatrant_bars" value="{{ old('space_restuatrant_bars',$hotel->space_restuatrant_bars) }}" />
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-sm-6 col-md-3">
                                                <div class="field">
                                                    <label>@lang('hotel/edit.chain_name')</label>
                                                    <input type="text" name="space_chain_name" value="{{ old('space_chain_name',$hotel->space_chain_name) }}" />
                                                </div>
                                            </div>
                                            <div class="col-sm-6 col-md-3">
                                                <div class="field">
                                                    <label>@lang('hotel/edit.built_year')</label>
                                                    <input type="text" name="space_built_year" value="{{ old('space_built_year',$hotel->space_built_year) }}" />
                                                </div>
                                            </div>
                                            <div class="col-sm-6 col-md-3">
                                                <div class="field">
                                                    <label>@lang('hotel/edit.total_meeting_sapce_area')</label>
                                                    <input type="text" name="space_total_meeting_space_area" value="{{ old('space_total_meeting_space_area',$hotel->space_total_meeting_space_area) }}" />
                                                </div>
                                            </div>
                                            <div class="col-sm-6 col-md-3">
                                                <div class="field">
                                                    <label>@lang('hotel/edit.brand_name')</label>
                                                    <input type="text" name="space_brand_name" value="{{ old('space_brand_name',$hotel->space_brand_name) }}" />
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-sm-6 col-md-3">
                                                <div class="field">
                                                    <label>@lang('hotel/edit.renovation_year')</label>
                                                    <input type="text" name="space_renovation_year" value="{{ old('space_renovation_year',$hotel->space_renovation_year) }}" />
                                                </div>
                                            </div>
                                            <div class="col-sm-6 col-md-3">
                                                <div class="field">
                                                    <label>@lang('hotel/edit.all_inclusive_hotel')</label>
                                                    <select name="space_all_inclusive_hotel">
                                                        <option value="Yes" @if(old('space_all_inclusive_hotel',$hotel->space_all_inclusive_hotel) == 'Yes') selected  @endif>@lang('hotel/edit.all_inclusive_hotel_options.yes')</option>
                                                        <option value="No" @if( old('space_all_inclusive_hotel',$hotel->space_all_inclusive_hotel) == 'No') selected @endif >@lang('hotel/edit.all_inclusive_hotel_options.no')</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-sm-6 col-md-3">
                                                <div class="field">
                                                    <label>@lang('hotel/edit.aaa_rating')</label>
                                                    <select name="space_aaa_rating">
                                                        <option value="">@lang('hotel/edit.aaa_rating')</option>
                                                        <option value="1" @if( old('space_aaa_rating',$hotel->space_aaa_rating) == 1) selected @endif>1</option>
                                                        <option value="2" @if( old('space_aaa_rating',$hotel->space_aaa_rating) == 2) selected @endif>2</option>
                                                        <option value="3" @if( old('space_aaa_rating',$hotel->space_aaa_rating) == 3) selected @endif>3</option>
                                                        <option value="4" @if( old('space_aaa_rating',$hotel->space_aaa_rating) == 4) selected @endif>4</option>
                                                        <option value="5" @if( old('space_aaa_rating',$hotel->space_aaa_rating) == 5) selected @endif>5</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-sm-6 col-md-3">
                                                <div class="field">
                                                    <label>@lang('hotel/edit.trip_advisor_rating')</label>
                                                    <select name="space_trip_advisor_rating">
                                                        <option value="">@lang('hotel/edit.trip_advisor_rating')</option>
                                                        <option value="1" @if( old('space_trip_advisor_rating',$hotel->space_trip_advisor_rating) == 1) selected @endif>1</option>
                                                        <option value="2" @if( old('space_trip_advisor_rating',$hotel->space_trip_advisor_rating) == 2) selected @endif>2</option>
                                                        <option value="3" @if( old('space_trip_advisor_rating',$hotel->space_trip_advisor_rating) == 3) selected @endif>3</option>
                                                        <option value="4" @if( old('space_trip_advisor_rating',$hotel->space_trip_advisor_rating) == 4) selected @endif>4</option>
                                                        <option value="5" @if( old('space_trip_advisor_rating',$hotel->space_trip_advisor_rating) == 5) selected @endif>5</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>

                                        {{--<div class="row">
                                            <div class="col-sm-6 col-md-3">
                                                <div class="field">
                                                    <label>@lang('hotel/edit.dmc')</label>
                                                    <input type="text" name="dmc" />
                                                </div>
                                            </div>
                                        </div>--}}

                                        <div class="row">
                                            <div class="col-12">
                                                <hr>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-sm-12">
                                                <h4>@lang('hotel/edit.amenities')</h4>
                                            </div>
                                        </div>
                                        <div class="row show-amm">
                                            <div class="col-sm-12">
                                                <div class="dt">
                                                    <div class="row hotelamenities dtimg">

                                                        @foreach($old_amenities as $old_amenity)
                                                            @if($amenities->count())
                                                                @foreach($amenities as $amenity)

                                                                    @if($old_amenity == $amenity->amenity_id)
                                                                        <div class='amenty-bx amm-{{ $amenity->amenity_id }}' style='display:block;'>
                                                                            <div class='cont'>
                                                                                <figure>
                                                                                    <img src='{{ asset('images/'.$amenity->icon) }}' />
                                                                                </figure>
                                                                                <span>{{ $amenity->name }}</span>
                                                                                <i class='fa fa-times'></i>
                                                                            </div>
                                                                            <input type='hidden' name='amenities[]' value='{{ $amenity->amenity_id }}'>
                                                                        </div>

                                                                    @endif

                                                                @endforeach
                                                            @endif
                                                        @endforeach

                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-sm-12">
                                                <div class="field wico">
                                                    <select class="add-hotel-slct-disable hotelamenities_select showdtimg">
                                                        <option value="">@lang('hotel/edit.amenities_placeholder')</option>
                                                        @if($amenities->count())
                                                            @foreach($amenities as $amenity)
                                                                <option data-name="amenities[]" value="{{ $amenity->amenity_id }}" data-icon="{{ asset('images/'.$amenity->icon) }}" data-text="{{ $amenity->name }}">{{ $amenity->name }}</option>
                                                            @endforeach
                                                        @endif
                                                    </select>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-sm-12">
                                                <h4>@lang('hotel/edit.facilities')</h4>
                                            </div>
                                        </div>
                                        <div class="row show-amm">
                                            <div class="col-sm-12">
                                                <div class="dt">
                                                    <div class="row dtimg">
                                                        @foreach($old_facilities as $old_facility)
                                                            @if($facilities->count())
                                                                @foreach($facilities as $facility)

                                                                    @if($old_facility == $facility->facility_id)
                                                                        <div class='amenty-bx amm-{{ $facility->facility_id }}' style='display:block;'>
                                                                            <div class='cont'>
                                                                                <figure>
                                                                                    <img src='{{ asset('images/'.$facility->icon) }}' />
                                                                                </figure>
                                                                                <span>{{ $facility->name }}</span>
                                                                                <i class='fa fa-times'></i>
                                                                            </div>
                                                                            <input type='hidden' name='facilities[]' value='{{ $facility->facility_id }}'>
                                                                        </div>
                                                                    @endif

                                                                @endforeach
                                                            @endif
                                                        @endforeach
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-sm-12">
                                                <div class="field wico">
                                                    <select class="add-hotel-slct-disable showdtimg">
                                                        <option value="">@lang('hotel/edit.facilities_placeholder')</option>
                                                        @if($facilities->count())
                                                            @foreach($facilities as $facility)
                                                                <option data-text="{{ $facility->name }}" data-name="facilities[]" value="{{ $facility->facility_id }}" data-icon="{{ asset('images/'.$facility->icon) }}">{{ $facility->name }}</option>
                                                            @endforeach
                                                        @endif
                                                    </select>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-sm-12">
                                                <h4>@lang('hotel/edit.services')</h4>
                                            </div>
                                        </div>
                                        <div class="row show-amm">
                                            <div class="col-sm-12">
                                                <div class="dt">
                                                    <div class="row dtimg">
                                                        @foreach($old_services as $old_service)
                                                            @if($services->count())
                                                                @foreach($services as $service)

                                                                    @if($old_service == $service->service_id)
                                                                        <div class='amenty-bx amm-{{ $service->service_id }}' style='display:block;'>
                                                                            <div class='cont'>
                                                                                <figure>
                                                                                    <img src='{{ asset('images/'.$service->icon) }}' />
                                                                                </figure>
                                                                                <span>{{ $service->name }}</span>
                                                                                <i class='fa fa-times'></i>
                                                                            </div>
                                                                            <input type='hidden' name='services[]' value='{{ $service->service_id }}'>
                                                                        </div>
                                                                    @endif

                                                                @endforeach
                                                            @endif
                                                        @endforeach
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-12">
                                                <div class="field wico">
                                                    <select class="add-hotel-slct-disable showdtimg">
                                                        <option value="">@lang('hotel/edit.services_placeholder')</option>
                                                        @if($services->count())
                                                            @foreach($services as $service)
                                                                <option data-name="services[]" value="{{ $service->service_id }}" data-icon="{{ asset('images/'.$service->icon) }}" data-text="{{ $service->name }}">{{ $service->name }}</option>
                                                            @endforeach
                                                        @endif
                                                    </select>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-sm-12">
                                                <h4>@lang('hotel/edit.recreational_activities')</h4>
                                            </div>
                                        </div>
                                        <div class="row show-amm">
                                            <div class="col-sm-12">
                                                <div class="dt">
                                                    <div class="row dtimg">
                                                        @foreach($old_recreational_activities as $old_recreational_activity)
                                                            @if($recreational_activities->count())
                                                                @foreach($recreational_activities as $activity)

                                                                    @if($old_recreational_activity == $activity->activity_id)
                                                                        <div class='amenty-bx amm-{{ $activity->activity_id }}' style='display:block;'>
                                                                            <div class='cont'>
                                                                                <figure>
                                                                                    <img src='{{ asset('images/'.$activity->icon) }}' />
                                                                                </figure>
                                                                                <span>{{ $activity->name }}</span>
                                                                                <i class='fa fa-times'></i>
                                                                            </div>
                                                                            <input type='hidden' name='recreational_activities[]' value='{{ $activity->activity_id }}'>
                                                                        </div>
                                                                    @endif

                                                                @endforeach
                                                            @endif
                                                        @endforeach
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-12">
                                                <div class="field wico">
                                                    <select class="add-hotel-slct-disable showdtimg">
                                                        <option value="">@lang('hotel/edit.recreational_activities_placeholder')</option>
                                                        @if($recreational_activities->count())
                                                            @foreach($recreational_activities as $activity)
                                                                <option data-name="recreational_activities[]" data-text="{{ $activity->name }}" value="{{ $activity->activity_id }}" data-icon="{{ asset('images/'.$activity->icon) }}">{{ $activity->name }}</option>
                                                            @endforeach
                                                        @endif
                                                    </select>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-sm-12">
                                                <h4>@lang('hotel/edit.venue_access_by')</h4>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <div class="field">
                                                    <input type="text" name="venue_access_by" value="{{ old('venue_access_by',$hotel_venue_access) }}" placeholder="@lang('hotel/edit.venue_access_by_placeholder')" />
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-sm-12">
                                                <h4>@lang('hotel/edit.equipments')</h4>
                                            </div>
                                        </div>
                                        <div class="row show-amm">
                                            <div class="col-sm-12">
                                                <div class="dt">
                                                    <div class="row dtimg">
                                                        @foreach($old_equipments as $old_equipment)
                                                            @if($equipments->count())
                                                                @foreach($equipments as $equipment)

                                                                    @if($old_equipment == $equipment->equipment_id)
                                                                        <div class='amenty-bx amm-{{ $equipment->equipment_id }}' style='display:block;'>
                                                                            <div class='cont'>
                                                                                <figure>
                                                                                    <img src='{{ asset('images/'.$equipment->icon) }}' />
                                                                                </figure>
                                                                                <span>{{ $equipment->name }}</span>
                                                                                <i class='fa fa-times'></i>
                                                                            </div>
                                                                            <input type='hidden' name='equipments[]' value='{{ $equipment->equipment_id }}'>
                                                                        </div>
                                                                    @endif

                                                                @endforeach
                                                            @endif
                                                        @endforeach
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-12">
                                                <div class="field wico">
                                                    <select class="add-hotel-slct-disable showdtimg"  >
                                                        <option value="">@lang('hotel/edit.equipments_placeholder')</option>
                                                        @if($equipments->count())
                                                            @foreach($equipments as $equipment)
                                                                <option data-name="equipments[]" data-text="{{ $equipment->name }}" value="{{ $equipment->equipment_id }}" data-icon="{{ asset('images/'.$equipment->icon) }}">{{ $equipment->name }}</option>
                                                            @endforeach
                                                        @endif
                                                    </select>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-12">
                                                <hr>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-12">
                                                <h4>@lang('hotel/edit.meeting_space_sqft')</h4>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-sm-6 col-md-3">
                                                <div class="field">
                                                    <label>@lang('hotel/edit.total_meeting_space')</label>
                                                    <input type="text" name="total_meeting_space" value="{{ old('total_meeting_space',$hotel->total_meeting_space) }}" />
                                                </div>
                                            </div>
                                            <div class="col-sm-6 col-md-3">
                                                <div class="field">
                                                    <label>@lang('hotel/edit.largest_room')</label>
                                                    <input type="text" name="largest_room" value="{{ old('largest_room',$hotel->largest_room) }}" />
                                                </div>
                                            </div>
                                            <div class="col-sm-6 col-md-3">
                                                <div class="field">
                                                    <label>@lang('hotel/edit.second_largest_room')</label>
                                                    <input type="text" name="second_largest_room" value="{{ old('second_largest_room',$hotel->second_largest_room) }}" />
                                                </div>
                                            </div>
                                            <div class="col-sm-6 col-md-3">
                                                <div class="field">
                                                    <label>@lang('hotel/edit.exhibit_space')</label>
                                                    <input type="text" name="exhibit_space" value="{{ old('exhibit_space',$hotel->exhibit_space) }}" />
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row mbpx-25">
                                            <div id="show-plans" class="col-sm-12">
                                                <?php $hotel_floor_plan_count = 0; ?>
                                                @if(!empty($old_floor_plans))
                                                    @foreach($old_floor_plans as $floor_plan)
                                                        <a class="download-old">
                                                            <img src="{{ asset('images/icon-file-download.png') }}" />
                                                            {{ $floor_plan }}
                                                            <input type="hidden"  name="floor_plans[{{ $hotel_floor_plan_count }}]" value="{{ $floor_plan }}" style="opacity: 0;">
                                                            <span><i class="fa fa-trash"></i></span>
                                                        </a>
                                                        <?php $hotel_floor_plan_count++; ?>
                                                    @endforeach
                                                @endif
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-sm-12">
                                                <div id="dropzone_floor_plans" class="dropzone"></div>
                                                {{--<div class="addFileStyle">
                                                    <input type="file" id="add-floor" name="floor_plans[]" multiple />
                                                </div>--}}
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-12">
                                                <h4>@lang('hotel/edit.room')</h4>
                                            </div>
                                        </div>

                                        <div class="to-clone-hotel-old">
                                            <?php $room_count = 0; ?>
                                            @if($languages->count())
                                                @foreach($languages as $language)
                                                    <?php $iso = $language->{'iso_639-1'}; ?>
                                                    <div class="row">
                                                        <div class="col-sm-12">
                                                            <div class="field wico altr-b lang-{{ $iso }}">
                                                                <label>@lang('hotel/edit.room_name')</label>
                                                                <input type="text" name="room_name-{{ $language->id }}[{{ $room_count }}]" placeholder="@lang('hotel/edit.room_name') {{ $language->name }}" value="{{ isset( $room_names[$language->id][$room_count] ) ? $room_names[$language->id][$room_count] : '' }}" />
                                                                <span class="delete-ico remove-add-hotel">
                                                                    <i class="fa fa-trash"></i>
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                @endforeach
                                            @endif


                                            <div class="row">
                                                <div class="col-sm-6 col-md-3">
                                                    <div class="field">
                                                        <label>@lang('hotel/edit.room_area')</label>
                                                        <input type="text" name="room_area[{{ $room_count }}]" value="{{ isset($old_room_area[$room_count]) ? $old_room_area[$room_count] : '' }}" />
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 col-md-3">
                                                    <div class="field">
                                                        <label>@lang('hotel/edit.room_height')</label>
                                                        <input type="text" name="room_height[{{ $room_count }}]" value="{{ isset($old_room_height[$room_count]) ? $old_room_height[$room_count] : '' }}" />
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 col-md-3">
                                                    <div class="field">
                                                        <label>@lang('hotel/edit.room_size')</label>
                                                        <input type="text" name="room_size[{{ $room_count }}]" value="{{ isset($old_room_size[$room_count]) ? $old_room_size[$room_count] : '' }}" />
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 col-md-3">
                                                    <div class="field">
                                                        <label>@lang('hotel/edit.room_cocktail')</label>
                                                        <input type="text" name="room_cocktail[{{ $room_count }}]" value="{{ isset($old_room_cocktail[$room_count]) ? $old_room_cocktail[$room_count] : '' }}" />
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-sm-6 col-md-3">
                                                    <div class="field">
                                                        <label>@lang('hotel/edit.room_theatre')</label>
                                                        <input type="text" name="room_theatre[{{ $room_count }}]"  value="{{ isset($old_room_theatre[$room_count]) ? $old_room_theatre[$room_count] : '' }}" />
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 col-md-3">
                                                    <div class="field">
                                                        <label>@lang('hotel/edit.room_school')</label>
                                                        <input type="text" name="room_school[{{ $room_count }}]" value="{{ isset($old_room_school[$room_count]) ? $old_room_school[$room_count] : '' }}" />
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 col-md-3">
                                                    <div class="field">
                                                        <label>@lang('hotel/edit.room_banquet')</label>
                                                        <input type="text" name="room_banquet[{{ $room_count }}]" value="{{ isset($old_room_banquet[$room_count]) ? $old_room_banquet[$room_count] : '' }}" />
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 col-md-3">
                                                    <div class="field">
                                                        <label>@lang('hotel/edit.room_imperial')</label>
                                                        <input type="text" name="room_imperial[{{ $room_count }}]" value="{{ isset($old_room_imperial[$room_count]) ? $old_room_imperial[$room_count] : '' }}" />
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-sm-6 col-md-3">
                                                    <div class="field">
                                                        <label>@lang('hotel/edit.room_ushape')</label>
                                                        <input type="text" name="room_ushape[{{ $room_count }}]" value="{{ isset($old_room_ushape[$room_count]) ? $old_room_ushape[$room_count] : '' }}" />
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- Repeating Rooms -->

                                            <?php if($total_rooms > 1 ){  for($i=1;$i<$total_rooms;$i++){ $room_count++; ?>
                                            <div class="clone-item clearfix mtpx-27">
                                                @if($languages->count())
                                                    @foreach($languages as $language)
                                                        <?php $iso = $language->{'iso_639-1'}; ?>
                                                        <div class="row">
                                                            <div class="col-sm-12">
                                                                <div class="field wico altr-b lang-{{ $iso }}">
                                                                    <label>@lang('hotel/edit.room_name')</label>
                                                                    <input type="text" name="room_name-{{ $language->id }}[{{ $room_count }}]" placeholder="@lang('hotel/edit.room_name') {{ $language->name }}" value="{{ isset( $room_names[$language->id][$room_count] ) ? $room_names[$language->id][$room_count] : '' }}" />
                                                                    <span class="delete-ico remove-add-hotel">
                                                                    <i class="fa fa-trash"></i>
                                                                </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    @endforeach
                                                @endif


                                                <div class="row">
                                                    <div class="col-sm-6 col-md-3">
                                                        <div class="field">
                                                            <label>@lang('hotel/edit.room_area')</label>
                                                            <input type="text" name="room_area[{{ $room_count }}]" value="{{ isset($old_room_area[$room_count]) ? $old_room_area[$room_count] : '' }}" />
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6 col-md-3">
                                                        <div class="field">
                                                            <label>@lang('hotel/edit.room_height')</label>
                                                            <input type="text" name="room_height[{{ $room_count }}]" value="{{ isset($old_room_height[$room_count]) ? $old_room_height[$room_count] : '' }}" />
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6 col-md-3">
                                                        <div class="field">
                                                            <label>@lang('hotel/edit.room_size')</label>
                                                            <input type="text" name="room_size[{{ $room_count }}]" value="{{ isset($old_room_size[$room_count]) ? $old_room_size[$room_count] : '' }}" />
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6 col-md-3">
                                                        <div class="field">
                                                            <label>@lang('hotel/edit.room_cocktail')</label>
                                                            <input type="text" name="room_cocktail[{{ $room_count }}]" value="{{ isset($old_room_cocktail[$room_count]) ? $old_room_cocktail[$room_count] : '' }}" />
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-sm-6 col-md-3">
                                                        <div class="field">
                                                            <label>@lang('hotel/edit.room_theatre')</label>
                                                            <input type="text" name="room_theatre[{{ $room_count }}]"  value="{{ isset($old_room_theatre[$room_count]) ? $old_room_theatre[$room_count] : '' }}" />
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6 col-md-3">
                                                        <div class="field">
                                                            <label>@lang('hotel/edit.room_school')</label>
                                                            <input type="text" name="room_school[{{ $room_count }}]" value="{{ isset($old_room_school[$room_count]) ? $old_room_school[$room_count] : '' }}" />
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6 col-md-3">
                                                        <div class="field">
                                                            <label>@lang('hotel/edit.room_banquet')</label>
                                                            <input type="text" name="room_banquet[{{ $room_count }}]" value="{{ isset($old_room_banquet[$room_count]) ? $old_room_banquet[$room_count] : '' }}" />
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6 col-md-3">
                                                        <div class="field">
                                                            <label>@lang('hotel/edit.room_imperial')</label>
                                                            <input type="text" name="room_imperial[{{ $room_count }}]" value="{{ isset($old_room_imperial[$room_count]) ? $old_room_imperial[$room_count] : '' }}" />
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-sm-6 col-md-3">
                                                        <div class="field">
                                                            <label>@lang('hotel/edit.room_ushape')</label>
                                                            <input type="text" name="room_ushape[{{ $room_count }}]" value="{{ isset($old_room_ushape[$room_count]) ? $old_room_ushape[$room_count] : '' }}" />
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        <?php } } ?>
                                        <!-- Repeating Rooms -->

                                        </div><!-- to-clone-hotel-old -->

                                        <div class="row">
                                            <div class="col-sm-12">
                                                <a href="javascript:;" class="add-more-hotel-old">@lang('hotel/edit.room_add')</a>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-12">
                                                <hr>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-12">
                                                <h4 class="mbpx-20">@lang('hotel/edit.category_service')</h4>
                                                <h5>@lang('hotel/edit.category_service_detail')</h5>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-sm-12">
                                                @if($languages->count())
                                                    @foreach($languages as $language)
                                                        <?php $iso = $language->{'iso_639-1'}; ?>
                                                        <?php $hotel_description = $hotel_repo->getDescriptionById($hotel->id,$language->id); ?>
                                                        <div class="field mbpx-15 lang-{{ $iso }}">
                                                            <label>{{ $language->name }}</label>
                                                            <textarea cols="2" rows="2" name="catering_service-{{ $language->id }}">{{ old('catering_service-'.$language->id,$hotel_description->catering_service) }}</textarea>
                                                        </div>
                                                    @endforeach
                                                @endif
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div id="show-cat-srv" class="col-sm-12 mbpx-10">
                                                @if($hotel->catering_service_image)
                                                    <?php $catering_img_path = ($hotel->id == 1) ? asset('images/'.$hotel->catering_service_image) : asset('uploads/hotels/'.$hotel->id.'/'.$hotel->catering_service_image); ?>

                                                    <figure class="up-img">
                                                        <img class="thumbnail" src="{{ $catering_img_path }}" />
                                                        <span class="delete-ico del-img-old" data-filename="{{ $hotel->catering_service_image }}" data-type="catering"><i class="fa fa-trash"></i></span>
                                                        <input type="hidden" name="catering_service_existing_image" value="{{ $hotel->catering_service_image }}" />
                                                    </figure>
                                                @endif
                                            </div>
                                            <div class="col-sm-12">
                                                <div class="addFileStyle photo">
                                                    <input type="file" id="catering-srv" name="catering_service_image" />
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-12">
                                                <hr>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-12">
                                                <h4>@lang('hotel/edit.guest_rooms')</h4>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-sm-6 col-md-3">
                                                <div class="field">
                                                    <label>@lang('hotel/edit.guest_room_total')</label>
                                                    <input type="text" name="total_guest_rooms" value="{{ old('total_guest_rooms', ($hotel->HotelGuestRooms) ? $hotel->HotelGuestRooms->total_guest_rooms : '' ) }}" />
                                                </div>
                                            </div>
                                            <div class="col-sm-6 col-md-3">
                                                <div class="field">
                                                    <label>@lang('hotel/edit.guest_room_double')</label>
                                                    <input type="text" name="doubles_guest_room" value="{{ old('doubles_guest_room', ($hotel->HotelGuestRooms) ? $hotel->HotelGuestRooms->doubles_guest_room : '' ) }}" />
                                                </div>
                                            </div>
                                            <div class="col-sm-6 col-md-3">
                                                <div class="field">
                                                    <label>@lang('hotel/edit.guest_room_suits')</label>
                                                    <input type="text" name="guest_room_suits" value="{{ old('guest_room_suits', ($hotel->HotelGuestRooms) ? $hotel->HotelGuestRooms->guest_room_suits : '' ) }}" />
                                                </div>
                                            </div>
                                            <div class="col-sm-6 col-md-3">
                                                <div class="field">
                                                    <label>@lang('hotel/edit.guest_room_tax')</label>
                                                    <div class="tax-terms">
                                                        <label>@lang('hotel/edit.guest_room_tax_options.yes') <input type="radio" class="yes" name="tax" value="Yes" @if( old('tax', ($hotel->HotelGuestRooms) ? $hotel->HotelGuestRooms->tax : '' ) == 'Yes' ) checked @endif></label>
                                                        <label>@lang('hotel/edit.guest_room_tax_options.no') <input type="radio" class="no" name="tax" value="No" @if( old('tax', ($hotel->HotelGuestRooms) ? $hotel->HotelGuestRooms->tax : '' ) == 'No' ) checked @endif></label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row show-if-tax" @if( old('tax', ($hotel->HotelGuestRooms) ? $hotel->HotelGuestRooms->tax : '' ) == 'Yes' ) style="display:block;" @endif>
                                            <div class="col-sm-12">
                                                <div class="field">
                                                    <input type="text" name="type_of_tax" placeholder="@lang('hotel/edit.guest_room_tax_placeholder')" value="{{ old('type_of_tax', ($hotel->HotelGuestRooms) ? $hotel->HotelGuestRooms->type_of_tax : '' ) }}" />
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-12">
                                                <hr>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-12">
                                                <h4>@lang('hotel/edit.guest_room_room_details')</h4>
                                            </div>
                                        </div>

                                        <div class="to-clone-hotel-1-old">

                                            <?php $room_count2 = 0; ?>
                                            <div class="show-amm">
                                                <div class="row">
                                                    @if($languages->count())
                                                        @foreach($languages as $language)
                                                            <?php $iso = $language->{'iso_639-1'}; ?>
                                                            <div class="col-sm-6 col-md-12">
                                                                <div class="field wico altr-b lang-{{ $iso }}">
                                                                    <label>@lang('hotel/edit.guest_room_room_name')</label>
                                                                    <input type="text" name="guest_room_room_name-{{ $language->id }}[{{ $room_count2 }}]" placeholder="@lang('hotel/edit.guest_room_room_name') {{ $language->name }}" value="{{ isset( $guest_room_names[$language->id][$room_count2] ) ? $guest_room_names[$language->id][$room_count2] : '' }}" />
                                                                    <span class="delete-ico remove-add-hotel">
                                                                    <i class="fa fa-trash"></i>
                                                                </span>
                                                                </div>
                                                            </div>
                                                        @endforeach
                                                    @endif

                                                    <div class="col-sm-6 col-md-12">
                                                        <div class="field">
                                                            <label>@lang('hotel/edit.guest_room_room_quantity')</label>
                                                            <input type="text" name="guest_room_room_quantity[{{$room_count2}}]" value="{{ isset($old_guest_room_room_quantity[$room_count2]) ? $old_guest_room_room_quantity[$room_count2] : '' }}" />
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-sm-12">
                                                        <div class="dt">
                                                            <div class="row dtimg">
                                                                @if( isset($old_guest_room_room_facility[$room_count2]) )
                                                                    @foreach($old_guest_room_room_facility[$room_count2] as $old_facility)
                                                                        @if($room_facilities->count())
                                                                            @foreach($room_facilities as $room_facility)

                                                                                @if($old_facility == $room_facility->room_facility_id)
                                                                                    <div class='amenty-bx amm-{{ $room_facility->room_facility_id }}' style='display:block;'>
                                                                                        <div class='cont'>
                                                                                            <figure>
                                                                                                <img src='{{ asset('images/'.$room_facility->icon) }}' />
                                                                                            </figure>
                                                                                            <span>{{ $room_facility->name }}</span>
                                                                                            <i class='fa fa-times'></i>
                                                                                        </div>
                                                                                        <input type='hidden' name='guest_room_room_facility[{{$room_count2}}][]' value='{{ $room_facility->room_facility_id }}'>
                                                                                    </div>
                                                                                @endif

                                                                            @endforeach
                                                                        @endif
                                                                    @endforeach
                                                                @endif
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-sm-12">
                                                        <div class="field wico">
                                                            <select class="add-hotel-slct-disable showdtimg" >
                                                                <option value="">@lang('hotel/edit.guest_room_room_facility')</option>
                                                                @if($room_facilities->count())
                                                                    @foreach($room_facilities as $room_facility)
                                                                        <option data-name="guest_room_room_facility[{{$room_count2}}][]" data-text="{{ $room_facility->name }}" value="{{ $room_facility->room_facility_id }}" data-icon="{{ asset('images/'.$room_facility->icon) }}">{{ $room_facility->name }}</option>
                                                                    @endforeach
                                                                @endif
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-sm-12 mbpx-10 show_room_room_image{{$room_count2}}">
                                                        @if( isset($old_guest_room_room_image[$room_count2]['file_name']) )
                                                            <figure class="up-img">
                                                                <img class="thumbnail" src="{{ asset('uploads/hotels/'.$hotel->id.'/'.$old_guest_room_room_image[$room_count2]['file_name']) }}" />
                                                                <span class="delete-ico del-img-old" data-type="guest_room" data-filename="{{ $old_guest_room_room_image[$room_count2]['file_name'] }}" data-id="{{ $old_guest_room_room_image[$room_count2]['id'] }}">
                                                                    <i class="fa fa-trash"></i>
                                                                </span>
                                                                <input type="hidden" name="guest_room_room_existing_image[{{$room_count2}}]" value="{{ $old_guest_room_room_image[$room_count2]['file_name'] }}" />
                                                            </figure>
                                                        @endif
                                                    </div>
                                                    <div class="col-sm-12">
                                                        <div class="addFileStyle photo">
                                                            <input type="file" name="guest_room_room_image[{{$room_count2}}]" class="guest_room_room_image" data-room-no="{{$room_count2}}" />
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- Repeating Rooms -->
                                            <?php if($total_guest_rooms > 1 ){  for($i=1;$i<$total_guest_rooms;$i++){ $room_count2++; ?>
                                            <div class="clone-item clearfix mtpx-27 show-amm">
                                                <div class="row">
                                                    @if($languages->count())
                                                        @foreach($languages as $language)
                                                            <?php $iso = $language->{'iso_639-1'}; ?>
                                                            <div class="col-sm-6 col-md-12">
                                                                <div class="field wico altr-b lang-{{ $iso }}">
                                                                    <label>@lang('hotel/edit.guest_room_room_name')</label>
                                                                    <input type="text" name="guest_room_room_name-{{ $language->id }}[{{ $room_count2 }}]" placeholder="@lang('hotel/edit.guest_room_room_name') {{ $language->name }}" value="{{ isset( $guest_room_names[$language->id][$room_count2] ) ? $guest_room_names[$language->id][$room_count2] : '' }}" />
                                                                    <span class="delete-ico remove-add-hotel">
                                                                        <i class="fa fa-trash"></i>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        @endforeach
                                                    @endif

                                                    <div class="col-sm-6 col-md-12">
                                                        <div class="field">
                                                            <label>@lang('hotel/edit.guest_room_room_quantity')</label>
                                                            <input type="text" name="guest_room_room_quantity[{{$room_count2}}]" value="{{ isset($old_guest_room_room_quantity[$room_count2]) ? $old_guest_room_room_quantity[$room_count2] : '' }}" />
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-sm-12">
                                                        <div class="dt">
                                                            <div class="row dtimg">
                                                                @if( isset($old_guest_room_room_facility[$room_count2]) )
                                                                    @foreach($old_guest_room_room_facility[$room_count2] as $old_facility)
                                                                        @if($room_facilities->count())
                                                                            @foreach($room_facilities as $room_facility)

                                                                                @if($old_facility == $room_facility->room_facility_id)
                                                                                    <div class='amenty-bx amm-{{ $room_facility->room_facility_id }}' style='display:block;'>
                                                                                        <div class='cont'>
                                                                                            <figure>
                                                                                                <img src='{{ asset('images/'.$room_facility->icon) }}' />
                                                                                            </figure>
                                                                                            <span>{{ $room_facility->name }}</span>
                                                                                            <i class='fa fa-times'></i>
                                                                                        </div>
                                                                                        <input type='hidden' name='guest_room_room_facility[{{$room_count2}}][]' value='{{ $room_facility->room_facility_id }}'>
                                                                                    </div>
                                                                                @endif

                                                                            @endforeach
                                                                        @endif
                                                                    @endforeach
                                                                @endif
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-sm-12">
                                                        <div class="field wico">
                                                            <select class="add-hotel-slct-disable showdtimg" >
                                                                <option value="">@lang('hotel/edit.guest_room_room_facility')</option>
                                                                @if($room_facilities->count())
                                                                    @foreach($room_facilities as $room_facility)
                                                                        <option data-name="guest_room_room_facility[{{$room_count2}}][]" data-text="{{ $room_facility->name }}" value="{{ $room_facility->room_facility_id }}" data-icon="{{ asset('images/'.$room_facility->icon) }}">{{ $room_facility->name }}</option>
                                                                    @endforeach
                                                                @endif
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-sm-12 mbpx-10 show_room_room_image{{$room_count2}}">
                                                        @if( isset($old_guest_room_room_image[$room_count2]['file_name']) )
                                                            <figure class="up-img">
                                                                <img class="thumbnail" src="{{ asset('uploads/hotels/'.$hotel->id.'/'.$old_guest_room_room_image[$room_count2]['file_name']) }}" />
                                                                <span class="delete-ico del-img-old" data-type="guest_room" data-filename="{{ $old_guest_room_room_image[$room_count2]['file_name'] }}" data-id="{{ $old_guest_room_room_image[$room_count2]['id'] }}">
                                                                    <i class="fa fa-trash"></i>
                                                                </span>
                                                                <input type="hidden" name="guest_room_room_existing_image[{{$room_count2}}]" value="{{ $old_guest_room_room_image[$room_count2]['file_name'] }}" />
                                                            </figure>
                                                        @endif
                                                    </div>
                                                    <div class="col-sm-12">
                                                        <div class="addFileStyle photo">
                                                            <input type="file" name="guest_room_room_image[{{$room_count2}}]" class="guest_room_room_image" data-room-no="{{$room_count2}}" />
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        <?php } } ?>
                                        <!-- Repeating Rooms -->

                                        </div>

                                        <div class="row">
                                            <div class="col-sm-12">
                                                <a href="javascript:;" class="add-more-hotel-1-old add-mre">@lang('hotel/edit.guest_room_room_add')</a>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-12">
                                                <hr>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-12">
                                                <h4>@lang('hotel/edit.restaurant_bar')</h4>
                                            </div>
                                        </div>

                                        <div class="to-clone-hotel-2-old">

                                            <?php $restaurant_count = 0; ?>

                                            @if($languages->count())
                                                @foreach($languages as $language)
                                                    <?php $iso = $language->{'iso_639-1'}; ?>
                                                    <div class="row">
                                                        <div class="col-sm-12">
                                                            <div class="field wico altr-b lang-{{ $iso }}">
                                                                <label>@lang('hotel/edit.restaurant_bar_name')</label>
                                                                <input type="text" name="restaurant_bar_name-{{ $language->id }}[{{ $restaurant_count }}]" placeholder="@lang('hotel/edit.restaurant_bar_name') {{ $language->name }}" value="{{ isset( $restaurant_bar_names[$language->id][$restaurant_count] ) ? $restaurant_bar_names[$language->id][$restaurant_count] : '' }}" />
                                                                <span class="delete-ico remove-add-hotel">
                                                                <i class="fa fa-trash"></i>
                                                            </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                @endforeach
                                            @endif

                                            @if($languages->count())
                                                @foreach($languages as $language)
                                                    <?php $iso = $language->{'iso_639-1'}; ?>
                                                    <div class="row">
                                                        <div class="col-sm-12">
                                                            <div class="field lang-{{ $iso }}">
                                                                <label>@lang('hotel/edit.restaurant_bar_more_information')</label>
                                                                <textarea cols="2" rows="2" class="mbpx-15" name="restaurant_bar_more_information-{{ $language->id }}[{{ $restaurant_count }}]" placeholder="@lang('hotel/edit.restaurant_bar_more_information') {{ $language->name }}">{{ isset( $restaurant_bar_more_information[$language->id][$restaurant_count] ) ? $restaurant_bar_more_information[$language->id][$restaurant_count] : '' }}</textarea>
                                                            </div>
                                                        </div>
                                                    </div>
                                                @endforeach
                                            @endif



                                            <div class="row">
                                                <div class="col-sm-6 col-md-3">
                                                    <div class="field">
                                                        <label>@lang('hotel/edit.restaurant_bar_cuisine')</label>
                                                        <input type="text" name="restaurant_bar_cuisine[{{ $restaurant_count }}]" value="{{ isset($old_restaurant_bar_cuisine[$restaurant_count]) ? $old_restaurant_bar_cuisine[$restaurant_count] : '' }}" />
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 col-md-3">
                                                    <div class="field">
                                                        <label>@lang('hotel/edit.restaurant_bar_opening_time')</label>
                                                        <select name="restaurant_bar_opening_time[{{ $restaurant_count }}]">
                                                            <option value="">@lang('hotel/edit.restaurant_bar_opening_time')</option>
                                                            <option value="Breakfast to Late night" @if( isset($old_restaurant_bar_opening_time[$restaurant_count]) && $old_restaurant_bar_opening_time[$restaurant_count] == 'Breakfast to Late night') selected @endif>Breakfast to Late night</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 col-md-3">
                                                    <div class="field">
                                                        <label>@lang('hotel/edit.restaurant_bar_dress_code')</label>
                                                        <select name="restaurant_bar_dress_code[{{ $restaurant_count }}]">
                                                            <option value="">@lang('hotel/edit.restaurant_bar_dress_code')</option>
                                                            <option value="Resort Casual" @if( isset($old_restaurant_bar_dress_code[$restaurant_count]) && $old_restaurant_bar_dress_code[$restaurant_count] == 'Resort Casual') selected @endif>Resort Casual</option>
                                                        </select>
                                                    </div>
                                                </div>

                                                <div class="col-sm-6 col-md-3">
                                                    <div class="field">
                                                        <label>@lang('hotel/edit.restaurant_bar_access')</label>
                                                        <select name="restaurant_bar_access[{{ $restaurant_count }}]">
                                                            <option value="">@lang('hotel/edit.restaurant_bar_access')</option>
                                                            <option value="Open for everyone" @if( isset($old_restaurant_bar_access[$restaurant_count]) && $old_restaurant_bar_access[$restaurant_count] == 'Open for everyone') selected @endif>Open for everyone</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-sm-12 mbpx-10 show_restaurant_bar_image{{$restaurant_count}}">
                                                    @if( isset($old_restaurant_bar_image[$restaurant_count]['file_name']) )
                                                        <figure class="up-img">
                                                            <img class="thumbnail" src="{{ asset('uploads/hotels/'.$hotel->id.'/'.$old_restaurant_bar_image[$restaurant_count]['file_name']) }}" />
                                                            <span class="delete-ico del-img-old" data-type="restaurant_bar" data-filename="{{ $old_restaurant_bar_image[$restaurant_count]['file_name'] }}" data-id="{{ $old_restaurant_bar_image[$restaurant_count]['id'] }}">
                                                                <i class="fa fa-trash"></i>
                                                            </span>
                                                            <input type="hidden" name="restaurant_bar_existing_image[{{$restaurant_count}}]" value="{{ $old_restaurant_bar_image[$restaurant_count]['file_name'] }}" />
                                                        </figure>
                                                    @endif
                                                </div>
                                                <div class="col-sm-12">
                                                    <div class="addFileStyle photo">
                                                        <input type="file" name="restaurant_bar_image[{{$restaurant_count}}]" class="restaurant_bar_image" data-restaurant-bar-no="{{$restaurant_count}}" />
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- Repeating Restaurants & Bars -->
                                            <?php if($total_restaurant_bar > 1 ){  for($i=1;$i<$total_restaurant_bar;$i++){ $restaurant_count++; ?>
                                            <div class="clone-item clearfix mtpx-27">
                                                @if($languages->count())
                                                    @foreach($languages as $language)
                                                        <?php $iso = $language->{'iso_639-1'}; ?>
                                                        <div class="row">
                                                            <div class="col-sm-12">
                                                                <div class="field wico altr-b lang-{{ $iso }}">
                                                                    <label>@lang('hotel/edit.restaurant_bar_name')</label>
                                                                    <input type="text" name="restaurant_bar_name-{{ $language->id }}[{{ $restaurant_count }}]" placeholder="@lang('hotel/edit.restaurant_bar_name') {{ $language->name }}" value="{{ isset( $restaurant_bar_names[$language->id][$restaurant_count] ) ? $restaurant_bar_names[$language->id][$restaurant_count] : '' }}" />
                                                                    <span class="delete-ico remove-add-hotel">
                                                                        <i class="fa fa-trash"></i>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    @endforeach
                                                @endif

                                                @if($languages->count())
                                                    @foreach($languages as $language)
                                                        <?php $iso = $language->{'iso_639-1'}; ?>
                                                        <div class="row">
                                                            <div class="col-sm-12">
                                                                <div class="field lang-{{ $iso }}">
                                                                    <label>@lang('hotel/edit.restaurant_bar_more_information')</label>
                                                                    <textarea cols="2" rows="2" class="mbpx-15" name="restaurant_bar_more_information-{{ $language->id }}[{{ $restaurant_count }}]" placeholder="@lang('hotel/edit.restaurant_bar_more_information') {{ $language->name }}">{{ isset( $restaurant_bar_more_information[$language->id][$restaurant_count] ) ? $restaurant_bar_more_information[$language->id][$restaurant_count] : '' }}</textarea>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    @endforeach
                                                @endif



                                                <div class="row">
                                                    <div class="col-sm-6 col-md-3">
                                                        <div class="field">
                                                            <label>@lang('hotel/edit.restaurant_bar_cuisine')</label>
                                                            <input type="text" name="restaurant_bar_cuisine[{{ $restaurant_count }}]" value="{{ isset($old_restaurant_bar_cuisine[$restaurant_count]) ? $old_restaurant_bar_cuisine[$restaurant_count] : '' }}" />
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6 col-md-3">
                                                        <div class="field">
                                                            <label>@lang('hotel/edit.restaurant_bar_opening_time')</label>
                                                            <select name="restaurant_bar_opening_time[{{ $restaurant_count }}]">
                                                                <option value="">@lang('hotel/edit.restaurant_bar_opening_time')</option>
                                                                <option value="Breakfast to Late night" @if( isset($old_restaurant_bar_opening_time[$restaurant_count]) && $old_restaurant_bar_opening_time[$restaurant_count] == 'Breakfast to Late night') selected @endif>Breakfast to Late night</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6 col-md-3">
                                                        <div class="field">
                                                            <label>@lang('hotel/edit.restaurant_bar_dress_code')</label>
                                                            <select name="restaurant_bar_dress_code[{{ $restaurant_count }}]">
                                                                <option value="">@lang('hotel/edit.restaurant_bar_dress_code')</option>
                                                                <option value="Resort Casual" @if( isset($old_restaurant_bar_dress_code[$restaurant_count]) && $old_restaurant_bar_dress_code[$restaurant_count] == 'Resort Casual') selected @endif>Resort Casual</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6 col-md-3">
                                                        <div class="field">
                                                            <label>@lang('hotel/edit.restaurant_bar_access')</label>
                                                            <select name="restaurant_bar_access[{{ $restaurant_count }}]">
                                                                <option value="">@lang('hotel/edit.restaurant_bar_access')</option>
                                                                <option value="Open for everyone" @if( isset($old_restaurant_bar_access[$restaurant_count]) && $old_restaurant_bar_access[$restaurant_count] == 'Open for everyone') selected @endif>Open for everyone</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-sm-12 mbpx-10 show_restaurant_bar_image{{$restaurant_count}}">
                                                        @if( isset($old_restaurant_bar_image[$restaurant_count]['file_name']) )
                                                            <figure class="up-img">
                                                                <img class="thumbnail" src="{{ asset('uploads/hotels/'.$hotel->id.'/'.$old_restaurant_bar_image[$restaurant_count]['file_name']) }}" />
                                                                <span class="delete-ico del-img-old" data-type="restaurant_bar" data-filename="{{ $old_restaurant_bar_image[$restaurant_count]['file_name'] }}" data-id="{{ $old_restaurant_bar_image[$restaurant_count]['id'] }}">
                                                                    <i class="fa fa-trash"></i>
                                                                </span>
                                                                <input type="hidden" name="restaurant_bar_existing_image[{{$restaurant_count}}]" value="{{ $old_restaurant_bar_image[$restaurant_count]['file_name'] }}" />
                                                            </figure>
                                                        @endif
                                                    </div>
                                                    <div class="col-sm-12">
                                                        <div class="addFileStyle photo">
                                                            <input type="file" name="restaurant_bar_image[{{$restaurant_count}}]" class="restaurant_bar_image" data-restaurant-bar-no="{{$restaurant_count}}" />
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        <?php } } ?>
                                        <!-- Repeating Restaurants & Bars -->

                                        </div>

                                        <div class="row">
                                            <div class="col-sm-12">
                                                <a href="javascript:;" class="add-more-hotel-2-old add-mre">@lang('hotel/edit.restaurant_bar_add')</a>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-12">
                                                <hr>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-12">
                                                <h4>@lang('hotel/edit.nearby_place')</h4>
                                            </div>
                                        </div>

                                        <div class="to-clone-hotel-3-old">

                                            <?php $nearby_place_count = 0; ?>

                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <div class="field wico altr-c">
                                                        <i class="fa fa-map-marker"></i>
                                                        <input type="text" class="nearby_autocomplete" name="nearby_place[{{ $nearby_place_count }}]" data-index="{{ $nearby_place_count }}" value="{{ isset($old_nearby_place[$nearby_place_count]) ? $old_nearby_place[$nearby_place_count] : '' }}" />
                                                        <input class="nearby_latitude{{ $nearby_place_count }}" type="hidden" name="nearby_latitude[{{ $nearby_place_count }}]" value="{{ isset($old_nearby_latitude[$nearby_place_count]) ? $old_nearby_latitude[$nearby_place_count] : '' }}" />
                                                        <input class="nearby_longitude{{ $nearby_place_count }}" type="hidden" name="nearby_longitude[{{ $nearby_place_count }}]" value="{{ isset($old_nearby_longitude[$nearby_place_count]) ? $old_nearby_longitude[$nearby_place_count] : '' }}" />
                                                        <span class="delete-ico remove-add-hotel">
														<i class="fa fa-trash"></i>
													</span>
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- Repeating Nearby Places -->
                                            <?php if($total_nearby_place > 1 ){  for($i=1;$i<$total_nearby_place;$i++){ $nearby_place_count++; ?>
                                            <div class="clone-item clearfix mtpx-27">
                                                <div class="row">
                                                    <div class="col-sm-12">
                                                        <div class="field wico altr-c">
                                                            <i class="fa fa-map-marker"></i>
                                                            <input type="text" class="nearby_autocomplete" data-index="{{ $nearby_place_count }}" name="nearby_place[{{ $nearby_place_count }}]" value="{{ isset($old_nearby_place[$nearby_place_count]) ? $old_nearby_place[$nearby_place_count] : '' }}" />
                                                            <input class="nearby_latitude{{ $nearby_place_count }}" type="hidden" name="nearby_latitude[{{ $nearby_place_count }}]" value="{{ isset($old_nearby_latitude[$nearby_place_count]) ? $old_nearby_latitude[$nearby_place_count] : '' }}" />
                                                            <input class="nearby_longitude{{ $nearby_place_count }}" type="hidden" name="nearby_longitude[{{ $nearby_place_count }}]" value="{{ isset($old_nearby_longitude[$nearby_place_count]) ? $old_nearby_longitude[$nearby_place_count] : '' }}" />
                                                            <span class="delete-ico remove-add-hotel">
                                                                <i class="fa fa-trash"></i>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        <?php } } ?>
                                        <!-- Repeating Nearby Places -->

                                        </div>

                                        <div class="row">
                                            <div class="col-sm-12">
                                                <a href="javascript:;" class="add-more-hotel-3-old add-mre">@lang('hotel/edit.nearby_place_add')</a>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-sm-12">
                                                <div class="field chkfield">
                                                    <label>
                                                        <input type="checkbox" name="terms_conditions" value="1" @if( old('terms_conditions',$hotel->terms_conditions) == 1 ) checked @endif />
                                                        {!! trans('hotel/add.i_accept',['link'=>'javascript:;']) !!}
                                                    </label>
                                                </div>
                                            </div>
                                        </div>


                                    </div>


                                    <div class="col-xl-4 rht-sd">
                                        <h4>@lang('hotel/edit.hotel_uploads')</h4>

                                        <div class="row">
                                            <div class="col-sm-12">

                                                <div id="dropzone_gallery" class="dropzone"></div>

                                                {{--<div class="upload-bx">
                                                    <div class="addFileStyle photo">
                                                        <input type="file" id="hotel-cover" name="hotel_gallery[]" multiple />
                                                    </div>
                                                </div>--}}
                                            </div>
                                            <div id="hotel-cover-rslt" class="col-sm-12 mbpx-30 ">
                                                <?php $hotel_gallery_count = 0; ?>
                                                @if(!empty($old_hotel_gallery))
                                                    @foreach($old_hotel_gallery as $hotel_gallery)
                                                        <figure class="show-img-multi">
                                                            <img class="thumbnail" src="{{ asset('uploads/hotels/' . $hotel->id . '/' . $hotel_gallery) }}" />
                                                            <input type="hidden" name="hotel_gallery[{{ $hotel_gallery_count }}]" value="{{ $hotel_gallery }}">
                                                            <span class="delete-ico del-img-multi"><i class="fa fa-trash"></i></span>
                                                            <h6 data-index="0" @if($old_primary_image == $hotel_gallery) style="display:none;" @endif><i class="fa fa-picture-o" aria-hidden="true"></i>Make It Cover</h6>
                                                            <div class="makecover">
                                                                @if($old_primary_image == $hotel_gallery)
                                                                    <input type="hidden" name="primary_image" value="{{ $old_primary_image }}" />
                                                                @endif
                                                            </div>
                                                        </figure>
                                                        <?php $hotel_gallery_count++; ?>
                                                    @endforeach
                                                @endif
                                            </div>
                                        </div>

                                        <h4>@lang('hotel/edit.add_tags')</h4>


                                        <div class="show-amm mbpx-20">

                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <div class="field mbpx-15">
                                                        <select class="add-hotel-slct-disable showtg">
                                                            <option value="">@lang('hotel/edit.add_tags_placeholder')</option>
                                                            @if($tags->count())
                                                                @foreach($tags as $tag)
                                                                    <option data-name="tags[]" value="{{ $tag->tag_id }}" data-text="{{ $tag->name }}">{{ $tag->name }}</option>
                                                                @endforeach
                                                            @endif
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="dt">
                                                <div class="row">
                                                    <div class="col-sm-12 showdt">
                                                        @foreach($old_tags as $old_tag)
                                                            @if($tags->count())
                                                                @foreach($tags as $tag)
                                                                    @if($old_tag == $tag->tag_id)
                                                                        <div class='amenty-bx tg amm-{{ $tag->tag_id }}' style='display:block;'>
                                                                            <span>{{ $tag->name }}</span>
                                                                            <i class='fa fa-times'></i>
                                                                            <input type='hidden' name='tags[]' value='{{ $tag->tag_id }}'>
                                                                        </div>
                                                                    @endif
                                                                @endforeach
                                                            @endif
                                                        @endforeach
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <h4>@lang('hotel/add.add_user')</h4>

                                        <div class="show-amm">

                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <div class="field mbpx-15">
                                                        <select class="add-hotel-slct-disable" name="user">
                                                            <option value="">@lang('hotel/add.add_user_placeholder')</option>
                                                            @if($hotel_users->count())
                                                                @foreach($hotel_users as $user)
                                                                    <option value="{{ $user->id }}" @if( old('user',$hotel->created_by) == $user->id ) selected="" @endif >{{ $user->first_name }} {{ $user->last_name }}</option>
                                                                @endforeach
                                                            @endif
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="dt">
                                                <div class="row">
                                                    <div class="col-sm-12 showdt">

                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <h4>@lang('hotel/add.is_featured')</h4>

                                        <div class="show-amm">

                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <div class="field mbpx-15">
                                                        <select class="add-hotel-slct-disable" name="is_featured">
                                                            <option value="0" @if( old('is_featured',$hotel->is_featured) == 0 ) selected @endif>@lang('hotel/add.is_featured_options.no')</option>
                                                            <option value="1" @if( old('is_featured',$hotel->is_featured) == 1 ) selected @endif>@lang('hotel/add.is_featured_options.yes')</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="dt">
                                                <div class="row">
                                                    <div class="col-sm-12 showdt">

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-sm-12">
                                        <button class="primary-btn dblue extended" type="submit">@lang('hotel/edit.submit')</button>
                                    </div>
                                </div>

                                {!! Form::close() !!}

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('footer_script')
    <script src="{{ asset('dropzone/dropzone.js') }}"></script>

    <script type="text/javascript">

        //hotel gallery
        Dropzone.autoDiscover = false;

        var hotel_gallery = {{ ($total_hotel_gallery == 0) ? 1 : $total_hotel_gallery }};

        $("div#dropzone_gallery").dropzone({
            url: "{{ route('hotel-gallery',['id'=>$hotel->id,'type'=>'gallery']) }}",
            maxFilesize: 100,
            acceptedFiles: 'image/*',
            autoDiscover:false,
            dictDefaultMessage: "@lang('hotel/add.hotel_uploads')",
            init: function(){
                this.on("thumbnail", function (file) {
                    if (file.height < 390 && file.width < 764)
                    {
                        file.rejectDimensions();
                    }
                    else
                    {
                        file.acceptDimensions();
                    }
                });

                this.on("complete", function(file) {
                    //console.log(file);
                    this.removeAllFiles(true);
                });

                this.on("sending", function(file,xhr,data) {
                    data.append('_token', '{{ csrf_token() }}');
                });

                this.on("success", function(file, responseText) {
                    var resp = JSON.parse(responseText);

                    var hotelimg = '';
                    hotelimg += '<figure class="show-img-multi">';
                    hotelimg += '<img class="thumbnail" src="'+resp.file_path+'" />';
                    hotelimg += '<input type="hidden" name="hotel_gallery['+hotel_gallery+']" value="'+ resp.file_name +'" />';
                    hotelimg += '<span class="delete-ico del-img-multi">';
                    hotelimg += '<i class="fa fa-trash"></i>';
                    hotelimg += '</span>';
                    hotelimg += '<h6 data-index="'+hotel_gallery+'">';
                    hotelimg += '<i class="fa fa-picture-o" aria-hidden="true"></i>';
                    hotelimg += 'Make It Cover';
                    hotelimg += '</h6>';
                    hotelimg += '<div class="makecover"></div>';
                    hotelimg += '</figure>';

                    $('#hotel-cover-rslt').append(hotelimg);

                    hotel_gallery++;
                });
            },
            accept: function(file, done) {
                file.acceptDimensions = done;
                file.rejectDimensions = function() {
                    alert("Minimum allowed width: 764px and height: 390px.");
                    done("Minimum allowed width: 764px and height: 390px.");
                };
            }/*,
            complete: function(file,resp)
            {
                console.log(resp);
            }*/
        });

        $(document).on('click','.show-img-multi h6',function(){
            $('.makecover').html('');
            $('.show-img-multi h6').show();
            var galimg = $(this).parent('.show-img-multi').find('input').val();
            $(this).parent('.show-img-multi').find('.makecover').html('<input type="hidden" name="primary_image" value="'+galimg+'" />');
            $(this).hide();
            //.find('.showdt')
        });

        //deleting gallery image
        $('body').on('click', '.del-img-multi', function() {
            var img_name = $(this).parent('.show-img-multi').find('input[type="hidden"]').val();

            const formData = new FormData();
            // Pass the image file name as the third parameter if necessary.
            formData.append('_token', '{{ csrf_token() }}');
            formData.append('file_name', img_name);

            $.ajax({
                url: '{{ route('delete-hotel-gallery',['id' => $hotel->id, 'type' => 'gallery']) }}',
                type: 'post',
                data: formData,//$('.image_upload_form'),//$('.image_upload_form').serialize(),
                //dataType: "json",
                contentType: false,
                processData: false,
                success: function(response){
                    console.log(response);
                },
            });

            $(this).closest('.show-img-multi').remove();

        }); // delete gallery image
        //hotel gallery ends


        //floor plans
        //deleting floor plans
        $('body').on('click', '.download-old span', function() {
            var removefile = $(this).parent().children('input').val();


            const formData = new FormData();
            // Pass the image file name as the third parameter if necessary.
            formData.append('_token', '{{ csrf_token() }}');
            formData.append('file_name', removefile);

            $.ajax({
                url: '{{ route('delete-hotel-gallery',['id' => $hotel->id, 'type' => 'floor_plans']) }}',
                type: 'post',
                data: formData,//$('.image_upload_form'),//$('.image_upload_form').serialize(),
                //dataType: "json",
                contentType: false,
                processData: false,
                success: function(response){
                    console.log(response);
                },
            });
            $(this).closest('.download-old').remove();
        });//deleting floor plans

        var floor_plans_counter = {{ ($total_floor_plans == 0) ? 1 : $total_floor_plans }};

        $("div#dropzone_floor_plans").dropzone({
            url: "{{ route('hotel-gallery',['id'=>$hotel->id,'type'=>'floor_plans']) }}",
            maxFilesize: 100,
            //acceptedFiles: 'image/*',
            autoDiscover:false,
            dictDefaultMessage: "@lang('hotel/add.upload_floor_plans')",
            init: function(){
                /*this.on("thumbnail", function (file) {
                    if (file.height < 390 && file.width < 764)
                    {
                        file.rejectDimensions();
                    }
                    else
                    {
                        file.acceptDimensions();
                    }
                });*/

                this.on("complete", function(file) {
                    //console.log(file);
                    this.removeAllFiles(true);
                });

                this.on("sending", function(file,xhr,data) {
                    data.append('_token', '{{ csrf_token() }}');
                    data.append('floor_plans', '1');
                });

                this.on("success", function(file, responseText) {
                    var resp = JSON.parse(responseText);

                    var floor_plans_html = '';
                    floor_plans_html += '<a class="download-old">';
                    floor_plans_html += '<img src="{{ asset('images/icon-file-download.png') }}" />';
                    floor_plans_html += resp.file_name;
                    floor_plans_html += '<input type="hidden"  name="floor_plans['+floor_plans_counter+']" value="'+resp.file_name+'" style="opacity: 0;">';
                    floor_plans_html += '<span><i class="fa fa-trash"></i></span>';
                    floor_plans_html += '</a>';

                    $('#show-plans').append(floor_plans_html);

                    floor_plans_counter++;
                });
            }/*,
            accept: function(file, done) {
                file.acceptDimensions = done;
                file.rejectDimensions = function() {
                    alert("Minimum allowed width: 764px and height: 390px.");
                    done("Minimum allowed width: 764px and height: 390px.");
                };
            }*/
        });

        //floor plans end

        //deleting catering image
        $('body').on('click', '.up-img .del-img-old', function() {

            var removefile    = $(this).attr('data-filename');
            var file_type   = $(this).attr('data-type');

            var request_url = '';

            if(file_type != 'catering')
            {
                var file_id     = $(this).attr('data-id');
                request_url = '{{ route('delete-hotel-gallery') }}/' + file_id + '/' + file_type;
            }
            else
            {
                request_url = '{{ route('delete-hotel-gallery') }}/{{ $hotel->id }}/' + file_type;
            }

            const formData = new FormData();
            // Pass the image file name as the third parameter if necessary.
            formData.append('_token', '{{ csrf_token() }}');
            formData.append('file_name', removefile);

            $.ajax({
                url: request_url,//'{{ route('delete-hotel-gallery',['id' => $hotel->id, 'type' => 'catering']) }}',
                type: 'post',
                data: formData,//$('.image_upload_form'),//$('.image_upload_form').serialize(),
                //dataType: "json",
                contentType: false,
                processData: false,
                success: function(response){
                    console.log(response);
                },
            });

            $(this).closest('.up-img').remove();
        });//deleting catering image

        var room_count          = {{ ($total_rooms == 0) ? 1 : $total_rooms }};
        var guest_room_count    = {{ ($total_guest_rooms == 0) ? 1 : $total_guest_rooms }};
        var restaurant_count    = {{ ($total_restaurant_bar == 0) ? 1 : $total_restaurant_bar }};
        var places_count        = {{ ($total_nearby_place == 0) ? 1 : $total_nearby_place }};

        function roomshtml()
        {
            var rooms_html  = '';

            @if($languages->count())
                @foreach($languages as $language)
            <?php $iso = $language->{'iso_639-1'}; ?>
                rooms_html += '<div class="row">';
            rooms_html += '<div class="col-sm-12">';
            rooms_html += '<div class="field wico altr-b lang-{{ $iso }}">';
            rooms_html += '<label>@lang("hotel/add.room_name")</label>';
            rooms_html += '<input type="text" name="room_name-{{ $language->id }}['+room_count+']" placeholder="@lang("hotel/add.room_name") {{ $language->name }}" />';
            rooms_html += '<span class="delete-ico remove-add-hotel">';
            rooms_html += '<i class="fa fa-trash"></i>';
            rooms_html += '</span>';
            rooms_html += '</div>';
            rooms_html += '</div>';
            rooms_html += '</div>';
            @endforeach
                @endif

                rooms_html += '<div class="row">';
            rooms_html += '<div class="col-sm-6 col-md-3">';
            rooms_html += '<div class="field">';
            rooms_html += '<label>@lang("hotel/add.room_area")</label>';
            rooms_html += '<input type="text" name="room_area['+room_count+']" />';
            rooms_html += '</div>';
            rooms_html += '</div>';

            rooms_html += '<div class="col-sm-6 col-md-3">';
            rooms_html += '<div class="field">';
            rooms_html += '<label>@lang("hotel/add.room_height")</label>';
            rooms_html += '<input type="text" name="room_height['+room_count+']" />';
            rooms_html += '</div>';
            rooms_html += '</div>';

            rooms_html += '<div class="col-sm-6 col-md-3">';
            rooms_html += '<div class="field">';
            rooms_html += '<label>@lang("hotel/add.room_size")</label>';
            rooms_html += '<input type="text" name="room_size['+room_count+']" />';
            rooms_html += '</div>';
            rooms_html += '</div>';

            rooms_html += '<div class="col-sm-6 col-md-3">';
            rooms_html += '<div class="field">';
            rooms_html += '<label>@lang("hotel/add.room_cocktail")</label>';
            rooms_html += '<input type="text" name="room_cocktail['+room_count+']" />';
            rooms_html += '</div>';
            rooms_html += '</div>';
            rooms_html += '</div>';

            rooms_html += '<div class="row">';

            rooms_html += '<div class="col-sm-6 col-md-3">';
            rooms_html += '<div class="field">';
            rooms_html += '<label>@lang("hotel/add.room_theatre")</label>';
            rooms_html += '<input type="text" name="room_theatre['+room_count+']" />';
            rooms_html += '</div>';
            rooms_html += '</div>';

            rooms_html += '<div class="col-sm-6 col-md-3">';
            rooms_html += '<div class="field">';
            rooms_html += '<label>@lang("hotel/add.room_school")</label>';
            rooms_html += '<input type="text" name="room_school['+room_count+']" />';
            rooms_html += '</div>';
            rooms_html += '</div>';

            rooms_html += '<div class="col-sm-6 col-md-3">';
            rooms_html += '<div class="field">';
            rooms_html += '<label>@lang("hotel/add.room_banquet")</label>';
            rooms_html += '<input type="text" name="room_banquet['+room_count+']" />';
            rooms_html += '</div>';
            rooms_html += '</div>';

            rooms_html += '<div class="col-sm-6 col-md-3">';
            rooms_html += '<div class="field">';
            rooms_html += '<label>@lang("hotel/add.room_imperial")</label>';
            rooms_html += '<input type="text" name="room_imperial['+room_count+']" />';
            rooms_html += '</div>';
            rooms_html += '</div>';
            rooms_html += '</div>';

            rooms_html += '<div class="row">';
            rooms_html += '<div class="col-sm-6 col-md-3">';
            rooms_html += '<div class="field">';
            rooms_html += '<label>@lang("hotel/add.room_ushape")</label>';
            rooms_html += '<input type="text" name="room_ushape['+room_count+']" />';
            rooms_html += '</div>';
            rooms_html += '</div>';
            rooms_html += '</div>';

            $('.to-clone-hotel-old').append('<div class="clone-item clearfix mtpx-27">'+rooms_html+'</div>');

            room_count++;
        }

        function guestroomshtml()
        {
            var rooms_dt  = '';

            /* Room Detail*/
            rooms_dt += '<div class="row">';

            @if($languages->count())
                @foreach($languages as $language)
            <?php $iso = $language->{'iso_639-1'}; ?>
                rooms_dt += '<div class="col-sm-6 col-md-12">';
            rooms_dt += '<div class="field wico altr-b lang-{{ $iso }}">';
            rooms_dt += '<label>@lang('hotel/edit.guest_room_room_name')</label>';
            rooms_dt += '<input type="text" name="guest_room_room_name-{{ $language->id }}['+guest_room_count+']" placeholder="@lang('hotel/edit.guest_room_room_name') {{ $language->name }}" />';
            rooms_dt += '<span class="delete-ico remove-add-hotel">';
            rooms_dt += '<i class="fa fa-trash"></i>';
            rooms_dt += '</span>';
            rooms_dt += '</div>';
            rooms_dt += '</div>';
            @endforeach
                @endif

                rooms_dt += '<div class="col-sm-6 col-md-12">';
            rooms_dt += '<div class="field">';
            rooms_dt += '<label>@lang('hotel/edit.guest_room_room_quantity')</label>';
            rooms_dt += '<input type="text" name="guest_room_room_quantity['+guest_room_count+']" />';
            rooms_dt += '</div>';
            rooms_dt += '</div>';

            rooms_dt += '</div>';

            rooms_dt += '<div class="row">';
            rooms_dt += '<div class="col-sm-12">';
            rooms_dt += '<div class="dt">';
            rooms_dt += '<div class="row dtimg">';
            //select html goes here
            rooms_dt += '</div>';
            rooms_dt += '</div>';
            rooms_dt += '</div>';
            rooms_dt += '</div>';

            rooms_dt += '<div class="row">';
            rooms_dt += '<div class="col-sm-12">';
            rooms_dt += '<div class="field wico">';
            rooms_dt += '<select class="add-hotel-slct-disable showdtimg">';
            rooms_dt += '<option value="">@lang('hotel/edit.guest_room_room_facility')</option>';
            @if($room_facilities->count())
                @foreach($room_facilities as $room_facility)
                rooms_dt += '<option data-name="guest_room_room_facility['+guest_room_count+'][]" data-text="{{ $room_facility->name }}" value="{{ $room_facility->room_facility_id }}" data-icon="{{ asset('images/'.$room_facility->icon) }}">{{ $room_facility->name }}</option>';
            @endforeach
                @endif
                rooms_dt += '</select>';
            rooms_dt += '</div>';
            rooms_dt += '</div>';
            rooms_dt += '</div>';

            rooms_dt += '<div class="row">';
            rooms_dt += '<div class="col-sm-12 mbpx-10 show_room_room_image'+guest_room_count+'">';
            rooms_dt += '</div>';
            rooms_dt += '<div class="col-sm-12">';
            rooms_dt += '<div class="addFileStyle photo">';
            rooms_dt += '<div class="upldwrap">';
            rooms_dt += '<input type="file" name="guest_room_room_image['+guest_room_count+']" class="guest_room_room_image" data-room-no="'+guest_room_count+'" style="opacity: 0;" />';
            rooms_dt += '<input type="text" />';
            rooms_dt += '<input type="button" value="Browse" class="grey_btn" />';
            rooms_dt += '</div>';
            rooms_dt += '</div>';
            rooms_dt += '</div>';
            rooms_dt += '</div>';


            $('.to-clone-hotel-1-old').append('<div class="clone-item clearfix mtpx-27 show-amm">'+rooms_dt+'</div>');

            guest_room_count++;
        }

        function restauranthtml()
        {
            /*Restaurant & Bar*/

            resturant_bar = '';

            @if($languages->count())
                @foreach($languages as $language)
            <?php $iso = $language->{'iso_639-1'}; ?>
                resturant_bar+='<div class="row">';
            resturant_bar+='<div class="col-sm-12">';
            resturant_bar+='<div class="field wico altr-b lang-{{ $iso }}">';
            resturant_bar+='<label>@lang('hotel/edit.restaurant_bar_name')</label>';
            resturant_bar+='<input type="text" name="restaurant_bar_name-{{ $language->id }}['+restaurant_count+']" placeholder="@lang('hotel/edit.restaurant_bar_name') {{ $language->name }}" />';
            resturant_bar+='<span class="delete-ico remove-add-hotel">';
            resturant_bar+='<i class="fa fa-trash"></i>';
            resturant_bar+='</span>';
            resturant_bar+='</div>';
            resturant_bar+='</div>';
            resturant_bar+='</div>';
            @endforeach
                @endif

                @if($languages->count())
                @foreach($languages as $language)
            <?php $iso = $language->{'iso_639-1'}; ?>
                resturant_bar+='<div class="row">';
            resturant_bar+='<div class="col-sm-12">';
            resturant_bar+='<div class="field lang-{{ $iso }}">';
            resturant_bar+='<label>@lang('hotel/edit.restaurant_bar_more_information')</label>';
            resturant_bar+='<textarea cols="2" rows="2" class="mbpx-15" name="restaurant_bar_more_information-{{ $language->id }}['+restaurant_count+']" placeholder="@lang('hotel/edit.restaurant_bar_more_information') {{ $language->name }}"></textarea>';
            resturant_bar+='</div>';
            resturant_bar+='</div>';
            resturant_bar+='</div>';
            @endforeach
                @endif

                resturant_bar+='<div class="row">';
            resturant_bar+='<div class="col-sm-6 col-md-3">';
            resturant_bar+='<div class="field">';
            resturant_bar+='<label>@lang('hotel/edit.restaurant_bar_cuisine')</label>';
            resturant_bar+='<input type="text" name="restaurant_bar_cuisine['+restaurant_count+']" />';
            resturant_bar+='</div>';
            resturant_bar+='</div>';

            resturant_bar+='<div class="col-sm-6 col-md-3">';
            resturant_bar+='<div class="field">';
            resturant_bar+='<label>@lang('hotel/edit.restaurant_bar_opening_time')</label>';
            resturant_bar+='<select name="restaurant_bar_opening_time['+restaurant_count+']">';
            resturant_bar+='<option value="">@lang('hotel/edit.restaurant_bar_opening_time')</option>';
            resturant_bar+='<option value="Breakfast to Late night">Breakfast to Late night</option>';
            resturant_bar+='</select>';
            resturant_bar+='</div>';
            resturant_bar+='</div>';

            resturant_bar+='<div class="col-sm-6 col-md-3">';
            resturant_bar+='<div class="field">';
            resturant_bar+='<label>@lang('hotel/edit.restaurant_bar_dress_code')</label>';
            resturant_bar+='<select name="restaurant_bar_dress_code['+restaurant_count+']">';
            resturant_bar+='<option value="">@lang('hotel/edit.restaurant_bar_dress_code')</option>';
            resturant_bar+='<option value="Resort Casual">Resort Casual</option>';
            resturant_bar+='</select>';
            resturant_bar+='</div>';
            resturant_bar+='</div>';

            resturant_bar+='<div class="col-sm-6 col-md-3">';
            resturant_bar+='<div class="field">';
            resturant_bar+='<label>@lang('hotel/edit.restaurant_bar_access')</label>';
            resturant_bar+='<select name="restaurant_bar_access['+restaurant_count+']">';
            resturant_bar+='<option value="">@lang('hotel/edit.restaurant_bar_access')</option>';
            resturant_bar+='<option value="Open for everyone">Open for everyone</option>';
            resturant_bar+='</select>';
            resturant_bar+='</div>';
            resturant_bar+='</div>';

            resturant_bar+='</div>';

            resturant_bar+='<div class="row">';
            resturant_bar+='<div class="col-sm-12 mbpx-10 show_restaurant_bar_image'+restaurant_count+'"></div>';
            resturant_bar+='<div class="col-sm-12">';
            resturant_bar+='<div class="addFileStyle photo">';
            resturant_bar+='<div class="upldwrap">';
            resturant_bar+='<input type="file" name="restaurant_bar_image['+restaurant_count+']" class="restaurant_bar_image" data-restaurant-bar-no="'+restaurant_count+'" style="opacity: 0;" />';
            resturant_bar+='<input type="text"> <input type="button" value="Browse" class="grey_btn" />';
            resturant_bar+='</div>';
            resturant_bar+='</div>';
            resturant_bar+='</div>';
            resturant_bar+='</div>';


            $('.to-clone-hotel-2-old').append('<div class="clone-item clearfix mtpx-27">'+resturant_bar+'</div>');

            restaurant_count++;
        }

        function placeshtml()
        {
            /*Nearby Places*/
            nearby = '';

            nearby+='<div class="row">';
            nearby+='<div class="col-sm-12">';
            nearby+='<div class="field wico altr-c">';
            nearby+='<i class="fa fa-map-marker"></i>';
            nearby+='<input type="text" class="nearby_autocomplete" data-index="'+places_count+'" name="nearby_place['+places_count+']" />';
            nearby+='<input type="hidden" class="nearby_latitude'+places_count+'" name="nearby_latitude['+places_count+']" />';
            nearby+='<input type="hidden" class="nearby_longitude'+places_count+'" name="nearby_longitude['+places_count+']" />';
            nearby+='<span class="delete-ico remove-add-hotel">';
            nearby+='<i class="fa fa-trash"></i>';
            nearby+='</span>';
            nearby+='</div>';
            nearby+='</div>';
            nearby+='</div>';

            /*Nearby Places*/

            $('.to-clone-hotel-3-old').append('<div class="clone-item clearfix mtpx-27">'+nearby+'</div>');

            places_count++;
        }

        function readURL(input,selector) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function(e) {

                    var img_html = '';
                    img_html += '<figure class="up-img">';
                    img_html += '<img class="thumbnail" src="'+e.target.result+'" />';
                    img_html += '<span class="delete-ico del-img-old">';
                    img_html += '<i class="fa fa-trash"></i>';
                    img_html += '</span>';
                    img_html += '</figure>';

                    $(selector).html(img_html);
                }

                reader.readAsDataURL(input.files[0]); // convert to base64 string
            }
        }

        //for guest room image
        $(document).on('change',".guest_room_room_image",function(){
            var selector = '.show_room_room_image' + $(this).attr('data-room-no');
            readURL(this,selector);
        });

        //for restaurant and bar image
        $(document).on('change',".restaurant_bar_image",function(){
            var selector = '.show_restaurant_bar_image' + $(this).attr('data-restaurant-bar-no');
            readURL(this,selector);
        });

        $(document).ready(function(){

            $('.add-more-hotel-old').click(function(){
                roomshtml();
            });

            $('.add-more-hotel-1-old').click(function(){
                guestroomshtml();
            });

            $('.add-more-hotel-2-old').click(function(){
                restauranthtml();
            });

            $('.add-more-hotel-3-old').click(function(){
                placeshtml();
                nearbyautocompleteDefault();
            });



            $(document).on("click",".remove-add-hotel",function() {
                $(this).parents('.clone-item').remove();
            });

            $(document).on("change",".showtg",function(e) {

                var slctval = $(this).val();
                var slctvaltext = $(this).find(':selected').data('text');
                var slctvalnm = $(this).find(':selected').data('name');

                if($(this).parents('.show-amm').find('.showdt .amm-'+slctval).length == 0) {
                    $(this).parents('.show-amm').find('.showdt').append("<div class='amenty-bx tg amm-"+slctval+"' style='display:block;'><span>" + slctvaltext + "</span><i class='fa fa-times'></i><input type='hidden' name='" + slctvalnm + "' value='" + slctval + "'></div>");
                }
            });

            $(document).on("change",".showdtimg",function() {
                var slctval = $(this).val();
                var slctvaltext = $(this).find(':selected').data('text');
                var slctvalimg = $(this).find(':selected').data('icon');
                var slctvalnm = $(this).find(':selected').data('name');
                if($(this).parents('.show-amm').find('.dtimg .amm-'+slctval).length == 0){
                    $(this).parents('.show-amm').find('.dtimg').append("<div class='amenty-bx amm-"+slctval+"' style='display:block;'><div class='cont'><figure><img src='"+slctvalimg+"'></figure><span>"+slctvaltext+"</span><i class='fa fa-times'></i></div><input type='hidden' name='"+slctvalnm+"' value='"+slctval+"'></div>");
                }
            });

            $(document).on('click','.download-old span',function(){
                var dataid = $(this).closest('.download-old').attr('data-id');
                $(this).closest('.download-old').remove();
                $('.remove_plans').append('<input type="hidden" name="remove_plans[]" value="'+dataid+'" />');
            });

            $(document).on('click','.del-img-multi-old',function(){
                var dataid = $(this).attr('data-id');
                $(this).closest('.show-img-multi').remove();
                $('.remove_cover').append('<input type="hidden" name="remove_gallery[]" value="'+dataid+'" />');
            });
        });


        window.onload = function(){

            //Check File API support
            /*if(window.File && window.FileList && window.FileReader)
            {
                var filesInput = document.getElementById("hotel-cover");

                filesInput.addEventListener("change", function(event){

                    var files = event.target.files; //FileList object
                    var output = document.getElementById("hotel-cover-rslt");
                    output.innerHTML = '';

                    for(var i = 0; i< files.length; i++)
                    {
                        var file = files[i];

                        //Only pics
                        if(!file.type.match('image'))
                            continue;

                        var picReader = new FileReader();

                            picReader.addEventListener("load",function(event){

                            var picFile = event.target;

                            var div = document.createElement("figure");

                            div.className = "show-img-multi";

                            div.innerHTML = "<img class='thumbnail' src='" + picFile.result + "'" + "title='" + picFile.name + "'/><span class='delete-ico del-img-multi'><i class='fa fa-trash'></i></span><h6><i class='fa fa-picture-o' aria-hidden='true'></i> Make It Cover</h6>";

                            output.insertBefore(div,null);

                        });

                        //Read the image
                        picReader.readAsDataURL(file);
                    }

                });
            }
            else
            {
                console.log("Your browser does not support File API");
            }*/


            if(window.File && window.FileList && window.FileReader)
            {
                var filesInput = document.getElementById("catering-srv");

                filesInput.addEventListener("change", function(event){

                    var files = event.target.files; //FileList object
                    var output = document.getElementById("show-cat-srv");
                    output.innerHTML = '';

                    for(var i = 0; i< files.length; i++)
                    {
                        var file = files[i];

                        //Only pics
                        if(!file.type.match('image'))
                            continue;

                        var picReader = new FileReader();

                        picReader.addEventListener("load",function(event){

                            var picFile = event.target;

                            var div = document.createElement("figure");

                            div.className = "up-img";

                            div.innerHTML = "<img class='thumbnail' src='" + picFile.result + "'" +
                                "title='" + picFile.name + "'/><span class='delete-ico del-img'><i class='fa fa-trash'></i></span>";

                            output.insertBefore(div,null);

                        });

                        //Read the image
                        picReader.readAsDataURL(file);
                    }

                });
            }
            else
            {
                console.log("Your browser does not support File API");
            }

            /*if(window.File && window.FileList && window.FileReader)
            {
                var filesInput = document.getElementById("add-floor");

                filesInput.addEventListener("change", function(event){

                    var files = event.target.files; //FileList object
                    var output = document.getElementById("show-plans");
                    output.innerHTML = '';

                    for(var i = 0; i< files.length; i++)
                    {
                        var file = files[i];
                        if (file) {
                            var name = file.name;
                        }

                        var picReader = new FileReader();

                        picReader.addEventListener("load",function(event){

                            var picFile = name;

                            var div = document.createElement("a");

                            div.className = "download";

                            div.innerHTML = "<img src='{{ asset('images/icon-file-download.png') }}'>" + picFile + "<span><i class='fa fa-trash'></i></span>";

                            output.insertBefore(div,null);

                        });

                        //Read the image
                        picReader.readAsDataURL(file);
                    }

                });
            }
            else
            {
                console.log("Your browser does not support File API");
            }
            */
        };

        let placeSearch;
        let autocomplete;
        const componentForm = {
            //street_number: "short_name",
            //route: "long_name",
            locality: "long_name",
            administrative_area_level_1: "short_name",
            //country: "long_name",
            postal_code: "short_name"
        };

        function initAutocomplete()
        {
            autocomplete = new google.maps.places.Autocomplete(
                document.getElementById("hotel_address"),
                {
                    types: ["geocode","establishment"]
                }
            );

            //autocomplete.setFields(["address_component"]); // When the user selects an address from the drop-down, populate the
            // address fields in the form.

            autocomplete.addListener("place_changed", fillInAddress);
        }

        function fillInAddress() {
            // Get the place details from the autocomplete object.
            const place = autocomplete.getPlace();

            for (const component in componentForm) {
                document.getElementById(component).value = "";
                document.getElementById(component).disabled = false;
            } // Get each component of the address from the place details,
            // and then fill-in the corresponding field on the form.

            for (const component of place.address_components) {
                const addressType = component.types[0];

                if (componentForm[addressType]) {
                    const val = component[componentForm[addressType]];
                    document.getElementById(addressType).value = val;
                }
            }

            var lat = place.geometry.location.lat();
            var lng = place.geometry.location.lng();

            if(lat != undefined)
                document.getElementById("latitude").value = lat;

            if(lng != undefined)
                document.getElementById("longitude").value = lng;
        } // Bias the autocomplete object to the user's geographical location,

        //Auto complete for nearby locations
        function nearbyautocompleteDefault()
        {
            var cindex = 0;

            $('.to-clone-hotel-3-old .nearby_autocomplete').each(function(){
                var ccls = $(this).attr('data-index');
                var autocomp = new google.maps.places.Autocomplete(
                    document.getElementsByClassName("nearby_autocomplete")[cindex],
                    {
                        types: ["geocode","establishment"]
                    }
                );

                autocomp.latitude_class = 'nearby_latitude'+ccls;
                autocomp.longitude_class = 'nearby_longitude'+ccls;

                google.maps.event.addListener(autocomp,"place_changed", function(){
                    var plc = autocomp.getPlace();

                    var lat = plc.geometry.location.lat();
                    var lng = plc.geometry.location.lng();

                    $('.'+this.latitude_class).val(lat);
                    $('.'+this.longitude_class).val(lng);
                });

                cindex++;
            });
        }

        $(document).ready(function(){
            nearbyautocompleteDefault();
        });
        //Auto complete for nearby locations ends


    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key={{ env('GOOGLE_MAP_API_KEY') }}&callback=initAutocomplete&libraries=places&v=weekly" defer ></script>
@endsection
