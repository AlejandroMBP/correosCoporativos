<!-- resources/views/frontend/partials/footer.blade.php -->
<footer class="relative bg-black py-16">
    <!-- Video en el fondo -->
    <video class="absolute inset-0 w-full h-full object-cover opacity-60" autoplay loop muted>
        <source src="{{ asset('frontend/images/footer/footerv2.mp4') }}" type="video/mp4">
        Tu navegador no soporta el formato de video.
    </video>

    <div class="max-w-7xl mx-auto flex flex-wrap justify-between items-center text-white relative z-10">
        <!-- Logo a la izquierda -->
        <div class="flex items-center mb-6 sm:mb-0 w-full sm:w-auto text-center sm:text-left">
            <img src="{{ asset('frontend/images/footer/logouticfooter.png') }}" alt="Logo"
                class="w-60 h-auto animate-rotateX mx-auto sm:mx-0">
        </div>

        <!-- Información del footer alineada a la derecha -->
        <div class="w-full sm:w-auto text-center sm:text-right">
            <!-- Título con mayor énfasis -->
            <p class="text-center text-2xl font-bold mb-6">¡Sistema de correos institucionales!</p>

            <!-- Sección de contacto -->
            <div class="text-center flex flex-col items-center space-y-4 sm:flex-row sm:space-y-0 sm:space-x-8 mb-6">
                <!-- Correo -->
                <a href="mailto:UticSuport@upea.edu.bo"
                    class="text-lg font-medium hover:text-red-500 transition duration-300">
                    <i class="fas fa-envelope"></i> UticSuport@upea.edu.bo
                </a>

                <a href="https://www.facebook.com/uticupea/" target="_blank"
                    class="text-lg font-medium hover:text-red-500 transition duration-300">
                    <i class="fab fa-facebook"></i> U-tic facebook
                </a>

                <!-- WhatsApp -->
                <a href="https://wa.me/591XXXXXXXXXX" target="_blank"
                    class="text-lg font-medium hover:text-red-500 transition duration-300">
                    <i class="fab fa-whatsapp"></i> Contacto Utic
                </a>
            </div>



            <!-- Derechos de autor -->
            <p class="text-center text-md mb-4 opacity-80">
                <span class="font-semibold text-lg"><?php echo date('Y'); ?></span> - <span
                    class="text-primary font-semibold">Utic-UPEA</span> - Todos los derechos reservados
            </p>

            <!-- Línea divisoria sutil -->
            <div class="w-full mx-auto border-t-2 border-gray-600 mb-4"></div>

            <!-- Créditos o información adicional -->
            <p class="text-center opacity-90">Dep <a
                    href="https://www.linkedin.com/in/marcos-alejandro-berrios-pancata-33a811317/" target="_blank"
                    class="text-white border-red-500 hover:text-red-500 transition duration-300"> @ Dep-mabp</a> <span
                    class="text-blue-950">|</span> Utic-UPEA</p>
        </div>
    </div>
</footer>

<!-- Estilo adicional -->
<style>
    .text-primary {
        color: #00bcd4;
    }

    /* Animación de desvanecimiento para el footer */
    .fadeIn {
        animation: fadeIn 1s ease-in-out;
    }

    /* Animación de desvanecimiento */
    @keyframes fadeIn {
        0% {
            opacity: 0;
        }

        100% {
            opacity: 1;
        }
    }

    /* Animación de rotación continua en el eje X */
    @keyframes rotateX {
        0% {
            transform: rotateY(0deg);
        }

        100% {
            transform: rotateY(360deg);
        }
    }

    /* Aplica la animación para hacerla girar */
    .animate-rotateX {
        animation: rotateX 5s linear infinite;
    }
</style>

<!-- Agrega FontAwesome para los iconos -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
