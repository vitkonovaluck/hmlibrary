@extends('admin.layouts.app')


@section('content')
    <div class="row">
        <div class="col-4">
            <a href="{{route('admin.plan.create')}}" class="btn btn-primary btn-icon-split">
                                        <span class="icon text-white-50">
                                        <i class="fas fa-plus-circle"></i>
                                        </span>
                <span class="text">Додати</span>
            </a>
        </div>
        <div class="col-8">
            <!-- Topbar Search -->

        </div>
    </div>

    <table class="table table-hover">
        <tbody>
        <tr>
            <th scope="col" width="2%"></th>
            <th scope="col" width="30%">Назва</th>
            <th scope="col" width="46%">Розшифровка</th>
            <th scope="col" width="10%">Місце</th>
            <th scope="col" width="10%">Дата</th>
            <th colspan="2" scope="col" width="2%">Дії</th>
        </tr>
            @include ('admin/plan/show',['plans' => $plans])
        </tbody>
    </table>


@endsection

