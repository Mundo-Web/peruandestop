@extends('components.public.matrix')

@section('css_improtados')
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
  <main>
    <section class="w-11/12 mx-auto gap-5 grid grid-cols-1 grid-rows-1 lg:grid-cols-2 lg:grid-rows-2 lg:gap-10 pt-60">
      <div class="flex flex-col gap-5 col-span-1 row-span-1" data-aos="fade-up" data-aos-offset="150">
        <h1 class="font-acehSemibold text-text40 md:text-text44 text-[#141841] leading-none md:leading-tight">
          {{ $langInfo['lang']['contacto']['title'] }}
        </h1>
        <p class="font-acehRegular text-text18 md:text-text22 text-[#495560]">
          {{-- {{ $langInfo['lang']['contacto']['p1'] }} --}}
        </p>

        <div>
          <p class="font-acehSemibold text-text20 md:text-text24 text-[#3F76BB]">
            {{ $langInfo['lang']['contacto']['horario'] }}

          </p>
          <div class="font-acehMedium text-text18 md:text-text22 text-[#495560]">
            <p> {{ $langInfo['lang']['contacto']['horario2'] }}</p>
            <p>8:00 am a 5.00 pm</p>
          </div>
        </div>

        <div>
          <p class="font-acehSemibold text-text20 md:text-text24 text-[#3F76BB]">
            {{ $langInfo['lang']['contacto']['ourDirection'] }}
          </p>
          <div class="font-acehMedium text-text18 md:text-text22 text-[#495560]">
            <p>{{ $general[0]->district }} {{ $general[0]->address }}</p>
            <p>{{ $general[0]->city }} - {{ $general[0]->country }}</p>
          </div>
        </div>

        <div>
          <p class="font-acehSemibold text-text20 md:text-text24 text-[#3F76BB] leading-none md:leading-tight">
            {{ $langInfo['lang']['contacto']['getInContact'] }}

          </p>
          <div class="font-acehMedium text-text18 md:text-text22 text-[#495560]">
            <p>{{ $general[0]->cellphone }}</p>

          </div>
        </div>
      </div>

      <div class="flex flex-col gap-10 col-span-1 lg:row-span-2" data-aos="fade-up" data-aos-offset="150">
        <div class="flex flex-col gap-2">
          <p class="font-acehSemibold text-text36 md:text-text40 text-[#3F76BB]">
            {{ $langInfo['lang']['contacto']['contact'] }}
          </p>
          <p class="font-acehRegular text-text18 md:text-text22 text-[#495560]">
            {{ $langInfo['lang']['contacto']['title'] }}
          </p>
        </div>

        <div>
          <form id="formContacto">
            @csrf
            <div class="flex flex-col gap-5">
              <div class="flex flex-col md:flex-row gap-5 w-full">
                <div class="flex flex-col gap-2 flex-auto">
                  <label for="name"
                    class="font-acehMedium text-text14 md:text-text18 text-[#344054]">{{ $langInfo['lang']['contacto']['nombre'] }}</label>

                  <input name="name" type="text" placeholder="Ingresa tu nombre" required
                    class="w-full border-[1px] focus:outline-none border-gray-200 rounded-xl py-4 text-text16 md:text-text20 font-acehRegular" />
                </div>

                <div class="flex flex-col gap-2 flex-auto">
                  <label for="apellido"
                    class="font-acehMedium text-text14 md:text-text18 text-[#344054]">{{ $langInfo['lang']['contacto']['apellido'] }}</label>
                  <input id="apellido" name="apellido" type="text" placeholder="Ingresa tu apellido"
                    class="w-full border-[1px] focus:outline-none border-gray-200 rounded-xl py-4 text-text16 md:text-text20 font-acehRegular" />
                </div>
              </div>
              <div class="flex flex-col md:flex-row gap-5 w-full">
                <div class="flex flex-col gap-2 flex-auto">
                  <label for="pais"
                    class="font-acehMedium text-text14 md:text-text18 text-[#344054]">{{ $langInfo['lang']['contacto']['pais'] }}</label>

                  <input name="pais" type="text" placeholder="Ingresa tu pais"
                    class="w-full border-[1px] focus:outline-none border-gray-200 rounded-xl py-4 text-text16 md:text-text20 font-acehRegular" />
                </div>

                <div class="flex flex-col gap-2 flex-auto">
                  <label for="ciudad"
                    class="font-acehMedium text-text14 md:text-text18 text-[#344054]">{{ $langInfo['lang']['contacto']['ciudad'] }}</label>
                  <input id="ciudad" name="ciudad" type="text" placeholder="Ingresa tu Ciudad"
                    class="w-full border-[1px] focus:outline-none border-gray-200 rounded-xl py-4 text-text16 md:text-text20 font-acehRegular" />
                </div>
              </div>
              <div class="flex flex-col gap-2">
                <label for="email"
                  class="font-acehMedium text-text14 md:text-text18 text-[#344054]">{{ $langInfo['lang']['contacto']['email'] }}</label>
                <input name="email" type="email" placeholder="Ingresa tu correo electrónico" required
                  class="w-full border-[1px] focus:outline-none border-gray-200 rounded-xl py-4 text-text16 md:text-text20 font-acehRegular text-[#344054]" />
              </div>

              <div class="flex flex-col gap-2">
                <label for="phone" class="font-acehMedium text-text14 md:text-text18 text-[#344054]">
                  {{ $langInfo['lang']['contacto']['telefono'] }}
                </label>
                <div class="border-gray-200 border-[1.5px] flex rounded-xl">

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
                  <input type="tel" name="phone" required
                    class="font-acehRegular border-none focus:outline-none w-full py-4 rounded-xl text-text16 md:text-text20 text-[#344054]" />
                </div>
              </div>

              <div class="flex flex-col gap-2">
                <label for="message"
                  class="font-acehMedium text-text14 md:text-text18 text-[#344054]">{{ $langInfo['lang']['contacto']['text'] }}</label>
                <textarea name="message" id="message" cols="30" rows="5"
                  class="font-acehRegular border-gray-200 border-[1.5px] rounded-xl focus:outline-none text-text16 md:text-text20"></textarea>
              </div>

              <div class="flex gap-5 items-center">
                <input type="checkbox" id="politica"
                  class="h-5 w-5 border-colorBorder rounded focus:ring-offset-0 checked:bg-colorBackgroundHeader" />

                <label for="politica"
                  class="font-acehRegular text-text16 md:text-text20 text-[#495560]">{{ $langInfo['lang']['contacto']['politica'] }}
                </label>
              </div>
              <div class="w-full">
                <input type="submit" value="{{ $langInfo['lang']['contacto']['confirmR'] }}"
                  class="text-white bg-[#3F76BB] py-4 rounded-3xl cursor-pointer border-2 font-acehSemibold text-text20 md:text-text24 text-center border-none w-full hover:bg-colorBackgroundMainTop duration-500" />
              </div>
            </div>
          </form>
        </div>
      </div>

      <div class="col-span-1 row-span-1 lg:-mt-[50px] xl:-mt-[80px] 2xl:-mt-[100px] 3xl:-mt-[200px]" data-aos="fade-up"
        data-aos-offset="150">
        <img src="{{ asset('images/img/contacto_image.png') }}" alt="imagen contacto" class="w-full h-full" />
      </div>
    </section>
  </main>




