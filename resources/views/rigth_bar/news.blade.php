<div class="container">
    <div class="row">
            <div class="breadcrumbs">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-12">
                            <div class="breadcrumbs-content">
                                <h1 class="page-title">Останні новини</h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <div class="col-12">
        @forelse($news as $new)
            <p><strong>{{$new->name}}</strong></p>
            <p><small>{{topNews($new->text)}}...</small></p>
                <p><small><a href="{{route('news.show',['id'=>$new->id])}}">Показати</a></small></p>
        @empty
            <h3>Новини відсутні</h3>
        @endforelse
        </div>
    </div>
</div>
