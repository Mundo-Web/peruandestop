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

    .bg__actividad-portada {
      background-image: url({{ asset('images/img/cusco_mobile.png') }});
    }

    @media (min-width: 768px) {

      .bg__actividad-portada {
        background-image: url({{ asset('images/img/background_cusco.png') }});
      }
    }
  </style>
@stop

@section('content')

  <main class="pb-24">
    <section class="bg__actividad-portada bg-cover bg-center bg-no-repeat sm:w-full h-full">
      <div class="text-white w-11/12 mx-auto pt-96" data-aos="fade-up">
        <div class="flex flex-col justify-end md:grid grid-cols-1 pb-12 md:py-10 md:gap-24">
          <div class="flex flex-col items-start my-12">
            <a href="#"
              class="font-acehbold text-text18 md:text-text22 rounded-full bg-colorBackgroundHeader py-3 px-8 text-white hover:bg-colorBackgroundMainTop md:duration-500 leading-none">Perú</a>
            <h1 class="font-acehbold text-text64 md:text-text68">Cusco</h1>
          </div>
          <div class="flex items-center flex-row md:justify-end md:gap-10 justify-center gap-5">
            <p class="font-acehSemibold text-text24 md:text-text40 leading-none md:leading-tight">
              98
              <span class="font-acehMedium text-text12 md:text-text18 block my-2">Actividades</span>
            </p>
            <p class="font-acehSemibold text-text24 md:text-text40 leading-none md:leading-tight">
              25,534
              <span class="font-acehMedium text-text12 md:text-text18 block my-2">
                Tickets Vendidos
              </span>
            </p>
            <p class="font-acehSemibold text-text24 md:text-text40 leading-none md:leading-tight">
              9,0/10
              <span class="font-acehMedium text-text12 md:text-text18 block my-2">Valoraciones</span>
            </p>
            <p class="font-acehSemibold text-text24 md:text-text40 leading-none md:leading-tight">
              2,343
              <span class="font-acehMedium text-text12 md:text-text18 block my-2">Opiniones</span>
            </p>
          </div>
        </div>
      </div>
    </section>

    <section>
      <div class="gap-10 w-11/12 mx-auto">
        <div class="flex flex-row justify-between items-center my-16 gap-5">
          <h2 class="font-acehSemibold text-text32 md:text-text64 leading-none md:leading-tight text-left text-[#141841]">
            Explorar Actividades
          </h2>

          <!-- --------- modal -->
          <!--text-[26px] md:text-[32px]  -->
          <section class="modal-mostrar z-[100]">
            <div class="modal__mostrar-info">
              <div>
                <div class="flex justify-between items-center w-full my-5">
                  <h2 class="font-acehSemibold  text-[36px] md:text-[48px] leading-none">
                    Explorar Actividades
                  </h2>
                  <a class="modal__close-mostrar">
                    <img src="./images/svg/close.svg" alt="close" />
                  </a>
                </div>
                <div class="overflow-y-scroll h-[400px] md:h-[700px] actividades_scroll pr-4 ">
                  <div class="w-full text-[#0F1B2C] border-b-[2px] border-gray-300 pb-5">
                    <h3 class="font-acehSemibold text-text26 md:text-text32 my-5">
                      Categorías
                    </h3>
                    <div class="flex flex-col gap-5">
                      <div class="flex items-center justify-start gap-5">
                        <div>
                          <img src="./images/img/categoria_1.png" alt="monumentos historicos" />
                        </div>

                        <a href="#"
                          class="font-acehRegular text-text18 md:text-text22 hover:text-colorLetter hover:font-acehbold md:duration-100">Visita
                          a monumentos históricos</a>
                      </div>
                      <div class="flex items-center justify-start gap-5">
                        <div>
                          <img src="./images/img/categoria_2.png" alt="tour gastronomico" />
                        </div>
                        <a href="#"
                          class="font-acehRegular text-text18 md:text-text22 hover:text-colorLetter hover:font-acehbold md:duration-100">Tour
                          gastronómico</a>
                      </div>
                      <div class="flex items-center justify-start gap-5">
                        <div>
                          <img src="./images/img/categoria_3.png" alt="recorrido en bicicleta" />
                        </div>
                        <a href="#"
                          class="font-acehRegular text-text18 md:text-text22 hover:text-colorLetter hover:font-acehbold md:duration-100">Recorrido
                          en bicicleta</a>
                      </div>

                      <div class="flex items-center justify-start gap-5">
                        <div>
                          <img src="./images/img/categoria_4.png" alt="excursion" />
                        </div>
                        <a href="#"
                          class="font-acehRegular text-text18 md:text-text22 hover:text-colorLetter hover:font-acehbold md:duration-100">Excursión
                          en senderismo</a>
                      </div>

                      <div class="flex items-center justify-start gap-5">
                        <div>
                          <img src="./images/img/categoria_5.png" alt="tour de vinos" />
                        </div>
                        <a href="#"
                          class="font-acehRegular text-text18 md:text-text22 hover:text-colorLetter hover:font-acehbold md:duration-100">Tour
                          de vinos</a>
                      </div>

                      <div class="flex items-center justify-start gap-5">
                        <div>
                          <img src="./images/img/categoria_6.png" alt="paseo en barco" />
                        </div>
                        <a href="#"
                          class="font-acehRegular text-text18 md:text-text22 hover:text-colorLetter hover:font-acehbold md:duration-100">Paseo
                          en barco</a>
                      </div>

                      <a href="#"
                        class="text-colorLetter font-acehbold text-text20 md:text-text24 hover:text-blue-900 md:duration-500 min-w-[90px]">
                        Mostrar Más Categorías
                      </a>
                    </div>
                  </div>

                  <div class="w-full text-[#0F1B2C] border-b-[2px] border-gray-300 py-5">
                    <h3 class="font-acehSemibold text-text26 md:text-text32 my-5">
                      Intereses del viaje
                    </h3>
                    <div class="flex flex-col gap-5">
                      <div class="flex items-center justify-start gap-5">
                        <div>
                          <img src="./images/img/categoria_1.png" alt="monumentos historicos" />
                        </div>

                        <a href="#"
                          class="font-acehRegular text-text18 md:text-text22 hover:text-colorLetter hover:font-acehbold md:duration-100">Excursión
                          en senderismo</a>
                      </div>
                      <div class="flex items-center justify-start gap-5">
                        <div>
                          <img src="./images/img/categoria_2.png" alt="tour gastronomico" />
                        </div>
                        <a href="#"
                          class="font-acehRegular text-text18 md:text-text22 hover:text-colorLetter hover:font-acehbold md:duration-100">Visita
                          a monumentos históricos</a>
                      </div>
                      <div class="flex items-center justify-start gap-5">
                        <div>
                          <img src="./images/img/categoria_3.png" alt="recorrido en bicicleta" />
                        </div>
                        <a href="#"
                          class="font-acehRegular text-text18 md:text-text22 hover:text-colorLetter hover:font-acehbold md:duration-100">Paseo
                          en barco</a>
                      </div>

                      <div class="flex items-center justify-start gap-5">
                        <div>
                          <img src="./images/img/categoria_4.png" alt="excursion" />
                        </div>
                        <a href="#"
                          class="font-acehRegular text-text18 md:text-text22 hover:text-colorLetter hover:font-acehbold md:duration-100">Tour
                          gastronómico</a>
                      </div>

                      <div class="flex items-center justify-start gap-5">
                        <div>
                          <img src="./images/img/categoria_5.png" alt="tour de vinos" />
                        </div>
                        <a href="#"
                          class="font-acehRegular text-text18 md:text-text22 hover:text-colorLetter hover:font-acehbold md:duration-100">Tour
                          de vinos</a>
                      </div>

                      <div class="flex items-center justify-start gap-5">
                        <div>
                          <img src="./images/img/categoria_6.png" alt="paseo en barco" />
                        </div>
                        <a href="#"
                          class="font-acehRegular text-text18 md:text-text22 hover:text-colorLetter hover:font-acehbold md:duration-100">Recorrido
                          en bicicleta</a>
                      </div>

                      <a href="#"
                        class="text-colorLetter font-acehbold text-text20 md:text-text24 hover:text-blue-900 md:duration-500 min-w-[90px]">
                        Mostrar Más Intereses
                      </a>
                    </div>
                  </div>

                  <div class="w-full text-[#0F1B2C] border-b-[2px] border-gray-300 py-5">
                    <h3 class="font-acehSemibold text-text26 md:text-text32 my-5">
                      Atracciones para explorar
                    </h3>
                    <div class="flex flex-col gap-5">
                      <div class="flex items-center justify-start gap-5">
                        <div>
                          <img src="./images/img/categoria_1.png" alt="monumentos historicos" />
                        </div>

                        <a href="#"
                          class="font-acehRegular text-text18 md:text-text22 hover:text-colorLetter hover:font-acehbold md:duration-100">Excursión
                          en senderismo</a>
                      </div>
                      <div class="flex items-center justify-start gap-5">
                        <div>
                          <img src="./images/img/categoria_2.png" alt="tour gastronomico" />
                        </div>
                        <a href="#"
                          class="font-acehRegular text-text18 md:text-text22 hover:text-colorLetter hover:font-acehbold md:duration-100">Visita
                          a monumentos históricos</a>
                      </div>
                      <div class="flex items-center justify-start gap-5">
                        <div>
                          <img src="./images/img/categoria_3.png" alt="recorrido en bicicleta" />
                        </div>
                        <a href="#"
                          class="font-acehRegular text-text18 md:text-text22 hover:text-colorLetter hover:font-acehbold md:duration-100">Paseo
                          en barco</a>
                      </div>

                      <div class="flex items-center justify-start gap-5">
                        <div>
                          <img src="./images/img/categoria_4.png" alt="excursion" />
                        </div>
                        <a href="#"
                          class="font-acehRegular text-text18 md:text-text22 hover:text-colorLetter hover:font-acehbold md:duration-100">Tour
                          gastronómico</a>
                      </div>

                      <div class="flex items-center justify-start gap-5">
                        <div>
                          <img src="./images/img/categoria_5.png" alt="tour de vinos" />
                        </div>
                        <a href="#"
                          class="font-acehRegular text-text18 md:text-text22 hover:text-colorLetter hover:font-acehbold md:duration-100">Tour
                          de vinos</a>
                      </div>

                      <div class="flex items-center justify-start gap-5">
                        <div>
                          <img src="./images/img/categoria_6.png" alt="paseo en barco" />
                        </div>
                        <a href="#"
                          class="font-acehRegular text-text18 md:text-text22 hover:text-colorLetter hover:font-acehbold md:duration-100">Recorrido
                          en bicicleta</a>
                      </div>

                      <a href="#"
                        class="text-colorLetter font-acehbold text-text20 md:text-text24 hover:text-blue-900 md:duration-500 min-w-[90px] pt-2">
                        Mostrar Más Atracciones
                      </a>
                    </div>
                  </div>

                  <div class="w-full text-[#0F1B2C]  py-5">
                    <h3 class="font-acehSemibold text-text26 md:text-text32 my-5 leading-none md:leading-tight">
                      Actividades para todo tipo de viajero
                    </h3>
                    <div class="flex flex-col gap-5">
                      <div class="flex items-center justify-start gap-5">
                        <div>
                          <img src="./images/img/categoria_1.png" alt="monumentos historicos" />
                        </div>

                        <a href="#"
                          class="font-acehRegular text-text18 md:text-text22 hover:text-colorLetter hover:font-acehbold md:duration-100">Visita
                          a castillos</a>
                      </div>
                      <div class="flex items-center justify-start gap-5">
                        <div>
                          <img src="./images/img/categoria_2.png" alt="tour gastronomico" />
                        </div>
                        <a href="#"
                          class="font-acehRegular text-text18 md:text-text22 hover:text-colorLetter hover:font-acehbold md:duration-100">Visita
                          a monumentos históricos</a>
                      </div>
                      <div class="flex items-center justify-start gap-5">
                        <div>
                          <img src="./images/img/categoria_3.png" alt="recorrido en bicicleta" />
                        </div>
                        <a href="#"
                          class="font-acehRegular text-text18 md:text-text22 hover:text-colorLetter hover:font-acehbold md:duration-100">Hitos
                          y monumentos</a>
                      </div>

                      <div class="flex items-center justify-start gap-5">
                        <div>
                          <img src="./images/img/categoria_4.png" alt="excursion" />
                        </div>
                        <a href="#"
                          class="font-acehRegular text-text18 md:text-text22 hover:text-colorLetter hover:font-acehbold md:duration-100">Aventura</a>
                      </div>

                      <div class="flex items-center justify-start gap-5">
                        <div>
                          <img src="./images/img/categoria_5.png" alt="tour de vinos" />
                        </div>
                        <a href="#"
                          class="font-acehRegular text-text18 md:text-text22 hover:text-colorLetter hover:font-acehbold md:duration-100">Cocina</a>
                      </div>

                      <div class="flex items-center justify-start gap-5">
                        <div>
                          <img src="./images/img/categoria_6.png" alt="paseo en barco" />
                        </div>
                        <a href="#"
                          class="font-acehRegular text-text18 md:text-text22 hover:text-colorLetter hover:font-acehbold md:duration-100">Recorrido
                          en bicicleta</a>
                      </div>

                      <a href="#"
                        class="text-colorLetter font-acehbold text-text20 md:text-text24 hover:text-blue-900 md:duration-500 min-w-[90px]">
                        Mostrar Más Actividades
                      </a>
                    </div>
                  </div>
                </div>


              </div>
            </div>
          </section>

          <a href="#"
            class="flex  items-center gap-2 mostrar-mas font-acehSemibold text-text18 lg:text-text22 rounded-md lg:rounded-3xl border-colorBorder border-2 py-4 lg:py-3 px-5 hover:bg-colorBackgroundHeader hover:text-white group lg:duration-500 flex-initial  w-auto">{{-- mostrar-modal --}}
            <!-- -----hidden md:block -->
            <span class="hidden md:inline"> Mostrar mas</span>

            <svg width="18" height="13" viewBox="0 0 18 13" fill="none" xmlns="http://www.w3.org/2000/svg"
              class="inline-block">
              <path d="M3.46154 6.5H14.5385M1 1.5H17M7.15385 11.5H10.8462" stroke="#0F1B2C" stroke-width="2"
                stroke-linecap="round" stroke-linejoin="round" class="group-hover:stroke-white md:duration-500" />
            </svg>
          </a>

          <!-- ------ -->
        </div>

        <!-- GRILLA PARA DESKTOP -->
        {{-- <div data-aos="fade-up" data-aos-offset="150"
                    class="pb-5 md:grid md:grid-cols-3 lg:grid-cols-6 gap-10 hidden">
                    <div>
                        <div class="rounded-2xl">
                            <div class="">
                                <img src="./images/img/tour_gastronomico.png" alt="tour gastronomico"
                                    class="w-full rounded-2xl shadow-lg object-cover" />
                            </div>
                        </div>

                        <a href="#" class="font-acehSemibold text-text18 md:text-text22 text-center py-5 inline-block w-full">Tour
                            gastronómico</a>
                    </div>

                    <div>
                        <div class="rounded-2xl">
                            <div class="">
                                <img src="./images/img/monumentos_historicos.png" alt="visita monumentos historicos"
                                    class="w-full rounded-2xl shadow-lg object-cover" />
                            </div>
                        </div>

                        <a href="#" class="font-acehSemibold text-text18 md:text-text22 text-center py-5 inline-block w-full">Visita a
                            monumentos históricos</a>
                    </div>

                    <div>
                        <div class="rounded-2xl">
                            <div class="">
                                <img src="./images/img/recorrido_bicicleta.png" alt="recorrido en bicicleta"
                                    class="w-full rounded-2xl shadow-lg object-cover" />
                            </div>
                        </div>

                        <a href="#" class="font-acehSemibold text-text18 md:text-text22 text-center py-5 inline-block w-full">Recorrido en
                            bicicleta</a>
                    </div>

                    <div>
                        <div class="rounded-2xl">
                            <div class="">
                                <img src="./images/img/escursion_senderismo.png" alt="excursion de senderismo"
                                    class="w-full rounded-2xl shadow-lg object-cover" />
                            </div>
                        </div>

                        <a href="#" class="font-acehSemibold text-text18 md:text-text22 text-center py-5 inline-block w-full">Excursión de
                            senderismo</a>
                    </div>

                    <div>
                        <div class="rounded-2xl">
                            <div class="">
                                <img src="./images/img/tour_vinos.png" alt="tour de vinos"
                                    class="w-full rounded-2xl shadow-lg object-cover" />
                            </div>
                        </div>

                        <a href="#" class="font-acehSemibold text-text18 md:text-text22 text-center py-5 inline-block w-full">Tour de
                            vinos</a>
                    </div>

                    <div>
                        <div class="rounded-2xl">
                            <div class="">
                                <img src="./images/img/paseo_barco.png" alt="paseo en barco"
                                    class="w-full rounded-2xl shadow-lg object-cover" />
                            </div>
                        </div>

                        <a href="#" class="font-acehSemibold text-text18 md:text-text22 text-center py-5 inline-block w-full">Paseo en
                            barco</a>
                    </div>
                </div> --}}
        <!-- CARRUSEL PARRA MOBILE -->
        <div data-aos="fade-up" data-aos-offset="150">
          <div class="swiper productos-explorar-actividades">
            <div class="swiper-wrapper text-[#0F1B2C]">
              <div class="swiper-slide rounded-2xl">
                <div class="rounded-2xl">
                  <div class="">
                    <img src="./images/img/tour_gastronomico.png" alt="tour gastronomico"
                      class="w-full rounded-2xl shadow-lg object-cover" />
                  </div>
                </div>

                <a href="#"
                  class="font-acehSemibold text-text18 md:text-text22 text-center py-5 inline-block w-full ">Tour
                  gastronómico</a>
              </div>
              <div class="swiper-slide rounded-2xl">
                <div class="rounded-2xl">
                  <div class="">
                    <img src="./images/img/monumentos_historicos.png" alt="visita monumentos historicos"
                      class="w-full rounded-2xl shadow-lg object-cover" />
                  </div>
                </div>

                <a href="#"
                  class="font-acehSemibold text-text18 md:text-text22 text-center py-5 inline-block w-full">Visita
                  a monumentos
                  históricos</a>
              </div>
              <div class="swiper-slide rounded-2xl">
                <div class="rounded-2xl">
                  <div class="">
                    <img src="./images/img/recorrido_bicicleta.png" alt="recorrido en bicicleta"
                      class="w-full rounded-2xl shadow-lg object-cover" />
                  </div>
                </div>

                <a href="#"
                  class="font-acehSemibold text-text18 md:text-text22 text-center py-5 inline-block w-full">Recorrido
                  en
                  bicicleta</a>
              </div>

              <div class="swiper-slide rounded-2xl">
                <div class="rounded-2xl">
                  <div class="">
                    <img src="./images/img/escursion_senderismo.png" alt="excursion de senderismo"
                      class="w-full rounded-2xl shadow-lg object-cover" />
                  </div>
                </div>

                <a href="#"
                  class="font-acehSemibold text-text18 md:text-text22 text-center py-5 inline-block w-full">Excursión
                  de
                  senderismo</a>
              </div>

              <div class="swiper-slide rounded-2xl">
                <div class="rounded-2xl">
                  <div class="">
                    <img src="./images/img/tour_vinos.png" alt="tour de vinos"
                      class="w-full rounded-2xl shadow-lg object-cover" />
                  </div>
                </div>

                <a href="#"
                  class="font-acehSemibold text-text18 md:text-text22 text-center py-5 inline-block w-full">Tour
                  de vinos</a>
              </div>

              <div class="swiper-slide rounded-2xl">
                <div class="rounded-2xl">
                  <div class="">
                    <img src="./images/img/paseo_barco.png" alt="paseo en barco"
                      class="w-full rounded-2xl shadow-lg object-cover" />
                  </div>
                </div>

                <a href="#"
                  class="font-acehSemibold text-text18 md:text-text22 text-center py-5 inline-block w-full">Paseo
                  en barco</a>
              </div>

              <div class="swiper-slide rounded-2xl">
                <div class="rounded-2xl">
                  <div class="">
                    <img src="./images/img/tour_gastronomico.png" alt="tour gastronomico"
                      class="w-full rounded-2xl shadow-lg object-cover" />
                  </div>
                </div>

                <a href="#"
                  class="font-acehSemibold text-text18 md:text-text22 text-center py-5 inline-block w-full">Tour
                  gastronómico</a>
              </div>
              <div class="swiper-slide rounded-2xl">
                <div class="rounded-2xl">
                  <div class="">
                    <img src="./images/img/monumentos_historicos.png" alt="visita monumentos historicos"
                      class="w-full rounded-2xl shadow-lg object-cover" />
                  </div>
                </div>

                <a href="#"
                  class="font-acehSemibold text-text18 md:text-text22 text-center py-5 inline-block w-full">Visita
                  a monumentos
                  históricos</a>
              </div>
              <div class="swiper-slide rounded-2xl">
                <div class="rounded-2xl">
                  <div class="">
                    <img src="./images/img/recorrido_bicicleta.png" alt="recorrido en bicicleta"
                      class="w-full rounded-2xl shadow-lg object-cover" />
                  </div>
                </div>

                <a href="#"
                  class="font-acehSemibold text-text18 md:text-text22 text-center py-5 inline-block w-full">Recorrido
                  en
                  bicicleta</a>
              </div>

              <div class="swiper-slide rounded-2xl">
                <div class="rounded-2xl">
                  <div class="">
                    <img src="./images/img/escursion_senderismo.png" alt="excursion de senderismo"
                      class="w-full rounded-2xl shadow-lg object-cover" />
                  </div>
                </div>

                <a href="#"
                  class="font-acehSemibold text-text18 md:text-text22 text-center py-5 inline-block w-full">Excursión
                  de
                  senderismo</a>
              </div>

              <div class="swiper-slide rounded-2xl">
                <div class="rounded-2xl">
                  <div class="">
                    <img src="./images/img/tour_vinos.png" alt="tour de vinos"
                      class="w-full rounded-2xl shadow-lg object-cover" />
                  </div>
                </div>

                <a href="#"
                  class="font-acehSemibold text-text18 md:text-text22 text-center py-5 inline-block w-full">Tour
                  de vinos</a>
              </div>

              <div class="swiper-slide rounded-2xl">
                <div class="rounded-2xl">
                  <div class="">
                    <img src="./images/img/paseo_barco.png" alt="paseo en barco"
                      class="w-full rounded-2xl shadow-lg object-cover" />
                  </div>
                </div>

                <a href="#"
                  class="font-acehSemibold text-text18 md:text-text22 text-center py-5 inline-block w-full">Paseo
                  en barco</a>
              </div>
            </div>
            <!-- <div class="swiper-pagination-actividades mt-6"></div> -->
          </div>
        </div>
      </div>
    </section>


    <section>
      <div class="w-11/12 mx-auto mt-16">
        <h2 class="font-acehSemibold text-[40px] md:text-[64px] leading-none md:leading-tight text-left text-[#141841]">
          Todos los tours de : Pais
        </h2>

        <div class="flex flex-col md:flex-row md:justify-between md:items-center text-[#0F1B2C]">
          <div class="flex gap-10 py-10 justify-between">
            <div>
              <a
                class="cursor-pointer mostrar-filtros font-acehSemibold text-text18 md:text-text22 rounded-[20px] border-colorBorder border-2 py-2 md:py-3 px-5 hover:bg-colorBackgroundHeader hover:text-white group md:duration-500 flex gap-2 items-center">
                Filtros
                <svg width="20" height="20" viewBox="0 0 18 13" fill="none"
                  xmlns="http://www.w3.org/2000/svg" class="inline-block">
                  <path d="M3.46154 6.5H14.5385M1 1.5H17M7.15385 11.5H10.8462" stroke="#0F1B2C" stroke-width="2"
                    stroke-linecap="round" stroke-linejoin="round" class="group-hover:stroke-white md:duration-500" />
                </svg>
              </a>

              <!-- ----filtros modales -->
              <section class="modal-filtros z-[100]">
                <div class="modal__mostrar-filtros">
                  <div>
                    <div class="flex justify-between items-center w-full my-5">
                      <h2 class="font-acehSemibold text-text36 md:text-text48 leading-none px-2">
                        Filtros
                      </h2>
                      <a class="modal__close-filtro">
                        <img src="./images/svg/close.svg" alt="close" />
                      </a>
                    </div>

                    <div class="overflow-y-scroll h-[400px] md:h-[700px] filtros_scroll pr-4">
                      <div class="w-full text-[#0F1B2C] border-b-[2px] border-gray-300 pb-5 px-2">
                        <h3 class="font-acehSemibold text-text26 md:text-text32 my-5">
                          Tiempo
                        </h3>
                        <div class="flex flex-col gap-5">
                          <div class="flex items-center justify-start gap-5">
                            <div>
                              <input type="checkbox" id="tiempo_temprano"
                                class="h-5 w-5 border-colorBorder rounded focus:ring-offset-0 checked:bg-colorBackgroundHeader" />
                            </div>

                            <label for="tiempo_temprano" class="font-acehMedium text-text18 md:text-text22">
                              Por la mañana, de 8 a. m a 12p.m
                            </label>
                          </div>
                          <div class="flex items-center justify-start gap-5">
                            <div class="flex items-center justify-start gap-5">
                              <div>
                                <input type="checkbox" id="tiempo_tarde"
                                  class="h-5 w-5 border-colorBorder rounded focus:ring-offset-0 checked:bg-colorBackgroundHeader" />
                              </div>

                              <label for="tiempo_tarde" class="font-acehMedium text-text18 md:text-text22">
                                Por la tarde, de 12 a 17 horas
                              </label>
                            </div>
                          </div>
                          <div class="flex items-center justify-start gap-5">
                            <div class="flex items-center justify-start gap-5">
                              <div>
                                <input type="checkbox" id="tiempo_noche"
                                  class="h-5 w-5 border-colorBorder rounded focus:ring-offset-0 checked:bg-colorBackgroundHeader" />
                              </div>

                              <label for="tiempo_noche" class="font-acehMedium text-text18 md:text-text22">
                                Por la noche, de 17:00 a. m a 12:00 horas
                              </label>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="w-full text-[#0F1B2C] border-b-[2px] border-gray-300 py-5 px-2">
                        <h3 class="font-acehSemibold text-text26 md:text-text32 my-5">
                          Destinos
                        </h3>
                        <div class="flex flex-col gap-5">
                          <div class="flex items-center justify-start gap-5">
                            <div>
                              <input type="checkbox" id="cusco_destino"
                                class="h-5 w-5 border-colorBorder rounded focus:ring-offset-0 checked:bg-colorBackgroundHeader" />
                            </div>

                            <label for="cusco_destino" class="font-acehMedium text-text18 md:text-text22">
                              Cusco
                            </label>
                          </div>
                          <div class="flex items-center justify-start gap-5">
                            <div class="flex items-center justify-start gap-5">
                              <div>
                                <input type="checkbox" id="nueva_york"
                                  class="h-5 w-5 border-colorBorder rounded focus:ring-offset-0 checked:bg-colorBackgroundHeader" />
                              </div>

                              <label for="nueva_york" class="font-acehMedium text-text18 md:text-text22">
                                Nueva York
                              </label>
                            </div>
                          </div>
                          <div class="flex items-center justify-start gap-5">
                            <div class="flex items-center justify-start gap-5">
                              <div>
                                <input type="checkbox" id="paris"
                                  class="h-5 w-5 border-colorBorder rounded focus:ring-offset-0 checked:bg-colorBackgroundHeader" />
                              </div>

                              <label for="paris" class="font-acehMedium text-text18 md:text-text22">
                                París
                              </label>
                            </div>
                          </div>

                          <div class="flex items-center justify-start gap-5">
                            <div class="flex items-center justify-start gap-5">
                              <div>
                                <input type="checkbox" id="londres"
                                  class="h-5 w-5 border-colorBorder rounded focus:ring-offset-0 checked:bg-colorBackgroundHeader" />
                              </div>

                              <label for="londres" class="font-acehMedium text-text18 md:text-text22">
                                Londres
                              </label>
                            </div>
                          </div>

                          <div class="flex items-center justify-start gap-5">
                            <div class="flex items-center justify-start gap-5">
                              <div>
                                <input type="checkbox" id="florencia"
                                  class="h-5 w-5 border-colorBorder rounded focus:ring-offset-0 checked:bg-colorBackgroundHeader" />
                              </div>

                              <label for="florencia" class="font-acehMedium text-text18 md:text-text22">
                                Florencia
                              </label>
                            </div>
                          </div>

                          <a href="#"
                            class="text-colorLetter font-acehbold text-text120 md:text-text24 hover:text-blue-900 md:duration-500 min-w-[90px]">
                            Mostrar Más Destinos
                          </a>
                        </div>
                      </div>

                      <div class="w-full text-[#0F1B2C] border-b-[2px] border-gray-300 py-5 px-2">
                        <h3 class="font-acehSemibold text-text26 md:text-text32 my-5">
                          Interés
                        </h3>
                        <div class="flex flex-col gap-5">
                          <div class="flex items-center justify-start gap-5">
                            <div>
                              <input type="checkbox" id="todas_actividades"
                                class="h-5 w-5 border-colorBorder rounded focus:ring-offset-0 checked:bg-colorBackgroundHeader" />
                            </div>

                            <label for="todas_actividades" class="font-acehMedium text-text18 md:text-text22">
                              Todas las actividades
                            </label>
                          </div>
                          <div class="flex items-center justify-start gap-5">
                            <div class="flex items-center justify-start gap-5">
                              <div>
                                <input type="checkbox" id="tour_gastronomico"
                                  class="h-5 w-5 border-colorBorder rounded focus:ring-offset-0 checked:bg-colorBackgroundHeader" />
                              </div>

                              <label for="tour_gastronomico" class="font-acehMedium text-text18 md:text-text22">
                                Tour Gastronómico
                              </label>
                            </div>
                          </div>
                          <div class="flex items-center justify-start gap-5">
                            <div class="flex items-center justify-start gap-5">
                              <div>
                                <input type="checkbox" id="monumentos_historicos"
                                  class="h-5 w-5 border-colorBorder rounded focus:ring-offset-0 checked:bg-colorBackgroundHeader" />
                              </div>

                              <label for="monumentos_historicos" class="font-acehMedium text-text18 md:text-text22">
                                Visita a monumentos históricos
                              </label>
                            </div>
                          </div>

                          <div class="flex items-center justify-start gap-5">
                            <div class="flex items-center justify-start gap-5">
                              <div>
                                <input type="checkbox" id="recorrido_bicicleta"
                                  class="h-5 w-5 border-colorBorder rounded focus:ring-offset-0 checked:bg-colorBackgroundHeader" />
                              </div>

                              <label for="recorrido_bicicleta" class="font-acehMedium text-text18 md:text-text22">
                                Recorrido en bicicleta
                              </label>
                            </div>
                          </div>

                          <div class="flex items-center justify-start gap-5">
                            <div class="flex items-center justify-start gap-5">
                              <div>
                                <input type="checkbox" id="excursion_senderismo"
                                  class="h-5 w-5 border-colorBorder rounded focus:ring-offset-0 checked:bg-colorBackgroundHeader" />
                              </div>

                              <label for="excursion_senderismo" class="font-acehMedium text-text18 md:text-text22">
                                excursion de senderismo
                              </label>
                            </div>
                          </div>
                          <div class="flex items-center justify-start gap-5">
                            <div class="flex items-center justify-start gap-5">
                              <div>
                                <input type="checkbox" id="tour_vinos"
                                  class="h-5 w-5 border-colorBorder rounded focus:ring-offset-0 checked:bg-colorBackgroundHeader" />
                              </div>

                              <label for="tour_vinos" class="font-acehMedium text-text18 md:text-text22">
                                Tour de Vinos
                              </label>
                            </div>
                          </div>

                          <div class="flex items-center justify-start gap-5">
                            <div class="flex items-center justify-start gap-5">
                              <div>
                                <input type="checkbox" id="paseo_barcos"
                                  class="h-5 w-5 border-colorBorder rounded focus:ring-offset-0 checked:bg-colorBackgroundHeader" />
                              </div>

                              <label for="paseo_barcos" class="font-acehMedium text-text18 md:text-text22">
                                Paseo en barco
                              </label>
                            </div>
                          </div>

                          <div class="flex items-center justify-start gap-5">
                            <div class="flex items-center justify-start gap-5">
                              <div>
                                <input type="checkbox" id="galerias_arte"
                                  class="h-5 w-5 border-colorBorder rounded focus:ring-offset-0 checked:bg-colorBackgroundHeader" />
                              </div>

                              <label for="galerias_arte" class="font-acehMedium text-text18 md:text-text22">
                                Visita a museos y galerías de artes
                              </label>
                            </div>
                          </div>

                          <div class="flex items-center justify-start gap-5">
                            <div class="flex items-center justify-start gap-5">
                              <div>
                                <input type="checkbox" id="aventura"
                                  class="h-5 w-5 border-colorBorder rounded focus:ring-offset-0 checked:bg-colorBackgroundHeader" />
                              </div>

                              <label for="aventura" class="font-acehMedium text-text18 md:text-text22">
                                Aventura
                              </label>
                            </div>
                          </div>

                          <a href="#"
                            class="text-colorLetter font-acehbold text-text20 md:text-text24 hover:text-blue-900 md:duration-500 min-w-[90px]">
                            Mostrar Más Intereses
                          </a>
                        </div>
                      </div>

                      <div class="w-full text-[#0F1B2C] border-b-[2px] border-gray-300 py-5 px-2">
                        <h3 class="font-acehSemibold text-text26 md:text-text32 mt-5 mb-3">
                          Precio
                        </h3>
                        <p class="font-acehMedium text-text20 md:text-text24 mb-3">
                          El precio medio de la actividad es s/144.00
                        </p>

                        <div class="flex flex-col gap-5">
                          <div class="flex flex-col gap-5 md:flex-row ">
                            <div class="flex flex-col w-full">
                              <label class="font-acehMedium text-text16 md:text-text20">Mín.
                                precio</label>
                              <input type="number"
                                class="appearance-none border rounded-3xl py-2 px-3 text-gray-700 leading-tight focus:border-colorBorder focus:shadow-outline border-colorBorder text-text16 md:text-text20" />
                            </div>
                            <div class="flex flex-col w-full">
                              <label class="font-acehMedium text-text16 md:text-text20">Max.
                                precio</label>
                              <input type="number"
                                class="appearance-none border rounded-3xl py-2 px-3 text-gray-700 leading-tight focus:border-colorBorder focus:shadow-outline border-colorBorder text-text16 md:text-text20" />
                            </div>
                          </div>

                          <div class="flex flex-col md:flex-row gap-5 items-center">

                            <p class="text-[#0F1B2C] font-acehbold text-text18 md:text-text22 w-full">
                              Tipo de moneda
                            </p>

                            {{-- revisar --}}
                            <select name="" id=""
                              class="font-acehbold text-[#3F76BB] border-none text-text18 md:text-text22 w-full px-2">
                              <option value="1" class="font-acehRegular">Soles Peruanos
                              </option>
                              <option value="2" class="font-acehRegular">Dolares
                                americanos</option>
                              <option value="3" class="font-acehRegular">Libra
                                esterlina</option>

                            </select>


                            {{--  <p
                                                            class="text-[#0F1B2C] font-acehbold text-text18 md:text-text22 min-w-[90px]">
                                                            Tipo de moneda
                                                        </p>

                                                        <div class="dropdown-moneda inline-block relative">
                                                            <button
                                                                class="font-acehbold py-2  rounded inline-flex items-center">
                                                                <span
                                                                    class="mr-0 md:mr-12 text-[#3F76BB] text-text18 md:text-text22">
                                                                    Soles peruanos
                                                                </span>
                                                                <svg width="20" height="20" viewBox="0 0 10 6"
                                                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                                                        d="M9.20711 0.792893C8.81658 0.402369 8.18342 0.402369 7.79289 0.792893L5 3.58579L2.20711 0.792893C1.81658 0.402369 1.18342 0.402369 0.792894 0.792893C0.402369 1.18342 0.402369 1.81658 0.792894 2.20711L4.29289 5.70711C4.68342 6.09763 5.31658 6.09763 5.70711 5.70711L9.20711 2.20711C9.59763 1.81658 9.59763 1.18342 9.20711 0.792893Z"
                                                                        fill="#3F76BB" />
                                                                </svg>
                                                            </button>
                                                            <ul
                                                                class="dropdown-menu-moneda absolute text-[#141718] text-text16 md:text-text20 w-full hidden z-20 bg-white rounded-md">
                                                                <li class="">
                                                                    <a
                                                                        class="rounded-md hover:bg-gray-200 py-2 px-4 block whitespace-no-wrap">Dolares
                                                                        Americanos</a>
                                                                </li>
                                                                <li class="">
                                                                    <a
                                                                        class="rounded-md hover:bg-gray-200 py-2 px-4 block whitespace-no-wrap">Portugués</a>
                                                                </li>
                                                                <li class="">
                                                                    <a
                                                                        class="rounded-md hover:bg-gray-200 py-2 px-4 block whitespace-no-wrap">Frances</a>
                                                                </li>
                                                            </ul>
                                                        </div> --}}

                            <!-- ----- -->
                          </div>
                        </div>
                      </div>

                      <div class="w-full text-[#0F1B2C] border-b-[2px] border-gray-300 py-5 px-2">
                        <h3 class="font-acehSemibold text-text26 md:text-text32 my-5">
                          Duración
                        </h3>
                        <div class="flex flex-col gap-5">
                          <div class="flex items-center justify-start gap-5">
                            <div>
                              <input type="checkbox" id="tiempo_03"
                                class="h-5 w-5 border-colorBorder rounded focus:ring-offset-0 checked:bg-colorBackgroundHeader" />
                            </div>

                            <label for="tiempo_03" class="font-acehMedium text-text18 md:text-text22">
                              0 - 3 horas
                            </label>
                          </div>
                          <div class="flex items-center justify-start gap-5">
                            <div class="flex items-center justify-start gap-5">
                              <div>
                                <input type="checkbox" id="tiempo_35"
                                  class="h-5 w-5 border-colorBorder rounded focus:ring-offset-0 checked:bg-colorBackgroundHeader" />
                              </div>

                              <label for="tiempo_35" class="font-acehMedium text-text18 md:text-text22">
                                3 - 5
                              </label>
                            </div>
                          </div>
                          <div class="flex items-center justify-start gap-5">
                            <div class="flex items-center justify-start gap-5">
                              <div>
                                <input type="checkbox" id="tiempo_57"
                                  class="h-5 w-5 border-colorBorder rounded focus:ring-offset-0 checked:bg-colorBackgroundHeader" />
                              </div>

                              <label for="tiempo_57" class="font-acehMedium text-text18 md:text-text22">
                                5 - 7
                              </label>
                            </div>
                          </div>

                          <div class="flex items-center justify-start gap-5">
                            <div class="flex items-center justify-start gap-5">
                              <div>
                                <input type="checkbox" id="full_day"
                                  class="h-5 w-5 border-colorBorder rounded focus:ring-offset-0 checked:bg-colorBackgroundHeader" />
                              </div>

                              <label for="full_day" class="font-acehMedium text-text18 md:text-text22">
                                Full day (7 +horas)
                              </label>
                            </div>
                          </div>
                          <div class="flex items-center justify-start gap-5">
                            <div class="flex items-center justify-start gap-5">
                              <div>
                                <input type="checkbox" id="multiday"
                                  class="h-5 w-5 border-colorBorder rounded focus:ring-offset-0 checked:bg-colorBackgroundHeader" />
                              </div>

                              <label for="multiday" class="font-acehMedium text-text18 md:text-text22">
                                Multi-day
                              </label>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="flex justify-between items-center pt-5">
                        <a href="#"
                          class="text-colorLetter font-acehbold text-text16 md:text-text22 hover:text-blue-900 md:duration-500 min-w-[90px] my-5 inline-block text-center md:text-left">
                          Limpiar Todo
                        </a>

                        <a href="{{ route('detalleActividad') }}"
                          class="font-acehMedium text-text16 md:text-text22 rounded-3xl bg-colorBackgroundHeader py-3 px-5 md:px-8 text-white hover:bg-colorBackgroundMainTop md:duration-500">
                          Ver Actividad</a>
                      </div>

                    </div>



                  </div>
                </div>
              </section>
              <!-- ------ -->
            </div>

            <div class="flex items-center">
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
            </div>
          </div>
          <p class="font-acehSemibold text-text18 md:text-text22">
            98 activiades y excursiones en Cusco
          </p>
        </div>
      </div>

      <div class="w-11/12 mx-auto">
        <div class="grid grid-cols-1 2lg:grid-cols-2 mt-10 gap-20 md:gap-10 text-[#0F1B2C]">
          <div class="" data-aos="fade-up" data-aos-offset="150">
            <div class="overflow-hidden rounded-2xl">
              <div class="img-container">
                <img src="./images/img/recorrido_camino_inca.png" alt=""
                  class="w-full rounded-2xl shadow-lg object-cover" />
              </div>
            </div>

            <div class="w-full mx-auto flex flex-col justify-center gap-5">
              <div class="flex flex-col-reverse gap-5 md:gap-5 md:flex-row md:justify-start md:items-center mt-5">
                <span
                  class="font-acehMedium text-text16 md:text-text20 rounded-full border-colorBorder border-2 py-1 px-5 inline-block max-w-max text-center">
                  Senderismo
                </span>

                <div class="flex justify-between items-center gap-5">
                  <p class="font-acehbold text-text18 md:text-text22">
                    9,0/10
                    <span class="font-acehMedium text-text18 md:text-text22">Valoraciones</span>
                  </p>
                  <p class="font-acehbold text-text18 md:text-text22">
                    2,343
                    <span class="font-acehMedium text-text18 md:text-text22">Opiniones</span>
                  </p>
                </div>
              </div>
              <div class="flex flex-col gap-5">
                <h2 class="font-acehSemibold text-text48 md:text-text52 leading-none">
                  Recorrido Camino al Inca
                </h2>
                <div class="flex gap-10">
                  <div class="flex gap-2 items-center">
                    <img src="./images/svg/ubicacion.svg" alt="ubigeo" />
                    <p class="font-acehMedium text-text18 md:text-text22">Cusco - Perú</p>
                  </div>
                  <div class="flex gap-2 items-center">
                    <img src="./images/svg/hora.svg" alt="hora" />
                    <p class="font-acehMedium text-text16 md:text-text20">4 horas</p>
                  </div>
                </div>
              </div>

              <div class="flex flex-col gap-5 md:flex-row justify-between items-start md:items-center ">
                <p class="font-acehbold text-text40 md:text-text44">
                  120 US$
                  <span class="block font-acehMedium text-text16 md:text-text20">Por persona</span>
                </p>
                <a href="{{ route('detalleActividad') }}"
                  class="font-acehSemibold text-text16 md:text-text20 rounded-full bg-colorBackgroundHeader py-3 px-8 text-white hover:bg-colorBackgroundMainTop md:duration-500 inline-block w-full text-center md:w-auto">Ver
                  Actividad</a>
              </div>
            </div>
          </div>

          <div data-aos="fade-up" data-aos-offset="150">
            <div>
              <img src="./images/img/duis mauris.png" alt="" class="w-full rounded-2xl" />
            </div>

            <div class="w-full mx-auto flex flex-col justify-center gap-5">
              <div class="flex flex-col-reverse gap-5 md:gap-5 md:flex-row md:justify-start md:items-center mt-5">
                <span
                  class="font-acehMedium text-text16 md:text-text20 rounded-full border-colorBorder border-2 py-1 px-5 inline-block max-w-max text-center">
                  City tour
                </span>

                <div class="flex justify-between items-center gap-5">
                  <p class="font-acehbold text-text18 md:text-text22">
                    9,0/10
                    <span class="font-acehMedium text-text18 md:text-text22">Valoraciones</span>
                  </p>
                  <p class="font-acehbold text-text18 md:text-text22">
                    2,343
                    <span class="font-acehMedium text-text18 md:text-text22">Opiniones</span>
                  </p>
                </div>
              </div>
              <div class="flex flex-col gap-5">
                <h2 class="font-acehSemibold text-text48 md:text-text52 leading-none">
                  Recorrido Camino al Inca
                </h2>
                <div class="flex gap-10">
                  <div class="flex gap-2 items-center">
                    <img src="./images/svg/ubicacion.svg" alt="ubigeo" />
                    <p class="font-acehMedium text-text18 md:text-text22">Cusco - Perú</p>
                  </div>
                  <div class="flex gap-2 items-center">
                    <img src="./images/svg/hora.svg" alt="hora" />
                    <p class="font-acehMedium text-text16 md:text-text20">4 horas</p>
                  </div>
                </div>
              </div>

              <div class="flex flex-col gap-5 md:flex-row justify-between items-start md:items-center ">
                <p class="font-acehbold text-text40 md:text-text44">
                  120 US$
                  <span class="block font-acehMedium text-text16 md:text-text20">Por persona</span>
                </p>
                <a href="{{ route('detalleActividad') }}"
                  class="font-acehSemibold text-text16 md:text-text20 rounded-full bg-colorBackgroundHeader py-3 px-8 text-white hover:bg-colorBackgroundMainTop md:duration-500 inline-block w-full text-center md:w-auto">Ver
                  Actividad</a>
              </div>
            </div>
          </div>

          <div data-aos="fade-up" data-aos-offset="150">
            <div>
              <img src="./images/img/integer sollicitun.png" alt="" class="w-full rounded-2xl" />
            </div>

            <div class="w-full mx-auto flex flex-col justify-center gap-5">
              <div class="flex flex-col-reverse gap-5 md:gap-5 md:flex-row md:justify-start md:items-center mt-5">
                <span
                  class="font-acehMedium text-text16 md:text-text20 rounded-full border-colorBorder border-2 py-1 px-5 inline-block max-w-max text-center">
                  Senderismo
                </span>

                <div class="flex justify-between items-center gap-5">
                  <p class="font-acehbold text-text18 md:text-text22">
                    9,0/10
                    <span class="font-acehMedium text-text18 md:text-text22">Valoraciones</span>
                  </p>
                  <p class="font-acehbold text-text18 md:text-text22">
                    2,343
                    <span class="font-acehMedium text-text18 md:text-text22">Opiniones</span>
                  </p>
                </div>
              </div>
              <div class="flex flex-col gap-5">
                <h2 class="font-acehSemibold text-text48 md:text-text52 leading-none">
                  Recorrido Camino al Inca
                </h2>
                <div class="flex gap-10">
                  <div class="flex gap-2 items-center">
                    <img src="./images/svg/ubicacion.svg" alt="ubigeo" />
                    <p class="font-acehMedium text-text18 md:text-text22">Cusco - Perú</p>
                  </div>
                  <div class="flex gap-2 items-center">
                    <img src="./images/svg/hora.svg" alt="hora" />
                    <p class="font-acehMedium text-text16 md:text-text20">4 horas</p>
                  </div>
                </div>
              </div>

              <div class="flex flex-col gap-5 md:flex-row justify-between items-start md:items-center ">
                <p class="font-acehbold text-text40 md:text-text44">
                  120 US$
                  <span class="block font-acehMedium text-text16 md:text-text20">Por persona</span>
                </p>
                <a href="{{ route('detalleActividad') }}"
                  class="font-acehSemibold text-text16 md:text-text20 rounded-full bg-colorBackgroundHeader py-3 px-8 text-white hover:bg-colorBackgroundMainTop md:duration-500 inline-block w-full text-center md:w-auto">Ver
                  Actividad</a>
              </div>
            </div>
          </div>

          <div data-aos="fade-up" data-aos-offset="150">
            <div>
              <img src="./images/img/duis mauris.png" alt="" class="w-full rounded-2xl" />
            </div>

            <div class="w-full mx-auto flex flex-col justify-center gap-5">
              <div class="flex flex-col-reverse gap-5 md:gap-5 md:flex-row md:justify-start md:items-center mt-5">
                <span
                  class="font-acehMedium text-text16 md:text-text20 rounded-full border-colorBorder border-2 py-1 px-5 inline-block max-w-max text-center">
                  City tour
                </span>

                <div class="flex justify-between items-center gap-5">
                  <p class="font-acehbold text-text18 md:text-text22">
                    9,0/10
                    <span class="font-acehMedium text-text18 md:text-text22">Valoraciones</span>
                  </p>
                  <p class="font-acehbold text-text18 md:text-text22">
                    2,343
                    <span class="font-acehMedium text-text18 md:text-text22">Opiniones</span>
                  </p>
                </div>
              </div>
              <div class="flex flex-col gap-5">
                <h2 class="font-acehSemibold text-text48 md:text-text52 leading-none">
                  Recorrido Camino al Inca
                </h2>
                <div class="flex gap-10">
                  <div class="flex gap-2 items-center">
                    <img src="./images/svg/ubicacion.svg" alt="ubigeo" />
                    <p class="font-acehMedium text-text18 md:text-text22">Cusco - Perú</p>
                  </div>
                  <div class="flex gap-2 items-center">
                    <img src="./images/svg/hora.svg" alt="hora" />
                    <p class="font-acehMedium text-text16 md:text-text20">4 horas</p>
                  </div>
                </div>
              </div>

              <div class="flex flex-col gap-5 md:flex-row justify-between items-start md:items-center ">
                <p class="font-acehbold text-text40 md:text-text44">
                  120 US$
                  <span class="block font-acehMedium text-text16 md:text-text20">Por persona</span>
                </p>
                <a href="{{ route('detalleActividad') }}"
                  class="font-acehSemibold text-text16 md:text-text20 rounded-full bg-colorBackgroundHeader py-3 px-8 text-white hover:bg-colorBackgroundMainTop md:duration-500 inline-block w-full text-center md:w-auto">Ver
                  Actividad</a>
              </div>
            </div>
          </div>

          <div class="" data-aos="fade-up" data-aos-offset="150">
            <div class="">
              <img src="./images/img/ronda_comida_peruana_actividad.png" alt="" class="w-full rounded-2xl" />
            </div>

            <div class="w-full mx-auto flex flex-col justify-center gap-5">
              <div class="flex flex-col-reverse gap-5 md:gap-5 md:flex-row md:justify-start md:items-center mt-5">
                <span
                  class="font-acehMedium text-text16 md:text-text20 rounded-full border-colorBorder border-2 py-1 px-5 inline-block max-w-max text-center">
                  Senderismo
                </span>

                <div class="flex justify-between items-center gap-5">
                  <p class="font-acehbold text-text18 md:text-text22">
                    9,0/10
                    <span class="font-acehMedium text-text18 md:text-text22">Valoraciones</span>
                  </p>
                  <p class="font-acehbold text-text18 md:text-text22">
                    2,343
                    <span class="font-acehMedium text-text18 md:text-text22">Opiniones</span>
                  </p>
                </div>
              </div>
              <div class="flex flex-col gap-5">
                <h2 class="font-acehSemibold text-text48 md:text-text52 leading-none">
                  Recorrido Camino al Inca
                </h2>
                <div class="flex gap-10">
                  <div class="flex gap-2 items-center">
                    <img src="./images/svg/ubicacion.svg" alt="ubigeo" />
                    <p class="font-acehMedium text-text18 md:text-text22">Cusco - Perú</p>
                  </div>
                  <div class="flex gap-2 items-center">
                    <img src="./images/svg/hora.svg" alt="hora" />
                    <p class="font-acehMedium text-text16 md:text-text20">4 horas</p>
                  </div>
                </div>
              </div>

              <div class="flex flex-col gap-5 md:flex-row justify-between items-start md:items-center ">
                <p class="font-acehbold text-text40 md:text-text44">
                  120 US$
                  <span class="block font-acehMedium text-text16 md:text-text20">Por persona</span>
                </p>
                <a href="{{ route('detalleActividad') }}"
                  class="font-acehSemibold text-text16 md:text-text20 rounded-full bg-colorBackgroundHeader py-3 px-8 text-white hover:bg-colorBackgroundMainTop md:duration-500 inline-block w-full text-center md:w-auto">Ver
                  Actividad</a>
              </div>
            </div>
          </div>

          <div class="" data-aos="fade-up" data-aos-offset="150">
            <div class="">
              <img src="./images/img/nan venenatis.png" alt="" class="w-full rounded-2xl" />
            </div>

            <div class="w-full mx-auto flex flex-col justify-center gap-5">
              <div class="flex flex-col-reverse gap-5 md:gap-5 md:flex-row md:justify-start md:items-center mt-5">
                <span
                  class="font-acehMedium text-text16 md:text-text20 rounded-full border-colorBorder border-2 py-1 px-5 inline-block max-w-max text-center">
                  City tour
                </span>

                <div class="flex justify-between items-center gap-5">
                  <p class="font-acehbold text-text18 md:text-text22">
                    9,0/10
                    <span class="font-acehMedium text-text18 md:text-text22">Valoraciones</span>
                  </p>
                  <p class="font-acehbold text-text18 md:text-text22">
                    2,343
                    <span class="font-acehMedium text-text18 md:text-text22">Opiniones</span>
                  </p>
                </div>
              </div>
              <div class="flex flex-col gap-5">
                <h2 class="font-acehSemibold text-text48 md:text-text52 leading-none">
                  Recorrido Camino al Inca
                </h2>
                <div class="flex gap-10">
                  <div class="flex gap-2 items-center">
                    <img src="./images/svg/ubicacion.svg" alt="ubigeo" />
                    <p class="font-acehMedium text-text18 md:text-text22">Cusco - Perú</p>
                  </div>
                  <div class="flex gap-2 items-center">
                    <img src="./images/svg/hora.svg" alt="hora" />
                    <p class="font-acehMedium text-text16 md:text-text20">4 horas</p>
                  </div>
                </div>
              </div>

              <div class="flex flex-col gap-5 md:flex-row justify-between items-start md:items-center ">
                <p class="font-acehbold text-text40 md:text-text44">
                  120 US$
                  <span class="block font-acehMedium text-text16 md:text-text20">Por persona</span>
                </p>
                <a href="{{ route('detalleActividad') }}"
                  class="font-acehSemibold text-text16 md:text-text20 rounded-full bg-colorBackgroundHeader py-3 px-8 text-white hover:bg-colorBackgroundMainTop md:duration-500 inline-block w-full text-center md:w-auto">Ver
                  Actividad</a>
              </div>
            </div>
          </div>
        </div>

        <div class="flex justify-center mt-10">
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
        </div>
      </div>
    </section>
  </main>





