<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserLoginRequest extends FormRequest
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
            'email'=> 'required|email',
            'password'=> 'required|min:8'
        ];
    }
    public function message()
    {
        return [
            'email.required'=> 'Le champ Mail est requis',
            'password.required'=> 'Le champ password est requis',
            'password.min'=> 'Le champ password est doit excéder de 8 caractères'
        ];
    }
}
