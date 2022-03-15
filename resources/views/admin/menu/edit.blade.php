@extends('admin.layouts.app');




@section('content')

    <form class="form-horizontal" action="{{route('admin.menu.update')}}" method="post">
        {{ csrf_field() }}

        @include('admin.menu.form')

    </form>>


@endsection

