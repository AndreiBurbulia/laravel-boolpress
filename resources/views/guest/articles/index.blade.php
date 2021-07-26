@extends('layouts.app')


@section('content')
    <div class="container">
        <div class="article_list">
            <h1>Articles</h1>

            @foreach ($articles as $article)
                <a href="{{ route('article.show', $article->id) }}" class="{{ $article->public ? '' : 'd-none' }}">
                    <div class="article">
                        <img src="{{ asset('storage/' . $article->image) }}" alt="">
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
