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
<footer>
    <div class="container">
        <div class="logo"><img src="{{ asset('images/trainable-logo.png')}} " alt=""></div>
        <div class="links">
            <div class="link">
                <h5>
                    About Us
                </h5>
                <p>
                    shshgjljshdlsh sdljhlsdjhl hjlhsd
                </p>
            </div>
            <div class="link">
                <h5>
                    Our Location
                </h5>
                <p>
                    24 S Henry Street, Flandreau,sd, 53028  United States
                </p>
            </div>

        </div>
        <div class="contact">
            <a style="text-decoration: none" href="#">Contact</a>
        </div>
    </div>
    <div class="copyright">
        © Copyright 2021 RentMeNow
    </div>

</footer>
</body>
</html>
