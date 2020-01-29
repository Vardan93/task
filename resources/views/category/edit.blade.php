@extends('layouts.app')


@section('content')
    <div class="container">
        <div class="row">

            <div class="col-lg-12 mt-5">
                <a href="{{ route('category.index') }}" class="btn btn-danger">Show list </a>
                <hr>
            </div>

            <div class="col-lg-12 margin-tb">

                <div class=" custom-title">
                    <p class="h2">Update</p>
                </div>



                <form class="custom-form pb-5" action="{{ route('category.update',$category->id) }}" method="POST" >
                    @csrf
                    @method('PUT')

                    <div class="row col-4">
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <div class="col-sm-12 col-md-12">
                            <div class="form-group">
                                <label>Category Name:</label>
                                <input type="text" name="name" value="{{ $category->name }}" class="form-control" >
                            </div>
                        </div>

                        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                            <button type="submit" class="btn btn-success">Update</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>

    </div>
@stop

