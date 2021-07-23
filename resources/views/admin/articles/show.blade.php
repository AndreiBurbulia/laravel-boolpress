@extends('layouts.admin')

@section('content')

    <div class="container">

        <div class="article_show pt-3">
            <img src="{{ asset('storage/' . $article->image) }}" alt="">
            <h1>{{ $article->title }}</h1>
            <p>{{ $article->content }}</p>
            <p>Writer : {{ $article->author }}</p>
            <p>Created on : {{ $article->create_date }}</p>

        </div>

        <div class="actions py-2">
            <a class="btn btn-success mr-3" href="{{ route('admin.article.edit', $article->id) }}">Edit</a>
            <form class="d-inline" action="{{ route('admin.article.destroy', $article->id) }}" method="post">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Delete</button>
            </form>
        </div>
    </div>


@endsection
