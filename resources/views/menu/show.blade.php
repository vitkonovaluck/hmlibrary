@extends('layouts.app');

@section('content')
    <div class="breadcrumbs">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-6 col-12">
                    <div class="breadcrumbs-content">
                        <h1 class="page-title">{{$menu->name}}</h1>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-12">
                    <ul class="breadcrumb-nav">
                        <li><a href="{{route('index')}}"><i class="lni lni-home"></i> Головна</a></li>
                        @if (isset($menu->parrent))
                            @if($menu->parrent->parent_id >0)
                                <li><a href="{{linkRev($menu->parrent)}}">{{$menu->parrent->name}}</a></li>
                            @endif
                        @endif
                        <li> {{$menu->name}}</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>


    <section class="trending-product section" style="margin-top: 12px;">
        <div class="container">
            <div class="row">
                @foreach($menu->children as $menus)
                <div class="col-lg-3 col-md-6 col-12">
                    <!-- Start Single Product -->
                    <div class="single-product">
                        <div class="product-image">
                            <a href="{{linkRev($menus)}}"><img src="
                                @if(LenStr($menus->image)>4)
                                    {{asset('images/menu/'.$menus->image)}}
                                @else
                                    http://127.0.0.1:8000/img/nophoto.jpg
                                @endif
                                    " alt="{{$menus->name}}"></a>
                        </div>
                        <div class="product-info">
                            <h4 class="title">
                                <a href="{{linkRev($menus)}}">{{$menus->name}}</a>
                            </h4>

                        </div>
                    </div>
                    <!-- End Single Product -->
                </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
