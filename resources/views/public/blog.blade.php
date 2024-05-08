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

    .bg-pagination {
      background: #3F76BB;
      color: white
    }
  </style>
@stop

@section('content')
  <main class="pb-24">
    <section class="pt-60" data-aos="fade-up" data-aos-offset="150">
      <div class="text-center flex flex-col gap-5 w-11/12 mx-auto">
        <div class="w-full md:w-6/12 mx-auto flex flex-col gap-5">
          <h2 class="text-[#3F76BB] font-acehMedium text-text28 md:text-text32 leading-none">
            {{ $langInfo['lang']['blog']['title'] }}</h2>
          <h1 class="text-[#0F1B2C] font-acehSemibold text-text64 md:text-text68 leading-none">

            {{ $langInfo['lang']['blog']['title2'] }}
          </h1>
          <p class="text-[#495560] font-acehMedium text-text18 md:text-text22">

            {{ $langInfo['lang']['blog']['parrafo1'] }}
          </p>
        </div>

        <div class="w-full">
          <form action="#" class="w-full  2md:w-5/12 mx-auto">
            <div
              class="flex flex-col gap-5 2md:flex-row items-center justify-center 2md:bg-white p-2 rounded-full border-[#F1F1F1] 2md:border-2 border-0">
              <input type="text"
                class="py-4 rounded-full w-full text-black text-center focus:outline-none border-[1px] 2md:border-none font-acehMedium text-text18 md:text-text24 border-[#F1F1F1]"
                placeholder="Introduce tu correo electrónico" />

              <button type="submit"
                class="px-10 py-2 rounded-full bg-colorBackgroundHeader flex justify-center items-center gap-2 hover:bg-colorBackgroundMainTop duration-500">
                <span class="font-acehSemibold text-text18 md:text-text24 text-white">
                  {{ $langInfo['lang']['blog']['btnSusbcribir'] }}</span><img src="./images/svg/icono_buscar.svg"
                  alt="" />
              </button>
            </div>
          </form>
        </div>
      </div>
    </section>

    <section class="w-11/12 mx-auto" data-aos="fade-up" data-aos-offset="150">
      <h2 class="font-acehSemibold text-text30 md:text-text36 text-[#0F1B2C] my-12 leading-none md:leading-tight">

        {{ $langInfo['lang']['blog']['Pr'] }}

      </h2>

      <!-- GRILLA PUBLICACIONES RECIENTES PARA MAYOR A  798px -->
      <div>
        <div class="hidden xl:grid grid-cols-2 gap-10">
          @foreach ($blogs as $key => $blog)
            @if ($key == 0)
              <div class="flex flex-col gap-4 row-span-2">
                <div class="h-full w-[600px]">
                  <img src="{{ asset($blog->url_image . '/' . $blog->name_image) }}" alt="publicacion"
                    class="w-full  h-80 rounded-3xl object-cover" />
                </div>

                <div class="flex flex-col gap-2">
                  <h2 class="font-acehSemibold text-text24 md:text-text28 text-[#0F1B2C]">
                    {{ $blog->title }}
                  </h2>

                  {!! Str::limit($blog->description, 150) !!}

                  <div class="mt-2">
                    <a href="{{ route('post', [$lang, $blog->id]) }}" method="POST"
                      class="font-acehMedium text-text16 md:text-text20 rounded-full bg-colorBackgroundHeader py-3 px-8 text-white hover:bg-colorBackgroundMainTop duration-500 inline-block w-auto">
                      Ver Mas
                    </a>
                  </div>
                </div>

              </div>
            @else
              <div class="row-span-1">
                <div class="flex gap-5 h-full">
                  <div class="w-full">
                    <img src="{{ asset($blog->url_image . '/' . $blog->name_image) }}" alt="publicacion"
                      class=" rounded-3xl object-cover" />
                  </div>

                  <div class="flex flex-col gap-2  ">
                    <h2 class="font-acehSemibold text-text24 md:text-text28 text-[#0F1B2C] leading-none md:leading-tight">
                      {{ $blog->title }}
                    </h2>

                    {!! Str::limit($blog->description, 150) !!}

                    <div class="mt-2">
                      <a href="{{ route('post', $blog->id) }}" method="POST"
                        class="font-acehMedium text-text16 md:text-text20 rounded-full bg-colorBackgroundHeader py-3 px-8 text-white hover:bg-colorBackgroundMainTop duration-500 inline-block w-auto">
                        Ver Mas
                      </a>
                    </div>

                  </div>

                </div>
              </div>
            @endif
          @endforeach


        </div>
      </div>

      <!-- CARROUSEL PUBLICACIONES RECIENTES PARA MENOR A  798px -->

      <div class="block w-11/12 mx-auto xl:hidden">
        <div class="swiper publicaciones-recientes my-5">
          <div class="swiper-wrapper mb-16">
            @foreach ($blogs as $blog)
              <div class="swiper-slide rounded-2xl">
                <div class="flex flex-col gap-5">
                  <div class="rounded-2xl">
                    <div>
                      <img src="{{ asset($blog->url_image . '/' . $blog->name_image) }}" alt="publicacion"
                        class="w-full rounded-2xl shadow-lg object-cover" />
                    </div>
                  </div>
                  <h2 class="font-acehSemibold text-text24 md:text-text28 text-left leading-none text-[#0F1B2C]">
                    {{ $blog->title }}
                  </h2>
                  {!! Str::limit($blog->description, 150) !!}
                  <div class="flex">
                    <a href="{{ route('post', [$lang, $blog->id]) }}" method="POST"
                      class="font-acehRegular text-text16 md:text-text20 rounded-full bg-colorBackgroundHeader py-3 px-8 text-white hover:bg-colorBackgroundMainTop md:duration-500 text-center ">Ver
                      Actividad</a>
                  </div>

                </div>
              </div>
            @endforeach

          </div>
          <div class="swiper-pagination"></div>
        </div>
      </div>
    </section>

    <section class="w-11/12 mx-auto my-12">
      <h2 class="font-acehSemibold text-text30 md:text-text40 text-[#0F1B2C] my-10 leading-none md:leading-tight">
        {{ $langInfo['lang']['blog']['pAll'] }}

      </h2>

      <div class="grid gap-10 grid-cols-1 md:grid-cols-2 lg:grid-cols-3">


        @foreach ($blogsAll as $blog)
          <div data-aos="fade-up" data-aos-offset="150" class="flex flex-col gap-5">
            <div class="overflow-hidden rounded-3xl">
              <div class="w-[386px] h-[310px] transform transition-transform scale-100 hover:scale-110 duration-1000">
                <img src="{{ asset($blog->url_image . '/' . $blog->name_image) }}" alt="indonesia"
                  class="w-full  object-cover h-full" />
              </div>
            </div>

            <!-- -- -->
            <div class=" flex flex-col justify-between gap-5">
              <div class="flex flex-col gap-2">
                <h3 class="font-acehSemibold text-text26 md:text-text30 leading-none md:leading-tight text-[#0F1B2C]">
                  {{ $blog->title }}
                </h3>
                {!! Str::limit($blog->description, 150) !!}
              </div>
              <div>
                <a href="{{ route('post', [$lang, $blog->id]) }}" method="POST"
                  class="font-acehMedium text-text16 md:text-text20 rounded-full bg-colorBackgroundHeader py-3 px-8 text-white hover:bg-colorBackgroundMainTop duration-500 inline-block w-auto">
                  Ver Mas
                </a>
              </div>
            </div>


          </div>
        @endforeach



      </div>

      <div data-aos="fade-up" data-aos-offset="150">
        <div class="flex  pt-24 justify-center " aria-label="Pagination">


          {{ $blogsAll }}


        </div>
      </div>
    </section>
  </main>



@section('scripts_improtados')
  <script>
    var swiper = new Swiper(".publicaciones-recientes", {
      slidesPerView: 4,
      spaceBetween: 10,
      loop: true,
      grabCursor: true,
      centeredSlides: true,
      initialSlide: 0, // Empieza en el cuarto slide (índice 3)
      pagination: {
        el: ".swiper-pagination",
        clickable: true,
      },
      autoplay: {
        delay: 1500,
        disableOnInteraction: false,
      },
      breakpoints: {
        0: {
          slidesPerView: 1,
        },
        768: {
          slidesPerView: 2,
        },
        1024: {
          slidesPerView: 3,
        },
        1280: {
          autoplay: false,
        }
      },
    });


    document.addEventListener("DOMContentLoaded", () => {
      const paginations = document.querySelectorAll(".pagination__blog");
      paginations.forEach((item, index) => {
        item.addEventListener("click", (e) => {
          item.classList.add("bg-pagination");
          paginations.forEach((pag) => {
            if (e.target !== pag) {
              pag.classList.remove("bg-pagination");
            }
          });
        });
      });
    });
  </script>
@stop

@stop
