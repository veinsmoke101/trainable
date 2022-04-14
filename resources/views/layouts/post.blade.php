<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="@yield('style')">
    <title>@yield('title')</title>
</head>
<body>
<nav class="navbar">
    <img class="navbar__logo" src="{{asset('images/trainable-logo.png')}}" alt="trainable-logo">
    <ul class="navbar__links">
        <li class="navbar__item"><a href="">{{ __('Demands') }}</a></li>
        <li class="navbar__item"><a href="">{{ __('Offers') }}</a></li>
        <li class="navbar__item"><a href="">{{ __('logout') }}</a></li>
    </ul>
</nav>
    @yield('content')
</body>
</html>
