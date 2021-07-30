@extends('layouts.app')


@section('content')
    <div class="container">

        <h1>Hi Vue Laravel</h1>

        <div class="card_container d-flex flex-wrap">
            <div class="card " v-for="article in articles">

                <img class="card-img-top img-vue" :src="'storage/' + article.image" alt="">
                <div class="card-body">
                    <h4 class="card-title">@{{ article['title'] }}</h4>
                </div>

            </div>

        </div>


    </div>
@endsection
