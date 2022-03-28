@extends('layouts.app');

@section('content')
    @foreach($statics as $static)
    <div class="breadcrumbs">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12 col-md-12 col-12">
                    <div class="breadcrumbs-content">
                        <h1 class="page-title">{{$static->name}}</h1>
                    </div>
                </div>

            </div>
        </div>
    </div>

        <news class="item-details news">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        @php
                            $text=$static->text;
                            $text=str_replace("%frame%", $static->frame, $text);
                            $text=str_replace("%frame1%", $static->frame1, $text);

                        @endphp
                        {!!$text !!}
                    </div>
                </div>
            </div>
        </news>

    @endforeach

@endsection
