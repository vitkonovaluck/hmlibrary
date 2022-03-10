@extends('admin.layouts.app');




@section('content')

    <form class="form-horizontal" action="{{route('admin.news.update')}}" method="post">
    {{ csrf_field() }}

        @include('admin.news.form')

    </form>>


@endsection
