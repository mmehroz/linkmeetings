<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
// use App\Models\Languages;

class AddDMCRequest extends FormRequest
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
        return $validate_rules = array(
            'hotelLogo'         =>    'required',
            'dmc_name-1'        =>    'required',
            'agree'             =>    'required',
            'dmc_location'      =>    'required',
            'city'              =>    'required',
            'state'             =>    'required',
            'zip'               =>    'required',
        );

    }
}
