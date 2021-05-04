@extends('main')
@section('title', 'Home Page')

@section('content')
    @include('partials._slider')


    <!-- Our Services -->
    <div class="section-full bg-gray content-inner">
        <div class="container">
            <div class="section-head text-center">
                <h2 class="title">@lang('lang.home.services')</h2>
                <p>@lang('lang.home.good_at')</p>
            </div>
            <div class="section-content row">
                <div class="col-md-4 col-lg-4 col-sm-12 service-box style3 wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.2s">
                    <div class="icon-bx-wraper" data-name="01">
                        <div class="icon-lg">
                            <a href="javascript:void(0);" class="icon-cell"><i class="flaticon-robot-arm"></i></a>
                        </div>
                        <div class="icon-content">
                            <h2 class="dlab-tilte">@lang('lang.home.s1')</h2>
                            <p>@lang('lang.home.sd1')</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-lg-4 col-sm-12 service-box style3 wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.4s">
                    <div class="icon-bx-wraper" data-name="02">
                        <div class="icon-lg">
                            <a href="javascript:void(0);" class="icon-cell"><i class="flaticon-engineer-1"></i></a>
                        </div>
                        <div class="icon-content">
                            <h2 class="dlab-tilte">@lang('lang.home.s2')</h2>
                            <p>
                                @lang('lang.home.sd2')
                                <br><br>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-lg-4 col-sm-12 service-box style3 wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.6s">
                    <div class="icon-bx-wraper" data-name="03">
                        <div class="icon-lg">
                            <a href="javascript:void(0);" class="icon-cell"><i class="flaticon-conveyor-1"></i></a>
                        </div>
                        <div class="icon-content">
                            <h2 class="dlab-tilte">@lang('lang.home.s3')</h2>
                            <p>
                                @lang('lang.home.sd3')
                                <br><br>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Our Services End -->


    <!-- Company states -->
    <div class="section-full text-white bg-img-fix content-inner overlay-black-dark counter-staus-box" style="
        background:url({{ url('/') }}/public/images/new/numbers.jpg) no-repeat center center fixed;
        -webkit-background-size: cover;
        -moz-background-size: cover;
        -o-background-size: cover;
        background-size: cover;
        ">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-12 col-sm-12 wow fadeInLeft" data-wow-duration="2s" data-wow-delay="0.2s">
                    <div class="section-head text-white">
                        <br>
                        <h1 style="font-size: 3rem" class="title">@lang('lang.home.status')</h1>
                        <br>
                        <a class="site-button btnhover13" href="{{ route('pages.contact') }}">@lang('lang.home.quote')</a>
                    </div>
                </div>
                <div class="col-lg-8 col-md-12 col-sm-12">
                    <div class="row sp20">
                        <div class="col-md-4 col-sm-4 m-b30 wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.2s">
                            <div class="icon-bx-wraper center counter-style-5">
                                <div class="icon-xl m-b20">
                                    <span class="icon-cell"><i class="flaticon-worker"></i></span>
                                </div>
                                <div class="icon-content">
                                    <div class="dlab-separator bg-primary"></div>
                                    <h2 class="dlab-tilte counter">1226</h2>
                                    <p>@lang('lang.home.h_c')</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-4 m-b30 wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.4s">
                            <div class="icon-bx-wraper center counter-style-5">
                                <div class="icon-xl m-b20">
                                    <span class="icon-cell"><i class="flaticon-settings"></i></span>
                                </div>
                                <div class="icon-content">
                                    <div class="dlab-separator bg-primary"></div>
                                    <h2 class="dlab-tilte counter">1552</h2>
                                    <p>@lang('lang.home.w_h')</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-4 m-b30 wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.6s">
                            <div class="icon-bx-wraper center counter-style-5">
                                <div class="icon-xl m-b20">
                                    <span class="icon-cell"><i class="flaticon-conveyor-1"></i></span>
                                </div>
                                <div class="icon-content">
                                    <div class="dlab-separator bg-primary"></div>
                                    <h2 class="dlab-tilte counter">1156</h2>
                                    <p>@lang('lang.home.a_e')</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Company states End -->

    <!-- contact area -->
    <div class="content-block">
        <!-- About Company -->
        <div class="section-full bg-gray content-inner about-carousel-ser">
            <div class="container">
                <div class="section-head text-center">
                    <h2 class="title">@lang('lang.home.customer_1')  <br/><span class="text-primary">@lang('lang.home.customer_2')</span></h2>
                    <p>
                        @lang('lang.home.customer_3')
                    </p>
                </div>
                <div class="about-ser-carousel  owl-carousel owl-theme owl-btn-center-lr owl-dots-primary-full owl-btn-3 m-b30 wow fadeIn" data-wow-duration="2s" data-wow-delay="0.2s">
                    @foreach($products as $product)
                        <div class="item owl-center">
                            <div class="dlab-box service-media-bx">
                                <div class="dlab-media">
                                    <a href="#"><img src="{{ url('/') }}/public/uploads/{{ $product->image }}"
                                                     class="lazy product--image" data-src="{{ url('/') }}/public/uploads/{{ $product->image }}" alt=""></a>
                                </div>
                                <div class="dlab-info text-center">
                                    <h2 class="dlab-title"><a href="#">{{ $product->name }}</a></h2>
                                    <p>{{ $product->category->name }}</p>
                                    <a href="{{ route('pages.products.show', $product->id) }}" class="site-button btnhover13">Details</a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
        <!-- About Company END -->


        <!-- Testimonials blog -->
        <div class="section-full overlay-black-middle bg-secondry content-inner-2 wow fadeIn" data-wow-duration="2s" data-wow-delay="0.2s" style="background-image:url({{ url('/') }}/public/images/background/map-bg.png);">
            <div class="container">
                <div class="section-head text-white text-center">
                    <h2 class="title">@lang('lang.home.about_title')</h2>
                    <p>@lang('lang.home.about_title_2')</p>
                </div>
                <div class="section-content">
                    <div class="row" style="color: #fff">
                        <div class="col-md-6">
                            <h4 style="color: #fff">@lang('lang.home.w_w_r')</h4>
                            <p>
                                @lang('lang.home.about_1')
                            </p>
                            <p>
                                @lang('lang.home.about_2')
                            </p>

                            <a href="{{ route('pages.contact') }}" title="READ MORE" rel="bookmark" style="margin-top: 60px" class="site-button btnhover13">@lang('lang.home.about_3') <i class="fa fa-phone"></i></a>
                        </div>
                        <div class="col-md-6">
                            <h4 style="color: #fff">@lang('lang.home.about_4')</h4>
                            <p>
                                @lang('lang.home.about_5')
                            </p>
                            <p>
                                @lang('lang.home.about_6')
                            </p>

                            <h4 style="color: #fff">@lang('lang.home.about_7')</h4>
                            <p>
                                @lang('lang.home.about_8')
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Testimonials blog End -->

        <!-- Latest blog -->
        <div class="section-full content-inner bg-gray wow fadeIn" data-wow-duration="2s" data-wow-delay="0.4s">
            <div class="container">
                <div class="section-head text-center">
                    <h2 class="title">@lang('lang.home.news_1')</h2>
                    <p>@lang('lang.home.news_2')</p>
                </div>
                <div class="blog-carousel owl-none owl-carousel">
                    @foreach($news as $n)
                            <div class="blog-post post-style-1">
                                <div class="dlab-post-media dlab-img-effect rotate">
                                    <a href="{{ route('pages.news.show', $n->id) }}"><img class="news--image" src="{{ url('/') }}/public/uploads/{{ $n->image }}" alt=""></a>
                                </div>
                                <div class="dlab-post-info">
                                    <div class="dlab-post-meta">
                                        <ul>
                                            <li class="post-date"> <strong>{{ $n->created_at->diffForHumans() }}</strong> </li>
                                            <li class="post-author"> {{ $n->category->name }} </li>
                                        </ul>
                                    </div>
                                    <div class="dlab-post-title">
                                        <h3 class="post-title"><a href="{{ route('pages.news.show', $n->id) }}">{{ $n->name }}</a></h3>
                                    </div>
                                    <div class="dlab-post-readmore">
                                        <a href="{{ route('pages.news.show', $n->id) }}" title="READ MORE" rel="bookmark" class="site-button btnhover13">READ MORE</a>
                                    </div>
                                </div>
                            </div>
                    @endforeach
                </div>
            </div>
        </div>
        <!-- Latest blog END -->

        <!-- Client logo -->
        <div class="section-full dlab-we-find bg-img-fix p-t20 p-b20 bg-white wow fadeIn" data-wow-duration="2s" data-wow-delay="0.6s">
            <div class="container">
                <div class="section-content">
                    <div class="client-logo-carousel mfp-gallery gallery owl-btn-center-lr owl-carousel owl-btn-3">
                        <div class="item">
                            <div class="ow-client-logo">
                                <div class="client-logo"><a href="javascript:void(0);"><img src="{{ url('/') }}/public/images/new/clients/1.jpg" alt=""></a></div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="ow-client-logo">
                                <div class="client-logo"><a href="javascript:void(0);"><img src="{{ url('/') }}/public/images/new/clients/2.jpg" alt=""></a></div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="ow-client-logo">
                                <div class="client-logo"><a href="javascript:void(0);"><img src="{{ url('/') }}/public/images/new/clients/3.png" alt=""></a></div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="ow-client-logo">
                                <div class="client-logo"><a href="javascript:void(0);"><img src="{{ url('/') }}/public/images/new/clients/4.png" alt=""></a></div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="ow-client-logo">
                                <div class="client-logo"><a href="javascript:void(0);"><img src="{{ url('/') }}/public/images/new/clients/5.jpg" alt=""></a></div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="ow-client-logo">
                                <div class="client-logo"><a href="javascript:void(0);"><img src="{{ url('/') }}/public/images/new/clients/6.jpg" alt=""></a></div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="ow-client-logo">
                                <div class="client-logo"><a href="javascript:void(0);"><img src="{{ url('/') }}/public/images/new/clients/7.jpg" alt=""></a></div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="ow-client-logo">
                                <div class="client-logo"><a href="javascript:void(0);"><img src="{{ url('/') }}/public/images/new/clients/8.jpg" alt=""></a></div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="ow-client-logo">
                                <div class="client-logo"><a href="javascript:void(0);"><img src="{{ url('/') }}/public/images/new/clients/9.jpg" alt=""></a></div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="ow-client-logo">
                                <div class="client-logo"><a href="javascript:void(0);"><img src="{{ url('/') }}/public/images/new/clients/10.png" alt=""></a></div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="ow-client-logo">
                                <div class="client-logo"><a href="javascript:void(0);"><img src="{{ url('/') }}/public/images/new/clients/11.jpg" alt=""></a></div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="ow-client-logo">
                                <div class="client-logo"><a href="javascript:void(0);"><img src="{{ url('/') }}/public/images/new/clients/12.jpg" alt=""></a></div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="ow-client-logo">
                                <div class="client-logo"><a href="javascript:void(0);"><img src="{{ url('/') }}/public/images/new/clients/13.jpg" alt=""></a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Client logo END -->
    </div>

@endsection
