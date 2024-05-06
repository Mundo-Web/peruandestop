@extends('components.public.matrix')

@section('css_improtados')
  <script defer data-gyg-partner-hash="3B3BJLW" data-gyg-currency="USD"
    src="https://cdn.getyourguide.com/partner-ticketing/latest/ticketing.umd.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">
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

  <main class="pb-24">
    <section>
      <div class="w-11/12 mx-auto pt-52">
        <h2
          class="font-acehSemibold text-text40 md:text-text64 leading-none md:leading-tight text-center md:text-left text-[#141841]">
          {{ $tour->producto }}
        </h2>

        <div class="flex flex-col md:flex-row md:items-center gap-5 my-5">
          <div class="flex gap-2 items-center justify-center">
            <img src="{{ asset('images/svg/ubicacion.svg') }}" alt="ubigeo" class="w-6 h-6" />
            <p class="font-acehSemibold text-text28 md:text-text32">
              <span class="font-acehMedium text-text16 md:text-text20">- {{ $tour->categoria->pais }}</span>
            </p>
          </div>
          <div class="hidden md:block">
            <p>|</p>
          </div>
          <div class="flex gap-5 justify-between md:justify-start">
            <div class="flex gap-2 py-2">
              <img src="{{ asset('images/svg/start.svg') }}" alt="estrella" />
              <img src="{{ asset('images/svg/start.svg') }}" alt="estrella" />
              <img src="{{ asset('images/svg/start.svg') }}" alt="estrella" />
              <img src="{{ asset('images/svg/start_sin_color.svg') }}" alt="estrella" />
              <img src="{{ asset('images/svg/start_sin_color.svg') }}" alt="estrella" />
            </div>
            <p class="font-acehSemibold text-text28 md:text-text32">
              2,343 <span class="font-acehMedium text-text16 md:text-text20">Opiniones</span>
            </p>
          </div>
        </div>

        <div class="flex gap-2" data-aos="fade-up" data-aos-offset="150">
          <div class="basis-1/6">
            @if (isset($tour->galeria[0]->imagen))
              <img src="{{ asset($tour->galeria[0]->imagen) }}" alt="disfraces"
                class="w-full h-full rounded-tl-3xl rounded-bl-3xl" />
            @endif

          </div>
          <div class="grow basis-3/6">

            <img src="{{ asset($tour->galeria[1]->imagen) }}" alt="animales" class="w-full h-full object-cover" />

          </div>
          <div class="basis-2/6 flex flex-col gap-2">
            <img src="{{ asset($tour->galeria[2]->imagen) }}" alt="convento" class="w-full h-full rounded-tr-3xl " />

            <div class="relative z-10">
              <img src="{{ asset($tour->galeria[3]->imagen) }}" alt="convento" class="w-full h-full rounded-br-3xl" />
              <a href="#"
                class="hidden md:absolute bottom-[10px] right-[10px] bg-transparent p-2 text-white md:flex gap-2 items-center rounded-3xl border-2 font-acehSemibold text-text16 md:text-text20">
                <span>Mostrar todas las fotos</span>

                <img src="{{ asset('images/svg/camara.svg') }}" alt="camara" class="w-8" />
              </a>
            </div>
          </div>
        </div>
      </div>

      <div class="w-11/12 mx-auto py-12" data-aos="fade-up" data-aos-offset="150">
        <div class="flex flex-col 2lg:flex-row gap-10">

          <div class="basis-4/6 flex flex-col gap-10">


            <p class="font-acehRegular text-text18 md:text-text22 text-[#495560] my-5">
              {{ $tour->extract }}
            </p>
            {!! $tour->description !!}
          </div>

          <div class="basis-2/6">
            <div class="shadow-lg rounded-xl">
              <div class=" border-b-2 border-[#F1F1F1] w-11/12 2lg:mx-auto">
                <p class="font-acehSemibold text-text30 md:text-text34 text-[#3F76BB] py-5 text-center 2lg:text-left">
                  Reservar
                </p>
              </div>

              <div class="flex flex-col items-center gap-5 py-5">
                <div class="flex flex-col gap-5 w-11/12">
                  <div class="flex flex-col justify-center items-center">
                    <p class="font-acehbold text-[#3F76BB] text-text40 md:text-text44">{{ $tour->precio }} $</p>
                  </div>
                  <a href="https://peruandestop.com/?partner_id=3B3BJLW&partner_ticketing_activity_ids=166190"
                    class="rounded-3xl bg-colorBackgroundHeader px-4 py-3 w-full text-white hover:bg-colorBackgroundMainTop md:duration-500 font-acehSemibold text-text20 md:text-text24 text-center">Confirmar
                    Reserva</a>
                  <a href="#"
                    class="flex justify-center items-center gap-5 px-4 py-3 w-full rounded-3xl border-2 border-[#F1F1F1]">
                    <span class="text-[#C8C8C8] font-acehSemibold text-center text-text20 md:text-text24">
                      Comparte la actividad
                    </span>

                    <img src="{{ asset('images/svg/comparte_actividad.svg') }}" alt="compartir" />
                  </a>
                </div>
              </div>
            </div>

          </div>
        </div>
      </div>

      <!-- agregar efecto hover -->
      <div class="w-11/12 mx-auto my-10">
        <!-- mayor a  md -->
        <div class="image hidden 2md:block">
          <img src="{{ asset('images/img/tu_viaje_comienza.png') }}" alt="tu viaje" class="w-full h-auto" />
          <div class="text-white flex-col gap-5 contain flex">
            <h3
              class="font-acehbold md:text-[30px] 2md:text-[50px] xl:text-[60px] md:w-8/12 mx-auto text-center leading-none lg:leading-tight">
              Tu viaje comienza aquí
            </h3>
            <p class="font-acehMedium w-9/12 mx-auto md:text-[14px] 2md:text-[16px] xl:text-[18px] md:w-6/12 text-center">
              Regístrese ahora para recibir consejos de viaje, itinerarios
              personalizados e inspiración para las vacaciones directamente en
              su bandeja de entrada.
            </p>
            <form id="inscribirseMailDesk" action="#">
              @csrf
              <div class="flex gap-5">
                <input type="email" name="email" placeholder="Correo Electrónico"
                  class="rounded-[20px] border border-none px-3 py-3 focus:outline-none text-black w-80 text-center text-text20" />
                <!-- ------ssss -->
                <button id="correo" type="submit" value="Inscribirse"
                  class="rounded-[20px] bg-colorBackgroundHeader px-4 py-3 text-white hover:bg-colorBackgroundMainTop md:duration-500 font-acehSemibold text-text20">
                  Inscribirse</button>
              </div>
            </form>
          </div>
        </div>
        <!-- menor a md -->
        <div class="image-mobile block 2md:hidden">
          <img src="./images/img/tu_viaje_mobile.png" alt="tu viaje" class="w-full" />
          <div class="text-white flex-col gap-5 contain-mobile flex">
            <h3 class="font-acehbold text-[30px] w-8/12 mx-auto text-center leading-none">
              Tu viaje comienza aquí
            </h3>
            <p class="font-acehMedium mx-auto text-[18px] w-9/12 text-center">
              Regístrese ahora para recibir consejos de viaje, itinerarios
              personalizados e inspiración para las vacaciones directamente en
              su bandeja de entrada.
            </p>
            <form action="#" class="mt-5">
              <div class="flex flex-col gap-5 ">
                <input id="hasta" type="email" placeholder="Correo Electrónico"
                  class="rounded-[20px] border border-none px-3 py-2 focus:outline-none text-black w-80 text-center font-acehMedium
                                text-text20 " />
                <!-- ------ssss -->
                <input type="submit" value="Inscribirse"
                  class="rounded-[20px] bg-colorBackgroundHeader px-3 py-2 text-white hover:text-[#3F76BB] hover:bg-white md:duration-500 font-acehSemibold text-text20 text-center " />
              </div>
            </form>
          </div>
        </div>
      </div>
      <!-- ------ -->
    </section>

    <section class="" data-aos="fade-up" data-aos-offset="150">
      <h2
        class="font-acehSemibold text-text40 md:text-text64 w-11/12 mx-auto py-8 md:py-5 leading-none md:leading-tight mb-5 text-[#141841]">
        Explorar Destinos Relacionados
      </h2>
      <div class="grid grid-cols-1  2lg:grid-cols-3 w-11/12 mx-auto gap-10 md:gap-4 2xl:gap-16">
        <!-- 1 -->

        @foreach ($tagsDestinos as $item)
          <div data-aos="fade-up" data-aos-offset="150" class="flex flex-col gap-5">
            <div class="img-container">
              <div class="relative">

                <img src="{{ asset($item->url_image . '/' . $item->name_image) }}" alt="cusco"
                  class="w-full shadow-lg rounded-[34px] md:rounded-[25px] lg:rounded-[20px] xl:rounded-[30px]" />
                <div
                  class="absolute inset-0 flex items-center justify-center opacity-0 transition-opacity duration-300 bg-black bg-opacity-50 hover:opacity-100 rounded-[34px] md:rounded-[25px] lg:rounded-[20px] xl:rounded-[30px]">
                </div>
              </div>
              <!-- ------ -->
              <div class="newsletter flex justify-around text-center">
                <p class="text-white font-acehSemibold text-text28 md:text-text32">
                  98 <span class="block font-acehMedium text-text12 md:text-text16">Actividades</span>
                </p>
                <p class="text-white font-acehSemibold text-text28 md:text-text32">
                  23,534
                  <span class="block font-acehMedium text-text12 md:text-text16">Tickets vendidos</span>
                </p>
                <p class="text-white font-acehSemibold text-text28 md:text-text32">
                  9,0/10
                  <span class="block font-acehMedium text-text12 md:text-text16">Valoraciones</span>
                </p>
              </div>
            </div>

            <!-- -- -->

            <div class="flex flex-col gap-5 text-[#0F1B2C]">
              <h3 class="font-acehSemibold text-text48 md:text-text52 leading-none">{{ $item->name }}</h3>
              <p class="font-acehMedium text-text18 md:text-text22">
                {{ $item->description }}
              </p>
              <div class="flex gap-2 ">
                <img src="{{ asset('images/svg/start.svg') }}" alt="estrella" />
                <img src="{{ asset('images/svg/start.svg') }}" alt="estrella" />
                <img src="{{ asset('images/svg/start.svg') }}" alt="estrella" />
                <img src="{{ asset('images/svg/start_sin_color.svg') }}" alt="estrella" />
                <img src="{{ asset('images/svg/start_sin_color.svg') }}" alt="estrella" />
              </div>
              <!-- corregir este div -->
              <div class="flex justify-between items-center">
                <p class="font-acehSemibold text-text28 md:text-text32">
                  2,343
                  <span class="font-acehMedium text-text16 md:text-text20">Opiniones</span>
                </p>
                <a href="{{ url('/actividad') . '/' . $item->id }}"
                  class="font-acehMedium text-text16 md:text-text20 rounded-full bg-colorBackgroundHeader  py-3 px-8 text-white hover:bg-colorBackgroundMainTop md:duration-500">Ver
                  Destino</a>
              </div>
            </div>
          </div>
        @endforeach


      </div>
      <div class="w-11/12 mx-auto mt-10">
        <a href="/destino"
          class="font-acehSemibold text-text18 md:text-text22 rounded-[26px] border-colorBorder border-2 py-3 px-5 hover:bg-colorBackgroundHeader hover:text-white group md:duration-500 inline-block w-full md:w-auto text-center">
          Ver más Destinos
          <svg width="20" height="17" viewBox="0 0 20 17" fill="none" xmlns="http://www.w3.org/2000/svg"
            class="inline-block">
            <path
              d="M11.043 15.7637C10.4437 15.918 9.81541 16 9.16797 16C5.02583 16 1.66797 12.6421 1.66797 8.5C1.66797 4.35786 5.02583 1 9.16797 1C12.9926 1 16.1486 3.86283 16.6099 7.5625M2.60547 11.3125H4.79297C5.65592 11.3125 6.35547 10.6129 6.35547 9.75V7.71875C6.35547 6.8558 7.05502 6.15625 7.91797 6.15625H9.48047C10.3434 6.15625 11.043 5.4567 11.043 4.59375V1.9375M15.7676 13.2048L17.9146 12.4625C18.3171 12.3233 18.3305 11.7591 17.9352 11.601L12.6122 9.47145C12.2419 9.32331 11.8714 9.6846 12.0103 10.0585L14.038 15.5181C14.1862 15.9171 14.7502 15.9179 14.8996 15.5194L15.7676 13.2048Z"
              stroke="#0F1B2C" stroke-width="1.66667" stroke-linecap="round" stroke-linejoin="round"
              class="group-hover:stroke-white md:duration-500" />
          </svg>
        </a>
      </div>
    </section>
  </main>




