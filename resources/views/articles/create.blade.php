@extends('layouts.app')

@section('title', 'Create Article')

@section('content')

    
    <div class="card">
        <div class="card-body">
            @if ( session()->has('success') )
                <div class="alert alert-success">{{ session()->get('success') }}</div>
            @endif
            <h4> New Article</h4>
            <form method="post" class="form" action="{{ route('insert')}}" autocomplete="off">
                @csrf
                @method('post')
                <div class="form-group">
                    <label for="content">Content :</label>
                    <input type="text" class="form-control mt-1" name="content"/>
                </div>
                @error('content')
                    <div class="text text-danger">
                        {{ $message }}
                    </div>
                @enderror
                <button type="submit" class="btn btn-primary mt-2">Ajouter</button>
            </form>
        </div>
    </div>

@endsection