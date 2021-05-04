<style>
    .nav-item a {
        font-size: 16px;
        color: #fff !important;
    }
    .nav-item {
        border-right: 1px solid #ddd
    }
    .navbar-dark .navbar-nav .nav-link.active, .navbar-dark .navbar-nav .show>.nav-link {
        background-color: #6c757d;
    }
</style>
<header>
    <!-- Fixed navbar -->
    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
        <div class="container">
            <a class="navbar-brand" href="#">
                {{--<img src="{{ url('/') }}/public/images/logo.jpg" alt="" style="height: 40px">--}}
                <h4>Worldcup</h4>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link {{request()->routeIs('players.*') ? 'active' : null }}" aria-current="page" href="{{route('players.index')}}">
                            <i class="fa fa-users"></i>
                            Players
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{request()->routeIs('news.*') ? 'active' : null }}" aria-current="page" href="{{route('news.index')}}">
                            <i class="fa fa-newspaper-o"></i>
                            News
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{request()->routeIs('pdf.*') ? 'active' : null }}" aria-current="page" href="{{route('pdf.index')}}">
                            <i class="fa fa-file-pdf-o"></i>
                            PDFS
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{request()->routeIs('videos.*') ? 'active' : null }}" aria-current="page" href="{{route('videos.index')}}">
                            <i class="fa fa-file-video-o"></i>
                            Videos
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{request()->routeIs('transportations.*') ? 'active' : null }}" aria-current="page" href="{{route('transportations.index')}}">
                            <i class="fa fa-car"></i>
                            Transportation
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="#" onclick="document.getElementById('logout_form').submit()">
                            <i class="fa fa-sign-out"></i>
                            Logout
                        </a>
                        <form action="{{ route('logout') }}" method="POST" id="logout_form">@csrf</form>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>
