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

    .bg__dropdown-ordenar {
      background-color: #3F76BB;
      color: white;
    }

    .bg__destino-portada {
      background-image: url({{ asset('images/img/cusco_mobile.png') }});
    }

    @media (min-width: 768px) {

      .bg__destino-portada {
        background-image: url({{ asset('images/img/background_cusco.png') }});
      }
    }
  </style>
@stop


@section('content')
  <main class="pb-24">
    <section class="bg__destino-portada bg-cover bg-center bg-no-repeat sm:w-full h-full">
      <div class="text-white w-11/12 mx-auto pt-96" data-aos="fade-up" data-aos-offset="150">
        <div class="flex flex-col justify-end md:grid grid-cols-1 pb-12 md:py-10 md:gap-24">
          <div class="flex flex-col items-start my-12">

            <h1 class="font-acehbold text-text64 md:text-text68"></h1>
          </div>
          <div class="flex items-center flex-row md:justify-end md:gap-10 justify-center gap-5">


            <p
              class=" items-center text-center font-acehSemibold text-text24 md:text-text40 leading-none md:leading-tight">
              {{ count($tours) }}
              <span class="font-acehMedium text-text12 md:text-text18 block my-2">Tours</span>
            </p>



            <p
              class="items-center text-center font-acehSemibold text-text24 md:text-text40 leading-none md:leading-tight">
              {{ count($destino) }}
              <span class="font-acehMedium text-text12 md:text-text18 block my-2">Destinos </span>
            </p>



          </div>
        </div>
      </div>
    </section>
    <section>
      <div class="gap-10 w-11/12 mx-auto">
        <div class="flex flex-row justify-between items-center my-16 gap-5">



          <!-- --------- modal -->
          {{-- <section class="modal-destino z-[100]">
            <div class="modal__mostrar-destino">
              <div>
                <div class="flex justify-between items-center w-full my-5">
                  <h2 class="font-acehSemibold text-text36 md:text-text48 leading-none">
                    Explorar Destinos
                  </h2>
                  <a href="#" class="modal__close">
                    <img src="./images/svg/close.svg" alt="close" />
                  </a>
                </div>

                <div class="overflow-y-scroll h-[400px] md:h-[700px] actividades_scroll pr-4">
                  <div class="w-full text-[#0F1B2C] border-b-[2px] border-gray-300 py-5">
                    <h3 class="font-acehSemibold text-text26 md:text-text32 my-5">
                      Playas
                    </h3>
                    <div class="flex flex-col gap-5">
                      <div class="flex items-center justify-start gap-5">
                        <div>
                          <img src="./images/img/categoria_1.png" alt="playa tropical" />
                        </div>

                        <a href="#"
                          class="font-acehRegular text-text18 md:text-text22 hover:text-colorLetter hover:font-acehbold md:duration-100">Playa
                          tropical</a>
                      </div>
                      <div class="flex items-center justify-start gap-5">
                        <div>
                          <img src="./images/img/categoria_2.png" alt="playa de surf" />
                        </div>
                        <a href="#"
                          class="font-acehRegular text-text18 md:text-text22 hover:text-colorLetter hover:font-acehbold md:duration-100">Playa
                          de surf</a>
                      </div>
                      <div class="flex items-center justify-start gap-5">
                        <div>
                          <img src="./images/img/categoria_3.png" alt="isla paradisiaca" />
                        </div>
                        <a href="#"
                          class="font-acehRegular text-text18 md:text-text22 hover:text-colorLetter hover:font-acehbold md:duration-100">Isla
                          paradisiaca</a>
                      </div>

                      <div class="flex items-center justify-start gap-5">
                        <div>
                          <img src="./images/img/categoria_4.png" alt="destino buceo" />
                        </div>
                        <a href="#"
                          class="font-acehRegular text-text18 md:text-text22 hover:text-colorLetter hover:font-acehbold md:duration-100">Destino
                          de buceo</a>
                      </div>

                      <a href="#"
                        class="text-colorLetter font-acehbold text-text20 md:text-text24 hover:text-blue-900 md:duration-500 min-w-[90px]">
                        Mostrar Más Playas
                      </a>
                    </div>
                  </div>

                  <div class="w-full text-[#0F1B2C] border-b-[2px] border-gray-300 py-5">
                    <h3 class="font-acehSemibold text-text26 md:text-text32 my-5">
                      Ciudad
                    </h3>
                    <div class="flex flex-col gap-5">
                      <div class="flex items-center justify-start gap-5">
                        <div>
                          <img src="./images/img/categoria_1.png" alt="Metrópolis urbana" />
                        </div>

                        <a href="#"
                          class="font-acehRegular text-text18 md:text-text22 hover:text-colorLetter hover:font-acehbold md:duration-100">Metrópolis
                          urbana</a>
                      </div>
                      <div class="flex items-center justify-start gap-5">
                        <div>
                          <img src="./images/img/categoria_2.png" alt="Ciudad histórica" />
                        </div>
                        <a href="#"
                          class="font-acehRegular text-text18 md:text-text22 hover:text-colorLetter hover:font-acehbold md:duration-100">Ciudad
                          histórica</a>
                      </div>
                      <div class="flex items-center justify-start gap-5">
                        <div>
                          <img src="./images/img/categoria_3.png" alt="Destino cultural" />
                        </div>
                        <a href="#"
                          class="font-acehRegular text-text18 md:text-text22 hover:text-colorLetter hover:font-acehbold md:duration-100">Destino
                          cultural</a>
                      </div>

                      <div class="flex items-center justify-start gap-5">
                        <div>
                          <img src="./images/img/categoria_4.png" alt="ciudad de negocios" />
                        </div>
                        <a href="#"
                          class="font-acehRegular text-text18 md:text-text22 hover:text-colorLetter hover:font-acehbold md:duration-100">Ciudad
                          de negocios</a>
                      </div>

                      <a href="#"
                        class="text-colorLetter font-acehbold text-text20 md:text-text24 hover:text-blue-900 md:duration-500 min-w-[90px]">
                        Mostrar Más Ciudades
                      </a>
                    </div>
                  </div>

                  <div class="w-full text-[#0F1B2C] border-b-[2px] border-gray-300 py-5">
                    <h3 class="font-acehSemibold text-text26 md:text-text32 my-5">
                      Montaña
                    </h3>
                    <div class="flex flex-col gap-5">
                      <div class="flex items-center justify-start gap-5">
                        <div>
                          <img src="./images/img/categoria_1.png" alt="estacion esqui" />
                        </div>

                        <a href="#"
                          class="font-acehRegular text-text18 md:text-text22 hover:text-colorLetter hover:font-acehbold md:duration-100">Estacion
                          de esqui</a>
                      </div>
                      <div class="flex items-center justify-start gap-5">
                        <div>
                          <img src="./images/img/categoria_2.png" alt="pueblo de montaña" />
                        </div>
                        <a href="#"
                          class="font-acehRegular text-text18 md:text-text22 hover:text-colorLetter hover:font-acehbold md:duration-100">Pueblo
                          de montaña</a>
                      </div>
                      <div class="flex items-center justify-start gap-5">
                        <div>
                          <img src="./images/img/categoria_3.png" alt="ruta de tracking" />
                        </div>
                        <a href="#"
                          class="font-acehRegular text-text18 md:text-text22 hover:text-colorLetter hover:font-acehbold md:duration-100">Ruta
                          de tracking</a>
                      </div>

                      <div class="flex items-center justify-start gap-5">
                        <div>
                          <img src="./images/img/categoria_4.png" alt="paisaje alpino" />
                        </div>
                        <a href="#"
                          class="font-acehRegular text-text18 md:text-text22 hover:text-colorLetter hover:font-acehbold md:duration-100">Paisaje
                          alpino</a>
                      </div>

                      <a href="#"
                        class="text-colorLetter font-acehbold text-text20 md:text-text24 hover:text-blue-900 md:duration-500 min-w-[90px]">
                        Mostrar Más Montañas
                      </a>
                    </div>
                  </div>

                  <div class="w-full text-[#0F1B2C] border-b-[2px] border-gray-300 py-5">
                    <h3 class="font-acehSemibold text-text26 md:text-text32 my-5 leading-none md:leading-tight">
                      Histórico
                    </h3>
                    <div class="flex flex-col gap-5">
                      <div class="flex items-center justify-start gap-5">
                        <div>
                          <img src="./images/img/categoria_1.png" alt="sitio arqueologico" />
                        </div>

                        <a href="#"
                          class="font-acehRegular text-text18 md:text-text22 hover:text-colorLetter hover:font-acehbold md:duration-100">Sitio
                          arqueológico</a>
                      </div>
                      <div class="flex items-center justify-start gap-5">
                        <div>
                          <img src="./images/img/categoria_2.png" alt="ciudad medieval" />
                        </div>
                        <a href="#"
                          class="font-acehRegular text-text18 md:text-text22 hover:text-colorLetter hover:font-acehbold md:duration-100">Ciudad
                          medieval</a>
                      </div>
                      <div class="flex items-center justify-start gap-5">
                        <div>
                          <img src="./images/img/categoria_3.png" alt="ruta de la historia" />
                        </div>
                        <a href="#"
                          class="font-acehRegular text-text18 md:text-text22 hover:text-colorLetter hover:font-acehbold md:duration-100">Ruta
                          de la historia</a>
                      </div>

                      <a href="#"
                        class="text-colorLetter font-acehbold text-text20 md:text-text24 hover:text-blue-900 md:duration-500 min-w-[90px]">
                        Mostrar Más Históricos
                      </a>
                    </div>
                  </div>

                  <div class="w-full text-[#0F1B2C] border-b-[2px] border-gray-300 py-5">
                    <h3 class="font-acehSemibold text-text26 md:text-text32 my-5 leading-none md:leading-tight">
                      Aventura
                    </h3>
                    <div class="flex flex-col gap-5">
                      <div class="flex items-center justify-start gap-5">
                        <div>
                          <img src="./images/img/categoria_1.png" alt="parque de aventuras" />
                        </div>

                        <a href="#"
                          class="font-acehRegular text-text18 md:text-text22 hover:text-colorLetter hover:font-acehbold md:duration-100">Parque
                          de aventuras</a>
                      </div>
                      <div class="flex items-center justify-start gap-5">
                        <div>
                          <img src="./images/img/categoria_2.png" alt="destino de safari" />
                        </div>
                        <a href="#"
                          class="font-acehRegular text-text18 md:text-text22 hover:text-colorLetter hover:font-acehbold md:duration-100">Destino
                          de safari</a>
                      </div>
                      <div class="flex items-center justify-start gap-5">
                        <div>
                          <img src="./images/img/categoria_3.png" alt="expedicion en la selva" />
                        </div>
                        <a href="#"
                          class="font-acehRegular text-text18 md:text-text22 hover:text-colorLetter hover:font-acehbold md:duration-100">Expedición
                          en la selva</a>
                      </div>

                      <div class="flex items-center justify-start gap-5">
                        <div>
                          <img src="./images/img/categoria_3.png" alt="tour de aventura en la naturaeza" />
                        </div>
                        <a href="#"
                          class="font-acehRegular text-text18 md:text-text22 hover:text-colorLetter hover:font-acehbold md:duration-100">Tour
                          de aventura en la naturaleza</a>
                      </div>

                      <div class="flex items-center justify-start gap-5">
                        <div>
                          <img src="./images/img/categoria_3.png" alt="deporte extremo" />
                        </div>
                        <a href="#"
                          class="font-acehRegular text-text18 md:text-text22 hover:text-colorLetter hover:font-acehbold md:duration-100">Deporte
                          extremo</a>
                      </div>

                      <a href="#"
                        class="text-colorLetter font-acehbold text-text20 md:text-text24 hover:text-blue-900 md:duration-500 min-w-[90px]">
                        Mostrar Más Aventuras
                      </a>
                    </div>
                  </div>

                  <div class="w-full text-[#0F1B2C]  py-5">
                    <h3 class="font-acehSemibold text-text26 md:text-text32 my-5 leading-none md:leading-tight">
                      Ecoturismo
                    </h3>
                    <div class="flex flex-col gap-5">
                      <div class="flex items-center justify-start gap-5">
                        <div>
                          <img src="./images/img/categoria_1.png" alt="reserva natural" />
                        </div>

                        <a href="#"
                          class="font-acehRegular text-text18 md:text-text22 hover:text-colorLetter hover:font-acehbold md:duration-100">Reserva
                          natural</a>
                      </div>
                      <div class="flex items-center justify-start gap-5">
                        <div>
                          <img src="./images/img/categoria_2.png" alt="Santuario vida silvestre" />
                        </div>
                        <a href="#"
                          class="font-acehRegular text-text18 md:text-text22 hover:text-colorLetter hover:font-acehbold md:duration-100">Santuario
                          vida silvestre</a>
                      </div>
                      <div class="flex items-center justify-start gap-5">
                        <div>
                          <img src="./images/img/categoria_3.png" alt="centro de conservacion" />
                        </div>
                        <a href="#"
                          class="font-acehRegular text-text18 md:text-text22 hover:text-colorLetter hover:font-acehbold md:duration-100">Centro
                          de conservación</a>
                      </div>

                      <div class="flex items-center justify-start gap-5">
                        <div>
                          <img src="./images/img/categoria_3.png" alt="turismo sostenible" />
                        </div>
                        <a href="#"
                          class="font-acehRegular text-text18 md:text-text22 hover:text-colorLetter hover:font-acehbold md:duration-100">Turismo
                          sostenible</a>
                      </div>

                      <div class="flex items-center justify-start gap-5">
                        <div>
                          <img src="./images/img/categoria_3.png" alt="viajes de aves" />
                        </div>
                        <a href="#"
                          class="font-acehRegular text-text18 md:text-text22 hover:text-colorLetter hover:font-acehbold md:duration-100">Viaje
                          de observación de aves</a>
                      </div>

                      <a href="#"
                        class="text-colorLetter font-acehbold text-text20 md:text-text24 hover:text-blue-900 md:duration-500 min-w-[90px] pt-2">
                        Mostrar Más Ecoturismo
                      </a>
                    </div>
                  </div>

                </div>


              </div>
            </div>
          </section> --}}

          {{--  <a href="#"
            class="flex  items-center gap-2 font-acehSemibold text-text18 lg:text-text22 rounded-xl lg:rounded-3xl border-colorBorder border-2 py-4 lg:py-3 px-5 hover:bg-colorBackgroundHeader hover:text-white group lg:duration-500 flex-initial  w-auto mostrar-modal ">
            <span class="hidden lg:inline">Mostrar más</span>

            <svg width="20" height="20" viewBox="0 0 18 13" fill="none" xmlns="http://www.w3.org/2000/svg"
              class="inline-block">
              <path d="M3.46154 6.5H14.5385M1 1.5H17M7.15385 11.5H10.8462" stroke="#0F1B2C" stroke-width="2"
                stroke-linecap="round" stroke-linejoin="round" class="group-hover:stroke-white md:duration-500" />
            </svg>
          </a> --}}
        </div>

        <!-- GRILLA PARA DESKTOP -->
        {{-- <div data-aos="fade-up" data-aos-offset="150"
                    class="pb-5 md:grid-cols-3 lg:grid-cols-6 gap-10 hidden md:grid">
                    <div>
                        <div class="rounded-2xl">
                            <div class="">
                                <img src="./images/img/playa.png" alt="playa"
                                    class="w-full rounded-2xl shadow-lg object-cover" />
                            </div>
                        </div>

                        <a href="#" class="font-acehSemibold text-text18 md:text-text22 text-center py-5 inline-block w-full">Playa</a>
                    </div>

                    <div>
                        <div class="rounded-2xl">
                            <div>
                                <img src="./images/img/ciudad.png" alt="ciudad"
                                    class="w-full rounded-2xl shadow-lg object-cover" />
                            </div>
                        </div>

                        <a href="#" class="font-acehSemibold text-text18 md:text-text22 text-center py-5 inline-block w-full">Ciudad</a>
                    </div>

                    <div>
                        <div class="rounded-2xl">
                            <div>
                                <img src="./images/img/montaña.png" alt="montaña"
                                    class="w-full rounded-2xl shadow-lg object-cover" />
                            </div>
                        </div>

                        <a href="#" class="font-acehSemibold text-text18 md:text-text22 text-center py-5 inline-block w-full">Montaña</a>
                    </div>

                    <div>
                        <div class="rounded-2xl">
                            <div>
                                <img src="./images/img/historico.png" alt="historico"
                                    class="w-[100%] rounded-2xl shadow-lg object-cover" />
                            </div>
                        </div>

                        <a href="#" class="font-acehSemibold text-text18 md:text-text22 text-center py-5 inline-block w-full">Histórico</a>
                    </div>

                    <div>
                        <div class="overflow-hidden rounded-2xl">
                            <div class="cities">
                                <img src="./images/img/shopping.png" alt="shopping"
                                    class="w-full rounded-2xl shadow-lg object-cover" />
                            </div>
                        </div>

                        <a href="#" class="font-acehSemibold text-text18 md:text-text22 text-center py-5 inline-block w-full">Shopping</a>
                    </div>

                    <div>
                        <div class="rounded-2xl">
                            <div>
                                <img src="./images/img/ecoturismo.png" alt="ecoturismo"
                                    class="w-full rounded-2xl shadow-lg object-cover" />
                            </div>
                        </div>

                        <a href="#"
                            class="font-acehSemibold text-text18 md:text-text22 text-center py-5 inline-block w-full">Ecoturismo</a>
                    </div>
                </div> --}}
        <!-- CARRUSEL PARRA MOBILE -->


      </div>
    </section>

    <section>
      <div class="w-11/12 mx-auto mt-16">
        @if (count($destino) > 0)
          <h2 class="font-acehSemibold text-[40px] md:text-[64px] leading-none md:leading-tight text-left text-[#141841]">
            {{ $langInfo['lang']['destino']['all'] }}
          </h2>
        @endif


        <div class="flex flex-col md:flex-row md:justify-between md:items-center">
          <div class="flex gap-10 py-10 justify-between">
            {{-- <div class="flex items-center">
              <a
                class="cursor-pointer open-filtro font-acehSemibold text-text18 md:text-text22 rounded-[20px] border-colorBorder border-2 py-2 md:py-3 px-5 hover:bg-colorBackgroundHeader hover:text-white group md:duration-500 flex gap-2 items-center">
                <span>Filtros </span>

                <svg width="25" height="25" viewBox="0 0 18 13" fill="none" xmlns="http://www.w3.org/2000/svg"
                  class="inline-block">
                  <path d="M3.46154 6.5H14.5385M1 1.5H17M7.15385 11.5H10.8462" stroke="#0F1B2C" stroke-width="2"
                    stroke-linecap="round" stroke-linejoin="round" class="group-hover:stroke-white md:duration-500" />
                </svg>
              </a>
              <!-- ----filtros modales -->
              <section class="modal-filtro z-[100]">
                <div class="modal__mostrar-filtro">
                  <div>
                    <div class="flex justify-between items-center w-full my-5">
                      <h2 class="font-acehSemibold text-text36 md:text-text48 leading-none px-2">
                        Filtros
                      </h2>
                      <a href="#" class="close-filtro">
                        <img src="./images/svg/close.svg" alt="close" />
                      </a>
                    </div>

                    <div class="overflow-y-scroll h-[400px] md:h-[700px] filtros_scroll pr-4">
                      <div class="w-full text-[#0F1B2C] border-b-[2px] border-gray-300 pb-5">
                        <h3 class="font-acehSemibold text-text26 md:text-text32 my-5">
                          País
                        </h3>
                        <div class="flex flex-col gap-5">
                          <div class="flex items-center justify-start gap-5">
                            <div>
                              <input type="checkbox" id="peru"
                                class="h-5 w-5 border-colorBorder rounded focus:ring-offset-0 checked:bg-colorBackgroundHeader cursor-pointer" />
                            </div>

                            <label for="peru" class="font-acehMedium text-text18 md:text-text22">
                              Perú
                            </label>
                          </div>
                          <div class="flex items-center justify-start gap-5">
                            <div>
                              <input type="checkbox" id="usa"
                                class="h-5 w-5 border-colorBorder rounded focus:ring-offset-0 checked:bg-colorBackgroundHeader cursor-pointer" />
                            </div>

                            <label for="usa" class="font-acehMedium text-text18 md:text-text22">
                              USA
                            </label>
                          </div>
                          <div class="flex items-center justify-start gap-5">
                            <div class="flex items-center justify-start gap-5">
                              <div>
                                <input type="checkbox" id="francia"
                                  class="h-5 w-5 border-colorBorder rounded focus:ring-offset-0 checked:bg-colorBackgroundHeader cursor-pointer" />
                              </div>

                              <label for="francia" class="font-acehMedium text-text18 md:text-text22">
                                Francia
                              </label>
                            </div>
                          </div>

                          <div class="flex items-center justify-start gap-5">
                            <div class="flex items-center justify-start gap-5">
                              <div>
                                <input type="checkbox" id="Reino Unido"
                                  class="h-5 w-5 border-colorBorder rounded focus:ring-offset-0 checked:bg-colorBackgroundHeader cursor-pointer" />
                              </div>

                              <label for="Reino Unido" class="font-acehMedium text-text18 md:text-text22">
                                Reino Unido
                              </label>
                            </div>
                          </div>

                          <div class="flex items-center justify-start gap-5">
                            <div class="flex items-center justify-start gap-5">
                              <div>
                                <input type="checkbox" id="italia"
                                  class="h-5 w-5 border-colorBorder rounded focus:ring-offset-0 checked:bg-colorBackgroundHeader cursor-pointer" />
                              </div>

                              <label for="italia" class="font-acehMedium text-text18 md:text-text22">
                                Italia
                              </label>
                            </div>
                          </div>

                          <a href="#"
                            class="text-colorLetter font-acehbold text-text20 md:text-text24 hover:text-blue-900 md:duration-500 min-w-[90px]">
                            Mostrar Más Países
                          </a>
                        </div>
                      </div>
                      <div class="w-full text-[#0F1B2C] border-b-[2px] border-gray-300 py-5 px-2">
                        <h3 class="font-acehSemibold text-text26 md:text-text32 my-5">
                          Ciudad
                        </h3>
                        <div class="flex flex-col gap-5">
                          <div class="flex items-center justify-start gap-5">
                            <div>
                              <input type="checkbox" id="cusco"
                                class="h-5 w-5 border-colorBorder rounded focus:ring-offset-0 checked:bg-colorBackgroundHeader cursor-pointer" />
                            </div>

                            <label for="cusco" class="font-acehMedium text-text18 md:text-text22">
                              Cusco
                            </label>
                          </div>
                          <div class="flex items-center justify-start gap-5">
                            <div class="flex items-center justify-start gap-5">
                              <div>
                                <input type="checkbox" id="lima"
                                  class="h-5 w-5 border-colorBorder rounded focus:ring-offset-0 checked:bg-colorBackgroundHeader cursor-pointer" />
                              </div>

                              <label for="lima" class="font-acehMedium text-text18 md:text-text22">
                                Lima
                              </label>
                            </div>
                          </div>
                          <div class="flex items-center justify-start gap-5">
                            <div class="flex items-center justify-start gap-5">
                              <div>
                                <input type="checkbox" id="arequipa"
                                  class="h-5 w-5 border-colorBorder rounded focus:ring-offset-0 checked:bg-colorBackgroundHeader cursor-pointer" />
                              </div>

                              <label for="arequipa" class="font-acehMedium text-text18 md:text-text22">
                                Arequipa
                              </label>
                            </div>
                          </div>

                          <div class="flex items-center justify-start gap-5">
                            <div class="flex items-center justify-start gap-5">
                              <div>
                                <input type="checkbox" id="iquitos"
                                  class="h-5 w-5 border-colorBorder rounded focus:ring-offset-0 checked:bg-colorBackgroundHeader cursor-pointer" />
                              </div>

                              <label for="iquitos" class="font-acehMedium text-text18 md:text-text22">
                                Iquitos
                              </label>
                            </div>
                          </div>

                          <div class="flex items-center justify-start gap-5">
                            <div class="flex items-center justify-start gap-5">
                              <div>
                                <input type="checkbox" id="florencia"
                                  class="h-5 w-5 border-colorBorder rounded focus:ring-offset-0 checked:bg-colorBackgroundHeader cursor-pointer" />
                              </div>

                              <label for="florencia" class="font-acehMedium text-text18 md:text-text22">
                                Florencia
                              </label>
                            </div>
                          </div>

                          <a href="#"
                            class="text-colorLetter font-acehbold text-text20 md:text-text24 hover:text-blue-900 md:duration-500 min-w-[90px]">
                            Mostrar Más Ciudades
                          </a>
                        </div>
                      </div>

                      <div class="w-full text-[#0F1B2C] border-b-[2px] border-gray-300 py-5 px-2">
                        <h3 class="font-acehSemibold text-text26 md:text-text32 my-5">
                          Clima
                        </h3>
                        <div class="flex flex-col gap-5">
                          <div class="flex items-center justify-start gap-5">
                            <div>
                              <input type="checkbox" id="frio"
                                class="h-5 w-5 border-colorBorder rounded focus:ring-offset-0 checked:bg-colorBackgroundHeader cursor-pointer" />
                            </div>

                            <label for="frio" class="font-acehMedium text-text18 md:text-text22">
                              Frío
                            </label>
                          </div>
                          <div class="flex items-center justify-start gap-5">
                            <div class="flex items-center justify-start gap-5">
                              <div>
                                <input type="checkbox" id="templado"
                                  class="h-5 w-5 border-colorBorder rounded focus:ring-offset-0 checked:bg-colorBackgroundHeader cursor-pointer" />
                              </div>

                              <label for="templado" class="font-acehMedium text-text18 md:text-text22">
                                Templado
                              </label>
                            </div>
                          </div>
                          <div class="flex items-center justify-start gap-5">
                            <div class="flex items-center justify-start gap-5">
                              <div>
                                <input type="checkbox" id="calido"
                                  class="h-5 w-5 border-colorBorder rounded focus:ring-offset-0 checked:bg-colorBackgroundHeader cursor-pointer" />
                              </div>

                              <label for="calido" class="font-acehMedium text-text18 md:text-text22">
                                Cálido
                              </label>
                            </div>
                          </div>
                        </div>
                      </div>

                      <div class="w-full text-[#0F1B2C] border-b-[2px] border-gray-300 py-5 px-2">
                        <h3 class="font-acehSemibold text-text26 md:text-text32 my-5">
                          Actividades
                        </h3>
                        <div class="flex flex-col gap-5">
                          <div class="flex items-center justify-start gap-5">
                            <div>
                              <input type="checkbox" id="todas_actividades"
                                class="h-5 w-5 border-colorBorder rounded focus:ring-offset-0 checked:bg-colorBackgroundHeader cursor-pointer" />
                            </div>

                            <label for="todas_actividades" class="font-acehMedium text-text18 md:text-text22">
                              Todas las actividades
                            </label>
                          </div>
                          <div class="flex items-center justify-start gap-5">
                            <div class="flex items-center justify-start gap-5">
                              <div>
                                <input type="checkbox" id="tracking"
                                  class="h-5 w-5 border-colorBorder rounded focus:ring-offset-0 checked:bg-colorBackgroundHeader cursor-pointer" />
                              </div>

                              <label for="tracking" class="font-acehMedium text-text18 md:text-text22">
                                Tracking
                              </label>
                            </div>
                          </div>
                          <div class="flex items-center justify-start gap-5">
                            <div class="flex items-center justify-start gap-5">
                              <div>
                                <input type="checkbox" id="buceo"
                                  class="h-5 w-5 border-colorBorder rounded focus:ring-offset-0 checked:bg-colorBackgroundHeader cursor-pointer" />
                              </div>

                              <label for="buceo" class="font-acehMedium text-text18 md:text-text22">
                                Buceo
                              </label>
                            </div>
                          </div>

                          <div class="flex items-center justify-start gap-5">
                            <div class="flex items-center justify-start gap-5">
                              <div>
                                <input type="checkbox" id="gastronomia"
                                  class="h-5 w-5 border-colorBorder rounded focus:ring-offset-0 checked:bg-colorBackgroundHeader cursor-pointer" />
                              </div>

                              <label for="gastronomia" class="font-acehMedium text-text18 md:text-text22">
                                Gastronomía
                              </label>
                            </div>
                          </div>

                          <div class="flex items-center justify-start gap-5">
                            <div class="flex items-center justify-start gap-5">
                              <div>
                                <input type="checkbox" id="compras"
                                  class="h-5 w-5 border-colorBorder rounded focus:ring-offset-0 checked:bg-colorBackgroundHeader cursor-pointer" />
                              </div>

                              <label for="compras" class="font-acehMedium text-text18 md:text-text22">
                                Compras
                              </label>
                            </div>
                          </div>

                          <div class="flex items-center justify-start gap-5">
                            <div class="flex items-center justify-start gap-5">
                              <div>
                                <input type="checkbox" id="visitas_culturales"
                                  class="h-5 w-5 border-colorBorder rounded focus:ring-offset-0 checked:bg-colorBackgroundHeader cursor-pointer" />
                              </div>

                              <label for="visitas_culturales" class="font-acehMedium text-text18 md:text-text22">
                                Visitas culturales
                              </label>
                            </div>
                          </div>

                          <div class="flex items-center justify-start gap-5">
                            <div class="flex items-center justify-start gap-5">
                              <div>
                                <input type="checkbox" id="deportes_acuaticos"
                                  class="h-5 w-5 border-colorBorder rounded focus:ring-offset-0 checked:bg-colorBackgroundHeader cursor-pointer" />
                              </div>

                              <label for="deportes_acuaticos" class="font-acehMedium text-text18 md:text-text22">
                                Deportes acuáticos
                              </label>
                            </div>
                          </div>

                          <div class="flex items-center justify-start gap-5">
                            <div class="flex items-center justify-start gap-5">
                              <div>
                                <input type="checkbox" id="vida_nocturna"
                                  class="h-5 w-5 border-colorBorder rounded focus:ring-offset-0 checked:bg-colorBackgroundHeader cursor-pointer" />
                              </div>

                              <label for="vida_nocturna" class="font-acehMedium text-text18 md:text-text22">
                                Vida nocturna
                              </label>
                            </div>
                          </div>

                          <div class="flex items-center justify-start gap-5">
                            <div class="flex items-center justify-start gap-5">
                              <div>
                                <input type="checkbox" id="aventura"
                                  class="h-5 w-5 border-colorBorder rounded focus:ring-offset-0 checked:bg-colorBackgroundHeader cursor-pointer" />
                              </div>

                              <label for="aventura" class="font-acehMedium text-text18 md:text-text22">
                                Aventura
                              </label>
                            </div>
                          </div>

                          <a href="#"
                            class="text-colorLetter font-acehbold text-text20 md:text-text24 hover:text-blue-900 md:duration-500 min-w-[90px]">
                            Mostrar Más Actividades
                          </a>
                        </div>
                      </div>


                      <div class="w-full text-[#0F1B2C] border-b-[2px] border-gray-300 py-5 px-2">
                        <h3 class="font-acehSemibold text-text26 md:text-text32 my-5">
                          Duración
                        </h3>
                        <div class="flex flex-col gap-5">
                          <div class="flex items-center justify-start gap-5">
                            <div>
                              <input type="checkbox" id="finDeSemana"
                                class="h-5 w-5 border-colorBorder rounded focus:ring-offset-0 checked:bg-colorBackgroundHeader cursor-pointer" />
                            </div>

                            <label for="finDeSemana" class="font-acehMedium text-text18 md:text-text22">
                              Fin de semana
                            </label>
                          </div>
                          <div class="flex items-center justify-start gap-5">
                            <div class="flex items-center justify-start gap-5">
                              <div>
                                <input type="checkbox" id="unaSemana"
                                  class="h-5 w-5 border-colorBorder rounded focus:ring-offset-0 checked:bg-colorBackgroundHeader cursor-pointer" />
                              </div>

                              <label for="unaSemana" class="font-acehMedium text-text18 md:text-text22">
                                Una semanas
                              </label>
                            </div>
                          </div>
                          <div class="flex items-center justify-start gap-5">
                            <div class="flex items-center justify-start gap-5">
                              <div>
                                <input type="checkbox" id="dosAmasSemanas"
                                  class="h-5 w-5 border-colorBorder rounded focus:ring-offset-0 checked:bg-colorBackgroundHeader cursor-pointer" />
                              </div>

                              <label for="dosAmasSemanas" class="font-acehMedium text-text18 md:text-text22">
                                Dos semanas o más
                              </label>
                            </div>
                          </div>

                          <a href="#"
                            class="text-colorLetter font-acehbold text-text20 md:text-text24 hover:text-blue-900 md:duration-500 min-w-[90px]">
                            Mostrar Más Actividades
                          </a>
                        </div>
                      </div>

                      <div class="flex justify-between items-center pt-5">
                        <a href="#"
                          class="text-colorLetter font-acehbold text-text16 md:text-text22 hover:text-blue-900 md:duration-500 min-w-[90px] my-5 inline-block text-center md:text-left">
                          Limpiar Todo
                        </a>

                        <a href="detalle_actividad.html"
                          class="font-acehMedium text-text16 md:text-text22 rounded-3xl bg-colorBackgroundHeader py-3 px-5 md:px-8 text-white hover:bg-colorBackgroundMainTop md:duration-500">
                          Mostrar Resultados</a>
                      </div>
                    </div>
                  </div>
                </div>
              </section>
              <!-- ------ -->
            </div> --}}

            {{-- <div class="flex items-center">
              <a href="#"
                class="open-ordenar font-acehSemibold text-text18 md:text-text22 rounded-[20px] border-colorBorder border-2 py-2 md:py-3 px-5 hover:bg-colorBackgroundHeader hover:text-white group md:duration-500 flex gap-2 items-center">
                <span>Ordenar</span>
                <svg width="30" height="30" viewBox="0 0 25 24" fill="none"
                  xmlns="http://www.w3.org/2000/svg" class="inline-block">
                  <path d="M7.01172 10L12.0125 14.58L17.0117 10" stroke="#0F1B2C" stroke-width="2"
                    stroke-linecap="round" stroke-linejoin="round" class="group-hover:stroke-white md:duration-500" />
                </svg>
              </a>

              <div class="modal-ordenar z-[100]">
                <div class="modal__mostrar-ordenar">
                  <div class="flex flex-col gap-5 p-5">
                    <div class="flex justify-between items-center w-full">
                      <h2 class="font-acehSemibold text-[36px] md:text-[48px] leading-none">
                        Ordenar
                      </h2>
                      <a href="#" class="modal__close-ordenar">
                        <img src="./images/svg/close.svg" alt="close" />
                      </a>
                    </div>
                    <div class="flex flex-col text-[#0F1B2C] font-acehRegular text-text18 md:text-text22">
                      <a href="#" class="p-4 rounded-2xl ordenar-destinos">A - Z</a>
                      <a href="#" class="p-4 rounded-2xl ordenar-destinos">Z - A</a>
                      <a href="#" class="p-4 rounded-2xl ordenar-destinos">De menor a
                        mayor</a>
                      <a href="#" class="p-4 rounded-2xl ordenar-destinos">De mayor a
                        menor</a>
                    </div>
                  </div>
                </div>
              </div>
            </div> --}}
          </div>
          @if (count($destino))
            <p class="font-acehSemibold text-text18 md:text-text22 hidden md:block text-[#0F1B2C]">
              {{ count($tours) }} Tours en {{ count($destino) }} Destinos
            </p>
          @endif

        </div>
      </div>

      <div class="grid grid-cols-1 md:grid-cols-2 w-11/12 mx-auto gap-10 md:gap-4 2xl:gap-16 mt-10">
        <!-- 1  tours -> destinos -->

        @foreach ($destino as $item)
          <div data-aos="fade-up" data-aos-offset="150">

            <div class="image__effect-hover rounded-[20px]">


              <img src="{{ asset($item->url_image . '/' . $item->name_image) }}" alt="cusco"
                class="w-full shadow-lg block 2md:hidden object-cover" />
              <img src="{{ asset($item->url_image . '/' . $item->name_image) }}" alt="cusco"
                class="w-full shadow-lg hidden 2md:block object-cover" />


              <div
                class="image__effect-content flex justify-center sm:justify-end text-center gap-9 md:gap-12 lg:gap-16 p-5">

                <div class="flex items-center justify-">

                  {{-- <a
                    class="font-acehSemibold text-text18 md:text-text22 text-white bg-colorBackgroundHeader rounded-full hover:bg-colorBackgroundMainTop md:duration-500 px-5 py-2">

                  </a> --}}

                </div>

                <div class="text-white text-center">
                  <span class="block font-acehSemibold text-text28 xl:text-text34">{{ $item->productos->count() }}
                  </span>
                  <span class="block font-acehMedium text-text12 xl:text-text18">Tours</span>
                </div>

              </div>
            </div>

            <!-- -- -->

            <div class="pb-5">
              <h3 class="font-acehSemibold text-text48 md:text-text52 pt-5 pb-2 text-[#0F1B2C]">{{ $item->name }}</h3>
              <p class="font-acehMedium text-text18 md:text-text22 py-3 text-[#0F1B2C]">
                {{ $item->description }}
              </p>

              <!-- corregir este div -->
              <div class="flex justify-between items-center ">
                <div>
                  <div class="flex gap-2 py-2">
                    {{-- <img src="./images/svg/start.svg" alt="estrella">
                    <img src="./images/svg/start.svg" alt="estrella">
                    <img src="./images/svg/start.svg" alt="estrella">
                    <img src="./images/svg/start_sin_color.svg" alt="estrella">
                    <img src="./images/svg/start_sin_color.svg" alt="estrella"> --}}
                  </div>
                  <p class="font-acehSemibold text-text28 md:text-text32 text-[#0F1B2C]">
                    {{-- 2,343
                    <span class="font-acehMedium text-text16 md:text-text20">Opiniones</span> --}}
                  </p>

                </div>

                <a href="{{ url($langInfo['selected'] . '/actividad/' . $item->id) }}"
                  class="font-acehSemibold text-text18 md:text-text22 text-white bg-colorBackgroundHeader rounded-full hover:bg-colorBackgroundMainTop md:duration-500 px-5 py-2">
                  {{ $langInfo['lang']['destino']['linkTours'] }}
                </a>

              </div>
            </div>
          </div>
        @endforeach

        <!-- 2 -->

        <!-- 3 -->

        <!-- 4 -->

        <!-- 5 -->

        <!-- 6 -->

      </div>

      <div data-aos="fade-up" data-aos-offset="150">
        <div class="flex  pt-24 justify-center " aria-label="Pagination">


          {{ $destino }}


        </div>
      </div>

      {{-- <div class="flex justify-center mt-10" data-aos="fade-up" data-aos-offset="150">
        <a href="{{ route('destino') }}"
          class="font-acehSemibold text-text18 md:text-text22 rounded-full border-colorBorder border-2 py-3 px-5 group md:duration-500 text-[#0F1B2C] hover:bg-colorBackgroundHeader hover:text-white">Ver
          más Destinos
          <svg width="20" height="17" viewBox="0 0 20 17" fill="none" xmlns="http://www.w3.org/2000/svg"
            class="inline-block">
            <path
              d="M11.043 15.7637C10.4437 15.918 9.81541 16 9.16797 16C5.02583 16 1.66797 12.6421 1.66797 8.5C1.66797 4.35786 5.02583 1 9.16797 1C12.9926 1 16.1486 3.86283 16.6099 7.5625M2.60547 11.3125H4.79297C5.65592 11.3125 6.35547 10.6129 6.35547 9.75V7.71875C6.35547 6.8558 7.05502 6.15625 7.91797 6.15625H9.48047C10.3434 6.15625 11.043 5.4567 11.043 4.59375V1.9375M15.7676 13.2048L17.9146 12.4625C18.3171 12.3233 18.3305 11.7591 17.9352 11.601L12.6122 9.47145C12.2419 9.32331 11.8714 9.6846 12.0103 10.0585L14.038 15.5181C14.1862 15.9171 14.7502 15.9179 14.8996 15.5194L15.7676 13.2048Z"
              stroke="#0F1B2C" stroke-width="1.66667" stroke-linecap="round" stroke-linejoin="round"
              class="group-hover:stroke-white md:duration-500" />
          </svg>
        </a>
      </div> --}}
    </section>
  </main>

