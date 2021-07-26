@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="card">
            <h1>Categories admin</h1>


            <a href="{{ route('admin.categories.create') }}" class="btn btn-success my-2">Add New Category</a>

            <table class="table table-striped table-inverse">
                <thead class="thead-inverse">
                    <tr>
                        <th>ID</th>
                        <th>NAME</th>
                        <th>SLUG</th>
                        <th>ACTION</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($categories as $category)

                        <tr>
                            <td>{{ $category->id }}</td>
                            <td>{{ $category->name }}</td>
                            <td>{{ $category->slug }}</td>
                            <td>
                                <form action="{{ route('admin.categories.destroy', $category->id) }}" method="post"
                                    class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">DELETE <i
                                            class="fas fa-times"></i></button>
                                </form>
                                <a class="btn btn-success" href="{{ route('admin.categories.edit', $category->id) }}">EDIT
                                    <i class="fas fa-edit"></i></a>
                            </td>
                        </tr>
                    @endforeach

                </tbody>
            </table>


        </div>
    </div>
@endsection
