<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
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
        return [
            'first_name'    => 'required',
            'email_address' => 'required',
            'phone_number' => 'required',

        ];
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
