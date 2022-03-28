@foreach($navig as $nav)
    @if($nav->children ->where('published','1')->count())
    <li><a href="{{linkRev($nav)}}">{{$nav->name}}
            <i class="lni lni-chevron-right"></i></a>
        <ul class="inner-sub-category">
            @include('menu.navig1',['navig'=>$nav->children])
        </ul>

    @else
        <li><a href="{{linkRev($nav)}}">{{$nav->name}}</i></a>
    @endif
@endforeach
