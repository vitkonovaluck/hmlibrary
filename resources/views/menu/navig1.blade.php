@foreach($navig as $nav)
    @php
        if(strlen($nav->link)>0){
            $di=['id'=>$nav->link];
        }else{
            $di = [];
        }

        if(strlen($nav->page)<2){
            $link = 'index';
        }else{
            $link = route($nav->page,['id'=>$nav->link]);
       }
    @endphp
    @if($nav->children ->where('published','1')->count())
    <li><a href="{{$link}}">{{$nav->name}}
            <i class="lni lni-chevron-right"></i></a>
        <ul class="inner-sub-category1">
            @include('menu.navig2',['navig'=>$nav->children])
        </ul>

    @else
        <li><a href="{{$link}}">{{$nav->name}}</i></a>
    @endif
@endforeach
