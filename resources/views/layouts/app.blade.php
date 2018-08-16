<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}" >
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>@yield('title', 'Rice Studio') - {{ setting('site_name', '水稻 - Powered by RiceStudio') }}</title>
        <meta name="keyword" content="@yield('keyword', setting('seo_keyword', '水稻工作室,北京网站建设'))" />


        <meta name="description" content="@yield('description',  setting('seo_description', '水稻 - Powered by RiceStudio'))" />
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">

        <link href="{{ asset('plugins/font-awesome/css/font-awesome.css') }}" rel="stylesheet">
        <link href="{{ asset('css/green.css') }}" rel="stylesheet">
        @yield('styles')

    </head>
    <body >

        <div class="wrapper {{ route_class() }}-page">
            <!-- HEADER -->
            @include('layouts._header')

            @if( display_container() )
                <div class="container independent">
                    @include('layouts._message')
                    @yield('content')
                </div>
            @else
                @yield('content')
            @endif

        </div>
        <!-- FOOTER -->
        @include('layouts._footer')


        @if (app()->isLocal())
            @include('sudosu::user-selector')
        @endif

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}"></script>
        <script src="{{ asset('plugins/bootstrap-hover-dropdown.min.js') }}"></script>
        @yield('scripts')
    </body>
</html>
