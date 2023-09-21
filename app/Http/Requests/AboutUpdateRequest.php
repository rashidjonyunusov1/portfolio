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
             // Uzbek
             'img.required' => 'Rasm to`ldirilishi shart',
             'img.mimes' => 'Rasm png, jpg bo`lishi shart',
             'img.max' => 'Rasm xajmi 10mb dan oshmasligi shart',
             'description1_uz.min' => 'Ta`rif1 eng kamida 30 ta belgi bo`lishi shart',
             'description1_uz.required' => 'Ta`rif1 to`ldirilishi shart',
             'description1_uz.max' => 'Ta`rif1 1000000000000000000 ta belgidan oshmasligi  shart',
             'title_uz.required' => 'Sarlavha to`ldirilishi shart',
             'brithday_uz.required' => 'Tug`ulgan kun to`ldirilishi shart',
             'website.required' => 'Website to`ldirilishi shart',
             'phone.required' => 'Telefon raqam to`ldirilishi shart',
             'city_uz.required' => 'Shaxar to`ldirilishi shart',
             'age.required' => 'Yosh to`ldirilishi shart',
             'dagree_uz.required' => 'Daraja to`ldirilishi shart',
             'email.required' => 'Email to`ldirilishi shart',
             'freelance_uz.required' => 'Masofaviy ish to`ldirilishi shart',
             'description2_uz.required' => 'Ta`rif2 to`ldirilishi shart',
             // Russian
             'img.required' => 'Rasm to`ldirilishi shart',
             'img.mimes' => 'Rasm png, jpg bo`lishi shart',
             'img.max' => 'Rasm xajmi 10mb dan oshmasligi shart',
             'description1_ru.min' => 'Ta`rif1 eng kamida 30 ta belgi bo`lishi shart',
             'description1_ru.required' => 'Ta`rif1 to`ldirilishi shart',
             'description1_ru.max' => 'Ta`rif1 1000000000000000000 ta belgidan oshmasligi  shart',
             'title_ru.required' => 'Sarlavha to`ldirilishi shart',
             'brithday_ru.required' => 'Tug`ulgan kun to`ldirilishi shart',
             'website.required' => 'Website to`ldirilishi shart',
             'phone.required' => 'Telefon raqam to`ldirilishi shart',
             'city_ru.required' => 'Shaxar to`ldirilishi shart',
             'age.required' => 'Yosh to`ldirilishi shart',
             'dagree_ru.required' => 'Daraja to`ldirilishi shart',
             'email.required' => 'Email to`ldirilishi shart',
             'freelance_ru.required' => 'Masofaviy ish to`ldirilishi shart',
             'description2_ru.required' => 'Ta`rif2 to`ldirilishi shart',
             // English
             'img.required' => 'Rasm to`ldirilishi shart',
             'img.mimes' => 'Rasm png, jpg bo`lishi shart',
             'img.max' => 'Rasm xajmi 10mb dan oshmasligi shart',
             'description1_en.min' => 'Ta`rif1 eng kamida 30 ta belgi bo`lishi shart',
             'description1_en.required' => 'Ta`rif1 to`ldirilishi shart',
             'description1_en.max' => 'Ta`rif1 1000000000000000000 ta belgidan oshmasligi  shart',
             'title_en.required' => 'Sarlavha to`ldirilishi shart',
             'brithday_en.required' => 'Tug`ulgan kun to`ldirilishi shart',
             'website.required' => 'Website to`ldirilishi shart',
             'phone.required' => 'Telefon raqam to`ldirilishi shart',
             'city_en.required' => 'Shaxar to`ldirilishi shart',
             'age.required' => 'Yosh to`ldirilishi shart',
             'dagree_en.required' => 'Daraja to`ldirilishi shart',
             'email.required' => 'Email to`ldirilishi shart',
             'freelance_en.required' => 'Masofaviy ish to`ldirilishi shart',
             'description2_en.required' => 'Ta`rif2 to`ldirilishi shart',
        ];
    }
}
