<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserEditRequest extends FormRequest
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
        $validate_rules = [
            'username'            =>    'required|unique:users,username,'.$this->user_id,
            'email'               =>    'required|unique:users,email,'.$this->user_id,
            'quantity'            =>    'required',
            'company_name'        =>    'required',
            'commercial_name'     =>    'required',
            'main_contact_person' =>    'required',
        ];

        if(isset($this->password)) {
            $validate_rules['password'] = 'required|between:3,32';
            $validate_rules['confirm_password'] = 'required|min:8|same:password';            
        }

        return $validate_rules;
    }

    /**
     * Set the error message against validation rules.
     *
     * @return array
     */
    public function message()
    {
        return [
          //'email.required' => 'Email Address is Required.'
        ];
    }

    /**
     * Get custom attributes for validator errors.
     *
     * @return array
     */
    public function attributes()
    {
        return [
            //'email' => 'email address',
        ];
    }
}
