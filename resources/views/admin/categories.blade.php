@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="card">
            <h1>Categories</h1>

            @foreach ($categories as $category)
                <p>{{ $category->name }}</p>
            @endforeach


        </div>
    </div>
@endsection
