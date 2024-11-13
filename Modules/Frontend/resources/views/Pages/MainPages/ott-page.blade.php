@extends('frontend::layouts.master', ['isSwiperSlider' => true, 'IS_MEGA' => true])

@section('content')
    <div class="iq-banner-thumb-slider">
        <div class="slider">
            <div class="position-relative slider-bg d-flex justify-content-end">

                <div class="position-relative my-auto">
                    <div class="horizontal_thumb_slider" data-swiper="slider-thumbs-ott">
                        <div class="banner-thumb-slider-nav">
                            <div class="swiper-container " data-swiper="slider-thumbs-inner-ott">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide swiper-bg">
                                        <div class="block-images position-relative ">
                                            <div class="img-box">
                                                <img src="{{ asset('frontend/images/movies/utic.webp') }}" class="img-fluid"
                                                    alt="" loading="lazy">
                                                <div class="block-description ps-3">
                                                    {{-- <h6 class="iq-title fw-500 mb-0">{{ __('otthome.the_hunter') }}</h6> --}}
                                                    <h6 class="iq-title fw-500 mb-0">Como Registrarse</h6>
                                                    <span class="fs-12">Tutorial</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide swiper-bg">
                                        <div class="block-images position-relative ">
                                            <div class="img-box">
                                                <img src="{{ asset('frontend/images/movies/utic3.webp') }}"
                                                    class="img-fluid" alt="" loading="lazy">
                                                <div class="block-description">
                                                    {{-- <h6 class="iq-title fw-500 mb-0">{{ __('otthome.the_mandalorian') }}</h6> --}}
                                                    <h6 class="iq-title fw-500 mb-0">Como verifico mi correo</h6>
                                                    <span class="fs-12">Tutorial</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide swiper-bg">
                                        <div class="block-images position-relative ">
                                            <div class="img-box">
                                                <img src="{{ asset('frontend/images/movies/utic2-.webp') }}"
                                                    class="img-fluid" alt="" loading="lazy">
                                                <div class="block-description">
                                                    <h6 class="iq-title fw-500 mb-0">Que es el Correo Corporativo?
                                                    </h6>
                                                    <span class="fs-12">Informacion</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="slider-prev swiper-button">
                                <i class="iconly-Arrow-Left-2 icli"></i>
                            </div>
                            <div class="slider-next swiper-button">
                                <i class="iconly-Arrow-Right-2 icli"></i>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- fin de carrusel --}}
                {{-- comienso de contenido --}}
                <div class="slider-images" data-swiper="slider-images-ott">
                    <div class="swiper-container" data-swiper="slider-images-inner-ott">
                        <div class="swiper-wrapper m-0">
                            <div class="swiper-slide p-0">
                                <div class="slider--image block-images">
                                    <img src="{{ asset('frontend/images/movies/utic.webp') }}" loading="lazy"
                                        alt="banner" />
                                </div>
                                <div class="description">
                                    <div class="row align-items-center h-100">
                                        <div class="col-lg-6 col-md-12">
                                            <div class="slider-content">
                                                <div class="d-flex align-items-center RightAnimate mb-3">
                                                    <span
                                                        class="badge rounded-0 text-dark text-uppercase px-3 py-2 me-3 bg-white mr-3">Paginas</span>
                                                    <ul
                                                        class="p-0 mb-0 list-inline d-flex flex-wrap align-items-center movie-tag">
                                                        <li
                                                            class="position-relative text-capitalize font-size-14 letter-spacing-1">
                                                            <a href="https://www.upea.edu.bo/" class="text-decoration-none"
                                                                target="_blank">UPEA</a>
                                                        </li>
                                                        <li
                                                            class="position-relative text-capitalize font-size-14 letter-spacing-1">
                                                            <a href="http://utic.upea.bo/" class="text-decoration-none"
                                                                target="_blank">U-tic</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <h1 style="background-image: url('{{ asset('frontend/images/pages/textura.webp') }}');"
                                                    class="texture-text big-font letter-spacing-1 line-count-1 text-capitalize RightAnimate-two">
                                                    {{ __('otthome.how_to_register') }}</h1>
                                                <p class="line-count-3 RightAnimate-two">
                                                    {{ __('otthome.how_to_register_content') }}</p>
                                            </div>
                                            <div class="RightAnimate-four">
                                                @include('frontend::components.widgets.custom-button', [
                                                    'buttonTitle' => __('otthome.stream_now'),
                                                    'buttonUrl' => 'movie-detail',
                                                ])
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide p-0">
                                <div class="slider--image block-images">
                                    <img src="{{ asset('frontend/images/movies/utic3.webp') }}" loading="lazy"
                                        alt="" />
                                </div>
                                <div class="description">
                                    <div class="row align-items-center h-100">
                                        <div class="col-lg-6 col-md-12">
                                            <div class="slider-content">
                                                <div class="d-flex align-items-center RightAnimate mb-3">
                                                    <span
                                                        class="badge rounded-0 text-dark text-uppercase px-3 py-2 me-3 bg-white mr-3">Paginas</span>
                                                    <ul
                                                        class="p-0 mb-0 list-inline d-flex flex-wrap align-items-center movie-tag">
                                                        <li
                                                            class="position-relative text-capitalize font-size-14 letter-spacing-1">
                                                            <a href="https://www.upea.edu.bo/" class="text-decoration-none"
                                                                target="_blank">UPEA</a>
                                                        </li>
                                                        <li
                                                            class="position-relative text-capitalize font-size-14 letter-spacing-1">
                                                            <a href="http://utic.upea.bo/" class="text-decoration-none"
                                                                target="_blank">U-tic</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <h1 style="background-image: url('{{ asset('frontend/images/pages/textura.webp') }}');"
                                                    class="texture-text big-font letter-spacing-1 line-count-1 text-capitalize RightAnimate-two">
                                                    {{ __('otthome.how_to_verify_email') }}</h1>
                                                <p class="line-count-3 RightAnimate-two">
                                                    {{ __('otthome.how_to_verify_email_content') }}</p>
                                            </div>
                                            <div class="RightAnimate-four">
                                                @include('frontend::components.widgets.custom-button')
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide p-0">
                                <div class="slider--image block-images">
                                    <img src="{{ asset('frontend/images/movies/utic2-.webp') }}" loading="lazy"
                                        alt="" />
                                </div>
                                <div class="description">
                                    <div class="row align-items-center h-100">
                                        <div class="col-lg-6 col-md-12">
                                            <div class="slider-content">
                                                <div class="d-flex align-items-center RightAnimate mb-3">
                                                    <span
                                                        class="badge rounded-0 text-dark text-uppercase px-3 py-2 me-3 bg-white mr-3">Paginas</span>
                                                    <ul
                                                        class="p-0 mb-0 list-inline d-flex flex-wrap align-items-center movie-tag">
                                                        <li
                                                            class="position-relative text-capitalize font-size-14 letter-spacing-1">
                                                            <a href="https://www.upea.edu.bo/"
                                                                class="text-decoration-none" target="_blank">UPEA</a>
                                                        </li>
                                                        <li
                                                            class="position-relative text-capitalize font-size-14 letter-spacing-1">
                                                            <a href="http://utic.upea.bo/" class="text-decoration-none"
                                                                target="_blank">U-tic</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <h2 style="
                                                background-image: url('{{ asset('frontend/images/pages/textura.webp') }}');                                            "
                                                    class="texture-text big-font letter-spacing-1 line-count-1 text-capitalize RightAnimate-two">
                                                    {{ __('otthome.what_is_corporate_email') }}</h2>
                                                <p class="line-count-3 RightAnimate-two">
                                                    {{ __('otthome.what_is_corporate_email_content') }}</p>
                                            </div>
                                            <div class="RightAnimate-four">
                                                @include('frontend::components.widgets.custom-button', [
                                                    'buttonTitle' => __('otthome.stream_now'),
                                                    'buttonUrl' => 'movie-detail',
                                                ])
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
