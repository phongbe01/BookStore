<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    @include('layouts.main')
</head>
<body style="">
    <div id="app">
        <div class="wrap">
            <div class="header">
                @include('layouts.header')
            </div>
            <div class="main">
                @yield('content')
            </div>
        </div>
        @include('layouts.footer')
    </div>
</body>
</html>
