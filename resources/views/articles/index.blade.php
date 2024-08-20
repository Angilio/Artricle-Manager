@extends('layouts.app')

@section('title', 'Index Article')

@section('content')
    @if ( session()->has('success') )
        <div class="alert alert-success">{{ session()->get('success') }}</div>
    @endif
    <table class="table">
        <thead>
            <tr>
                <td class="h2 text-danger">ID</td>
                <td class="h2 text-danger">Content</td>
                <td class="h2 text-danger">Action</td>
            </tr>
        </thead>
        <tbody>
            @foreach($articles as $article)
                <tr>
                    <td>{{$article->id}}</td>
                    <td>{{$article->content}}</td>
                    @if (Auth::user()->id === $article->user_id)
                        <td>
                            <a class="btn btn-info" href="{{ route('show1', $article->id) }}">Voir</a>
                        </td>
                        <td>
                            <a class="btn btn-success" href="{{ route('edit1', $article->id) }}">Modifier</a>
                        </td>
                        <td>
                            <form action="{{ route('destroy1', $article->id)}}" method="post">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger" type="submit">Supprimer</button>
                            </form>
                        </td>
                    @endif
                </tr>
            @endforeach
        </tbody>
    </table>
    <div>
        {{ $articles->links() }}
    </div>
@endsection