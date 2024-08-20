<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class createUserRequest extends FormRequest
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
            'Pseudo'=> 'required|min:3',
            'email'=> 'required|email|unique:users',
            'password'=> 'required|min:8'
        ];
    }
    public function message()
    {
        return [
            'Pseudo.required'=> 'Le champ Pseudo est requis',
            'Pseudo.min'=> 'Le champ Pseudo est doit excéder de 3 caractères',
            'email.required'=> 'Le champ Mail est requis',
            'email.unique'=> 'Le Mail est unique pour un utilisateur',
            'password.required'=> 'Le champ password est requis',
            'password.min'=> 'Le champ password est doit excéder de 8 caractères'
        ];
    }
}
