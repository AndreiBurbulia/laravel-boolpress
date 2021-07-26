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



        <form action="{{ route('admin.article.update', $article->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label for="image">Current Image: </label>
                <img src="{{ asset('storage/' . $article->image) }}" alt="">
            </div>
            <div class="form-group">
                <label for="image">Image</label>
                <input type="file" name="image" id="image">
                <small id="helpImage" class="text-muted">Insert the Image</small>
            </div>

            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" name="title" id="title" class="form-control" placeholder="Insert the Title"
                    aria-describedby="helpTitle" value="{{ $article->title }}">
                <small id="helpTitle" class="text-muted">Insert the title of the Article</small>
            </div>

            <div class="form-group">
                <label for="content">Content</label>
                <textarea name="content" id="content" cols="30" rows="10" class="form-control"
                    placeholder="Insert the content of article"
                    aria-describedby="helpContent">{{ $article->content }}</textarea>
                <small id="helpContent" class="text-muted">Insert the content of article</small>
            </div>

            <div class="form-group">
                <label for="create_date">Date of Creation</label>
                <input type="date" name="create_date" id="create_date" class="form-control"
                    placeholder="Insert the date of creation" aria-describedby="helpCreateDate"
                    value="{{ $article->create_date }}">
                <small id="helpCreateDate" class="text-muted">Insert the date of creation</small>
            </div>

            <div class="form-group">
                <label for="author">Author</label>
                <input type="text" name="author" id="author" class="form-control" placeholder="Insert the name of Author"
                    aria-describedby="helpAuthor" value="{{ $article->author }}">
                <small id="helpAuthor" class="text-muted">Insert the name of Author</small>
            </div>

            <div class="form-group">
                <label for="category_id">Category</label>
                <select class="custom-select" name="category_id" id="category_id">

                    @foreach ($categories as $category)
                        <option {{ $category->id == $article->category_id ? 'selected' : '' }}
                            value="{{ $category->id }}">
                            {{ $category->name }}</option>

                    @endforeach
                </select>
            </div>


            <div class="form-group">
                <label for="public">Public?</label>
                <input type="text" name="public" id="public" class="form-control" placeholder="Is public post?"
                    aria-describedby="helpPublic" value="{{ $article->public }}">
                <small id="helpPublic" class="text-muted">Is article public ? (0 or 1 ) or (true or false)</small>
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>

    </div>
@endsection
