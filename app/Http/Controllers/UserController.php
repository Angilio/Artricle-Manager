<?php

namespace App\Http\Controllers;
use App\Http\Requests\createUserRequest;
use App\Http\Requests\UserLoginRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Models\User;


class UserController extends Controller
{
    public function register()
    {
        return view('users.register');
    }
    public function handleRegistration(User $user, createUserRequest $Request)
    {
        $user->name = $Request->Pseudo;
        $user->email = $Request->email;
        $user->password = Hash::make($Request->password);
        $user->save();
        return redirect('/users/login')->with('success', 'Votre compte a été crée avec succes ! Connectez-Vous');  
    }
    public function login()
    {
        return view('users.login');
    }
    public function handleLogin(Request $request){
        $credentials = $request->validate([
            'email'=> ['required','email' ],
            'password'=> ['required'],
        ]);
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect()->intended('/articles/mine');
        } else {
            return redirect()->back()->with('error','Le mail ou le mot de passe n\'est pas correct');
        }
        
    }
    public function logout()
    {
        //Session::flush();
        Auth::logout();
        return redirect('/users/login');
    }
}
