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
                                <h2 style="text-align: center;">SOLICITUD</h2>
                                <x-auth-validation-errors class="mb-4" :errors="$errors" />
                                <form action="{{ route('solicitud.store') }}" method="POST">
                                    @csrf
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="mb-3"><label class="form-label">Carnet</label><input
                                                    placeholder="Ingrese carnet" autocomplete="off" required=""
                                                    type="text" id="Carnet" name="Carnet" class="mb-0 form-control">
                                            </div>
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
                                                <label class="form-label">Celular</label>
                                                <input placeholder="Introduce celular" autocomplete="off" required=""
                                                    type="tel" id="Celular" name="Celular" class="mb-0 form-control"
                                                    title="Introduce un número de 10 dígitos">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="mb-3"><label class="form-label">Fecha de nacimiento</label><input
                                                    placeholder="{{ __('authentication.first_name') }}" autocomplete="off"
                                                    required="" type="date" id="fechaNacimiento"
                                                    name="fechaNacimiento" class="mb-0 form-control"></div>
                                        </div>
                                    </div>
                                    <div class="d-flex justify-content-center">
                                        <button type="submit"
                                            class="btn btn-primary my-2">{{ __('authentication.sign_up') }}</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
