<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1,user-scalable=no,shrink-to-fit=no">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    {{-- SEO --}}
    <meta name="description" content="@yield('PageDescription')">
    <meta name="keywords" content="@yield('PageKeywords')">
    <meta name="author" content="Nasar Basha nasarbashag1995@gmail.com bananamedia.net">
    {{-- Stylesheets --}}
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset('js/alpine.js') }}" defer></script>
     @stack('scripts')
    {{-- <script src="{{ asset('js/Swup.js') }}" defer></script> --}}
    <script src="{{ asset('js/turbolinks.js') }}" defer></script>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/Style.css') }}" rel="stylesheet">
    <link href="{{ asset('css/tw.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/slick/slick.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/slick/slick-theme.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.1/css/all.css"
        integrity="sha384-O8whS3fhG2OnA5Kas0Y9l3cfpmYjapjI0E4theH4iuMD+pLhbf6JI0jIMfYcK3yZ" crossorigin="anonymous">
    <livewire:styles>
        {{-- page title --}}
        <title>@yield('PageTitle')</title>
</head>

<body class="tracking-widest">
    @livewire('components.header')
    @livewire('components.main-page-navigations')
    {{-- page contents --}}
        @yield('PageBody')
    {{-- footer --}}
    @livewire('components.footer')
    {{-- Scripts --}}
    <livewire:scripts>

</body>

</html>