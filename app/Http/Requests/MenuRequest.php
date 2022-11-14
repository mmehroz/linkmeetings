<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Models\Languages;

class MenuRequest extends FormRequest
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
                $validate_rules['type-'.$language->id] = 'required';
                $validate_rules['section-'.$language->id] = 'required';
                $validate_rules['status-'.$language->id] = 'required';
                $validate_rules['title-'.$language->id] = 'required';
                // $validate_rules['url-'.$language->id] = 'required';
            }

            return $validate_rules;
        }
        else
        {
           
        }

        // $validate_rules = array(
        //     'title'                 => 'required',
        //     'description'           => 'required',
        //     'status'                => 'required'
        // );

        // return $validate_rules;
    }
      
}
