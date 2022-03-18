@extends('layouts.app');

@section('content')
    @foreach($statics as $static)
    <div class="breadcrumbs">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12 col-md-12 col-12">
                    <div class="breadcrumbs-content">
                        <h1 class="page-title">{{$static->page_name}}</h1>
                    </div>
                </div>

            </div>
        </div>
    </div>

        <news class="item-details news">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        {!!$static->page_text !!}
                    </div>
                </div>
            </div>
        </news>

    @endforeach

@endsection
