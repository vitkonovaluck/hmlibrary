@extends('layouts.app');

@section('content')
<div class="breadcrumbs">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 col-md-6 col-12">
                <div class="breadcrumbs-content">
                    <h1 class="page-title">Новини</h1>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-12">
                <ul class="breadcrumb-nav">
                    <li><a href="{{route('index')}}"><i class="lni lni-home"></i> Головна</a></li>
                    <li> Новини</li>
                </ul>
            </div>
        </div>
    </div>
</div>

@foreach($news as $new)
    <news class="item-details news">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="news-title"><h2>{{$new->name}}</h2></div>
                </div>
            </div>
            <div class="row">
                <div class="col-6">
                    Публікація від: {{$new->posted_at}}
                </div>
                <div class="col-6">
                   Автор: {{$new->author}}
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-sm-6 col-md-4 col-lg-3">

                    @php
                        if (preg_match_all('/<img(?:\\s[^<>]*?)?\\bsrc\\s*=\\s*(?|"([^"]*)"|\'([^\']*)\'|([^<>\'"\\s]*))[^<>]*>/i', $new->text, $m))
                         if (count($m[1])>0){
                            $src_img=$m[1][0];
                         }else{
                            $src_img="/img/news_icon.png";
                         }

                    @endphp
                    <img src="{{$src_img ?? "/img/news_icon.png"}}">
                </div>
                <div class="col-12 col-sm-6 col-md-8 col-lg-9">
                    {!! smallNews($new->text) !!}
                    .....<a href="{{route('news.show',['id'=>$new->id])}}">Показати</a>
                </div>
            </div>
        </div>
    </news>
    <hr>
@endforeach

 {{$news->links()}}

@endsection
