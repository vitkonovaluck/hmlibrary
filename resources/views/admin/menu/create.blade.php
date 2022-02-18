@extends('admin.layout')

@section('content')

    <div class="container">

        @component('admin.components.breadcrumbs')
            @slot('title')Створення меню @endslot
            @slot('parent') Головна @endslot
            @slot('active') Меню @endslot
        @endcomponent

        <hr />

        <form class="form-horizontal" action="{{route('admin.menu.store')}}" method="post">
            {{ csrf_field() }}

            {{-- Form include --}}
            @include('admin.menu.partials.form')

        </form>
    </div>

@endsection
