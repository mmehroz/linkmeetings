<?php

namespace App\Http\Requests;
use App\Models\Languages;
use Illuminate\Foundation\Http\FormRequest;
use Sentinel;

class HotelRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        $languages = Languages::where('status','Active')->get();

        if($languages->count())
        {
            //name
            //address
            //city
            //state
            //zip
            //space meeting rooms
            //space meeting space
            //space guest rooms
            //space restaurant bars
            //hotel_gallery
            $fields = array(
                'terms_conditions'          =>  'required',
                'hotel_address'             =>  'required',
                'city'                      =>  'required',
                'state'                     =>  'required',
                'zip'                       =>  'required',
                'space_meeting_room'        =>  'required',
                'space_meeting_space'       =>  'required',
                'space_guest_rooms'         =>  'required',
                'space_restuatrant_bars'    =>  'required',
                'hotel_gallery'             =>  'required',//'|mimetypes:video/avi,video/mpeg,video/quicktime,jpeg,jpg,bmp,png,image/jpeg,image/jpg,image/bmp,image/png|max:1000000',
                'catering_service_image'    =>  'mimetypes:jpeg,jpg,bmp,png,image/jpeg,image/jpg,image/bmp,image/png|max:100000',
                //'guest_room_room_quantity'  =>  'integer',
                //'floor_plans'               =>  'mimetypes:pdf,application/pdf|max:100000',
            );

            $user_role = Sentinel::getUser()->roles()->get()->first()->slug;


            if($user_role == 'admin')
            {
                $fields['user'] = 'required';
            }

            if($this->update_hotel)
                unset($fields['hotel_gallery']);


            foreach($languages as $language)
            {
                $fields['hotel_name-'.$language->id] = 'required|min:3';
                //$fields['room_name-'.$language->id] = 'required|min:3';
                //$fields['catering_service-'.$language->id] = 'required|min:3';

                if($this->{'guest_room_room_name-1[0]'} !== null)
                    $fields['guest_room_room_name-'.$language->id] = 'required|min:3';

                if($this->{'restaurant_bar_name-1[0]'} !== null)
                {
                    $fields['restaurant_bar_name-'.$language->id] = 'required|min:3';
                    $fields['restaurant_bar_more_information-'.$language->id] = 'required|min:3';
                }

                /*
                    total_guest_rooms

                $fields['title-'.$language->id] = 'required|min:3';
                $fields['short_title-'.$language->id] = 'required|min:3';
                //$fields['order-'.$language->id] = 'required|min:3';
                $fields['status-'.$language->id] = 'required|min:3';
                */
            }

            $fields['terms_conditions'] = 'required';

            //echo "<pre>"; print_r( $fields ); exit;

            return $fields;
        }
        else
        {
            return [
                'title'       => 'required|min:3',
                'short_title' => 'required|min:3',
                'order'       => 'required|integer',
                'status'      => 'required|integer',
            ];
        }
    }

    /*public function messages()
    {

        $languages = Languages::where('status','Active')->get();

        if($languages->count())
        {
            $fields = array();
            foreach($languages as $language)
            {
                $fields['title-'.$language->id.'.required'] = $language->name . ' Page Title Fields is required!';
                $fields['short_title-'.$language->id.'.required'] = $language->name . ' Short Title Fields is required!';
                //$fields['order-'.$language->id.'.required'] = $language->name . ' Page Title Fields is required!';
                $fields['status-'.$language->id.'.required'] = $language->name . ' Status Fields is required!';
            }

            return $fields;
        }
    }*/
}
