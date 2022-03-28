@foreach ($links as $function_list)

    <option value="{{$function_list->id}}"

        @isset($menu->link)

            @if ($menu->link == $function_list->id)
            selected=""
        @endif
        @endisset

    >
        {{$function_list->name}}
    </option>

@endforeach
