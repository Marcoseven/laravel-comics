<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Comics</title>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    @yield('custom-css')
</head>

<body>
    <!-- #site_header -->
    @include('partials.header')
    <!-- /#site_header -->

    <!-- #site_main -->
    @include('partials.main')
    <!-- /#site_main -->

    <!-- #site_footer -->
    <!-- /#site_footer -->
</body>
</html>
