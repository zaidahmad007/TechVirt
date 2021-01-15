@extends('welcome')
@section('content')
<div style="justify-content: center;display:flex;margin-top:30px;margin-bottom:30px;padding:30px;">
    <div class=""><img src="images/h1.png" style="height: 100px;width:110px;margin-right:-30px"></div>
<form method="POST" class="" action="{{ route('login') }}" style="box-shadow: rgba(50, 50, 93, 0.25) 0px 50px 100px -20px, rgba(0, 0, 0, 0.3) 0px 30px 60px -30px, rgba(10, 37, 64, 0.35) 0px -2px 6px 0px inset;width:37%;padding:30px">
    @csrf

    <!-- Email Address -->
    <div >
        <x-label for="email" :value="__('Email*')" />

        <x-input class="" id="email"  class="block mt-1 w-full form-control col-12" type="email" name="email" :value="old('email')" required autofocus />
    </div>

    <!-- Password -->
    <div class="mt-4">
        <x-label for="password" :value="__('Password*')" />

        <x-input id="password" class="block mt-1 w-full form-control col-12"
                        type="password"
                        name="password"
                        required autocomplete="current-password" />
    </div>

    <!-- Remember Me -->
    <div class="block mt-4">
        <label for="remember_me" class="inline-flex items-center">
            <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" name="remember">
            <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
        </label>
    </div>

    <div class="flex items-center justify-end mt-4">
        @if (Route::has('password.request'))
            <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                {{ __('Forgot your password?') }}
            </a>
        @endif

        <x-button class="ml-3 mb-1 btn" style="background: rgb(27, 26, 26)">
            {{ __('Login') }}
        </x-button>
    </div>
</form>
</div>
@endsection
