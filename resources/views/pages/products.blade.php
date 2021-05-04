@extends('main')
@section('title', 'Alltech Products')

@section('content')
    <div class="page-content bg-white">
        <!-- inner page banner -->
        <div class="dlab-bnr-inr overlay-black-middle text-center bg-pt"
             style="background-image:url({{ url('/') }}/public/images/background/bg2.jpg);">
            <div class="container">
                <div class="dlab-bnr-inr-entry align-m text-center">
                    <h1 class="text-white">@lang('lang.products.1')</h1>
                    <!-- Breadcrumb row -->
                    <div class="breadcrumb-row">
                        <ul class="list-inline">
                            <li><a href="{{ route('pages.home') }}">@lang('lang.products.2')</a></li>
                            <li>@lang('lang.products.3')</li>
                            @if(Session::get('locale') === 'en')
                                <li>{{ $category->name }}</li>
                            @else
                                <li>{{ $category->name_ar }}</li>
                            @endif
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
            <div class="section-full content-inner bg-white video-section"
                 style="background-image:url({{ url('/') }}/public/images/background/bg-video.png);">
                <div class="container">

                    <div class="clearfix" id="lightgallery">
                        <ul id="masonry"
                            class="portfolio-ic dlab-gallery-listing gallery-grid-4 gallery row p-l0 sp10 lightgallery text-center"
                            style="position: relative; height: 1713.19px;">
                            @foreach($products as $product)
                                <li class="web design card-container col-lg-4 col-md-6 col-sm-6 p-a0"
                                    style="position: absolute; left: 0px; top: 0px;">
                                    <div class="dlab-box dlab-gallery-box">
                                        <div class="dlab-media dlab-img-overlay1 dlab-img-effect">
                                            <a href="{{ route('pages.products.show', $product->id) }}"> <img
                                                    src="{{ url('/') }}/public/uploads/{{ $product->image }}" alt="">
                                            </a>
                                            <div class="overlay-bx">
                                                <div class="overlay-icon">
                                                    <div class="text-white">
                                                        <a href="{{ route('pages.products.show', $product->id) }}"><i
                                                                class="fa fa-link icon-bx-xs"></i></a>

                                                        <span
                                                            data-src="{{ url('/') }}/public/uploads/{{ $product->image }}"
                                                            class="check-km"
                                                            title="{{ $product->name }}"
                                                            data-title="{{ $product->name }}">
                                                            <i class="fa fa-image icon-bx-xs"></i>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="dez-info p-a30 bg-white">
                                            <p class="dez-title m-t0">
                                                @if(Session::get('locale') === 'en')
                                                    <a href="{{ route('pages.products.show', $product->id) }}">{{ $product->name }}</a>
                                                @else
                                                    <a href="{{ route('pages.products.show', $product->id) }}">{{ $product->name_ar }}</a>
                                                @endif
                                            </p>
                                        </div>
                                    </div>
                                </li>
                            @endforeach
                        </ul>
                    </div>

                </div>
            </div>
        </div>
        <!-- contact area END -->
    </div>


    <div class="modal fade" id="model" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                            aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title"></h4>
                </div>
                <div class="modal-body">
                    <img src="" class="modal-image" alt="">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
@endsection

@section('scripts')
    <script>
        $('.modal').on('shown.bs.modal', function () {
            let image = $(this).data('src');
            let title = $(this).data('title');

            $('.modal-image').attr('src', image);
            $('.modal-title').text(title);
        });
    </script>
@endsection
