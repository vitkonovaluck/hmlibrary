@foreach($plan as $plans)

    @if($plans->week > 0 )
        <tr>
            <td align="center" colspan="4">
                <font color="#FF000">
                    <font size="5">
                        <b>{{$plans->name}}</b>
                    </font><br><i>
                    <font size="4">
                        {{$plans->text}}
                    </font></i>
                </font>
            </td>
        </tr>
    @elseif($plans->main == 0)
        <tr>
            <td colspan="2"><font color="#FF000"><b>{{$plans->name}}</b></font><br>
                <i>{{$plans->text}} </i></td>
            <td>{{$plans->place}}</td>
            <td align="left">{{$plans->date1}}</td>
        </tr>
    @else
        <tr>
            <td>
                *****
            </td>
            <td><font color="#0000FF"><b>{{$plans->name}}</b></font><br>
                <i>{{$plans->text}} </i></td>
            <td>{{$plans->place}}</td>
            <td align="left">{{$plans->date1}}</td>
        </tr>
    @endif
    @include('plans.show_table',['plan'=>$plans->children])
@endforeach
