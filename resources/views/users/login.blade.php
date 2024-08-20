@extends('layouts.app')

@section('title', 'Login')

@section('content')

    <div class="card">
        <div class="card-body">
            @if ( session()->has('error') )
                <div class="alert alert-danger">{{ session()->get('error') }}</div>
            @endif
            @if ( session()->has('success') )
                <div class="alert alert-success">{{ session()->get('success') }}</div>
            @endif
            <h4> Log in</h4>
            <form method="post" class="form" action="{{ route('login') }}" autocomplete="off">
                @csrf
                @method('post')
                <div class="form-group mt-1">
                    <label for="email">Mail :</label>
                    <input type="email" class="form-control" name="email" value="{{ old('email') }}" />
                </div>
                @error('email')
                    <div class="text text-danger">
                        {{ $message }}
                    </div>
                @enderror
                <div class="form-group mt-1">
                    <label for="password">Password :</label>
                    <input type="password" class="form-control" name="password"/>
                </div>
                @error('password')
                    <div class="text text-danger">
                        {{ $message }}
                    </div>
                @enderror
                <button type="submit" class="btn btn-primary mt-2">Connexion</button> 
                <div>
                    Aucun compte ? <a href="{{ route('registration') }}">Inscrivez-vous</a>
                </div>
            </form>
        </div>
    </div>

@endsection