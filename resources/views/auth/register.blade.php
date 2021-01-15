
@extends('welcome')
        <!-- Validation Errors -->

@section('content')
<div style="justify-content: center;display:flex;margin-top:30px;margin-bottom:30px;">
<div ><img src="images/regis.png" style="height: 150px;width:140px;margin-right:-40px"></div>

        <form method="POST" action="{{ route('register') }}" style="padding:30px;box-shadow: rgba(50, 50, 93, 0.25) 0px 50px 100px -20px, rgba(0, 0, 0, 0.3) 0px 30px 60px -30px, rgba(10, 37, 64, 0.35) 0px -2px 6px 0px inset;width:37%;padding:10px">
            @csrf

            <!-- Name -->
            <div >
                <x-label for="name" :value="__('Name*')" />

                <x-input id="name" class="block mt-1 w-full form-control" type="text" name="name" :value="old('name')" required autofocus />
            </div>

            <!-- Email Address -->
            <div class="mt-4" >
                <x-label for="email" :value="__('Email*')" />

                <x-input id="email" class="block mt-1 w-full form-control" type="email" name="email" :value="old('email')" required />
            </div>

            <!-- Password -->
            <div class="mt-4" class="form-control">
                <x-label for="password" :value="__('Password*')" />

                <x-input id="password" class="block mt-1 w-full form-control"
                                type="password"
                                name="password"
                                required autocomplete="new-password" />
            </div>

            <!-- Confirm Password -->
            <div class="mt-4" class="">
                <x-label for="password_confirmation" :value="__('Confirm Password*')" />

                <x-input id="password_confirmation" class="block mt-1 w-full form-control"
                                type="password"
                                name="password_confirmation" required />
            </div>

            <div class="flex items-center justify-end mt-4" >
                <a class="underline text-sm text-gray-600 hover:text-gray-900"  href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

                <x-button class="ml-4 btn" style="background: black">
                    {{ __('Register') }}
                </x-button>
            </div>
        </form>
</div>
        @endsection
