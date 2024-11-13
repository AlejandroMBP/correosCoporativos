<footer class="footer footer-default py-5">
    <div class="container-fluid">
        <div class="footer-top">
            <div class="row justify-content-between">
                <!-- Sección del logo y correo -->
                <div class="col-xl-3 col-lg-6 mb-4 mb-lg-0">
                    <div class="footer-logo mb-3">
                        @include('frontend::components.brand.logo')
                    </div>
                    <p class="font-size-14 text-white mb-0">{{ __('frontendfooter.email_us') }} <span
                            class="text-primary">UticSuport@upea.edu.bo</span></p>
                </div>

                <!-- Sección de redes sociales -->
                <div class="col-xl-3 col-lg-6 d-flex flex-column justify-content-center">
                    <span class="font-size-14 text-white mb-2">{{ __('frontendfooter.follow_us') }}</span>
                    <ul class="p-0 m-0 list-unstyled d-flex justify-content-start widget_social_media">
                        <li class="me-3">
                            <a href="https://www.facebook.com/" class="text-white position-relative">
                                <i class="fab fa-facebook fa-lg"></i>
                            </a>
                        </li>
                        <li class="me-3">
                            <a href="https://twitter.com/" class="text-white position-relative">
                                <i class="fab fa-twitter fa-lg"></i>
                            </a>
                        </li>
                        <li class="me-3">
                            <a href="https://github.com/" class="text-white position-relative">
                                <i class="fab fa-github fa-lg"></i>
                            </a>
                        </li>
                        <li>
                            <a href="https://www.instagram.com/" class="text-white position-relative">
                                <i class="fab fa-instagram fa-lg"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- Sección del copyright -->
        <div class="footer-bottom border-top pt-3 mt-4">
            <div class="text-center">
                </p>
                <p class="font-size-14 mb-0 text-white"><span class="text-primary">mabp</span>© <span
                        class="currentYear"><?php echo date('Y'); ?></span> <span class="text-primary">Utic-UPEA</span></p>
            </div>
        </div>
    </div>
</footer>
