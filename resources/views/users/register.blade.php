@extends('layouts.app')

@section('title', 'Create Account')

@section('content')

    <div class="card">
        <div class="card-body">
            <h4> New User</h4>
            <form method="post" class="form" action="{{ route('registration') }}" autocomplete="off">
                @csrf
                @method('post')
                <div class="form-group">
                    <label for="Pseudo">Pseudo :</label>
                    <input type="text" class="form-control" name="Pseudo" value="{{ old('Pseudo') }}" />
                </div>
                @error('Pseudo')
                    <div class="text text-danger">
                        {{ $message }}
                    </div>
                @enderror
                <div class="form-group">
                    <label for="email">Mail :</label>
                    <input type="email" class="form-control" name="email" value="{{ old('email') }}" />
                </div>
                @error('email')
                    <div class="text text-danger">
                        {{ $message }}
                    </div>
                @enderror
                <div class="form-group">
                    <label for="password">Password :</label>
                    <input type="password" class="form-control" name="password"/>
                </div>
                @error('password')
                    <div class="text text-danger">
                        {{ $message }}
                    </div>
                @enderror
                <button type="submit" class="btn btn-primary mt-2">Inscription</button>
                <div>
                    Déjà un compte ? <a href="{{ route('login') }}">Connectez-vous</a>
                </div>
            </form>
        </div>
    </div>

@endsection