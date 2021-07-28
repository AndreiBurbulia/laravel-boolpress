@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="article_show">
            <img src="{{ asset('storage/' . $article->image) }}" alt="">
            <h1>{{ $article->title }}</h1>
            <p>{{ $article->content }}</p>
            <p>Writer : {{ $article->author }}</p>
            <p>Created on : {{ $article->create_date }}</p>
            <p>Category : {{ $article->category->name }}</p>
            <p>Tags:
                @forelse ($article->tags as $tag)
                    <span> {{ $tag->name }} |</span>

                @empty
                    <span> No Tag</span>
                @endforelse
            </p>

        </div>
    </div>


@endsection
