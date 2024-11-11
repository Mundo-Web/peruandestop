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

    /* @font-face {
                                                                                                                                                                                                                                                                                                                                      font-family: "acehSemibold";
                                                                                                                                                                                                                                                                                                                                      src: url({{ asset('fonts/acehsoft-bold-webfont.woff') }}) format("woff");
                                                                                                                                                                                                                                                                                                                                      }  */

    .bg_header_fondo {
      background-image: url({{ asset('images/img/header_fondo.png') }});
    }

    .bg_header_fondo_1 {
      background-image: url({{ asset('images/img/header_fondo_1.png') }});
    }

    .bg_header_fondo_2 {
      background-image: url({{ asset('images/img/header_fondo_2.png') }});
    }

    .bg_header_fondo_3 {
      background-image: url({{ asset('images/img/header_fondo_3.png') }});
    }

    .bg_header_fondo_4 {
      background-image: url({{ asset('images/img/header_fondo_4.png') }});
    }

    .bg_header_fondo_5 {
      background-image: url({{ asset('images/img/header_fondo_5.png') }});
    }


    .bg_header_fondo_6 {
      background-image: url({{ asset('images/img/header_fondo_6.png') }});
    }


    .bg_header_fondo_7 {
      background-image: url({{ asset('images/img/header_fondo_7.png') }});
    }

    .bg_header_fondo_8 {
      background-image: url({{ asset('images/img/header_fondo_8.png') }});
    }
  </style>
@stop


