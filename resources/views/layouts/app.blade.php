<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link href="https://cdn.lineicons.com/3.0/lineicons.css" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body class="bg-gray-100">
<div class="bg-gray-200 grid grid-cols-3 items-center py-2 shadow">
    <div class="grid grid-cols-6 text-center">
        <a href="{{ route('home') }}" class="col-span-2">
            <img src="/images/logo_purple.png" alt="logo" class="px-5 max-h-9"/>
        </a>
        <div class="mt-1">
            <a href="#" class="text-header">Dashboards <i class="lni lni-chevron-down text-sm"></i></a>
        </div>
        <div class="mt-1">
            <a href="#" class="text-header">Links</a>
        </div>
        <div class="mt-1">
            <a href="#" class="text-header">Campaigns</a>
        </div>
        <div class="mt-1">
            <a href="#" class="text-header">Targets</a>
        </div>
    </div>
    <div class="text-center">
        <input type="text"
               class="bg-white rounded-full px-4 py-2 border focus:outline-none focus:border-purple hover:border-purple w-96 pr-10"
               value=""/>
        <i class="lni lni-search-alt right top-4 -translate-x-8 bg-white"></i>
    </div>
    <div class="pr-8 text-right">
        <span class="align-center relative bottom-1 mr-1">Mr A N Other</span>
        <a href="#" class="hover:text-purple">
            <i class="lni lni-user bg-white rounded-full text-3xl text-purple border hover:border-purple"></i>
            <i class="lni lni-chevron-down pl-1 text-sm relative bottom-1"></i>
        </a>
    </div>
</div>
<div class="p-5">
    @yield('content')
</div>
</body>
</html>
