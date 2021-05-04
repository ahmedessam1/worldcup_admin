<!doctype html>
    <html lang="en" class="h-100">

    @include('dashboard.partials._head')
    <body class="d-flex flex-column h-100">

    @include('dashboard.partials._header')

    <div class="container">
        @include('dashboard.partials._messages')
    </div>
    @yield('content')


    @include('dashboard.partials._footer')

    @include('dashboard.partials._scripts')

    @yield('scripts')
    </body>
</html>
