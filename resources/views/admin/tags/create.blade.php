@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>form create new Tag</h1>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif



        <form action="{{ route('admin.tags.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="name">Tag Name:</label>
                <input type="text" name="name" id="name" class="form-control" placeholder="Insert the name of tag"
                    aria-describedby="nameHelp">
                <small id="nameHelp" class="text-muted">Insert the name of new Tag</small>
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>

    </div>
@endsection
