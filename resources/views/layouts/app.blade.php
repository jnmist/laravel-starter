<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('meta-title', 'Home')  | {{ config('app.name', 'Laravel') }}</title>

    <meta name="robots" content="noarchive">
    <meta name="googlebot" content="noarchive" />
    <link rel="apple-touch-icon" href="/favicon.png">

    <script src="{{ asset('js/app.js') }}" defer></script>

    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <script src="https://kit.fontawesome.com/be9e885787.js" crossorigin="anonymous"></script>

    @yield('head')
</head>
<body id="top" class="imladris">

@section('master-content')
    {{-- master content that shows up on all pages --}}
@show

<div id="app">
    @include('layouts/nav')

    <main class="py-4">
        @yield('content')
    </main>

</div>

@section('js')
@endsection
</body>
</html>
