@extends('admin.layouts.app');




@section('content')
    <script src="{{asset('js/menu_dinamic.js')}}"></script>

    <form class="form-horizontal" action="{{route('admin.menu.update',['id'=>$menu->id])}}" method="post"  enctype="multipart/form-data">
        @csrf
        @include('admin.menu.form')
    </form>


@endsection