@section('scripts_improtados')
  <script>
    document.addEventListener("DOMContentLoaded", () => { // Captura el click de abrir
      const openModal = document.querySelector(".mostrar-modal");
      // Captura al modal que se quiere mostrar
      const modal = document.querySelector(".modal-destino");
      //Captura el evento de cierre
      const closeModal = document.querySelector(".modal__close");
      // Captura el body para bloqueo
      const body = document.querySelector(".scroll__hidden_explorar");

      /* ------------------------------------------------ */

      const openModalFiltro = document.querySelector(".open-filtro");
      const modalFiltro = document.querySelector(".modal-filtro");
      const closeModalFiltro = document.querySelector(".close-filtro");

      /* -------------------------------------------- */


      // Captura el click de abrir
      const openOrdenar = document.querySelector(".open-ordenar");
      // Captura al modal que se quiere mostrar
      const modalOrdenar = document.querySelector(".modal-ordenar");
      //Captura el evento de cierre
      const closeModalOrdenar = document.querySelector(".modal__close-ordenar");
      // Captura el body para bloqueo

      /* ------------------- */

      const ordenarDropdown = document.querySelectorAll('.ordenar-destinos');

      ordenarDropdown.forEach(ordenar => {
        ordenar.addEventListener("click", (e) => {
          if (!e.target.classList.contains('bg__dropdown-ordenar')) {
            e.target.classList.add("bg__dropdown-ordenar");
            ordenarDropdown.forEach(item => {
              if (e.target !== item) {
                item.classList.remove('bg__dropdown-ordenar')
              }
            })
          }
        })
      });

      /* ----------- */

      const swiper = new Swiper(".productos-explorar-destino", {
        slidesPerView: 6,
        spaceBetween: 40,
        loop: true,
        grabCursor: false,
        centeredSlides: false,
        initialSlide: 0,
        allowTouchMove: false,
        autoplay: {
          delay: 1500,
          disableOnInteraction: false,
          pauseOnMouseEnter: true
        },
        breakpoints: {
          0: {
            slidesPerView: 2,
            centeredSlides: true,
          },
          768: {
            slidesPerView: 4,
            centeredSlides: true,
          },
          1280: {
            slidesPerView: 6,
          },
        },
      });

      openModal.addEventListener("click", (e) => {
        e.preventDefault();

        modal.classList.add("modal--show");
        body.classList.add("overflow-hidden");
        modal.style.display = "flex";
      });

      closeModal.addEventListener("click", (e) => {
        e.preventDefault();
        modal.classList.remove("modal--show");
        body.classList.remove("overflow-hidden");
      });
      /* ------------------------------------------- */
      openModalFiltro.addEventListener("click", (e) => {
        e.preventDefault();

        modalFiltro.classList.add("modal--show-filtros");
        body.classList.add("overflow-hidden");
        modalFiltro.style.display = "flex";
      });

      closeModalFiltro.addEventListener("click", (e) => {
        e.preventDefault();
        modalFiltro.classList.remove("modal--show-filtros");
        body.classList.remove("overflow-hidden");
      });

      /* --------------------------- */
      openOrdenar.addEventListener("click", (e) => {
        e.preventDefault();
        modalOrdenar.classList.add("modal--show");
        body.classList.add("overflow-hidden");
        modalOrdenar.style.display = "flex";
      });

      closeModalOrdenar.addEventListener("click", (e) => {
        e.preventDefault();
        modalOrdenar.classList.remove("modal--show");
        body.classList.remove("overflow-hidden");
      });

      // Función para cerrar el modal
      function resetEffects(event) {
        if (event.target === modal) {
          modal.classList.remove("modal--show");
          body.classList.remove("overflow-hidden");
        }
        if (event.target === modalFiltro) {
          modalFiltro.classList.remove("modal--show-filtros");
          body.classList.remove("overflow-hidden");
        }

        if (event.target === modalOrdenar) {
          modalOrdenar.classList.remove("modal--show");
          body.classList.remove("overflow-hidden");
        }
      }

      window.addEventListener("click", resetEffects);
    })
  </script>
@stop

@stop
