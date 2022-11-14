<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Models\Languages;

class FaqRequest extends FormRequest
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
        // $languages = Languages::where('status','Active')->get();
        $language_id = getlanguage()->id;
            $validate_rules = array();
            $validate_rules['title-'.$language_id] = 'required';
            return $validate_rules;

    }
}
