@extends('main')
@section('title', 'About Us Page')

@section('content')
    <div class="page-content bg-white">
        <!-- inner page banner -->
        <div class="dlab-bnr-inr overlay-black-middle text-center bg-pt" style="background-image:url({{ url('/') }}/public/images/background/bg2.jpg);">
            <div class="container">
                <div class="dlab-bnr-inr-entry align-m text-center">
                    <h1 class="text-white">ABOUT US</h1>
                    <!-- Breadcrumb row -->
                    <div class="breadcrumb-row">
                        <ul class="list-inline">
                            <li><a href="{{ route('pages.home') }}">Home</a></li>
                            <li>About Us</li>
                        </ul>
                    </div>
                    <!-- Breadcrumb row END -->
                </div>
            </div>
        </div>
        <!-- inner page banner END -->
        <!-- contact area -->
        <div class="content-block">
            <!-- About Services info -->
            <div class="section-full content-inner bg-white video-section" style="background-image:url({{ url('/') }}/public/images/background/bg-video.png);">
                <div class="container">
                    <div class="section-content">
                        <div class="row d-flex">
                            <div class="col-lg-6 col-md-12 m-b30">
                                <div class="video-bx">
                                    <img src="{{ url('/') }}/public/images/background/bb2.jpg" alt="Signature">
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-12 m-b30 align-self-center video-infobx">
                                <div class="content-bx1">
                                    <h2 class="m-b15 title">A company involved in<br><span class="text-primary"> Filling and packing
, Quality Check and
Coding machinery
</span></h2>
                                    <p class="">
                                        Alltech Engineering-Egypt was established back in June 2003 as a limited liability company to work in the Egyptian market in the fields of Filling, Packaging, Quality Check and Coding machinery.
                                    </p>
                                    <p class="m-b30">
                                        Because of the long and wide experience of its management in these fields, Alltech has been able to provide first class solutions to the local as well as neighboring country markets with the aid of their long term reliable suppliers.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="content-block">
                        <!-- About Services info -->
                        <div class="section-full content-inner bg-white video-section" style="background-image:url({{ url('/') }}/public/images/background/bg-video.png);">
                            <div class="container">
                                <h2 class="m-b15 title">
                                    Know more about us
                                </h2>
                                <hr>
                                {!! $about->text !!}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- About Services info END -->
            <!-- Counter -->
            <div class="section-full content-inner overlay-black-dark bg-img-fix" style="background-image:url({{ url('/') }}/public/images/background/bg1.jpg);">
                <div class="container">
                    <div class="section-content text-center text-white">
                        <div class="row">
                            <div class="col-lg-3 col-md-6 col-sm-6 col-6 m-b30">
                                <div class="counter-style-5">
                                    <div class="">
                                        <span class="counter">1226</span>
                                    </div>
                                    <span class="counter-text">Happy Clients</span>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-6 col-6 m-b30">
                                <div class="counter-style-5">
                                    <div class="">
                                        <span class="counter">1552</span>
                                    </div>
                                    <span class="counter-text">WORKERS HAND</span>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-6 col-6 m-b30">
                                <div class="counter-style-5">
                                    <div class="">
                                        <span class="counter">1156</span>
                                    </div>
                                    <span class="counter-text">ACTIVE EXPERTS</span>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-6 col-6 m-b30">
                                <div class="counter-style-5">
                                    <div class="">
                                        <span class="counter">1300</span>
                                    </div>
                                    <span class="counter-text">Projects</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Counter END -->

            <!-- Our Services -->
            <div class="section-full bg-gray content-inner">
                <div class="container">
                    <div class="section-head text-center">
                        <h2 class="title"> Our Services</h2>
                        <p>What we are good at</p>
                    </div>
                    <div class="section-content row">
                        <div class="col-md-4 col-lg-4 col-sm-12 service-box style3 wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.2s">
                            <div class="icon-bx-wraper" data-name="01">
                                <div class="icon-lg">
                                    <a href="javascript:void(0);" class="icon-cell"><i class="flaticon-robot-arm"></i></a>
                                </div>
                                <div class="icon-content">
                                    <h2 class="dlab-tilte">Filling and packing</h2>
                                    <p>
                                        Fillers (or filling machines) are used for packaging, mainly for food/beverage but for other products as well. These are used to fill either a bottle or a pouch, depending on the product.
                                        There are several types of fillers used by the packaging industry.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-lg-4 col-sm-12 service-box style3 wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.4s">
                            <div class="icon-bx-wraper" data-name="02">
                                <div class="icon-lg">
                                    <a href="javascript:void(0);" class="icon-cell"><i class="flaticon-engineer-1"></i></a>
                                </div>
                                <div class="icon-content">
                                    <h2 class="dlab-tilte">Quality Check</h2>
                                    <p>
                                        Quality control (QC) is a process by which entities review the quality of all factors involved in production. ISO 9000 defines quality control as "A part of quality management focused on fulfilling quality requirements".
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
                                    <h2 class="dlab-tilte">Coding machinery</h2>
                                    <p>
                                        The machine industry or machinery industry is a subsector of the industry, that produces and maintains machines for consumers, the industry, and most other companies in the economy.
                                        <br><br>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- contact area END -->

    </div>

@endsection
