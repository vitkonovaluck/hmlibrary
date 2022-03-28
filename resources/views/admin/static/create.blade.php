@extends('admin.layouts.app')

@section('content')

    <form class="form-horizontal" action="{{route('admin.static.store')}}" method="post">
        {{ csrf_field() }}

        @include('admin.static.form')

    </form>


@endsection
