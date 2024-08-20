@extends('layouts.app')

@section('title', 'Show Article')

@section('content')

    <p>{{ $article->id }}</p>
    <p>{{ $article->content }}</p>
    <p>{{ date('d-m-Y', strtotime($article->created_at)) }}</p>

@endsection