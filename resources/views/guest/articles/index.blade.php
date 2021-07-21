@extends('layouts.app')


@section('content')
    <div class="container">
        <div class="article_list">
            <h1>List of Articles</h1>

            @foreach ($articles as $article)
                <a href="{{ route('article.show', $article->id) }}">
                    <div class="article">
                        <img src="{{ $article->image }}" alt="">
                        <div class="right_content">
                            <h2>{{ $article->title }}</h2>
                            <span>Writer: {{ $article->author }}</span>
                            <span>Created on: {{ $article->create_date }}</span>

                        </div>

                    </div>
                </a>
            @endforeach

        </div>

    </div>



@endsection
