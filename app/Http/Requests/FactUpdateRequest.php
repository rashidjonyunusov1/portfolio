<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FactUpdateRequest extends FormRequest
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
            'title_uz' => 'required',
            'happy_clients_num' => 'required',
            'happy_clients_uz' => 'required',
            'projects_num' => 'required',
            'projects_uz' => 'required',
            'hours_of_support_num' => 'required',
            'hours_of_support_uz' => 'required',
            'hard_workers_num' => 'required',
            'hard_workers_uz' => 'required',
            // Russian
            'title_ru' => 'required',
            'happy_clients_num' => 'required',
            'happy_clients_ru' => 'required',
            'projects_num' => 'required',
            'projects_ru' => 'required',
            'hours_of_support_num' => 'required',
            'hours_of_support_ru' => 'required',
            'hard_workers_num' => 'required',
            'hard_workers_ru' => 'required',
            // English
            'title_en' => 'required',
            'happy_clients_num' => 'required',
            'happy_clients_en' => 'required',
            'projects_num' => 'required',
            'projects_en' => 'required',
            'hours_of_support_num' => 'required',
            'hours_of_support_en' => 'required',
            'hard_workers_num' => 'required',
            'hard_workers_en' => 'required',
        ];
    }
}
