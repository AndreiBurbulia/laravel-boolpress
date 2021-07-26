@extends('layouts.admin')

@section('content')
    <div class="container">
        <h1>contact section</h1>

        <table class="table table-striped table-inverse">
            <thead class="thead-inverse">
                <tr>
                    <th>ID</th>
                    <th>NAME</th>
                    <th>EMAIL</th>
                    <th>Message</th>
                    <th>Risposto?</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($emails as $email)
                    <tr>
                        <td>{{ $email->id }}</td>
                        <td>{{ $email->name }}</td>
                        <td>{{ $email->email }}</td>
                        <td>{{ $email->message }}</td>
                        <td>
                            <form class="d-inline" action="{{ route('admin.contact.destroy', $email->id) }}"
                                method="post">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>

                @endforeach

            </tbody>
        </table>
    </div>
@endsection
