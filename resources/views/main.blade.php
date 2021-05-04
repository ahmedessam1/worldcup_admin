<!DOCTYPE html>
<html lang="en">
<head>
    <!-- PAGE TITLE HERE -->
    <title>AllTech | @yield('title')</title>
    @include('partials._head')
</head>
<body id="bg">
<div class="page-wraper">
@include('partials._header')
<!-- Content -->
    <div class="page-content bg-white">

        @yield('content')

    </div>
    <!-- Content END-->
    @include('partials._footer')
</div>

@include('partials._scripts')

</body>
</html>
