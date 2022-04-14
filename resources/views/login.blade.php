@extends('layouts.auth')
@section('style')
    <link rel="stylesheet" href="{{asset('css/login.css')}}">
@endsection
@section('title','login')

@section('content')

    <section class="greeting">
        <h1 class="greeting__title">Welcome Back !</h1>
        <img class="greeting__illustration" src="{{asset('images/undraw_indoor_bike_pwa4.svg')}}" alt="login-ils">
    </section>

    <section class="sideForm">

        <div class="sideForm__container">
            <div class="sideForm__heading">
                <h3 class="sideForm__title">{{ __('Log sir awa sir logi.') }}</h3>
                <p class="sideForm__subTitle">{{ __('Log in your information that you entered during your registration') }}</p>
            </div>
            <form method="POST" action="{{ route('login') }}" class="sideForm__form">
                @csrf
                <label class="sideForm__label" for="email">
                    {{ __('Enter your email address') }}
                </label>
                <input name="email" id="email" required value="{{ old('email') }}"  type="email" class="sideForm__input sideForm__input--email @error('email') is-invalid @enderror" placeholder="name@example.com">
                @error('email')
                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                @enderror
                <label class="sideForm__label" for="password">
                    {{ __('Enter your password') }}
                </label>
                <input name="password" id="password" required type="password" class="sideForm__input sideForm__input--password @error('password') is-invalid @enderror" placeholder="at least 8 characters">
                @error('password')
                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                @enderror
                @if (Route::has('password.request'))
                    <a class="sideForm__forgotPassword" href="{{ route('password.request') }}">
                        {{ __('forgot your password ?') }}
                    </a>
                @endif
                <input class="sideForm__submit" type="submit" name="submit" value="{{ __('Sign in') }}">
            </form>
            <hr>
            <p class="sideForm__register"> {{ __('You don’t have an account ?') }} <a href="{{ route('register') }}"> {{ __('Sign up now') }} </a> </p>

        </div>

    </section>


@endsection
