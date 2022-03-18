@extends('layouts.app');

@section('content')
    @foreach($news as $new)
        <div class="breadcrumbs">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-9 col-md-9 col-12">
                        <div class="breadcrumbs-content">
                            <h1 class="page-title">{{$new->news_title}}</h1>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-12">
                        <ul class="breadcrumb-nav">
                            <li><a href="{{route('index')}}"><i class="lni lni-home"></i> Головна</a></li>
                            <li> Новини</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>


        <div class="item-details news">
            <div class="container">
                <div class="row">
                    <div class="col-6">
                        Дата: {{($new->posted_at)}}
                    </div>
                    <div class="col-6">
                        Автор: {{$new->news_author}}
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        {!! $new->news_text !!}
                    </div>
                </div>
            </div>
        </div>

    @endforeach

<hr>
@endsection
