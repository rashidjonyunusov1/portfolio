<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ServiceStoreRequest extends FormRequest
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
            // Uzbek
            'description_uz' => 'required| min:10|max:100000000',
            'services_name_uz' => 'required',
            'services_description_uz' => 'required| min:10|max:100000000000',
              // Russian
            'description_ru' => 'required| min:10|max:100000000',
            'services_name_ru' => 'required',
            'services_description_ru' => 'required| min:10|max:100000000000',
            // English
            'description_en' => 'required| min:10|max:100000000',
            'services_name_en' => 'required',
            'services_description_en' => 'required| min:10|max:100000000000',
        ];
    }
}
