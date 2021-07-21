@extends('layouts.admin')

@section('content')

    <div class="container">
        <div class="actions">
            <a href="{{ route('admin.article.edit', $article->id) }}">Edit</a>
            <a href="{{ route('admin.article.create') }}">Add new Article</a>
            <form action="{{ route('admin.article.destroy', $article->id) }}" method="post">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Delete</button>
            </form>


        </div>
        <div class="article_show">
            <img src="{{ $article->image }}" alt="">
            <h1>{{ $article->title }}</h1>
            <p>{{ $article->content }}</p>
            <p>Writer : {{ $article->author }}</p>
            <p>Created on : {{ $article->create_date }}</p>

        </div>
    </div>


@endsection
