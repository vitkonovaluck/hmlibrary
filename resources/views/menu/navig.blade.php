    @foreach($navig as $nav)
        @if($nav->children->where('published','1')->count())
            <li><a href="#">{{$nav->menu_name}}  {{$nav->children->where('published','1')->count()}} <i class="lni lni-chevron-right"></i></a>
                <ul class="inner-sub-category">`
                    include('menu.navig',['navig'=>$nav->children->where('published','1')])
                </ul>

            @else
            <li><a href="#">{{$nav->menu_name}}</i></a>
        @endif
            </li>
    @endforeach
