<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
// use App\Models\Languages;

class UserCustomerRegRequest extends FormRequest
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
            'first_name'          =>    'required',
            'last_name'           =>    'required',
            'email'               =>    'required|email|unique:users',
            'phone_number'        =>    'required',
            'company_name'        =>    'required',
            'username'            =>    'required|unique:users',
            'password'            =>    'required|between:3,32',
            'confirm_password'    =>    'required|min:8|same:password', 
        );

    }
}
