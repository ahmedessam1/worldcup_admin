@extends('main')
@section('title')
    {{ $product->name }}
@endsection

@section('content')
    <div class="page-content bg-white">
        <!-- inner page banner -->
        <div class="dlab-bnr-inr overlay-black-middle text-center bg-pt"
             style="background-image:url({{ url('/') }}/public/images/background/bg2.jpg);">
            <div class="container">
                <div class="dlab-bnr-inr-entry align-m text-center">
                    <h1 class="text-white">{{ $product->name }}</h1>
                    <!-- Breadcrumb row -->
                    <div class="breadcrumb-row">
                        <ul class="list-inline">
                            <li><a href="{{ route('pages.home') }}">Home</a></li>
                            <li>Products</li>
                            <li>{{ $product->name }}</li>
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
                        <div class="col-lg-6 m-b30">
                            <h2 class="text-black font-weight-600 m-b15">{{ $product->name }}</h2>
                            {!! $product->description !!}
                        </div>
                        <div class="col-lg-6">
                            <div class="row">
                                <div class="col-lg-12 m-b30">
                                    <img alt="" src="{{ url('/') }}/public/uploads/{{ $product->image }}">
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

@section('scripts')
<script>

</script>
@endsection
