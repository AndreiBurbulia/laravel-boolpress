@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="article_show">
            <img src="{{ asset('storage/' . $article->image) }}" alt="">
            <h1>{{ $article->title }}</h1>
            <p>{{ $article->content }}</p>
            <p>Writer : {{ $article->author }}</p>
            <p>Created on : {{ $article->create_date }}</p>

        </div>
    </div>


@endsection
