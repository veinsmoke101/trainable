{{--@extends('layouts.app')--}}

{{--@section('content')--}}
{{--<div class="container">--}}
{{--    <div class="row justify-content-center">--}}
{{--        <div class="col-md-8">--}}
{{--            <div class="card">--}}
{{--                <div class="card-header">{{ __('Login') }}</div>--}}

{{--                <div class="card-body">--}}
{{--                    <form method="POST" action="{{ route('login') }}">--}}
{{--                        @csrf--}}

{{--                        <div class="row mb-3">--}}
{{--                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>--}}

{{--                            <div class="col-md-6">--}}
{{--                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>--}}

{{--                                @error('email')--}}
{{--                                    <span class="invalid-feedback" role="alert">--}}
{{--                                        <strong>{{ $message }}</strong>--}}
{{--                                    </span>--}}
{{--                                @enderror--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <div class="row mb-3">--}}
{{--                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>--}}

{{--                            <div class="col-md-6">--}}
{{--                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">--}}

{{--                                @error('password')--}}
{{--                                    <span class="invalid-feedback" role="alert">--}}
{{--                                        <strong>{{ $message }}</strong>--}}
{{--                                    </span>--}}
{{--                                @enderror--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <div class="row mb-3">--}}
{{--                            <div class="col-md-6 offset-md-4">--}}
{{--                                <div class="form-check">--}}
{{--                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>--}}

{{--                                    <label class="form-check-label" for="remember">--}}
{{--                                        {{ __('Remember Me') }}--}}
{{--                                    </label>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <div class="row mb-0">--}}
{{--                            <div class="col-md-8 offset-md-4">--}}
{{--                                <button type="submit" class="btn btn-primary">--}}
{{--                                    {{ __('Login') }}--}}
{{--                                </button>--}}

{{--                                @if (Route::has('password.request'))--}}
{{--                                    <a class="btn btn-link" href="{{ route('password.request') }}">--}}
{{--                                        {{ __('Forgot Your Password?') }}--}}
{{--                                    </a>--}}
{{--                                @endif--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </form>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}
{{--@endsection--}}

@extends('layouts.auth')

@section('style', asset('css/login.css'))



@section('title','login')

@section('content')



    <section class="sideForm">

        <div class="sideForm__container">
            <div class="sideForm__heading">
                <h3 class="sideForm__title">{{ __('Log in.') }}</h3>
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

    <section class="greeting">
        <h1 class="greeting__title">Welcome Back !</h1>
        <img class="greeting__illustration" src="{{asset('images/undraw_indoor_bike_pwa4.svg')}}" alt="login-ils">
    </section>
@endsection

