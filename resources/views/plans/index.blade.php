@extends('layouts.app');

@section('content')
<div class="breadcrumbs">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 col-md-6 col-12">
                <div class="breadcrumbs-content">
                    <h1 class="page-title">План заходів на {{ humanize_period($periods) }}</h1>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-12">
                <ul class="breadcrumb-nav">
                    <li><a href="{{route('index')}}"><i class="lni lni-home"></i> Головна</a></li>
                    <li> План заходів
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>

<table class="table table-borderless">
@include('plans.show_table',['plan'=>$plan])
</table>
@endsection


