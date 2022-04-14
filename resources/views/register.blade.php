@extends('layouts.auth')

@section('style', asset('css/register.css'))

@section('title','login')

@section('content')

    <section class="greeting">
        <h1 class="greeting__title">Work <span class="greeting__span">Hard !</span> </h1>
        <h1 class="greeting__title"><span class="greeting__span"> Play </span>Hard !</h1>
        <img class="greeting__illustration" src="{{asset('images/undraw_personal_trainer_ote3.svg')}}" alt="login-ils">
    </section>

    <section class="sideForm">
        <div class="sideForm__container">
            <div class="sideForm__heading">
                <h3 class="sideForm__title">{{ __('Sign up.') }}</h3>
                <p class="sideForm__subTitle">{{ __('My mom will be happy to have you with us') }}</p>
            </div>
            <form method="POST" action="{{ route('register') }}" class="sideForm__form">
                @csrf

                <label class="sideForm__label" for="name">
                    {{ __('Enter your full name') }}
                </label>
                <input name="name" id="name" required value="{{ old('name') }}"  type="text" class="sideForm__input sideForm__input--name @error('name') is-invalid @enderror" placeholder="name@example.com">
                @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
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
                <label class="sideForm__label" for="password-confirm">
                    {{ __('Confirm password') }}
                </label>
                <input name="password_confirmation" id="password-confirm" required type="password" class="sideForm__input sideForm__input--password" placeholder="confirm password">

                <input class="sideForm__submit" type="submit" name="submit" value="{{ __('Register') }}">
            </form>
            <hr>
            <p class="sideForm__register"> {{ __('You don’t have an account ?') }} <a href="{{ route('register') }}"> {{ __('Sign up now') }} </a> </p>

        </div>

    </section>



@endsection
