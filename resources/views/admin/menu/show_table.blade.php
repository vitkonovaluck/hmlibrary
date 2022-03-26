@foreach($menu as $men)
    <tr>
        <th scope="row">{{$loop->index+1}}</th>
        <td>{{$delimiter}} / <b><font color="blue"> {{$men->menu_name}}</font></b></td>
        <td align="center">@if ($men->published == 0)
                   <img src="{{asset('img/off_btn.png')}}" width="68" height="33">
             @else <img src="{{asset('img/on_btn.png')}}"  width="68" height="33">
             @endif</td>
        <td>{{$men->menu_page}}</td>
        <td>{{$men->menu_sort}}</td>
        <td  align="center">
            <a href="{{route('admin.menu.edit',['id'=>$men->id])}}" alt="Редагування"><i class="fas fa-edit"></i></a>
            <a href="" alt="Копіювання"><i class="fas fa-copy"></i></a>
            <a href="" alt="Видалення"><i class="fas fa-trash"></i></a>

        </td>
    </tr>
    @include('admin.menu.show_table',['menu'=>$men->children,'delimiter'  => $delimiter . ' / '.$men->menu_name])


@endforeach
