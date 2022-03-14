@extends('admin.layouts.app');




@section('content')

    <form class="form-horizontal" action="{{route('admin.news.store')}}" method="post">
        {{ csrf_field() }}

        @include('admin.news.form')

    </form>>


@endsection
