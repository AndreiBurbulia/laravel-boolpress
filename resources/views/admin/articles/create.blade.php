@extends('layouts.admin')

@section('content')
    <div class="container">
        <h1>Add new Article</h1>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif



        <form action="{{ route('admin.article.store') }}" method="POST">
            @csrf

            <div class="form-group">
                <label for="image">Image</label>
                <input type="text" name="image" id="image" class="form-control" placeholder="Add url of image"
                    aria-describedby="helpImage" value="{{ old('image') }}">
                <small id="helpImage" class="text-muted">Insert the URL of th Image</small>
            </div>

            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" name="title" id="title" class="form-control" placeholder="Insert the Title"
                    aria-describedby="helpTitle" value="{{ old('title') }}">
                <small id="helpTitle" class="text-muted">Insert the title of the Article</small>
            </div>

            <div class="form-group">
                <label for="content">Content</label>
                <textarea name="content" id="content" cols="30" rows="10" class="form-control"
                    placeholder="Insert the content of article" aria-describedby="helpContent"
                    value="{{ old('content') }}"></textarea>
                <small id="helpContent" class="text-muted">Insert the content of article</small>
            </div>

            <div class="form-group">
                <label for="create_date">Date of Creation</label>
                <input type="date" name="create_date" id="create_date" class="form-control"
                    placeholder="Insert the date of creation" aria-describedby="helpCreateDate"
                    value="{{ old('create_date') }}">
                <small id="helpCreateDate" class="text-muted">Insert the date of creation</small>
            </div>

            <div class="form-group">
                <label for="author">Author</label>
                <input type="text" name="author" id="author" class="form-control" placeholder="Insert the name of Author"
                    aria-describedby="helpAuthor" value="{{ old('author') }}">
                <small id="helpAuthor" class="text-muted">Insert the name of Author</small>
            </div>

            <div class="form-group">
                <label for="public">Public?</label>
                <input type="text" name="public" id="public" class="form-control" placeholder="Is public post?"
                    aria-describedby="helpPublic">
                <small id="helpPublic" class="text-muted">Is article public ? (0 or 1 ) or (true or false)</small>
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>

    </div>
@endsection
