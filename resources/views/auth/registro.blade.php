@extends('layouts.guest')
@section('content')
    <section class="sign-in-page"
        style="background-image: url('{{ asset('dashboard/images/login/email.webp') }}');  background-position:fix ; background-size: cover; background-repeat: no-repeat;">
        <div class="container">
            <div class="justify-content-center align-items-center height-self-center row" style="opacity: 0.9;">
                <div class="align-self-center col-lg-7 col-md-12">
                    <div class="sign-user_card ">
                        <div class="sign-in-page-data">
                            <div class="sign-in-from w-100 m-auto">
                                <x-auth-validation-errors class="mb-4" :errors="$errors" />
                                <form action="{{ route('register.session') }}" method="POST">
                                    @csrf
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="mb-3"><label
                                                    class="form-label">{{ __('authentication.username') }}</label><input
                                                    placeholder="{{ __('authentication.enter_full_name') }}"
                                                    autocomplete="off" required="" type="text" id="username"
                                                    name="username" class="mb-0 form-control"></div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="mb-3"><label
                                                    class="form-label">{{ __('authentication.e_mail') }}</label><input
                                                    placeholder="{{ __('authentication.enter_email') }}" autocomplete="off"
                                                    required="" type="email" id="email" name="email"
                                                    class="mb-0 form-control"></div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="mb-3"><label
                                                    class="form-label">{{ __('authentication.first_name') }}</label><input
                                                    placeholder="{{ __('authentication.first_name') }}" autocomplete="off"
                                                    required="" type="text" id="first_name" name="first_name"
                                                    class="mb-0 form-control"></div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="mb-3"><label
                                                    class="form-label">{{ __('authentication.last_name') }}</label><input
                                                    placeholder="{{ __('authentication.last_name') }}" autocomplete="off"
                                                    required="" type="text" id="last_name" name="last_name"
                                                    class="mb-0 form-control"></div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label class="form-label">{{ __('authentication.password') }}</label>
                                                <input placeholder="{{ __('authentication.password') }}" required
                                                    type="password" id="password" class="mb-0 form-control"
                                                    name="password">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label
                                                    class="form-label">{{ __('authentication.repeat_password') }}</label>
                                                <input placeholder="{{ __('authentication.repeat_password') }}" required
                                                    type="password" id="password_confirmation" class="mb-0 form-control"
                                                    name="password_confirmation">
                                                <!-- Aquí se mostrará el mensaje de error -->
                                                <div id="passwordError" style="color: red; display: none;">Las contraseñas
                                                    no son iguales.</div>
                                            </div>
                                        </div>
                                    </div>
                                    {{-- <div class="form-check my-2"><input type="radio" id="customRadio1" name="customRadio"
                               class="form-check-input"><label class="form-check-label" for="customRadio1">{{__('authentication.premium')}}</label></div>
                         <div class="form-check"><input type="radio" id="customRadio2" name="customRadio"
                               class="form-check-input"><label class="form-check-label" for="customRadio2"> {{__('authentication.basic')}}</label></div>
                         <div class="form-check"><input type="radio" id="customRadio3" name="customRadio"
                               class="form-check-input"><label class="form-check-label"
                               for="customRadio3">{{__('authentication.free-free')}}</label></div> --}}
                                    <button type="submit"
                                        class="btn btn-btn btn-primary my-2">{{ __('authentication.sign_up') }}</button>
                                </form>
                            </div>
                        </div>
                        <div class="mt-3">
                            <div class="d-flex justify-content-center links">
                                {{ __('authentication.already_have_an_account') }} <a class="text-primary ms-2"
                                    href="{{ route('login') }}">{{ __('authentication.sign_in') }}</a> </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Seleccionar los elementos de las contraseñas
        const password = document.getElementById('password');
        const repeatPassword = document.getElementById('password_confirmation');
        const passwordError = document.getElementById('passwordError');

        // Añadir un evento de escucha al campo de repetir contraseña
        repeatPassword.addEventListener('input', function() {
            if (password.value !== repeatPassword.value) {
                // Si las contraseñas no coinciden, mostrar el mensaje de error
                passwordError.style.display = 'block';
            } else {
                // Si coinciden, ocultar el mensaje de error
                passwordError.style.display = 'none';
            }
        });
    });
</script>
