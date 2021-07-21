@extends('layouts.admin')

@section('content')
    <div class="container">
        <a class="btn btn-success m-3" href="{{ route('admin.article.create') }}">Add new Article</a>

        <table class="table">
            <thead>
                <tr>
                    <th>Image</th>
                    <th>ID</th>
                    <th>Title</th>
                    <th>Author</th>
                    <th>Crated on</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($articles as $article)
                    <tr>
                        <td><img height="70" src="{{ $article->image }}" alt=""></td>
                        <td>{{ $article->id }}</td>
                        <td>{{ $article->title }}</td>
                        <td>{{ $article->author }}</td>
                        <td>{{ $article->create_date }}</td>
                        <td>
                            <a href="{{ route('admin.article.show', $article->id) }}"><i class="fas fa-eye"></i></a>
                            <a href="{{ route('admin.article.edit', $article->id) }}"><i class="fas fa-edit"></i></a>

                            <form action="{{ route('admin.article.destroy', $article->id) }}" method="post">
                                @csrf
                                @method('DELETE')
                                <button type="submit"><i class="fas fa-times"></i></button>
                            </form>

                        </td>
                    </tr>
                @endforeach

            </tbody>
        </table>
    </div>
@endsection
