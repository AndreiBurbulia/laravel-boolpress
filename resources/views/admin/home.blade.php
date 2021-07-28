@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="card p-3">
            <h1>Articles</h1>
            <p>You have {{ $n_articles }} articles on blog.</p>
            <p>You have {{ $public_articles }} public on blog.</p>
            <p>You have {{ $private_articles }} private on blog.</p>

        </div>

        <div class="card p-3">
            <h1>You have {{ $n_contacts }} mails to responde!</h1>
        </div>
    </div>
@endsection