@section('scripts_improtados')
  <script>
    $('#inscribirseMailDesk').submit(function(e) {
      console.log('precionando para ')

      e.preventDefault()
      let data = $('#inscribirseMailDesk').serialize()
      console.log(data)
      Swal.fire({

        title: 'Procesando información',
        html: `Registrando... 
          <div class="max-w-2xl mx-auto overflow-hidden flex justify-center items-center mt-4">
              <div role="status">
              <svg aria-hidden="true" class="w-8 h-8 text-blue-600 animate-spin dark:text-gray-600 " viewBox="0 0 100 101" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M100 50.5908C100 78.2051 77.6142 100.591 50 100.591C22.3858 100.591 0 78.2051 0 50.5908C0 22.9766 22.3858 0.59082 50 0.59082C77.6142 0.59082 100 22.9766 100 50.5908ZM9.08144 50.5908C9.08144 73.1895 27.4013 91.5094 50 91.5094C72.5987 91.5094 90.9186 73.1895 90.9186 50.5908C90.9186 27.9921 72.5987 9.67226 50 9.67226C27.4013 9.67226 9.08144 27.9921 9.08144 50.5908Z" fill="currentColor"/>
                <path d="M93.9676 39.0409C96.393 38.4038 97.8624 35.9116 97.0079 33.5539C95.2932 28.8227 92.871 24.3692 89.8167 20.348C85.8452 15.1192 80.8826 10.7238 75.2124 7.41289C69.5422 4.10194 63.2754 1.94025 56.7698 1.05124C51.7666 0.367541 46.6976 0.446843 41.7345 1.27873C39.2613 1.69328 37.813 4.19778 38.4501 6.62326C39.0873 9.04874 41.5694 10.4717 44.0505 10.1071C47.8511 9.54855 51.7191 9.52689 55.5402 10.0491C60.8642 10.7766 65.9928 12.5457 70.6331 15.2552C75.2735 17.9648 79.3347 21.5619 82.5849 25.841C84.9175 28.9121 86.7997 32.2913 88.1811 35.8758C89.083 38.2158 91.5421 39.6781 93.9676 39.0409Z" fill="currentFill"/>
              </svg>

              </div>
          </div>
          `,
        allowOutsideClick: false,
        onBeforeOpen: () => {
          Swal.showLoading();
        }
      });

      $.ajax({
        url: '{{ route('guardarUserNewsLetter') }}',
        method: 'POST',
        data: $(this).serialize(),
        success: function(response) {
          Swal.close();
          Swal.fire({
            title: response.message,
            icon: "success",
          });
        },
        error: function(response) {
          let message = ''

          let isDuplicado = response.responseJSON.message.includes('Duplicate entry')
          console.log(isDuplicado)

          if (isDuplicado) {
            message = 'El correo que ha ingresado ya existe. Utilice  otra direccion de correo'
          } else {
            message = response.responseJSON.message
          }
          Swal.close();
          Swal.fire({
            title: message,
            icon: "error",
          });
        }
      });

    })
  </script>
@stop

@stop