@section('content')

  <main class="pb-24">
    <section>
      <div class="swiper slider__headers">
        <div class="pt-16 md:pt-20 lg:pt-24 w-full grid grid-cols-1 " style="position: absolute; z-index:200; top:50%">
          <form action="#" class="w-11/12 lg:w-4/12 mx-auto ">
            <div
              class="flex flex-col gap-5 2md:flex-row items-center justify-center 2md:bg-white py-2 md:px-2 rounded-full ">

              <input type="text" id="BuscarToursInput"
                class="py-4 2md:py-2 rounded-full focus:outline-none w-full text-gray-700 text-center border-none text-text16 md:text-text20"
                placeholder="{{ $langInfo['lang']['slider']['inputSearch'] }}" />


              <button type="button" id="Buscartours"
                class="px-10 py-3 rounded-full bg-colorBackgroundHeader flex justify-center items-center gap-2 hover:bg-colorBackgroundMainTop duration-500">
                <span class="font-acehSemibold text-text20 ">
                  {{ $langInfo['lang']['slider']['btnSearch'] }}</span><img src="./images/svg/icono_buscar.svg"
                  alt="" />
              </button>
            </div>
          </form>
          <div id="mostrarToursInput"
            class="bg-white p-0 rounded-xl  overflow-y-auto max-h-[177px] w-11/12 lg:w-4/12 mx-auto z-index:200; ">
          </div>
        </div>
        <div class="swiper-wrapper">

          @foreach ($sliders as $imagen)
            <div class="swiper-slide">
              <div class=" bg-cover bg-center bg-no-repeat sm:w-full h-full"
                style="background: url('{{ asset($imagen->url_image . $imagen->name_image) }}') ; background-repeat: no-repeat; background-size:cover">
                <div class="text-white flex flex-col items-center pt-80 md:pt-80 pb-60 w-full sm:w-6/12   mx-auto"
                  data-aos="fade-up" data-aos-offset="150">
                  <div class="text-center w-11/12 mx-auto">
                    <p class="font-acehMedium text-text14 md:text-text20">
                      {{ $imagen->description }}
                    </p>
                    <h1 class="text-text48 font-acehSemibold md:text-text92 leading-none truncate text-ellipsis"
                      style="text-shadow: 0 0 10px rgba(0,0,0,.5)">
                      {{ $imagen->title }}
                    </h1>
                  </div>

                </div>
              </div>
            </div>
          @endforeach




        </div>
      </div>
    </section>


    {{-- <section class="bg-header_fondo bg-cover bg-center bg-no-repeat sm:w-full h-full py-44">
            <div class="text-white flex flex-col items-center pt-16 md:pt-44 w-full md:w-6/12  mx-auto" data-aos="fade-up"
                data-aos-offset="150">
                <div class="text-center">
                    <p class="font-acehMedium text-text14 md:text-text20">
                        Suspendisse nec interdum orci, a agestas diam.
                    </p>
                    <h1 class="text-text48 font-acehSemibold md:text-text92 leading-none">
                        Viajar, Explorar el mundo
                    </h1>
                </div> 
                <div class="pt-10 md:pt-20 w-full">
                    <form action="#" class="w-11/12 lg:w-8/12 mx-auto ">
                        <div
                            class="flex flex-col gap-5 2md:flex-row items-center justify-center 2md:bg-white py-2 md:px-2 rounded-full ">
                            <input type="text"
                                class="py-4 2md:py-2 rounded-full focus:outline-none w-full text-gray-700 text-center border-none text-text16 md:text-text20"
                                placeholder="¿Cuál será tu próximo destino?" />

                            <button type="submit"
                                class="px-10 py-3 rounded-full bg-colorBackgroundHeader flex justify-center items-center gap-2 hover:bg-colorBackgroundMainTop duration-500">
                                <span class="font-acehSemibold text-text20 ">Buscar</span><img
                                    src="./images/svg/icono_buscar.svg" alt="" />
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </section> --}}

    {{--  <section class="bg-colorBackgroundMainTop">
      <div class=" w-11/12 md:w-full mx-auto">
        <div class="grid grid-cols-1 lg:grid-cols-3 " data-aos="fade-up" data-aos-offset="150">
          <div class="group  hover:bg-white  md:duration-500 flex flex-col justify-center py-10 md:p-20 gap-5 ">
            <div>
              <svg width="36" height="38" viewBox="0 0 36 38" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                  d="M33 0.5H3C2.20435 0.5 1.44129 0.81607 0.87868 1.37868C0.31607 1.94129 0 2.70435 0 3.5V14.5212C0 31.3231 14.2162 36.8975 17.0625 37.8444C17.6704 38.0511 18.3296 38.0511 18.9375 37.8444C21.7875 36.8975 36 31.3231 36 14.5212V3.5C36 2.70435 35.6839 1.94129 35.1213 1.37868C34.5587 0.81607 33.7957 0.5 33 0.5ZM33 14.5231C33 29.2269 20.5594 34.1394 18 34.9944C15.4631 34.1487 3 29.24 3 14.5231V3.5H33V14.5231ZM9.43875 19.5612C9.15729 19.2798 8.99917 18.898 8.99917 18.5C8.99917 18.102 9.15729 17.7202 9.43875 17.4387C9.72021 17.1573 10.102 16.9992 10.5 16.9992C10.898 16.9992 11.2798 17.1573 11.5613 17.4387L15 20.8775L24.4387 11.4387C24.5781 11.2994 24.7436 11.1888 24.9257 11.1134C25.1077 11.038 25.3029 10.9992 25.5 10.9992C25.6971 10.9992 25.8923 11.038 26.0743 11.1134C26.2564 11.1888 26.4219 11.2994 26.5613 11.4387C26.7006 11.5781 26.8112 11.7436 26.8866 11.9257C26.962 12.1077 27.0008 12.3029 27.0008 12.5C27.0008 12.6971 26.962 12.8923 26.8866 13.0743C26.8112 13.2564 26.7006 13.4219 26.5613 13.5612L16.0613 24.0612C15.9219 24.2007 15.7565 24.3114 15.5744 24.3868C15.3923 24.4623 15.1971 24.5012 15 24.5012C14.8029 24.5012 14.6077 24.4623 14.4256 24.3868C14.2435 24.3114 14.0781 24.2007 13.9387 24.0612L9.43875 19.5612Z"
                  fill="#3F76BB" class="group-hover:stroke-white" />
              </svg>
            </div>
            <div>
              <h3 class="text-white group-hover:text-colorTextMainTop font-acehSemibold text-text32 md:text-text36">
                {{ $langInfo['lang']['section1']['one']['title'] }}
              </h3>
              <p class="text-white group-hover:text-colorTextMainTop font-acehMedium text-text18 md:text-text22">
                {{ $langInfo['lang']['section1']['one']['description'] }}
              </p>
            </div>
          </div>

          <div class="group  hover:bg-white  md:duration-500 flex flex-col justify-center py-10 md:p-20 gap-5">
            <div>
              <svg width="42" height="42" viewBox="0 0 42 42" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                  d="M41.1712 21.1575L27 14.0737V6C27 4.4087 26.3679 2.88258 25.2426 1.75736C24.1174 0.632141 22.5913 0 21 0C19.4087 0 17.8826 0.632141 16.7574 1.75736C15.6321 2.88258 15 4.4087 15 6V14.0737L0.82875 21.1575C0.579541 21.2822 0.369998 21.4739 0.223615 21.711C0.0772334 21.9481 -0.000199126 22.2213 3.84567e-07 22.5V28.5C0.000123273 28.7219 0.0494662 28.941 0.144473 29.1415C0.239479 29.342 0.377783 29.5189 0.549417 29.6595C0.721051 29.8001 0.921741 29.9009 1.13702 29.9546C1.3523 30.0083 1.57681 30.0135 1.79438 29.97L15 27.33V30.8794L12.4387 33.4387C12.2995 33.5782 12.1891 33.7436 12.1138 33.9257C12.0385 34.1078 11.9998 34.303 12 34.5V40.5C11.9996 40.7458 12.0596 40.988 12.1747 41.2052C12.2899 41.4224 12.4567 41.608 12.6604 41.7456C12.8641 41.8832 13.0985 41.9686 13.343 41.9944C13.5875 42.0201 13.8346 41.9853 14.0625 41.8931L21 39.1162L27.9375 41.8931C28.1654 41.9853 28.4125 42.0201 28.657 41.9944C28.9015 41.9686 29.1359 41.8832 29.3396 41.7456C29.5433 41.608 29.7101 41.4224 29.8253 41.2052C29.9404 40.988 30.0004 40.7458 30 40.5V34.5C30.0002 34.303 29.9615 34.1078 29.8862 33.9257C29.8109 33.7436 29.7005 33.5782 29.5613 33.4387L27 30.8794V27.33L40.2056 29.97C40.4232 30.0135 40.6477 30.0083 40.863 29.9546C41.0783 29.9009 41.2789 29.8001 41.4506 29.6595C41.6222 29.5189 41.7605 29.342 41.8555 29.1415C41.9505 28.941 41.9999 28.7219 42 28.5V22.5C42.0002 22.2213 41.9228 21.9481 41.7764 21.711C41.63 21.4739 41.4205 21.2822 41.1712 21.1575ZM39 26.67L25.7944 24.03C25.5768 23.9865 25.3523 23.9917 25.137 24.0454C24.9217 24.0991 24.7211 24.1999 24.5494 24.3405C24.3778 24.4811 24.2395 24.658 24.1445 24.8585C24.0495 25.059 24.0001 25.2781 24 25.5V31.5C23.9998 31.697 24.0385 31.8922 24.1138 32.0743C24.1891 32.2564 24.2995 32.4218 24.4387 32.5612L27 35.1206V38.2837L21.5625 36.1069C21.205 35.9639 20.8062 35.9639 20.4487 36.1069L15 38.2837V35.1206L17.5613 32.5612C17.7005 32.4218 17.8109 32.2564 17.8862 32.0743C17.9615 31.8922 18.0002 31.697 18 31.5V25.5C17.9999 25.2781 17.9505 25.059 17.8555 24.8585C17.7605 24.658 17.6222 24.4811 17.4506 24.3405C17.2789 24.1999 17.0783 24.0991 16.863 24.0454C16.6477 23.9917 16.4232 23.9865 16.2056 24.03L3 26.67V23.4262L17.1712 16.3425C17.4205 16.2178 17.63 16.0261 17.7764 15.789C17.9228 15.5519 18.0002 15.2787 18 15V6C18 5.20435 18.3161 4.44129 18.8787 3.87868C19.4413 3.31607 20.2044 3 21 3C21.7956 3 22.5587 3.31607 23.1213 3.87868C23.6839 4.44129 24 5.20435 24 6V15C23.9998 15.2787 24.0772 15.5519 24.2236 15.789C24.37 16.0261 24.5795 16.2178 24.8288 16.3425L39 23.4262V26.67Z"
                  fill="#3F76BB" class="group-hover:stroke-white" />
              </svg>


            </div>
            <div>
              <h3 class="text-white group-hover:text-colorTextMainTop font-acehSemibold text-text32 md:text-text36">
                {{ $langInfo['lang']['section1']['two']['title'] }}
              </h3>
              <p class="text-white group-hover:text-colorTextMainTop font-acehMedium text-text18 md:text-text22">
                {{ $langInfo['lang']['section1']['two']['description'] }}
              </p>
            </div>
          </div>

          <div class="group  hover:bg-white  md:duration-500 flex flex-col justify-center py-10 md:p-20 gap-5 ">
            <div>
              <svg width="48" height="40" viewBox="0 0 48 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                  d="M28.7974 25.7199V13.9072M10.022 2.91992H24.0005C24.0799 5.75005 26.3991 8.01992 29.2484 8.01992C32.0978 8.01992 34.4169 5.75005 34.4963 2.91992H37.9749C42.1853 2.91992 45.5984 6.33309 45.5984 10.5435V29.4573C45.5984 33.6677 42.1853 37.0808 37.9749 37.0808H34.4963C34.4169 34.2507 32.0978 31.9808 29.2484 31.9808C26.3991 31.9808 24.0799 34.2507 24.0005 37.0808H10.022C5.81163 37.0808 2.39846 33.6677 2.39846 29.4573L2.39844 10.5435C2.39844 6.33309 5.81161 2.91992 10.022 2.91992Z"
                  stroke="#3F76BB" stroke-width="4" stroke-linecap="round" stroke-linejoin="round" />
              </svg>
            </div>
            <div>
              <h3 class="text-white group-hover:text-colorTextMainTop font-acehSemibold text-text32 md:text-text36">
                {{ $langInfo['lang']['section1']['three']['title'] }}
              </h3>
              <p class="text-white group-hover:text-colorTextMainTop font-acehMedium text-text18 md:text-text22">
                {{ $langInfo['lang']['section1']['three']['description'] }}
              </p>
            </div>
          </div>
        </div>
      </div>
    </section> --}}



    <section data-aos="fade-up" data-aos-offset="150">
      <h2
        class="font-acehSemibold text-text40 md:text-text64 w-11/12 mx-auto my-5 leading-none md:leading-tight text-[#0F1B2C]">

        {{ $langInfo['lang']['section2']['Toursd'] }}

      </h2>
      <div class="flex-wrap w-11/12 mx-auto hidden 2md:flex md:flex-col gap-8 justify-center items-center text-center">
        <div class="flex gap-10">
          {{-- imprimir de 5 en 5  --}}
          @foreach ($tags as $item)
            <a href="{{ $langInfo['selected'] . '/actividad/0?tags=' . $item->id }}"
              class="font-acehSemibold text-text18 md:text-text22 rounded-[20px] border-colorBorder border-2 py-3 px-5 hover:text-white hover:bg-[#3F76BB] md:duration-500 leading-none text-center h-full">{{ $item->name }}
            </a>
          @endforeach
        </div>
        <div class="flex gap-5">


        </div>
      </div>

      <div class="w-11/12 mx-auto">

        <div class="grid grid-cols-1 2lg:grid-cols-3 mt-10 gap-20 md:gap-10 text-[#0F1B2C]">
          {{-- @foreach ($destino->productos as $item) --}}
          @foreach ($productos as $item)
            <div class="" data-aos="fade-up" data-aos-offset="150">
              <div class="overflow-hidden rounded-2xl">
                <div class="img-container ">
                  <img src="{{ asset($item->imagen) }}" alt=""
                    class=" object-cover  h-[300px] rounded-2xl shadow-lg " style="  width: 100%;" />
                </div>
              </div>

              <div class="w-full mx-auto flex flex-col justify-center gap-5">
                {{-- <div class="flex flex-col-row gap-5 md:gap-5 md:flex-row md:justify-start md:items-center mt-5">
                  @foreach ($item->tags as $tag)
                    <span
                      class="font-acehMedium text-text16 md:text-text20 rounded-full border-colorBorder border-2 py-1 px-5 inline-block max-w-max text-center">

                      {{ Str::limit($tag->name, 10) }}
                    </span>
                  @endforeach
                </div> --}}
                <div class="flex flex-col gap-2">
                  <h2 class="font-acehSemibold text-[36px] line-clamp-3 text-ellipsis leading-none h-[108px]">
                    {{ $item->producto }}
                  </h2>
                  <div class="flex gap-10">
                    <div class="flex gap-2 items-center">
                      <img src="{{ asset('images/svg/ubicacion.svg') }}" alt="ubigeo" />
                      <p class="font-acehMedium text-text18 md:text-text22">{{ $item->categoria->name }} -
                        {{ strip_tags($item->categoria->pais) }}
                      </p>
                    </div>
                    <div class="flex gap-2 items-center">
                      @if ($item->hours > 0)
                        <img src="{{ asset('images/svg/hora.svg') }}" alt="hora" />
                        <p class="font-acehMedium text-text16 md:text-text20">{{ $item->hours }}
                          {{ $langInfo['lang']['actividad']['horas'] }}</p>
                      @endif
                    </div>
                  </div>
                </div>

                <div class="flex flex-col gap-5 md:flex-row justify-between items-start md:items-center ">
                  <p class="font-acehbold text-text40 md:text-text44">
                    {{ $item->precio }} US$
                    <span
                      class="block font-acehMedium text-text16 md:text-text20">{{ $langInfo['lang']['actividad']['PorPersona'] }}</span>
                  </p>
                  <a href="{{ url($langInfo['selected'] . '/detalleActividad') . '/' . $item->id }}"
                    class="font-acehSemibold text-text16 md:text-text20 rounded-full bg-colorBackgroundHeader py-3 px-8 text-white hover:bg-colorBackgroundMainTop md:duration-500 inline-block w-full text-center md:w-auto">
                    {{ $langInfo['lang']['actividad']['ver'] }}
                  </a>
                </div>
              </div>
            </div>
          @endforeach
        </div>


      </div>

      <div class="w-11/12 mx-auto pb-20">
        @if (isset($actividad))
          <a href="{{ url($langInfo['selected'] . '/actividad/0') }}"
            class="font-acehSemibold text-text18 md:text-text22 rounded-full border-colorBorder border-2 py-3 px-5 hover:bg-colorBackgroundHeader hover:text-white group md:duration-500 inline-block w-full md:w-auto text-center">
            Ver más Tours

            <svg width="20" height="17" viewBox="0 0 20 17" fill="none" xmlns="http://www.w3.org/2000/svg"
              class="inline-block">
              <path
                d="M11.043 15.7637C10.4437 15.918 9.81541 16 9.16797 16C5.02583 16 1.66797 12.6421 1.66797 8.5C1.66797 4.35786 5.02583 1 9.16797 1C12.9926 1 16.1486 3.86283 16.6099 7.5625M2.60547 11.3125H4.79297C5.65592 11.3125 6.35547 10.6129 6.35547 9.75V7.71875C6.35547 6.8558 7.05502 6.15625 7.91797 6.15625H9.48047C10.3434 6.15625 11.043 5.4567 11.043 4.59375V1.9375M15.7676 13.2048L17.9146 12.4625C18.3171 12.3233 18.3305 11.7591 17.9352 11.601L12.6122 9.47145C12.2419 9.32331 11.8714 9.6846 12.0103 10.0585L14.038 15.5181C14.1862 15.9171 14.7502 15.9179 14.8996 15.5194L15.7676 13.2048Z"
                stroke="#0F1B2C" stroke-width="1.66667" stroke-linecap="round" stroke-linejoin="round"
                class="group-hover:stroke-white md:duration-500" />
            </svg>
          </a>
        @endif
      </div>
    </section>





  </main>



@section('scripts_improtados')
  <script>
    var swiper = new Swiper(".slider__headers", {
      slidesPerView: 1,
      spaceBetween: 0,
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
    });
  </script>

  <script>
    $(document).ready(function() {
      // Función para manejar la búsqueda
      function handleSearch() {
        console.log('buscando producto ');

        let promp = $("#BuscarToursInput").val();
        console.log(promp);

        // Construir la URL con los parámetros de búsqueda
        let searchUrl = "{{ url($langInfo['selected'] . '/buscartour') }}?serch=" + encodeURIComponent(promp);

        // Redirigir a la URL construida
        window.location.href = searchUrl;
      }

      // Manejar el clic en el botón de búsqueda
      $("#Buscartours").on('click', function(e) {
        e.preventDefault();
        handleSearch();
      });

      // Manejar la tecla Enter en el campo de entrada
      $("#BuscarToursInput").on('keypress', function(e) {
        if (e.which === 13) { // 13 es el código de la tecla Enter
          e.preventDefault();
          handleSearch();
        }
      });
    });
  </script>


@stop

@stop
