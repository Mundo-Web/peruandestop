<header class="absolute w-full z-50">
    <div class="navigation z-10">
        <button aria-label="hamburguer" type="button" class="hamburger onMenu" id="position">
            <svg width="25" height="25" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M18 2L2 18M18 18L2 2" stroke="white" stroke-width="2.66667" stroke-linecap="round" />
            </svg>
        </button>
        <nav class="menu-list text-text20">
            <ul class="font-acehMedium">
                <ul class="flex flex-col gap-2 max-w-[280px] mx-auto">
                    <li>
                        <details class="group">
                            <summary
                                class="flex items-center justify-between gap-2  marker:content-none hover:cursor-pointer">
                                <div class="flex gap-5 items-center">
                                    <img src="./images/img/person.png" alt="" />

                                    <span> Ademir Neyra</span>
                                </div>
                                <svg class="transition group-open:rotate-90" xmlns="http://www.w3.org/2000/svg"
                                    width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                                    <path stroke="#fff" fill-rule="evenodd"
                                        d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z">
                                    </path>
                                </svg>
                            </summary>

                            <article class="pb-4 my-1">
                                <ul class="flex flex-col gap-4 mt-4">
                                    <li class="flex hover:bg-white hover:text-[#3F76BB] py-2 rounded-md">
                                        <a href="#" class="cursor-pointer"> Dashboard </a>
                                    </li>
                                    <form action="#" class="w-full">
                                        <input type="hidden" name="cerrar sesion" value="" />
                                        <button type="submit"
                                            class="hover:bg-white hover:text-[#3F76BB] py-2 rounded-md w-full text-left px-4">
                                            Log Out
                                        </button>
                                    </form>
                                </ul>
                            </article>
                        </details>
                    </li>
                </ul>
                <li>
                    <a href="{{route('index')}}" >Home</a>
                </li>
                <li>
                    <a href="{{route('destino')}}">Destinos</a>
                </li>
                <li>
                    <a href="{{route('blog')}}">Blog</a>
                </li>
                <li>
                    <a href="{{route('ayuda')}}">Ayuda</a>
                </li>
                <li>
                    <a href="{{route('contacto')}}">Contacto</a>
                </li>
            </ul>
        </nav>
    </div>


    <div class="bg-colorBackgroundHeader">
        <div class="flex justify-center items-center md:justify-end gap-5 w-11/12 mx-auto py-4">
            <div class="dropdown-moneda inline-block relative">
                <button class="font-acehSemibold py-2 rounded inline-flex items-center">
                    <span class="mx-10 text-white text-text18">Inglés</span>
                    <svg width="10" height="6" viewBox="0 0 10 6" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M9.20711 0.792893C8.81658 0.402369 8.18342 0.402369 7.79289 0.792893L5 3.58579L2.20711 0.792893C1.81658 0.402369 1.18342 0.402369 0.792894 0.792893C0.402369 1.18342 0.402369 1.81658 0.792894 2.20711L4.29289 5.70711C4.68342 6.09763 5.31658 6.09763 5.70711 5.70711L9.20711 2.20711C9.59763 1.81658 9.59763 1.18342 9.20711 0.792893Z"
                            fill="#ffffff" />
                    </svg>
                </button>
                <ul
                    class="dropdown-menu-moneda absolute text-[#141718] text-text16 w-full hidden z-20 bg-white rounded-md">
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

            <div class="text-white">
                <a href="#" class="flex gap-2 justify-center items-center">
                    <span class="font-acehSemibold text-text18">Mis tickets</span>

                    <img src="./images/svg/carrito_icon.svg" alt="carrito_tickets" class="w-6 h-6" />
                </a>
            </div>
        </div>
    </div>


    <div class="py-5 bg-gray-500 bg-opacity-50 text-white bg__destino-header">{{-- <div class="py-5 bg-gray-500 bg-opacity-35 text-white bg__destino-header"> --}}
        <div class="flex justify-between items-center w-11/12 mx-auto" >
            <div>
                <a href="index.html">
                    <img src="./images/img/logo.png" alt="logo peruandestop travel more" class="" />
                </a>
            </div>

            <div>
                <div class="block">
                    <nav class="text-white hidden lg:flex gap-5 font-acehSemibold text-text18 md:text-text22">
                        <a href="{{route('index')}}"
                            class="rounded-full hover:bg-colorBackgroundHeader md:duration-300 py-2 px-5">Home</a>
                        <a href="{{route('destino')}}"
                            class="rounded-full hover:bg-colorBackgroundHeader md:duration-300 py-2 px-5 flex justify-center items-center gap-3">
                            <span>Destinos</span>
                        </a>
                        <a href="{{route('blog')}}"
                            class="rounded-full hover:bg-colorBackgroundHeader md:duration-300 py-2 px-5">Blog
                        </a>
                        <a href="{{route('ayuda')}}"
                            class="rounded-full hover:bg-colorBackgroundHeader md:duration-300 py-2 px-5">Ayuda
                        </a>
                        <a href="{{route('contacto')}}"
                            class="rounded-full hover:bg-colorBackgroundHeader md:duration-300 py-2 px-5">Contacto
                        </a>
                    </nav>
                </div>

                <div class="lg:hidden">
                    <button aria-label="hamburguer" class="hamburger onMenu" >
                        <div id="bar1" class="bar"></div>
                        <div id="bar2" class="bar"></div>
                        <div id="bar3" class="bar"></div>
                    </button>
                </div>
            </div>
            <div class="hidden lg:flex justify-center items-center gap-2 lg:gap-5">
                <div>
                    <img src="./images/img/person.png" alt="user login" />
                </div>
                <div>
                    <div class="dropdown-perfil inline-block relative">
                        <button class=" font-acehSemibold py-2  rounded inline-flex items-center">
                            <span class="mr-12 text-white text-text20">Ademir Neyra</span>
                            <svg width="15" height="15" viewBox="0 0 10 6" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M9.20711 0.792893C8.81658 0.402369 8.18342 0.402369 7.79289 0.792893L5 3.58579L2.20711 0.792893C1.81658 0.402369 1.18342 0.402369 0.792894 0.792893C0.402369 1.18342 0.402369 1.81658 0.792894 2.20711L4.29289 5.70711C4.68342 6.09763 5.31658 6.09763 5.70711 5.70711L9.20711 2.20711C9.59763 1.81658 9.59763 1.18342 9.20711 0.792893Z"
                                    fill="#ffffff" />
                            </svg>
                        </button>
                        <ul
                            class="dropdown-menu-perfil absolute text-[#141718] text-text20 w-full hidden z-20 bg-white rounded-md font-acehSemibold">
                            <li>
                                <a class="rounded-md hover:bg-gray-200 py-2 px-4 block whitespace-no-wrap"
                                    href="#">Home 1</a>
                            </li>
                            <li>
                                <a class="rounded-md hover:bg-gray-200 py-2 px-4 block whitespace-no-wrap"
                                    href="#">Home 2</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>


</header>
