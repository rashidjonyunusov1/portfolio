<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SkillUpdateRequest extends FormRequest
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
            'description_uz' => 'required|min:10|max:10000000000',
            'description_ru' => 'required|min:10|max:10000000000',
            'description_en' => 'required|min:10|max:10000000000',
            'skill_name_r' => 'required',
            'skill_percentage_r' => 'required',
            'skill_name_l' => 'required',
            'skill_percentage_l' => 'required',
        ];
    }
}
