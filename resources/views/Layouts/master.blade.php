<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>@yield('title')</title>
</head>

<body>
    <div class="container" style="text-align: center;">
        <h1 class="display-4">@yield('title')</h1>
    </div>
    <div class="container">
        @yield('l1')
    </div>

    <div class="container">
        @yield('l2')
    </div>

    <div class="container">
        @yield('l3')
    </div>

</body>

</html>
