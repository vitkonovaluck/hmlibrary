
<table class="table table-hover">
    <thead>
    <tr>
        <th scope="col">#</th>
        <th scope="col">Назва сторінки</th>
        <th scope="col">Теги</th>
        <th scope="col">Дії</th>
    </tr>
    </thead>
    <tbody>
    @forelse($statics as $stat)
        <tr>
            <th scope="row">{{$loop->index+1}}</th>
            <td>{{$stat->name}}</td>
            <td></td>
            <td>
                <a href="{{route('admin.static.edit',['id'=>$stat->id]) }}" alt="Редагування"><i class="fas fa-edit"></i></a>
                <a href="" alt="Копіювання"><i class="fas fa-copy"></i></a>
                <a href="" alt="Видалення"><i class="fas fa-trash"></i></a>

            </td>
        </tr>
    @empty
        <tr>
            <th scope="row"></th>
            <td colspan="4"><h2>Дані не знайдено</h2>
            </td>
        </tr>


    @endforelse
    </tbody>
</table>

