@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>form create new categories</h1>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif



        <form action="{{ route('admin.categories.update', $category->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label for="name">Name Group</label>
                <input type="text" name="name" id="name" class="form-control" placeholder="Insert the name of group"
                    aria-describedby="nameHelp" value="{{ $category->name }}">
                <small id="nameHelp" class="text-muted">Insert the name of new group</small>
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>

    </div>
@endsection
