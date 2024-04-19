@extends('components.public.matrix')

@section('css_improtados')
    <style>
        [type="text"]:focus,
        input:where(:not([type])):focus,
        [type="email"]:focus,
        [type="url"]:focus,
        [type="password"]:focus,
        [type="number"]:focus,
        [type="date"]:focus,
        [type="datetime-local"]:focus,
        [type="month"]:focus,
        [type="search"]:focus,
        [type="tel"]:focus,
        [type="time"]:focus,
        [type="week"]:focus,
        [multiple]:focus,
        textarea:focus,
        select:focus {
            outline: none;
            box-shadow: none;
            border-color: initial;
            /* o tu color deseado */
        }

        .bg__destino-header {
            background-color: #0F1B2C;
        }
    </style>
@stop


@section('content')
    <main>
        <section class="w-11/12 mx-auto gap-5 grid grid-cols-1 grid-rows-1 lg:grid-cols-2 lg:grid-rows-2 lg:gap-10 pt-60">
            <div class="flex flex-col gap-5 col-span-1 row-span-1" data-aos="fade-up" data-aos-offset="150">
                <h1 class="font-acehSemibold text-text40 md:text-text44 text-[#141841] leading-none md:leading-tight">
                    A nuestro amable equipo le encantaría saber de usted
                </h1>
                <p class="font-acehRegular text-text18 md:text-text22 text-[#495560]">
                    Nam a lorem ut dui ultrices efficitur vitae et metus. Mauris quis
                    vulputate orci, ac hendrerit purus.
                </p>

                <div>
                    <p class="font-acehSemibold text-text20 md:text-text24 text-[#3F76BB]">
                        Horario de oficina en Perú
                    </p>
                    <div class="font-medium text-text18 md:text-text22 text-[#495560]">
                        <p>Lunes - Sábados</p>
                        <p>8:00 am a 5.00 pm</p>
                    </div>
                </div>

                <div>
                    <p class="font-acehSemibold text-text20 md:text-text24 text-[#3F76BB]">
                        Nuestra dirección
                    </p>
                    <div class="font-medium text-text18 md:text-text22 text-[#495560]">
                        <p>Samblas tandapata 160</p>
                        <p>Cusco - Perú</p>
                    </div>
                </div>

                <div>
                    <p class="font-acehSemibold text-text20 md:text-text24 text-[#3F76BB] leading-none md:leading-tight">
                        Ponerse en contacto
                    </p>
                    <div class="font-medium text-text18 md:text-text22 text-[#495560]">
                        <p>+51 999 000 999</p>
                        <p>+51 900 999 000</p>
                    </div>
                </div>
            </div>

            <div class="flex flex-col gap-10 col-span-1 lg:row-span-2" data-aos="fade-up" data-aos-offset="150">
                <div class="flex flex-col gap-2">
                    <p class="font-acehSemibold text-text36 md:text-text40 text-[#3F76BB]">
                        Ponerse en contacto
                    </p>
                    <p class="font-acehRegular text-text18 md:text-text22 text-[#495560]">
                        A nuestro amable equipo le encantaría saber de usted.
                    </p>
                </div>

                <div>
                    <form action="">
                        <div class="flex flex-col gap-5">
                            <div class="flex flex-col md:flex-row gap-5 w-full">
                                <div class="flex flex-col gap-2 flex-auto">
                                    <label for="nombre" class="font-medium text-text14 md:text-text18 text-[#344054]">Nombre</label>

                                    <input id="nombre" type="text" placeholder="Ingresa tu nombre"
                                        class="w-full border-[1px] focus:outline-none border-gray-200 rounded-xl py-4 text-text16 md:text-text20 font-acehRegular" />
                                </div>

                                <div class="flex flex-col gap-2 flex-auto">
                                    <label for="apellido" class="font-medium text-text14 md:text-text18 text-[#344054]">Apellido</label>
                                    <input id="apellido" type="text" placeholder="Ingresa tu apellido"
                                        class="w-full border-[1px] focus:outline-none border-gray-200 rounded-xl py-4 text-text16 md:text-text20 font-acehRegular" />
                                </div>
                            </div>
                            <div class="flex flex-col gap-2">
                                <label for="email" class="font-medium text-text14 md:text-text18 text-[#344054]">E-mail</label>
                                <input id="email" type="email" placeholder="Ingresa tu correo electrónico"
                                    class="w-full border-[1px] focus:outline-none border-gray-200 rounded-xl py-4 text-text16 md:text-text20 font-acehRegular text-[#344054]" />
                            </div>

                            <div class="flex flex-col gap-2">
                                <label for="telefono" class="font-medium text-text14 md:text-text18 text-[#344054]">
                                    Número de teléfono
                                </label>
                                <div class="border-gray-200 border-[1.5px] flex rounded-xl">
                                    <select name="codigoPais" id="pais" class=" border-0 px-4 py-2 bg-white appearance-none focus:outline-none focus:ring-0 rounded-xl text-text14 md:text-text18 text-[#344054]">
                                        <option value="0">US</option>
                                        <option value="1">PE</option>
                                        <option value="2">MXC</option>
                                    </select>
                                    {{-- <div class="dropdown-telefono inline-block relative py-4">
                                        <button class="font-acehRegular px-6 rounded inline-flex items-center">
                                            <span class="mr-12 text-[#101828] text-[16px]">US</span>
                                            <svg width="15" height="10" viewBox="0 0 10 6" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                    d="M9.20711 0.792893C8.81658 0.402369 8.18342 0.402369 7.79289 0.792893L5 3.58579L2.20711 0.792893C1.81658 0.402369 1.18342 0.402369 0.792894 0.792893C0.402369 1.18342 0.402369 1.81658 0.792894 2.20711L4.29289 5.70711C4.68342 6.09763 5.31658 6.09763 5.70711 5.70711L9.20711 2.20711C9.59763 1.81658 9.59763 1.18342 9.20711 0.792893Z"
                                                    fill="#101828" />
                                            </svg>
                                        </button>
                                        <ul
                                            class="dropdown-menu-telefono absolute text-[#141718] text-[16px] w-full hidden z-20 bg-white rounded-md">
                                            <li class="">
                                                <a class="rounded-md hover:bg-gray-200 py-2 px-4 block whitespace-no-wrap"
                                                    href="#">PE</a>
                                            </li>
                                            <li class="">
                                                <a class="rounded-md hover:bg-gray-200 py-2 px-4 block whitespace-no-wrap"
                                                    href="#">CO</a>
                                            </li>
                                            <li class="">
                                                <a class="rounded-md hover:bg-gray-200 py-2 px-4 block whitespace-no-wrap"
                                                    href="#">MXC</a>
                                            </li>
                                        </ul>
                                    </div> --}}
                                    <input type="tel" class="font-acehRegular border-none focus:outline-none w-full py-4 rounded-xl text-text16 md:text-text20 text-[#344054]" />
                                </div>
                            </div>

                            <div class="flex flex-col gap-2">
                                <label for="mensaje" class="font-medium text-text14 md:text-text18 text-[#344054]">Escribir un
                                    mensaje</label>
                                <textarea name="mensaje" id="mensaje" cols="30" rows="5"
                                    class="font-acehRegular border-gray-200 border-[1.5px] rounded-xl focus:outline-none text-text16 md:text-text20"></textarea>
                            </div>

                            <div class="flex gap-5 items-center">
                                <input type="checkbox" id="politica"
                                    class="h-5 w-5 border-colorBorder rounded focus:ring-offset-0 checked:bg-colorBackgroundHeader" />

                                <label for="politica" class="font-acehRegular text-text16 md:text-text20 text-[#495560]">Usted acepta nuestra
                                    amigable política de privacidad</label>
                            </div>
                            <div class="w-full">
                                <input type="submit" value="Confirmar Reserva"
                                    class="text-white bg-[#3F76BB] py-4 rounded-3xl cursor-pointer border-2 font-acehSemibold text-text20 md:text-text24 text-center border-none w-full hover:bg-colorBackgroundMainTop duration-500" />
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            <div class="col-span-1 row-span-1 lg:-mt-[50px] xl:-mt-[80px] 2xl:-mt-[100px] 3xl:-mt-[200px]" data-aos="fade-up" data-aos-offset="150">
                <img src="./images/img/contacto_image.png" alt="imagen contacto" class="w-full h-full"/>
            </div>
        </section>
    </main>




@section('scripts_improtados')
    <script></script>
@stop

@stop
