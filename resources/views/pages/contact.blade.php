@extends('main')
@section('title', 'Contact Us Page')

@section('content')
    <div class="page-content bg-white">
        <!-- Contact Form -->
        <div class="section-full content-inner contact-page-9 overlay-black-dark" style="background-image: url({{ url('/') }}/public/images/background/bg5.jpg); background-position: 30% 100%">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-12 text-white">
                        <div class="row">
                            <div class="col-lg-12 col-md-12 m-b30">
                                <div class="icon-bx-wraper bx-style-1 p-a20 radius-sm">
                                    <div class="icon-content">
                                        <h5 class="dlab-tilte">
                                            <span class="icon-sm text-primary"><i class="ti-location-pin"></i></span>
                                            @lang('lang.contact.1')
                                        </h5>
                                        <p>@lang('lang.contact.2')</p>
                                        <h6 class="m-b15 text-black font-weight-400"><i class="ti-alarm-clock"></i> @lang('lang.contact.3')</h6>
                                        <p class="m-b0">@lang('lang.contact.4')</p>
                                        <p>@lang('lang.contact.5')</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-6 m-b30">
                                <div class="icon-bx-wraper bx-style-1 p-a20 radius-sm">
                                    <div class="icon-content">
                                        <h5 class="dlab-tilte">
                                            <span class="icon-sm text-primary"><i class="ti-email"></i></span>
                                            @lang('lang.contact.6')
                                        </h5>
                                        <p>
                                            @lang('lang.contact.7'): <a href="mailto:info@alltech-egypt.com" style="color: #fff">info@alltech-egypt.com</a>
                                            <br>
                                            @lang('lang.contact.8'): <a href="mailto:sales@alltech-egypt.com" style="color: #fff">sales@alltech-egypt.com</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-6 m-b30">
                                <div class="icon-bx-wraper bx-style-1 p-a20 radius-sm">
                                    <div class="icon-content">
                                        <h5 class="dlab-tilte">
                                            <span class="icon-sm text-primary"><i class="ti-mobile"></i></span>
                                            @lang('lang.contact.9')
                                        </h5>
                                        <p>
                                            @lang('lang.contact.10'): <a href="tel:01000776075" style="color: #fff">01000776075</a>
                                            <br>
                                            @lang('lang.contact.11'): <a href="tel:01000776078" style="color: #fff">01000776078</a>
                                            <br>
                                            @lang('lang.contact.11'): <a href="tel:01002406228" style="color: #fff">01002406228</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8 col-md-12 m-b30">
                        <form class="inquiry-form wow box-shadow bg-white fadeInUp" data-wow-delay="0.2s">
                            <h3 class="title-box font-weight-300 m-t0 m-b10">@lang('lang.contact.12') <span class="bg-primary">@lang('lang.contact.13')</span></h3>
                            <p>@lang('lang.contact.14')</p>
                            <div class="row">
                                <div class="col-lg-6 col-md-6">
                                    <div class="form-group">
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="ti-user text-primary"></i></span>
                                            <input name="dzName" type="text" required class="form-control" placeholder="First Name">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="form-group">
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="ti-mobile text-primary"></i></span>
                                            <input name="dzOther[Phone]" type="text" required class="form-control" placeholder="Phone">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12">
                                    <div class="form-group">
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="ti-email text-primary"></i></span>
                                            <input name="dzEmail" type="email" class="form-control" required  placeholder="Your Email Id" >
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12">
                                    <div class="form-group">
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="ti-agenda text-primary"></i></span>
                                            <textarea name="dzMessage" rows="8" class="form-control" required placeholder="Contact reasons..."></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12">
                                    <button name="submit" type="submit" value="Submit" class="site-button button-md"> <span>@lang('lang.contact.15')</span> </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- Contact Form END -->
    </div>
@endsection