@section('scripts_improtados')
  <script>
    $('#formContacto').submit(function(event) {
      // Evita que se envíe el formulario automáticamente

      event.preventDefault();


      Swal.fire({

        title: 'Procesando información',
        html: `Enviando... 
        <div class="max-w-2xl mx-auto overflow-hidden flex justify-center items-center mt-4">
            <div role="status">
            <svg aria-hidden="true" class="w-8 h-8 text-blue-600 animate-spin dark:text-gray-600 spinner" viewBox="0 0 100 101" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M100 50.5908C100 78.2051 77.6142 100.591 50 100.591C22.3858 100.591 0 78.2051 0 50.5908C0 22.9766 22.3858 0.59082 50 0.59082C77.6142 0.59082 100 22.9766 100 50.5908ZM9.08144 50.5908C9.08144 73.1895 27.4013 91.5094 50 91.5094C72.5987 91.5094 90.9186 73.1895 90.9186 50.5908C90.9186 27.9921 72.5987 9.67226 50 9.67226C27.4013 9.67226 9.08144 27.9921 9.08144 50.5908Z" fill="currentColor"/>
              <path d="M93.9676 39.0409C96.393 38.4038 97.8624 35.9116 97.0079 33.5539C95.2932 28.8227 92.871 24.3692 89.8167 20.348C85.8452 15.1192 80.8826 10.7238 75.2124 7.41289C69.5422 4.10194 63.2754 1.94025 56.7698 1.05124C51.7666 0.367541 46.6976 0.446843 41.7345 1.27873C39.2613 1.69328 37.813 4.19778 38.4501 6.62326C39.0873 9.04874 41.5694 10.4717 44.0505 10.1071C47.8511 9.54855 51.7191 9.52689 55.5402 10.0491C60.8642 10.7766 65.9928 12.5457 70.6331 15.2552C75.2735 17.9648 79.3347 21.5619 82.5849 25.841C84.9175 28.9121 86.7997 32.2913 88.1811 35.8758C89.083 38.2158 91.5421 39.6781 93.9676 39.0409Z" fill="currentFill"/>
            </svg>
  
            </div>
        </div>
        `,
        allowOutsideClick: false

      });

      let formDataArray = $(this).serializeArray();
      $.ajax({
        url: '{{ route('guardarContactos', ['lang' => $lang]) }}',
        method: 'POST',
        data: $(this).serialize(),
        success: function(response) {
          Swal.close();
          Swal.fire({
            title: response.message,
            icon: "success",
          });
          $('#formContacto')[0].reset()
        },
        error: function(response) {

          Swal.close();
          Swal.fire({
            title: response.responseJSON.message,
            icon: "error",
          });
        }
      });

    })
  </script>
@stop

@stop
