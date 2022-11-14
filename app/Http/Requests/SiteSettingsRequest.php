<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SiteSettingsRequest extends FormRequest
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
        $regex = '/^(https?:\/\/)?([\da-z\.-]+)\.([a-z\.]{2,6})([\/\w \.-]*)*\/?$/';

        $validate_rules = array(
            'site_email'            => 'required|email',
            'contact_from_email'            => 'required|email',
            'contact_to_email'            => 'required|email',
            // 'site_title'            => 'required|between:3,32',
            'socialmedia_status'    => 'required',
            'logo_image'            => 'required',
            'logo_image_inner_pages'            => 'required',
        );

        if($this->facebook)
            $validate_rules['facebook'] = 'url';

        if($this->twitter)
            $validate_rules['twitter'] = 'url';

        if($this->linkedin)
            $validate_rules['linkedin'] = 'url';

        if($this->youtube)
            $validate_rules['youtube'] = 'url';

        if($this->instagram)
            $validate_rules['instagram'] = 'url';

        if($this->googleplus)
            $validate_rules['googleplus'] = 'url';

        if($this->pinterest)
            $validate_rules['pinterest'] = 'url';

        return $validate_rules;
    }
}
