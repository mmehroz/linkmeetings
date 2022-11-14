<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;
// use App\Models\Languages;

class CustomerRequest extends FormRequest
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
            'firstname'          =>    'required',
            'lastname'           =>    'required',
            'email'              =>    'required|unique:users,email',
            'phonenumber'        =>    'required',
            'cellnumber'         =>    'required',
            'address'            =>    'required',
            'city'               =>    'required',
            'state'              =>    'required', 
            'zip'                =>    'required',
            'companyname'        =>    'required',
            'possition'          =>    'required',
            'companyaddress'     =>    'required',
            'companycity'        =>    'required',
            'companystate'       =>    'required',
            'companyzip'         =>    'required',
            'username'           =>    'required|unique:users,username', 
            'useremail'          =>    'required|unique:users,email',
            'password'     		 =>    'required', 
            'image'              =>    'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        );

    }
}
