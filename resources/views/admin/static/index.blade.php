@extends('admin.layout');

@section('content')
    <div class="container-flour">
        @component('admin.components.breadcrumbs')
            @slot('title') Статистичні сторінки @endslot
            @slot('parent') Головна @endslot
            @slot('active') Статистичні сторінки @endslot

        @endcomponent

        <hr>

        <a href="" class="btn btn-primary pull-rigth"><i class="fafa-puls-square-o"></i> Додати сторінку </a>
        <table class="table table-striped">
            <thead>
            <th>#</th>
            <th>Назва сторінки</th>
            <th>Ссилка</th>
            <th class="text-right">Дії</th>
            </thead>
            <tbody>
            @forelse($static as $stat)
                <tr>
                    <td></td>
                    <td>{{$stat->page_name}}</td>
                    <td>{{$stat->page_slug}}</td>
                    <td>
                        <a href=""><i class="fafa-edit"></i></a>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="5"><h2>Дані відсутні</h2></td>

                </tr>
            @endforelse
            </tbody>
            <tfoot>
            <tr>
                <td colspan="5">
                    <ul class="pagination pull-right">
                        {{$static->links()}}
                    </ul>
                </td>
            </tr>
            </tfoot>
        </table>

    </div>
@endsection
