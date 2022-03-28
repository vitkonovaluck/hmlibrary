@extends('admin.layouts.app')

@section('content')

    <form class="form-horizontal" action="{{route('admin.static.update',['id'=>$statics->id])}}" method="post">
        {{ csrf_field() }}

        @include('admin.static.form')

    </form>


@endsection
