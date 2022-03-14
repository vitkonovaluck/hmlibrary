
<table class="table table-hover">
    <thead>
    <tr>
        <th scope="col">#</th>
        <th scope="col">Назва новини</th>
        <th scope="col">Автор</th>
        <th scope="col">Дата</th>
        <th scope="col">Теги</th>
        <th scope="col">Дії</th>
    </tr>
    </thead>
    <tbody>
    @forelse($news as $new)
    <tr>
        <th scope="row">{{$loop->index+1}}</th>
        <td>{{$new->news_title}}</td>
        <td>{{$new->news_author}}</td>
        <td>{{$new->posted_at}}</td>
        <td></td>
        <td>
            <a href="{{route('admin.news.edit',$new) }}" alt="Редагування"><i class="fas fa-edit"></i></a>
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
