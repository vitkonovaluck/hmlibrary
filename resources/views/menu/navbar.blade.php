<nav class="navbar navbar-expand-lg">
    <button class="navbar-toggler mobile-menu-btn" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="toggler-icon"></span>
        <span class="toggler-icon"></span>
        <span class="toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse sub-menu-bar" id="navbarSupportedContent">
        <ul id="nav" class="navbar-nav ms-auto">
            <li class="nav-item">
                <a href="{{route('index')}}" aria-label="Toggle navigation"><i class="lni lni-home"></i>Головна</a>
            </li>
            @foreach($navbar as $nb)
            <li class="nav-item">
                <a href="{{route($nb->page,['id'=>$nb->link])}}" aria-label="Toggle navigation">{{$nb->name}}</a>
            </li>
            @endforeach
        </ul>
    </div> <!-- navbar collapse -->
</nav>
