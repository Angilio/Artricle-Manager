<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class articleRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'content'=> 'required|min:3',
        ];
    }
    public function message()
    {
        return [
            'content.required'=> 'Le champ Pseudo est requis',
            'content.min'=> 'Le champ Pseudo est doit excéder de 3 caractères',
        ];
    }
}
