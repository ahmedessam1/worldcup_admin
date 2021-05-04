<div id="loading-area"></div>
<!-- header -->
<header class="site-header mo-left header">
    <div class="top-bar">
        <div class="container">
            <div class="row d-flex justify-content-between align-items-center">
                <div class="dlab-topbar-left">
                    <ul>
                        @if(Session::get('locale') === 'en')
                            <li><a href="#" class="locale" data-locale="ar"><img src="{{ url('/') }}/public/images/new/arabic.png" alt=""> Arabic</a></li>
                        @else
                            <li><a href="#" class="locale" data-locale="en"><img src="{{ url('/') }}/public/images/new/arabic.png" alt=""> English</a></li>
                        @endif
                        <form action="{{ route('locale.change') }}" method="POST" id="locale_form">
                            @csrf
                            <input type="hidden" name="locale" id="locale" value="">
                        </form>
                    </ul>
                </div>
                <div class="dlab-topbar-right">
                    <a href="{{ route('pages.contact') }}" class="site-button radius-no btnhover13">@lang('lang.header.quote')</a>
                </div>
            </div>
        </div>
    </div>
    <!-- main header -->
    <div class="sticky-header main-bar-wraper navbar-expand-lg">
        <div class="main-bar clearfix ">
            <div class="container clearfix">
                <!-- website logo -->
                <div class="logo-header mostion logo-dark">
                    <a href="{{ route('pages.home') }}"><img src="{{ url('/') }}/public/images/logo.jpg" alt=""></a>
                </div>
                <!-- nav toggle button -->
                <button class="navbar-toggler collapsed navicon justify-content-end" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                    <span></span>
                    <span></span>
                    <span></span>
                </button>
                <!-- extra nav -->
                <div class="extra-nav">
                    <div class="extra-cell">
                        <button id="quik-search-btn" type="button" class="site-button-link"><i class="la la-search"></i></button>
                    </div>
                </div>
                <!-- Quik search -->
                <div class="dlab-quik-search">
                    <form action="#">
                        <input name="search" value="" type="text" class="form-control" placeholder="@lang('lang.header.search')">
                        <span id="quik-search-remove"><i class="ti-close"></i></span>
                    </form>
                </div>
                <!-- main nav -->
                <div class="header-nav navbar-collapse collapse justify-content-end" id="navbarNavDropdown">
                    <div class="logo-header d-md-block d-lg-none">
                        <a href="{{ route('pages.home') }}"><img src="{{ url('/') }}/public/images/logo.png" alt=""></a>
                    </div>
                    <ul class="nav navbar-nav">
                        <li class="{{ Request::is('/') ? "active" : "" }}"><a href="{{ route('pages.home') }}">@lang('lang.header.home')</a></li>
                        <li>
                            <a href="javascript:;">@lang('lang.header.products')<i class="fa fa-chevron-down"></i></a>
                            <ul class="sub-menu right">
                                @foreach($categories as $category)
                                    @if(Session::get('locale') === 'en')
                                        <li><a href="{{ route('pages.products', $category->id) }}">{{ $category->name }}</a></li>
                                    @else
                                        <li><a href="{{ route('pages.products', $category->id) }}">{{ $category->name_ar }}</a></li>
                                    @endif
                                @endforeach
                            </ul>
                        </li>
                        <li>
                            <a href="javascript:;">@lang('lang.header.news')<i class="fa fa-chevron-down"></i></a>
                            <ul class="sub-menu right">
                                @foreach($news_category as $c)
                                    @if(Session::get('locale') === 'en')
                                        <li><a href="{{ route('pages.news', $c->id) }}">{{ $c->name }}</a></li>
                                    @else
                                        <li><a href="{{ route('pages.news', $c->id) }}">{{ $c->name_ar }}</a></li>
                                    @endif
                                @endforeach
                            </ul>
                        </li>
                        <li class="{{ Request::is('about') ? "active" : "" }}"><a href="{{ route('pages.about') }}">@lang('lang.header.about')</a></li>
                        <li class="{{ Request::is('contact') ? "active" : "" }}"><a href="{{ route('pages.contact') }}">@lang('lang.header.contact')</a></li>
                    </ul>
                    <div class="dlab-social-icon">
                        <ul>
                            <li><a class="site-button facebook circle-sm outline fa fa-facebook" href="javascript:void(0);"></a></li>
                            <li><a class="site-button twitter circle-sm outline fa fa-twitter" href="javascript:void(0);"></a></li>
                            <li><a class="site-button linkedin circle-sm outline fa fa-linkedin" href="javascript:void(0);"></a></li>
                            <li><a class="site-button instagram circle-sm outline fa fa-instagram" href="javascript:void(0);"></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- main header END -->
</header>
<!-- header END -->
