@extends('layouts.app')


@section('content')

    <div class="container ">
        <div class="row ">
            <div class="col-lg-12 mt-5">
                <a href="{{ route('category.index') }}" class="btn btn-danger">Show list </a>
                <hr>
            </div>
            <div class="col-lg-12 margin-tb mt-5">
                <div class=" custom-title">
                    <p class="h2">Add</p>
                </div>

                @if ($errors->any())
                    <div class=" col-lg-4 alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif



                <form class="col-4 custom-form pb-5" action="{{ route('category.store') }}" method="post" >

                    @csrf


                    <div class="form-group">
                        <label for="name">Category Name</label>
                        <input type="text" class="form-control @error('name') is-invalid @enderror" id="name"  placeholder="Enter name" name="name">
                    </div>


                    <button type="submit" class="btn btn-success">ADD</button>
                </form>

            </div>




        </div>


    </div>
@stop
