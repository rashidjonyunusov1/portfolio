<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PortfolioStoreRequest extends FormRequest
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
            'description_uz' => 'required | min:10 | max:1000000000',
            'description_ru' => 'required | min:10 | max:1000000000',
            'description_en' => 'required | min:10 | max:1000000000',
            // 'category' => 'required',
            'img' => 'required|mimes:png,jpg|max:20480',
            'url' => 'required',
        ];
    }
}
