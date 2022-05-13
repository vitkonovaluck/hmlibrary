
    @forelse($plans as $plan)
    <tr>
        <th scope="row">{{$loop->index+1}}</th>
        <td>{{$plan -> name}}</td>
        <td>{{$plan -> text}}</td>
        <td>{{$plan -> place}}</td>
        <td>{{$plan -> date1}}</td>
        <td><a href="{{route('admin.plan.edit',$plan) }}" alt="Редагування"><i class="fas fa-edit"></i></a></td>
        <td><a href="{{route('admin.plan.delete',$plan) }}" alt="Видалення"><i class="fas fa-trash-alt"></i></i></a></td>
    </tr>
    @include ('admin/plan/show',['plans' => $plans->children()])
    @endforeach
    </tbody></table>
