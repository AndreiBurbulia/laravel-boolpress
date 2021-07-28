@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="card">
            <h1>Categories admin</h1>


            <a href="{{ route('admin.tags.create') }}" class="btn btn-success my-2">Add New Tag</a>

            <table class="table table-striped table-inverse">
                <thead class="thead-inverse">
                    <tr>
                        <th>NAME</th>
                        <th>SLUG</th>
                        <th>ACTION</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($tags as $tag)

                        <tr>
                            <td>{{ $tag->name }}</td>
                            <td>{{ $tag->slug }}</td>
                            <td>
                                <form action="{{ route('admin.tags.destroy', $tag->id) }}" method="post" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">DELETE <i
                                            class="fas fa-times"></i></button>
                                </form>
                                <a class="btn btn-success" href="{{ route('admin.tags.edit', $tag->id) }}">EDIT
                                    <i class="fas fa-edit"></i></a>
                            </td>
                        </tr>
                    @endforeach

                </tbody>
            </table>


        </div>
    </div>
@endsection
