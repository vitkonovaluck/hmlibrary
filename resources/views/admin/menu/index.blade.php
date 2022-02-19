@extends('admin.layout');

@section('content')
    <div class="container-flour">
        @component('admin.components.breadcrumbs')
            @slot('title') Меню @endslot
            @slot('parent') Головна @endslot
            @slot('active') Menu @endslot

        @endcomponent

        <hr>

        <a href="{{route('admin.menu.create')}}" class="btn btn-primary pull-rigth"><i class="fafa-puls-square-o"></i> Додати меню </a>
        <table class="table table-striped">
            <thead>
            <th>#</th>
            <th>Меню</th>
            <th>Parrent</th>
            <th class="text-right">Дії</th>
            </thead>
            <tbody>
            @forelse($menu as $mn)
                <tr>
                    <td></td>
                    <td>{{$mn->menu_name}}</td>
                    <td>{{$mn->menu_parrent}}</td>
                    <td>
                        <a href="#"><i class="fa fa-edit">1111</i></a>
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
                        {{$menu->links()}}
                    </ul>
                </td>
            </tr>
            </tfoot>
        </table>

    </div>
@endsection
