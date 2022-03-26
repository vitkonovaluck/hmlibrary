@extends('admin.layouts.app');



@section('content')

    <script src="{{asset('js/menu_dinamic.js')}}"></script>


    <form class="form-horizontal" action="{{route('admin.menu.store')}}" method="post">
        {{ csrf_field() }}

        @include('admin.menu.form')

    </form>>


@endsection


