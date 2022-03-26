
<table class="table table-hover">
    <thead>
    <tr>
        <th scope="col">#</th>
        <th scope="col">Пункт меню</th>
        <th scope="col">Показ.</th>
        <th scope="col">Функція</th>
        <th scope="col">Сортировка</th>
        <th scope="col">Дії</th>
    </tr>
    </thead>
    <tbody>
    @include('admin.menu.show_table',['menu'=>$menu,'delimiter'  => $delimiter])
    </tbody>
</table>
