@extends('layouts.app')


@section('content')
    <div class="container m-5">

        <div class="row align-items-center">
            <div class="col-lg-12 mt-5">
                <a href="{{ route('category.index') }}" class="btn btn-danger">Show list </a>
                <hr>
            </div>
            <div class="col-md-2">
                <div class="mo-mb-2">
                    <img src="" alt="" class="img-fluid mx-auto d-block">
                </div>
            </div>
            <div class="col-md-3">
                <div>
                    <h5 class="f-18">{{ $category->name }}</h5>
                    <p class="text-muted mb-0">Web Technology pvt.Ltd</p>
                </div>
            </div>

        </div>

    </div>
@stop

