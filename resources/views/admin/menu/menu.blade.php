
@foreach ($menues as $menu_list)

    <option value="{{$menu_list->id ?? ""}}"

            @isset($menu->id)

            @if ($menu->main_menu == $menu_list->id)
            selected=""
            @endif

            @if ($menu->id == $menu_list->id)
            hidden=""
        @endif

        @endisset

    >
        {!! $delimiter ?? "" !!}{{$menu_list->menu_name ?? ""}}
    </option>

    @if (count($menu_list->children) > 0)

        @include('admin.menu.menu', [
          'menues' => $menu_list->children,
          'delimiter'  => ' - ' . $delimiter
        ])

    @endif
@endforeach