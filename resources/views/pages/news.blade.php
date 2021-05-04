@extends('main')
@section('title', 'Alltech News')

@section('content')
    <div class="page-content bg-white">
        <!-- inner page banner -->
        <div class="dlab-bnr-inr overlay-black-middle text-center bg-pt"
             style="background-image:url({{ url('/') }}/public/images/background/bg2.jpg);">
            <div class="container">
                <div class="dlab-bnr-inr-entry align-m text-center">
                    <h1 class="text-white">@lang('lang.news.1')</h1>
                    <!-- Breadcrumb row -->
                    <div class="breadcrumb-row">
                        <ul class="list-inline">
                            <li><a href="{{ route('pages.home') }}">@lang('lang.news.2')</a></li>
                            <li>@lang('lang.news.3')</li>

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

                    <div class="row">
                        @foreach($news as $n)
                            <div class="col-md-4">
                                <div class="blog-post post-style-1">
                                    <div class="dlab-post-media dlab-img-effect rotate">
                                        <a href="{{ route('pages.news.show', $n->id) }}"><img class="news--image" src="{{ url('/') }}/public/uploads/{{ $n->image }}" alt=""></a>
                                    </div>
                                    <div class="dlab-post-info">
                                        <div class="dlab-post-meta">
                                            <ul>
                                                <li class="post-date"> <strong>{{ $n->created_at->diffForHumans() }}</strong> </li>
                                                @if(Session::get('locale') === 'en')
                                                    <li class="post-author"> {{ $n->category->name }} </li>
                                                @else
                                                    <li class="post-author"> {{ $n->category->name_ar }} </li>
                                                @endif
                                            </ul>
                                        </div>
                                        <div class="dlab-post-title">
                                            @if(Session::get('locale') === 'en')
                                                <h3 class="post-title"><a href="{{ route('pages.news.show', $n->id) }}">{{ $n->name }}</a></h3>
                                            @else
                                                <h3 class="post-title"><a href="{{ route('pages.news.show', $n->id) }}">{{ $n->name_ar }}</a></h3>
                                            @endif
                                        </div>
                                        <div class="dlab-post-readmore">
                                            <a href="{{ route('pages.news.show', $n->id) }}" title="READ MORE" rel="bookmark" class="site-button btnhover13">@lang('lang.news.4')</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
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
