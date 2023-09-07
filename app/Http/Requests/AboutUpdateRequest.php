<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AboutUpdateRequest extends FormRequest
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
            'img' => 'required|mimes:png,jpg|max:20480',
                'description1' => 'required|min:30|max:1000000000000000000',
                'title' => 'required',
                'brithday' => 'required',
                'website' => 'required',
                'phone' => 'required',
                'city' => 'required',
                'age' => 'required',
                'dagree' => 'required',
                'email' => 'required',
                'freelance' => 'required',
                'description2' => 'required'
        ];
    }
}
