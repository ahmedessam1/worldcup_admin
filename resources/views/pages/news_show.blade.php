@extends('main')
@section('title')
    {{ $news->name }}
@endsection

@section('content')
    <div class="page-content bg-white">
        <!-- inner page banner -->
        <div class="dlab-bnr-inr overlay-black-middle text-center bg-pt"
             style="background-image:url({{ url('/') }}/public/images/background/bg2.jpg);">
            <div class="container">
                <div class="dlab-bnr-inr-entry align-m text-center">
                    <h1 class="text-white">Latest News</h1>
                    <!-- Breadcrumb row -->
                    <div class="breadcrumb-row">
                        <ul class="list-inline">
                            <li><a href="{{ route('pages.home') }}">Home</a></li>
                            <li>News</li>
                            <li>{{ $news->name }}</li>
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

                    <div class="container max-w900">
                        <!-- blog start -->
                        <div class="blog-post blog-single">
                            <div class="dlab-post-meta m-b20">
                                <ul>
                                    <li class="post-date"> <strong>{{ $news->created_at->diffForHumans() }}</strong></li>
                                    <li class="post-author"> By <a href="javascript:void(0);">{{ $news->category->name }}</a> </li>
                                </ul>
                            </div>
                            <div class="dlab-post-title">
                                <h4 class="post-title m-t0"><a href="#">{{ $news->name }}</a></h4>
                            </div>
                            <div class="dlab-post-media dlab-img-effect zoom-slow">
                                <a href="#"><img src="{{ url('/') }}/public/uploads/{{ $news->image }}" alt=""></a>
                            </div>
                            <div class="dlab-post-text">
                                {!! $news->description !!}
                            </div>
                        </div>
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
