<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    @yield('custom-css')
    <title>DC Comics @yield('page-title', 'comics website')</title>
</head>

<body>
    <!-- #site_header -->
    @include('partials.header')
    <!-- /#site_header -->

    <!-- #site_main -->
    <main id="site_main">
        @yield('content')
    </main>
    <!-- /#site_main -->

    <!-- #site_footer -->
    @include('partials.footer')
    <!-- /#site_footer -->
</body>
</html>
