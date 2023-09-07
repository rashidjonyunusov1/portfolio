<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AboutStoreRequest extends FormRequest
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
    public function messages()
    {
        return [
            'img.required' => 'Rasm to`ldirilishi shart',
            'img.mimes' => 'Rasm png, jpg bo`lishi shart',
            'img.max' => 'Rasm xajmi 10mb dan oshmasligi shart',
            'description1.min' => 'Ta`rif1 eng kamida 30 ta belgi bo`lishi shart',
            'description1.required' => 'Ta`rif1 to`ldirilishi shart',
            'description1.max' => 'Ta`rif1 1000000000000000000 ta belgidan oshmasligi  shart',
            'title.required' => 'Sarlavha to`ldirilishi shart',
            'brithday.required' => 'Tug`ulgan kun to`ldirilishi shart',
            'website.required' => 'Website to`ldirilishi shart',
            'phone.required' => 'Telefon raqam to`ldirilishi shart',
            'city.required' => 'Shaxar to`ldirilishi shart',
            'age.required' => 'Yosh to`ldirilishi shart',
            'dagree.required' => 'Daraja to`ldirilishi shart',
            'email.required' => 'Email to`ldirilishi shart',
            'freelance.required' => 'Masofaviy ish to`ldirilishi shart',
            'description2.required' => 'Ta`rif2 to`ldirilishi shart',

        ];
    }



}
