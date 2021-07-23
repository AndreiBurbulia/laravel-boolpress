@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="my-3">Cambiare in Contact</h1>

        @if (session('message'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    <span class="sr-only">Close</span>
                </button>
                <strong>{{ session('message') }}</strong>
            </div>

            <script>
                $('.alert').alert()
            </script>
        @endif

        <form action="{{ route('contacts.send') }}" method="post">
            @csrf

            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" name="name" id="name" class="form-control" placeholder="Insert name"
                    aria-describedby="helpName" value="{{ old('name') }}" minlength="5" maxlength="255" required>
                <small id="helpName" class="text-muted">Insert Name</small>
            </div>

            <div class="form-group">
                <label for="email">Email Address</label>
                <input type="email" class="form-control" name="email" id="email" aria-describedby="emailHelpId"
                    placeholder="Insert Email" value="{{ old('email') }}" required>
                <small id="emailHelpId" class="form-text text-muted">Insert the mail</small>
            </div>

            <div class="form-group">
                <label for="message">Message</label>
                <textarea class="form-control" name="message" id="message" rows="3">{{ old('message') }}"</textarea>
            </div>

            <button type="submit" class="btn btn-primary btn-block">Send</button>






        </form>

    </div>



@endsection
