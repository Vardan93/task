@extends('layouts.app')


@section('content')
    <div class="container mt-5">
        <div class="row">
            <table class="table table-dark table-list">
                <thead class="thead-dark">
                <tr>
                    <th scope="col">#id</th>
                    <th scope="col">Name</th>
                    <th scope="col">Created_at</th>
                    <th scope="col">Updated_at</th>
                    <th scope="col">CRUD</th>
                </tr>
                </thead>
                <tbody>
                    @foreach($items as $item)
                        <tr>
                            <td>{{ $item->id }}</td>
                            <td>{{ $item->name }}</td>
                            <td>{{ $item->created_at }}</td>
                            <td>{{ $item->updated_at }}</td>
                            <td>
                                <form action="{{ route('category.destroy',$item->id) }}" method="POST">

                                    <a class="btn btn-info btn-sm" href="{{ route('category.show',$item->id) }}">Show</a>
                                    <a class="btn btn-warning btn-sm" href="{{ route('category.edit',$item->id) }}">Edit</a>


                                    @csrf
                                    @method('DELETE')

                                    <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        <hr>
        <a href="{{ route('category.create') }}" class="btn btn-success">Create</a>
    </div>


@stop
