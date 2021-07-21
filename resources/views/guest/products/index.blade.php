@extends('layouts.app')

@section('content')

    <div class="row">
        @foreach ($products as $product)
            <div class="col-md-4">
                <div class="card text-left">
                    <img class="card-img-top" src="{{ $product->image }}" alt="">
                    <div class="card-body">
                        <h4 class="card-title">{{ $product->name }}</h4>
                        <p class="card-text">{{ $product->description }}</p>
                    </div>
                </div>

            </div>
        @endforeach
    </div>

@endsection
