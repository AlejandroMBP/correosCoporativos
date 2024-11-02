@extends('layouts.guest')

@section('content')
    <section class="sign-in-page"
        style="background-image: url('{{ asset('dashboard/images/login/verificacionEmail.webp') }}')">
        <div class="h-100 container">
            <div class="justify-content-center align-items-center h-100 row">
                <div class="col-12  col-md-6 col-sm-12">
                    <div class="sign-user_card ">
                        <div class="sign-in-page-data">
                            <div class="sign-in-from w-100 m-auto"><img
                                    src="{{ asset('dashboard/images/dashboard/login/mail.png') }}" width="80"
                                    alt="" loading="lazy">
                                <h3 class="mt-3 mb-2">{{ __('authentication.success') }}</h3>
                                <p class="text-white mb-3">
                                    Hemos enviado un correo electrónico a
                                    <a role="button" href="mailto:{{ auth()->user()->email }}"
                                        class="text-primary fw-bold">
                                        {{ auth()->user()->email }}
                                    </a>.
                                </p>
                                <p class="text-white">
                                    ¡Gracias por registrarte! Antes de comenzar, verifica tu dirección de correo electrónico
                                    haciendo clic en el enlace que te enviamos. Si no recibiste el correo, podemos enviarte
                                    uno nuevo.
                                </p>
                                <div class="mt-4 flex items-center justify-between">
                                    <form method="POST" action="{{ route('verification.send') }}">
                                        @csrf

                                        <div>
                                            <x-button>
                                                {{ __('Resend Verification Email') }}
                                            </x-button>
                                        </div>
                                    </form>

                                    <form method="POST" action="{{ route('logout') }}">
                                        @csrf

                                        <x-button type="submit" class="mt-4 flex items-center justify-between">
                                            {{ __('Log Out') }}
                                        </x-button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
