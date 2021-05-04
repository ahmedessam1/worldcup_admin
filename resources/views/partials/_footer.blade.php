
<!-- Footer -->
<footer class="site-footer style1">
    <!-- newsletter part -->
    <div class="dlab-newsletter">
        <div class="container">
            <div class="ft-contact wow fadeIn" data-wow-duration="2s" data-wow-delay="0.6s">
                <div class="ft-contact-bx">
                    <img src="{{ url('/') }}/public/images/icon/icon1.png" alt=""/>
                    <h4 class="title">@lang('lang.footer.1')</h4>
                    <p>@lang('lang.footer.3')</p>
                </div>
                <div class="ft-contact-bx">
                    <img src="{{ url('/') }}/public/images/icon/icon2.png" alt=""/>
                    <h4 class="title">Phone</h4>
                    <p style="font-size: 14px">
                        @lang('lang.footer.4'): <a href="tel:01000776075" style="color: #fff">01000776075</a>
                        <br>
                        @lang('lang.footer.5'): <a href="tel:01000776078" style="color: #fff">01000776078</a>
                        <br>
                        @lang('lang.footer.5'): <a href="tel:01002406228" style="color: #fff">01002406228</a>
                    </p>
                </div>
                <div class="ft-contact-bx">
                    <img src="{{ url('/') }}/public/images/icon/icon3.png" alt=""/>
                    <h4 class="title">@lang('lang.footer.6')</h4>
                    <p style="font-size: 14px">
                        @lang('lang.footer.7'): <a href="mailto:info@alltech-egypt.com" style="color: #fff">info@alltech-egypt.com</a>
                        <br>
                        @lang('lang.footer.8'): <a href="mailto:sales@alltech-egypt.com" style="color: #fff">sales@alltech-egypt.com</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
    <!-- footer top part -->
    <div class="footer-top" style="background-image:url({{ url('/') }}/public/images/background/bg2.png); background-size: contain;">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-12">
                    <div class="widget widget_about">
                        <h4 class="footer-title">@lang('lang.footer.9')</h4>
                        <p>
                            @lang('lang.footer.10')
                        </p>
                        <a href="{{ route('pages.about') }}" class="readmore">@lang('lang.footer.11')</a>
                    </div>
                </div>
                <div class="col-md-4 col-sm-12">
                    <div class="widget">
                        <h4 class="footer-title">@lang('lang.footer.12')</h4>
                        <ul class="list-1">
                            <li><a href="#">@lang('lang.footer.13')</a></li>
                            <li><a href="#">@lang('lang.footer.14')</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-4 col-sm-12">
                    <div class="widget widget_subscribe">
                        <h4 class="footer-title">@lang('lang.footer.15')</h4>
                        <a href="#"><img src="{{ url('/') }}/public/images/new/products/1.jpg" style="margin-top: 10px; width: 120px; height: 80px" alt=""></a>
                        <a href="#"><img src="{{ url('/') }}/public/images/new/products/2.jpg" style="margin-top: 10px; width: 120px; height: 80px" alt=""></a>
                        <br>
                        <a href="#"><img src="{{ url('/') }}/public/images/new/products/3.jpg" style="margin-top: 10px; width: 120px; height: 80px" alt=""></a>
                        <a href="#"><img src="{{ url('/') }}/public/images/new/products/4.jpg" style="margin-top: 10px; width: 120px; height: 80px" alt=""></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- footer bottom part -->
    <div class="footer-bottom footer-line">
        <div class="container">
            <div class="footer-bottom-in">
                <div class="footer-bottom-logo"><a href="{{ route('pages.home') }}"><img src="{{ url('/') }}/public/images/logo-light.png" alt=""/></a></div>
                <div class="footer-bottom-social">
                    <ul class="dlab-social-icon dez-border">
                        <li>@lang('lang.footer.16')</li>
                        <li><a class="fa fa-facebook" target="_blank" style="color: #fff" href="https://www.facebook.com/alltechegyptegypt/"></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- Footer END -->
<button class="scroltop icon-up" type="button"><i class="fa fa-arrow-up"></i></button>
