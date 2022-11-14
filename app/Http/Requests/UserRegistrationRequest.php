<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
// use App\Models\Languages;

class UserRegistrationRequest extends FormRequest
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
            'username'            =>    'required|unique:users',
            'email'               =>    'required|email|unique:users',
            'password'            =>    'required|between:3,32',
            'confirm_password'    =>    'required|min:8|same:password', 
            'agree'               =>    'required',
            'quantity'            =>    'required',
            'company_name'        =>    'required',
            'commercial_name'     =>    'required',
            'main_contact_person' =>    'required',
        );

    }
}
