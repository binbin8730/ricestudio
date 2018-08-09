<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}" >
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>@yield('title', 'Rice Studio') - 水稻工作室</title>

        <link href="{{ asset('css/app.css') }}" rel="stylesheet">

        <link href="{{ asset('plugins/font-awesome/css/font-awesome.css') }}" rel="stylesheet">
        <link href="{{ asset('css/green.css') }}" rel="stylesheet">
        @yield('style')

    </head>
    <body >

        <div class="wrapper {{ route_class() }}-page">
            <!-- HEADER -->
            @include('layouts._header')

            @yield('content')

            <!-- FOOTER -->
            @include('layouts._footer')
        </div>

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}"></script>
        <script src="{{ asset('plugins/bootstrap-hover-dropdown.min.js') }}"></script>
        @yield('script')
    </body>
</html>
