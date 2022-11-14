<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Models\Languages;

class PackageRequest extends FormRequest
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
            // dd($languages);
            $validate_rules = array();
            foreach($languages as $language)
            {
                //$validate_rules['price-'.$language->id]       = 'required';
                $validate_rules['title-'.$language->id]         = 'required';
                $validate_rules['short_title-'.$language->id]   = 'required';
                $validate_rules['details-'.$language->id]       = 'required';
            }

            $validate_rules['price']                    = 'required|numeric';
            $validate_rules['week_deal_posting']        = 'required|numeric';
            $validate_rules['email_blast']              = 'required|numeric';
            $validate_rules['promo_article']            = 'required|numeric';
            $validate_rules['landing_page_posting']     = 'required|numeric';
            $validate_rules['status']                   = 'required';
            $validate_rules['type']                     = 'required';

            return $validate_rules;
        }


    }

}
