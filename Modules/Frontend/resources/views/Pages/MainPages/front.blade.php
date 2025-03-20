@extends('frontend::layouts.master')

@section('content')
    <!-- Contenedor de fondo con imagen y video -->
    <div class="relative h-screen">
        <!-- Video de fondo -->
        <div class="absolute inset-0 bg-cover bg-center" style="background-image: url('/frontend/images/wallpaper3.jpg');">
        </div>
        <video autoplay loop muted class="absolute inset-0 w-full h-full object-cover z-0 opacity-40">
            <source src="{{ asset('frontend/fondov3.mp4') }}" type="video/mp4">
        </video>

        <!-- Capa oscura para dar contraste al texto -->
        <div class="absolute inset-0 bg-black opacity-0"></div>

        <!-- Contenido centrado sobre el video y la imagen -->
        <div class="flex items-center justify-center h-full text-white text-center">
            <div
                class="px-10 py-8 bg-white bg-opacity-60 rounded-3xl shadow-2xl transform transition-all duration-700 ease-out scale-95 hover:scale-100 animate-fadeIn">
                <h1 class="text-6xl font-extrabold mb-6 text-black text-shadow-xl animate-slideInUp">¡Sistema de correo
                    institucional!</h1>
                <p class="text-xl mb-8 text-black opacity-90 animate-fadeIn">Estamos emocionados de tenerte con nosotros.
                    Comienza realizando tu registro.</p>
                <a href="{{ route('register') }}"
                    class="mt-6 inline-block px-14 py-6 bg-red-600 text-white font-semibold rounded-full transition duration-300 hover:bg-white hover:text-red-600 hover:shadow-2xl transform hover:scale-110 hover:translate-y-1 text-2xl">Realiza
                    tu solicitud</a>
            </div>
        </div>
    </div>

    <style>
        /* Animación de desvanecimiento */
        @keyframes fadeIn {
            0% {
                opacity: 0;
            }

            100% {
                opacity: 1;
            }
        }

        /* Animación de deslizamiento hacia arriba */
        @keyframes slideInUp {
            0% {
                transform: translateY(20px);
                opacity: 0;
            }

            100% {
                transform: translateY(0);
                opacity: 1;
            }
        }

        /* Aplicación de las animaciones */
        .animate-fadeIn {
            animation: fadeIn 1s ease-in-out;
        }

        .animate-slideInUp {
            animation: slideInUp 0.8s ease-out;
        }

        /* Sombra suave en el texto */
        .text-shadow-xl {
            text-shadow: 4px 4px 15px rgba(0, 0, 0, 0.6);
        }

        /* Fondo parallax en el fondo */
        .bg-cover {
            background-position: center center;
            background-attachment: fixed;
        }
    </style>
@endsection
