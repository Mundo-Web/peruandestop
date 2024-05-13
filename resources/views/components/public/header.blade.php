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
                                    <img src="{{asset('images/img/person.png')}}" alt="">
                                    
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
                    <svg width="24" height="24" viewBox="0 0 16 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M1.59766 0.328451C1.22947 0.328451 0.93099 0.626927 0.93099 0.995117C0.93099 1.36331 1.22947 1.66178 1.59766 1.66178V0.328451ZM3.12601 0.995117L3.7695 0.82084C3.69079 0.530239 3.42709 0.328451 3.12601 0.328451V0.995117ZM5.6096 10.1653L4.96611 10.3395C5.05296 10.6602 5.36264 10.868 5.69229 10.8268L5.6096 10.1653ZM13.2514 9.21004L13.3341 9.87156C13.6172 9.83617 13.8464 9.62453 13.9042 9.34511L13.2514 9.21004ZM14.3977 3.66974L15.0505 3.80482C15.0911 3.60847 15.0412 3.40427 14.9146 3.2488C14.788 3.09332 14.5982 3.00308 14.3977 3.00308V3.66974ZM3.85039 3.66974L3.20691 3.84402L3.20691 3.84402L3.85039 3.66974ZM1.59766 1.66178H3.12601V0.328451H1.59766V1.66178ZM5.69229 10.8268L13.3341 9.87156L13.1687 8.54853L5.52691 9.50375L5.69229 10.8268ZM13.9042 9.34511L15.0505 3.80482L13.7448 3.53467L12.5985 9.07497L13.9042 9.34511ZM2.48253 1.16939L3.20691 3.84402L4.49388 3.49547L3.7695 0.82084L2.48253 1.16939ZM3.20691 3.84402L4.96611 10.3395L6.25308 9.99099L4.49388 3.49547L3.20691 3.84402ZM14.3977 3.00308H3.85039V4.33641H14.3977V3.00308ZM7.33099 12.6666C7.33099 12.8507 7.18175 13 6.99766 13V14.3333C7.91813 14.3333 8.66432 13.5871 8.66432 12.6666H7.33099ZM6.99766 13C6.81356 13 6.66432 12.8507 6.66432 12.6666H5.33099C5.33099 13.5871 6.07718 14.3333 6.99766 14.3333V13ZM6.66432 12.6666C6.66432 12.4825 6.81356 12.3333 6.99766 12.3333V11C6.07718 11 5.33099 11.7462 5.33099 12.6666H6.66432ZM6.99766 12.3333C7.18175 12.3333 7.33099 12.4825 7.33099 12.6666H8.66432C8.66432 11.7462 7.91813 11 6.99766 11V12.3333ZM12.6643 12.6666C12.6643 12.8507 12.5151 13 12.331 13V14.3333C13.2515 14.3333 13.9977 13.5871 13.9977 12.6666H12.6643ZM12.331 13C12.1469 13 11.9977 12.8507 11.9977 12.6666H10.6643C10.6643 13.5871 11.4105 14.3333 12.331 14.3333V13ZM11.9977 12.6666C11.9977 12.4825 12.1469 12.3333 12.331 12.3333V11C11.4105 11 10.6643 11.7462 10.6643 12.6666H11.9977ZM12.331 12.3333C12.5151 12.3333 12.6643 12.4825 12.6643 12.6666H13.9977C13.9977 11.7462 13.2515 11 12.331 11V12.3333Z" fill="white"/>
                    </svg>                 
                </a>
            </div>
        </div>
    </div>


    <div class="py-5 bg-gray-500 bg-opacity-50 text-white bg__destino-header">{{-- <div class="py-5 bg-gray-500 bg-opacity-35 text-white bg__destino-header"> --}}
        <div class="flex justify-between items-center w-11/12 mx-auto" >
            <div>
                <a href="{{route('index')}}">
                    <img src="{{asset('images/img/logo.png')}}" alt="Perú Andes Top">
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
                    <img src="{{asset('images/img/person.png')}}" alt="user login">
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
