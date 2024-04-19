<footer class="bg-colorBackgroundMainTop">
    <div class="py-10 " >
        <div class="flex flex-col gap-10 md:grid grid-cols-5 md:gap-5 lg:gap-16 text-white w-11/12 mx-auto">
            <!-- --corregir-- el responsive -->
            <div class="flex flex-col justify-start gap-3 items-start z-[50]" data-aos="fade-up" data-aos-offset="150">
                <p class="font-acehbold text-text22 pb-2">Lenguaje</p>
                <div class="dropdown-idioma inline-block relative font-acehbold">
                    <button class="font-semibold py-2 px-6 rounded inline-flex items-center">
                        <span class="mr-12 text-white text-text18">Inglés</span>
                        <svg width="10" height="6" viewBox="0 0 10 6" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M9.20711 0.792893C8.81658 0.402369 8.18342 0.402369 7.79289 0.792893L5 3.58579L2.20711 0.792893C1.81658 0.402369 1.18342 0.402369 0.792894 0.792893C0.402369 1.18342 0.402369 1.81658 0.792894 2.20711L4.29289 5.70711C4.68342 6.09763 5.31658 6.09763 5.70711 5.70711L9.20711 2.20711C9.59763 1.81658 9.59763 1.18342 9.20711 0.792893Z"
                                fill="#ffffff" />
                        </svg>
                    </button>
                    <ul
                        class="dropdown-menu-idioma absolute text-[#141718] text-text18 w-full hidden z-20 bg-white rounded-md">
                        <li class="">
                            <a class="rounded-md hover:bg-gray-200 py-2 px-4 block whitespace-no-wrap"
                                href="#">Español</a>
                        </li>
                        <li class="">
                            <a class="rounded-md hover:bg-gray-200 py-2 px-4 block whitespace-no-wrap"
                                href="#">Portugués</a>
                        </li>
                        <li class="">
                            <a class="rounded-md hover:bg-gray-200 py-2 px-4 block whitespace-no-wrap"
                                href="#">Frances</a>
                        </li>
                    </ul>
                </div>
            </div>

    
            <div data-aos="fade-up" data-aos-offset="150">
                <nav class="flex flex-col lg:items-start">
                    <p class="font-acehbold text-text22 pb-4">Menú</p>
                    <a href="{{route('index')}}" class="font-acehLight text-text20 py-1">Home</a>
                    <a href="{{route('destino')}}" class="font-acehLight text-text20 py-1">Destinos</a>
                    <a href="{{route('ayuda')}}" class="font-acehLight text-text20 py-1">Ayuda</a>
                    <a href="{{route('contacto')}}" class="font-acehLight text-text20 py-1">Contacto</a>
                </nav>
            </div>

            <div data-aos="fade-up" data-aos-offset="150">
                <nav class="flex flex-col lg:items-start">
                    <p class="font-acehbold text-text22 pb-4">Políticas</p>
                    <a href="#politica_privacidad" class="font-acehLight text-text20  py-1">Políticas de privacidad</a>
                    <a href="#terminos_condiciones" class="font-acehLight text-text20  py-1">Términos y Condiciones</a>
                    <a href="#libro_reclamaciones" class="font-acehLight text-text20 py-1">Libro de reclamaciones</a>
                </nav>
            </div>

            <div data-aos="fade-up" data-aos-offset="150">
                <nav class="flex flex-col lg:items-start">
                    <img src="./images/svg/headphone.svg" alt="auriculares" class="w-6 pb-4" />
                    <p class="font-acehbold text-text22  lg:text-left">Asistencia para Agencias</p>
                    <a href="#numero" class="font-acehLight text-text20 py-1">+51 999 999 999</a>
                    <a href="#correo" class="font-acehLight text-text20 py-1 flex-initial w-44">asistencia@peruandes.com</a>
                </nav>
            </div>

            <div class="lg:items-start" data-aos="fade-up" data-aos-offset="150">
                <h3 class="font-acehbold text-text22 pb-4 lg:text-left">Métodos de pago</h3>

                <div class="flex md:justify-center justify-start">
                    <div class="flex flex-wrap md:justify-center items-center lg:justify-start gap-2">
                        <img src="./images/svg/mastercad.svg" alt="mastercad" />
                        <img src="./images/svg/bitpay.svg" alt="bitpay" />
                        <img src="./images/svg/visa.svg" alt="visa" />
                        <img src="./images/svg/american.svg" alt="american" />

                        <img src="./images/svg/discover.svg" alt="discover" />
                        <img src="./images/svg/soport.svg" alt="soport" />
                        <img src="./images/svg/gpa.svg" alt="gpa" />

                        <img src="./images/svg/pay.svg" alt="pay" />
                        <img src="./images/svg/paypal.svg" alt="paypal" />
                        <img src="./images/svg/roja_azul.svg" alt="roja_azul" />
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="bg-colorBackgroundHeader py-5">
        <div class="flex flex-col md:flex-row md:justify-between w-11/12 mx-auto items-center gap-5">
            <div class="w-full">
                <p class="font-acehbold  text-text16 text-white">
                    Copyright &copy; 2023 Mundo Web. Reservados todos los derechos
                </p>
            </div>
            <div class="flex justify-start md:justify-end gap-5 w-full">
                <a href="#"><img src="./images/svg/instagram.svg" alt="instagram" /></a>
                <a href="#"><img src="./images/svg/facebook.svg" alt="facebook" /></a>
                <a href=""><img src="./images/svg/youtube.svg" alt="youtube" /></a>
            </div>
        </div>
    </div>
</footer>
