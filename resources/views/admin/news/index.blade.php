@extends('admin.layouts.app');




@section('content')
    <div class="row">
    <div class="col-4">
        <a href="{{route('admin.news.create')}}" class="btn btn-primary btn-icon-split">
                                        <span class="icon text-white-50">
                                        <i class="fas fa-plus-circle"></i>
                                        </span>
            <span class="text">Додати</span>
        </a>
    </div>
    <div class="col-8">
    <!-- Topbar Search -->
    <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search" action="{{route('admin.news.search')}}" method="get">
        <div class="input-group">
            <input name="search" type="text" class="form-control bg-light border-0 small" placeholder="Пошук..."
                   aria-label="Search" aria-describedby="basic-addon2">
            <div class="input-group-append">
                <button class="btn btn-primary" type="button">
                    <i class="fas fa-search fa-sm"></i>
                </button>
            </div>
        </div>
    </form>
    </div>
    </div>
    @include ('admin/news/show')

    {{ $news->links('vendor.pagination.bootstrap-5') }}

@endsection

