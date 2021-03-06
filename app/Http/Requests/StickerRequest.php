<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StickerRequest extends FormRequest
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
            'size' => 'required',
            'quantity' => 'required',
        ];
    }

    public function messages()
    {
        return  [
            'quantity.required' => __('messages.quantity-required'),
        ];
    }

    public function attributes()
    {
        return [
        ];
    }
}
