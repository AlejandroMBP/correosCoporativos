<!-- resources/views/frontend/partials/header.blade.php -->
<header id="header" class="bg-black text-white shadow-lg fixed w-full top-0 left-0 z-50 transition-all duration-300">
    <!-- Barra de navegación -->
    <nav class="max-w-7xl mx-auto flex justify-between items-center px-4 py-6">
        <!-- Logo -->
        <a href="/"
            class="text-2xl font-bold text-white hover:text-red-600 transition-all duration-500 ease-in-out delay-150 flex items-center space-x-2"
            style="font-family: 'Poppins', sans-serif;">
            <img src="{{ asset('frontend/images/footer/logouticfooter.png') }}" alt="Logo"
                class="w-12 h-12 transition-all duration-500 ease-in-out">
            <span>CORREOS U-TIC</span>
        </a>



        <!-- Menú de navegación -->
        <div class="hidden sm:flex space-x-6">
            @if (auth()->user())
                <a href="{{ route('logout') }}" class="text-xl hover:text-red-500 transition duration-300">Cerrar
                    sesión</a>
            @else
                <a href="{{ route('login') }}" class="text-xl hover:text-red-500 transition duration-300">Iniciar
                    sesión</a>
            @endif
        </div>

        <!-- Botón de menú para móvil -->
        <div class="sm:hidden">
            <button id="menuButton" class="text-2xl" aria-label="Abrir menú">
                <i class="fas fa-bars"></i>
            </button>
        </div>
    </nav>

    <!-- Menú móvil (se oculta por defecto) -->
    <div id="mobileMenu"
        class="sm:hidden hidden bg-black/80 text-white py-4 absolute top-25 left-0 w-full z-50 transform translate-x-full transition-transform duration-300 ease-in-out">

        @if (auth()->user())
            <a
                href="{{ route('logout') }}"class="block text-lg font-medium text-center py-2 hover:text-red-500 transition duration-300">Cerrar
                sesión</a>
        @else
            <a
                href="{{ route('login') }}"class="block text-lg font-medium text-center py-2 hover:text-red-500 transition duration-300">Iniciar
                sesión</a>
        @endif

    </div>
</header>

<!-- Estilo adicional -->
<style>
    .text-primary {
        color: #00bcd4;
    }

    /* Animación del menú móvil */
    @keyframes slideIn {
        0% {
            transform: translateX(100%);
        }

        100% {
            transform: translateX(0);
        }
    }

    .menu-mobile {
        animation: slideIn 0.3s ease-in-out;
    }

    /* Efecto al hacer scroll: cambiar color de fondo del header */
    .header-scrolled {
        background-color: rgba(0, 0, 0, 0.8);
        /* Fondo semi-transparente */
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.2);
        /* Sombra */
    }

    /* Efecto de pegado del header */
    .fixed {
        position: fixed;
        top: 0;
        left: 0;
        right: 0;
    }

    /* Ajuste del padding cuando el header es fijo */
    .header-padding {
        padding-top: 80px;
    }
</style>

<!-- Agregar FontAwesome para los iconos -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">

<script>
    // Cambiar el fondo del header al hacer scroll
    window.onscroll = function() {
        let header = document.getElementById('header');
        let scrollPosition = window.scrollY;

        if (scrollPosition > 50) {
            header.classList.add('header-scrolled');
        } else {
            header.classList.remove('header-scrolled');
        }
    };

    // Mostrar u ocultar el menú al hacer clic en el botón del menú móvil
    const menuButton = document.getElementById('menuButton');
    const mobileMenu = document.getElementById('mobileMenu');

    menuButton.addEventListener('click', () => {
        mobileMenu.classList.toggle('hidden'); // Alterna entre ocultar y mostrar el menú
        mobileMenu.classList.toggle('translate-x-full'); // Animación de deslizamiento
    });
</script>
