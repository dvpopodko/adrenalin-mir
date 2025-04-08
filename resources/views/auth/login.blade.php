@extends('amir.amirbase')
@section('content')

    <section class="breadcrumb-section set-bg" data-setbg="img/breadcrumb-bg.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb-text">
                        <h2>Добро пожаловать</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>

        <section class="contact-section spad">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">

                    </div>
                    <div class="col-lg-6">
                        <div class="leave-comment">
                            <form method="POST" action="{{ route('login') }}">
                                @csrf
                                <!-- Email Address -->
                                  <div>
                                    <x-input-label for="email" :value="__('Email')" />
                                    <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
                                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                                </div>

                                <!-- Password -->
                                <div class="mt-4">
                                    <x-input-label for="password" :value="__('Пароль')" />

                                    <x-text-input id="password" class="block mt-1 w-full"
                                                  type="password"
                                                  name="password"
                                                  required autocomplete="current-password" />

                                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                                </div>

                                <!-- Remember Me -->
                                <div class="mt-4 mt-sb" >
                                    <label for="remember_me" class="label-checkbox">
                                        <input id="remember_me" type="checkbox"  name="remember">
                                        <span>{{ __('Запопомни меня') }}</span>
                                    </label>
                                    @if (Route::has('password.request'))
                                        <a class="underline text-sm" href="{{ route('password.request') }}">
                                            {{ __('Забыли пароль?') }}
                                        </a>
                                    @endif
                                </div>

                                <div class="mt-4">
                                    <x-primary-button>
                                        {{ __('Вход') }}
                                    </x-primary-button>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>

            </div>
        </section>
@endsection



