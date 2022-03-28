@foreach ($function as $function_list)

    <option value="{{$function_list->routes ?? ""}}"

            @isset($menu->id)

            @if ($menu->page == $function_list->routes)
            selected=""
            @endif
        @endisset

    >
        {{$function_list->name ?? ""}}
    </option>

@endforeach