@section('scripts_improtados')
  <script>
    document.addEventListener("DOMContentLoaded", () => {
      const openModal = document.querySelector(".mostrar-mas");
      const modal = document.querySelector(".modal-mostrar");
      const closeModal = document.querySelector(".modal__close-mostrar");
      const body = document.querySelector(".scroll__hidden_explorar");
      /* -------------------------------------- */
      const openModalFiltros = document.querySelector(".mostrar-filtros"); //1
      const modalFiltros = document.querySelector(".modal-filtros"); //2
      const closeModalFiltro = document.querySelector(".modal__close-filtro");

      /* ----------------------------- */
      // Captura el click de abrir
      const openOrdenar = document.querySelector(".open-ordenar");
      // Captura al modal que se quiere mostrar
      const modalOrdenar = document.querySelector(".modal-ordenar");
      //Captura el evento de cierre
      const closeModalOrdenar = document.querySelector(".modal__close-ordenar");
      // Captura el body para bloqueo

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

      openModal.addEventListener("click", (e) => {
        e.preventDefault();

        modal.classList.add("modal--show");
        body.classList.add("overflow-hidden");
        modal.style.display = "flex";
      });

      openModalFiltros.addEventListener("click", (e) => {
        e.preventDefault();

        modalFiltros.classList.add("modal--show--filtros");
        body.classList.add("overflow-hidden");
        modalFiltros.style.display = "flex";
      });
      /* --------------------------------------- */
      closeModal.addEventListener("click", (e) => {
        e.preventDefault();
        modal.classList.remove("modal--show");
        body.classList.remove("overflow-hidden");
      });

      closeModalFiltro.addEventListener("click", (e) => {
        modalFiltros.classList.remove("modal--show--filtros");
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
      function closeModa(event) {
        if (event.target === modal) {
          modal.classList.remove("modal--show");
          body.classList.remove("overflow-hidden");
        }
        if (event.target === modalFiltros) {
          console.log("cerra");
          modalFiltros.classList.remove("modal--show--filtros");
          body.classList.remove("overflow-hidden");
        }

        if (event.target === modalOrdenar) {
          modalOrdenar.classList.remove("modal--show");
          body.classList.remove("overflow-hidden");
        }
      }

      window.addEventListener("click", closeModa);

      /* -------------------------------------------- */

      var swiper = new Swiper(".productos-explorar-actividades", {
        slidesPerView: 6,
        spaceBetween: 40,
        loop: true,
        grabCursor: true,
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
    })
  </script>
@stop

@stop
