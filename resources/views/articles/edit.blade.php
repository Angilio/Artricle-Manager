@extends('layouts.app')

@section('title', 'Update Article')

@section('content')
    <div class="card">
        <div class="card-body">
            <h4> Edit Article</h4>
            <form method="post" class="form" action="{{ route('update1', $article->id) }}" autocomplete="off">
                @method('PATCH')
                @csrf
                <div class="form-group">
                    <label for="content">Content :</label>
                    <input type="text" class="form-control mt-1"  name="content"/>
                </div>
                <button type="submit" class="btn btn-primary mt-2">Valider</button>
            </form>
        </div>
    </div>
@endsection