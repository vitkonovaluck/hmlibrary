@extends('admin.layouts.app');



@section('navigator')

@endsection


@section('content')
    <h2 class="h3 mb-4 text-gray-800">Останні новини</h2>

    @include ('admin/news/show')


@endsection

