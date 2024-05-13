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
                    <div class="pb-4">
                        <svg width="30" height="30" viewBox="0 0 18 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M9 21V19H16V18H12V10H16V9C16 7.06667 15.3167 5.41667 13.95 4.05C12.5833 2.68333 10.9333 2 9 2C7.06667 2 5.41667 2.68333 4.05 4.05C2.68333 5.41667 2 7.06667 2 9V10H6V18H2C1.45 18 0.979167 17.8042 0.5875 17.4125C0.195833 17.0208 0 16.55 0 16V9C0 7.76667 0.2375 6.60417 0.7125 5.5125C1.1875 4.42083 1.83333 3.46667 2.65 2.65C3.46667 1.83333 4.42083 1.1875 5.5125 0.7125C6.60417 0.2375 7.76667 0 9 0C10.2333 0 11.3958 0.2375 12.4875 0.7125C13.5792 1.1875 14.5333 1.83333 15.35 2.65C16.1667 3.46667 16.8125 4.42083 17.2875 5.5125C17.7625 6.60417 18 7.76667 18 9V19C18 19.55 17.8042 20.0208 17.4125 20.4125C17.0208 20.8042 16.55 21 16 21H9ZM2 16H4V12H2V16ZM14 16H16V12H14V16Z" fill="white"/>
                        </svg>
                    </div>

                    <p class="font-acehbold text-text22  lg:text-left">Asistencia para Agencias</p>
                    <a href="#numero" class="font-acehLight text-text20 py-1">+51 999 999 999</a>
                    <a href="#correo" class="font-acehLight text-text20 py-1 flex-initial w-44">asistencia@peruandes.com</a>
                </nav>
            </div>

            <div class="lg:items-start" data-aos="fade-up" data-aos-offset="150">
                <h3 class="font-acehbold text-text22 pb-4 lg:text-left">Métodos de pago</h3>

                <div class="flex md:justify-center justify-start">
                    <div class="flex flex-wrap md:justify-center items-center lg:justify-start gap-2">
                        <img src="{{asset('images/svg/mastercad.svg')}}" alt="mastercad">
                        <img src="{{asset('images/svg/bitpay.svg')}}" alt="bitpay">
                        <img src="{{asset('images/svg/visa.svg')}}" alt="visa">
                        <img src="{{asset('images/svg/american.svg')}}" alt="american">
                        <img src="{{asset('images/svg/discover.svg')}}" alt="discover">
                        <img src="{{asset('images/svg/soport.svg')}}" alt="soport">
                        <img src="{{asset('images/svg/gpa.svg')}}" alt="gpa">
                        <img src="{{asset('images/svg/pay.svg')}}" alt="pay">
                        <img src="{{asset('images/svg/paypal.svg')}}" alt="paypal">
                        <img src="{{asset('images/svg/roja_azul.svg')}}" alt="roja_azul">
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
                <a href=""><img src="{{asset('/images/svg/instagram.svg')}}" alt="instagram"></a>
                <a href=""> <img src="{{asset('/images/svg/facebook.svg')}}" alt="facebook"></a>
                <a href=""><img src="{{asset('/images/svg/youtube.svg')}}" alt="youtube"></a>
            </div>
        </div>
    </div>
</footer>
