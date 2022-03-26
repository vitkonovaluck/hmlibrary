@foreach ($link as $function_list)

    <option value="{{$function_list->id ?? ""}}"

            @isset($menu->menu_link)

            @if ($menu->menu_link == $function_list->id)
            selected=""
        @endif
        @endisset

    >
        {{$function_list->page_name ?? ""}}
    </option>

@endforeach
