<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="@yield('style')">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>@yield('title')</title>
</head>
<body>
<nav class="navbar">
    <a href="/demands"><img class="navbar__logo" src="{{asset('images/trainable-logo.png')}}" alt="trainable-logo"></a>
    <ul class="navbar__links">
        <li class="navbar__item"><a href="/demands">{{ __('Demands') }}</a></li>
        <li class="navbar__item"><a href="/offers">{{ __('Offers') }}</a></li>
        <li class="navbar__item">
            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
                <input type="submit" value="{{ __('logout') }}" />
            </form>
        </li>
    </ul>
</nav>
    @yield('content')
</body>
</html>
