<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SocialRequest extends FormRequest
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
            'name' => 'required',
            'phone' => 'required',
            'email' => 'required',
            'company' => 'required',
        ];
    }

    public function messages()
    {
        return  [
            'name.required' => __('messages.name-required'),
            'phone.required' => __('messages.phone-required'),
            'email.required' => __('messages.email-required'),
            'company.required' => __('messages.company-required'),
        ];
    }

    public function attributes()
    {
        return [
            'company' => 'Company Name',
        ];
    }
}
