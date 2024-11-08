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
                                <h2 style="text-align: center;">SU SOLICITUD SE AREALISADO EXITOSAMENTE</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
