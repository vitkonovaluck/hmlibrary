@foreach($menu as $men)
    <tr>
        <th scope="row">{{$loop->index+1}}</th>
        <td>{{$delimiter}} {{$men->menu_name}}</td>
        <td>@if ($men->published == 0) Не опубліковано @else Опубліковано @endif</td>
        <td>{{$men->menu_page}}</td>
        <td>{{$men->menu_link}}</td>
        <td>
            <a href="{{route('admin.menu.edit',['id'=>$men->id])}}" alt="Редагування"><i class="fas fa-edit"></i></a>
            <a href="" alt="Копіювання"><i class="fas fa-copy"></i></a>
            <a href="" alt="Видалення"><i class="fas fa-trash"></i></a>

        </td>
    </tr>
    @include('admin.menu.show_table',['menu'=>$men->children,'delimiter'  => ' - ' . $delimiter])


@endforeach9