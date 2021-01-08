<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserCompanyRequest extends FormRequest
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
            'company' => 'required|max:25',
        ];
    }

    public function messages()
    {
        return  [
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
