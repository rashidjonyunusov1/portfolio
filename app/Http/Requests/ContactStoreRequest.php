<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactStoreRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            //Uzbek
            'description_uz' => 'required | min:30 | max:10000000000000',
            'location_uz' => 'required ',
            'email' => 'required',
            'call' => 'required',
            'location_url' => 'required',
            //Russian
            'description_ru' => 'required | min:30 | max:10000000000000',
            'location_ru' => 'required ',
            'email' => 'required',
            'call' => 'required',
            'location_url' => 'required',
            //English
            'description_en' => 'required | min:30 | max:10000000000000',
            'location_en' => 'required ',
            'email' => 'required',
            'call' => 'required',
            'location_url' => 'required',
        ];
    }
}
