@extends('admin.layout');

@section('content')
    <div class="container-flour">
        @component('admin.components.breadcrumbs')
            @slot('title') Список новин @endslot
            @slot('parent') Головна @endslot
            @slot('active') Новини @endslot

        @endcomponent

        <hr>

        <a href="" class="btn btn-primary pull-rigth"><i class="fafa-puls-square-o"></i> Додати новину </a>
        <table class="table table-striped">
            <thead>
            <th>#</th>
            <th>Назва новини</th>
            <th>Автор</th>
            <th>Дата</th>
            <th class="text-right">Дії</th>
            </thead>
            <tbody>
            @forelse($news as $new)
                <tr>
                    <td></td>
                    <td>{{$new->news_title}}</td>
                    <td>{{$new->news_avtor}}</td>
                    <td>{{$new->news_date}}</td>
                    <td>
                        <a href=""><i class="fafa-edit"></i></a>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="5"><h2>Datas is empty</h2></td>

                </tr>
            @endforelse
            </tbody>
            <tfoot>
                <tr>
                    <td colspan="5">
                        <ul class="pagination pull-right">
                            {{$news->links()}}
                        </ul>
                    </td>
                </tr>
            </tfoot>
        </table>

    </div>
@endsection
