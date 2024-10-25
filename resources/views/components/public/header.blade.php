<header class="absolute w-full z-50">
  @php

    $route = resource_path("lang/{$lang}.json");
    $file = file_get_contents($route);
    $archivoArray = json_decode($file, true);

    // Convertir el array en un objeto
    $archivoObjeto = (object) $archivoArray;

  @endphp

  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">
  <script src="https://sandbox-checkout.izipay.pe/payments/v1/js/index.js"></script>


  <div class="navigation z-10">
    <button aria-label="hamburguer" type="button" class="hamburger onMenu" id="position">
      <svg width="25" height="25" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M18 2L2 18M18 18L2 2" stroke="white" stroke-width="2.66667" stroke-linecap="round" />
      </svg>
    </button>
    <nav class="menu-list text-text20">
      <ul class="font-acehMedium">

        <li>
          <a href="{{ route('index', ['lang' => $lang]) }}">{{ $archivoObjeto->nav['home'] }}</a>
        </li>
        <li>
          <a href="{{ url('destino?source=destino') }}">{{ $archivoObjeto->nav['destino'] }}</a>
        </li>
        <li>
          <a href="{{ route('ayuda', ['lang' => $lang]) }}">{{ $archivoObjeto->nav['paquetes'] }}</a>
        </li>
        <li>
          <a href="{{ route('blog', ['lang' => $lang]) }}">{{ $archivoObjeto->nav['blog'] }}</a>
        </li>
        <li>
          <a href="{{ route('nosotros', ['lang' => $lang]) }}">{{ $archivoObjeto->nav['nosotros'] }}</a>
        </li>
        <li>
          <a href="{{ route('contacto', ['lang' => $lang]) }}">{{ $archivoObjeto->nav['contact'] }}</a>
        </li>
      </ul>
    </nav>
  </div>


  <div class="bg-colorBackgroundHeader">
    <div class="flex justify-center items-center md:justify-end gap-5 w-11/12 mx-auto py-4">
      {{--  --}}
      <a href="#"
        class="flex text-white  items-center gap-2 font-acehSemibold text-text18 py-4 lg:py-3 px-5 mostrar-modal ">
        {{ $archivoObjeto->ModalAgencia['eresAgencia'] }}
      </a>

      <section class="modal-destino z-[100]">
        <div class="modal__mostrar-destino">
          <div>
            <div class="flex flex-col w-full my-5">

              <div class="flex justify-end items-center">
                <a href="#" class="modal__close">
                  <img src="{{ asset('images/svg/close.svg') }}" alt="close" />
                </a>
              </div>

              <div class="flex flex-col justify-start items-start">
                <h2 class="font-acehSemibold text-text40 leading-none text-[#3F76BB]">
                  {{ $archivoObjeto->ModalAgencia['modalTitle'] }}
                </h2>

                <p class="text-[#495560] text-text18 font-acehRegular">
                  {{ $archivoObjeto->ModalAgencia['formAdvertice'] }}
                </p>

                <h3 class="text-[#3F76BB] font-acehSemibold text-text20">
                  {{ $archivoObjeto->ModalAgencia['formTitle'] }}</h3>
              </div>
            </div>

            <div class="overflow-y-scroll h-[300px] md:h-[500px] actividades_scroll pr-4">
              <div>
                <form id='formAgencia' action="{{ route('activity.store') }}" method="POST"
                  enctype="multipart/form-data">
                  @csrf
                  <div class="flex flex-col gap-5">
                    <div class="flex flex-col gap-2 flex-auto">
                      <label for="nombre"
                        class="font-medium text-text14 text-[#344054]">{{ $archivoObjeto->ModalAgencia['nombre_agencia'] }}</label>

                      <input name="nombre_agencia" type="text"
                        class="w-full border-[1px] focus:outline-none border-gray-200 rounded-xl py-4 text-text16 md:text-text20 font-acehRegular" />
                    </div>
                    @error('nombre_agencia')
                      <span>{{ $message }}</span>
                    @enderror


                    <div class="flex flex-col md:flex-row gap-5 w-full">
                      <div class="flex flex-col gap-2 flex-auto">
                        <label for="nombre"
                          class="font-medium text-text14  text-[#344054]">{{ $archivoObjeto->ModalAgencia['ruc'] }}
                        </label>

                        <input name="ruc" type="text"
                          class="w-full border-[1px] focus:outline-none border-gray-200 rounded-xl py-4 text-text16 md:text-text20 font-acehRegular" />
                      </div>

                      <div class="flex flex-col gap-2 flex-auto">
                        <label for="no_registro"
                          class="font-medium text-text14 text-[#344054]">{{ $archivoObjeto->ModalAgencia['no_registro'] }}</label>
                        <input id="apellido" type="text" name="no_registro"
                          class="w-full border-[1px] focus:outline-none border-gray-200 rounded-xl py-4 text-text16 md:text-text20 font-acehRegular" />
                      </div>
                    </div>
                    <div class="flex flex-col gap-2 flex-auto">
                      <label for="direccion"
                        class="font-medium text-text14  text-[#344054]">{{ $archivoObjeto->ModalAgencia['direccion'] }}</label>

                      <input id="direccion" type="text" name="direccion"
                        class="w-full border-[1px] focus:outline-none border-gray-200 rounded-xl py-4 text-text16 md:text-text20 font-acehRegular" />
                    </div>

                    <div class="flex flex-col gap-2">
                      <div class="flex flex-col gap-2">
                        <label for="codigo_pais" class="font-medium text-text14 md:text-text18 text-[#344054]">
                          {{ $archivoObjeto->ModalAgencia['telefono'] }}
                        </label>
                        <div class="border-gray-200 border-[1.5px] flex rounded-xl">


                          <input type="tel" name="telefono"
                            class="font-acehRegular border-none focus:outline-none w-full py-4 rounded-xl text-text16 md:text-text20 text-[#344054]" />
                        </div>

                      </div>

                      <div>
                        <div class="flex flex-col gap-2 flex-auto">
                          <label for="email" class="font-medium text-text14 md:text-text18 text-[#344054]">
                            {{ $archivoObjeto->ModalAgencia['email'] }}</label>
                          <input id="apellido" type="email" name="email"
                            class="w-full border-[1px] focus:outline-none border-gray-200 rounded-xl py-4 text-text16 md:text-text20 font-acehRegular" />
                        </div>
                      </div>
                    </div>

                    <div class="flex flex-col gap-2 flex-auto">
                      <label for="nombre" class="font-medium text-text14  text-[#344054]">
                        {{ $archivoObjeto->ModalAgencia['pagina_web'] }}</label>

                      <input id="nombre" type="text" name="pagina_web"
                        class="w-full border-[1px] focus:outline-none border-gray-200 rounded-xl py-4 text-text16 md:text-text20 font-acehRegular" />
                    </div>

                    <div class="flex flex-col gap-2 flex-auto">
                      <label for="nombre_representante"
                        class="font-medium text-text14  text-[#344054]">{{ $archivoObjeto->ModalAgencia['nombre_representante'] }}</label>

                      <input id="nombre_representante" name="nombre_representante" type="text"
                        class="w-full border-[1px] focus:outline-none border-gray-200 rounded-xl py-4 text-text16 md:text-text20 font-acehRegular" />
                    </div>

                    <div class="flex flex-col md:flex-row gap-5 w-full">
                      <div class="flex flex-col gap-2 flex-auto">
                        <label for="identificacion_representante" class="font-medium text-text14  text-[#344054]">
                          {{ $archivoObjeto->ModalAgencia['identificacion_representante'] }}</label>

                        <input id="nombre" name="identificacion_representante" type="text"
                          class="w-full border-[1px] focus:outline-none border-gray-200 rounded-xl py-4 text-text16 md:text-text20 font-acehRegular" />
                      </div>

                      <div class="flex flex-col gap-2 flex-auto">
                        <label for="telefono_representante"
                          class="font-medium text-text14 text-[#344054]">{{ $archivoObjeto->ModalAgencia['telefono_representante'] }}</label>
                        <input id="apellido" name="telefono_representante" type="text"
                          class="w-full border-[1px] focus:outline-none border-gray-200 rounded-xl py-4 text-text16 md:text-text20 font-acehRegular" />
                      </div>
                    </div>

                    <div class="flex flex-col gap-2 flex-auto">
                      <label for="email_representante" class="font-medium text-text14  text-[#344054]">
                        {{ $archivoObjeto->ModalAgencia['email_representante'] }}
                      </label>

                      <input id="nombre" name="email_representante" type="email"
                        class="w-full border-[1px] focus:outline-none border-gray-200 rounded-xl py-4 text-text16 md:text-text20 font-acehRegular" />
                    </div>

                    <div>
                      <h2 class="text-text20 font-acehSemibold text-[#3F76BB]">
                        {{ $archivoObjeto->ModalAgencia['tipo_agencia'] }}
                      </h2>
                      <div class="flex flex-col gap-2">
                        <h3 class="text-[#344054] font-acehMedium text-text14">
                          {{ $archivoObjeto->ModalAgencia['tipo_agencia'] }}</h3>
                        <div class="flex flex-col md:flex-row gap-5 w-full justify-between">
                          <div class="flex items-center ps-4 w-full border-gray-200 border-[1px] rounded-xl px-5">
                            <label for="bordered-radio-minorista"
                              class="w-full py-4 text-text16 font-acehRegular text-[#495560] flex justify-between items-center px-4">
                              <span>{{ $archivoObjeto->ModalAgencia['minorista'] }}</span>
                            </label>
                            <input type="radio" id="tipo_agencia" name="tipo_agencia" value="minorista"
                              class="focus:ring-transparent w-5 h-5 cursor-pointer border-[1px] border-gray-200 " />

                          </div>

                          <div class="flex items-center ps-4 w-full border-gray-200 border-[1px] rounded-xl px-5">
                            <label for="bordered-radio-mayorista"
                              class="w-full py-4 text-text16 font-acehRegular text-[#495560] flex justify-between items-center px-4">
                              <span>{{ $archivoObjeto->ModalAgencia['mayorista'] }}</span>
                            </label>
                            <input type="radio" id="bordered-radio-mayorista" name="tipo_agencia"
                              value="mayorista"
                              class="focus:ring-transparent w-5 h-5 cursor-pointer border-[1px] border-gray-200 " />

                          </div>
                        </div>
                      </div>
                    </div>

                    <div class="flex flex-col gap-3">
                      <h2 class="text-text20 font-acehSemibold text-[#3F76BB]">
                        {{ $archivoObjeto->ModalAgencia['url_declaracion'] }}
                      </h2>
                      <div>
                        <span> {{ $archivoObjeto->ModalAgencia['listaTittle'] }}</span>
                        <ul>
                          <li> {{ $archivoObjeto->ModalAgencia['option1'] }}</li>
                          <li> {{ $archivoObjeto->ModalAgencia['option2'] }}</li>
                          <li> {{ $archivoObjeto->ModalAgencia['option3'] }}</li>
                        </ul>





                      </div>


                      <div id="dropzoneHeader"
                        class="dropzone border border-dashed border-black roundex-2xl flex flex-col justify-center items-center py-10">
                        <div class="flex justify-center items-center">
                          <img src="{{ asset('images/img/header_1.png') }}" alt="">
                        </div>
                        <label for="upload"
                          class="font-acehSemibold text-text16 text-[#3F76BB] text-center cursor-pointer">{{ $archivoObjeto->ModalAgencia['containerDoc1'] }}<span
                            class="text-[#495560]"> {{ $archivoObjeto->ModalAgencia['containerDoc2'] }}</span>
                        </label>


                      </div>
                    </div>

                    <div class="w-full flex flex-col gap-2">
                      <input type="submit" id="confirmarRegistro"
                        value="{{ $archivoObjeto->ModalAgencia['confimarRegistro'] }}"
                        class="text-white bg-[#3F76BB] py-3 rounded-2xl cursor-pointer border-2 font-acehSemibold text-text20 md:text-text24 text-center border-none w-full hover:bg-colorBackgroundMainTop duration-500 openNewModal" />

                      <div class="flex justify-start items-center gap-2">
                        <input type="checkbox" id="acepta">
                        <label for="acepta"
                          class="text-[#495560] font-acehRegular text-text16">{{ $archivoObjeto->ModalAgencia['aceptTerms'] }}</label>
                      </div>
                    </div>

                    <div class="bg-[#F5FAFF]">
                      <div class="text-center py-5">
                        <div class="flex justify-center items-center">
                          <img src="{{ asset('images/img/Avatar group.png') }}" alt="" />
                        </div>
                        <h2 class="font-acehMedium text-text24 md:text-text28 text-[#101828] mt-5">
                          {{ $archivoObjeto->ModalAgencia['needHelp'] }}
                        </h2>
                        <p class="font-acehRegular text-text18 md:text-text22 text-[#667085] mt-2 mb-12">
                          {{ $archivoObjeto->ModalAgencia['ChatTeam'] }}
                        </p>
                        <div class="flex justify-center items-center">
                          <a href="https://api.whatsapp.com/send?phone={{ $datosgenerales[0]->whatsapp }}&text={{ $datosgenerales[0]->mensaje_whatsapp }}"
                            class="text-white bg-[#3F76BB] py-3 px-5 rounded-3xl cursor-pointer border-2 font-acehSemibold text-text20 md:text-text24
                                                         text-center border-none inline-block hover:bg-colorBackgroundMainTop duration-500">
                            {{ $archivoObjeto->ModalAgencia['getInContact'] }}
                          </a>
                        </div>
                      </div>
                    </div>
                  </div>
                </form>
              </div>

            </div>


          </div>
        </div>
      </section>

      {{-- <a href="#" class="open-ordenar font-acehSemibold text-text18 md:text-text22 rounded-[20px] border-colorBorder border-2 py-2 md:py-3 px-5 hover:bg-colorBackgroundHeader hover:text-white group md:duration-500 flex gap-2 items-center">
                Ordenar
                                
            </a> --}}

      <div class="modal-ordenar z-[100]">
        <div class="modal__mostrar-ordenar">
          <div class="flex flex-col gap-5">
            <div class="flex justify-end items-center w-full">
              <a href="#" class="modal__close-ordenar" onclick="cerrarModal()">
                <img src="{{ asset('images/svg/close.svg') }}" alt="close" />
              </a>
            </div>
            <div class="flex flex-col gap-5">
              <p class="text-[#3F76BB] font-acehSemibold text-text32 md:text-text40 leading-tight">
                {{ $archivoObjeto->ModalAgencia['finishRegister'] }}</p>
              <p class="text-[#495560] text-text18 font-acehRegular">
                {{ $archivoObjeto->ModalAgencia['finalMessage'] }}</p>

              <div class="flex justify-center items-center">
                <img src="{{ asset('images/img/exitooo.png') }}" alt=""
                  class="w-20 h-20 md:w-auto md:h-auto">
              </div>

              <div class="flex justify-center items-center">

              </div>

            </div>
          </div>
        </div>
      </div>
      {{--  --}}
      <div class="dropdown-moneda inline-block relative">
        <button class="font-acehSemibold py-2 rounded inline-flex items-center">
          <span id="selected-language" class="mx-10 text-white text-text18"></span>
          <svg width="10" height="6" viewBox="0 0 10 6" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" clip-rule="evenodd"
              d="M9.20711 0.792893C8.81658 0.402369 8.18342 0.402369 7.79289 0.792893L5 3.58579L2.20711 0.792893C1.81658 0.402369 1.18342 0.402369 0.792894 0.792893C0.402369 1.18342 0.402369 1.81658 0.792894 2.20711L4.29289 5.70711C4.68342 6.09763 5.31658 6.09763 5.70711 5.70711L9.20711 2.20711C9.59763 1.81658 9.59763 1.18342 9.20711 0.792893Z"
              fill="#ffffff" />
          </svg>
        </button>
        <ul class="dropdown-menu-moneda absolute text-[#141718] text-text16 w-full hidden z-20 bg-white rounded-md">
          @foreach ($langs as $item)
            <li class="">
              <a class="rounded-md hover:bg-gray-200 py-2 px-4 block whitespace-no-wrap"
                href="/{{ $item->code }}">{{ $item->description }}</a>
            </li>
          @endforeach


          {{--  <li class="">
            <a class="rounded-md hover:bg-gray-200 py-2 px-4 block whitespace-no-wrap" href="#">Portugués</a>
          </li>
          <li class="">
            <a class="rounded-md hover:bg-gray-200 py-2 px-4 block whitespace-no-wrap" href="#">Frances</a>
          </li> --}}
        </ul>
      </div>

      <div class="text-white">

      </div>
    </div>
  </div>


  <div class="py-5 bg-black bg-opacity-20 text-white bg__destino-header">{{-- <div class="py-5 bg-gray-500 bg-opacity-35 text-white bg__destino-header"> --}}
    <div class="flex justify-between items-center w-11/12 mx-auto">
      <div>
        <a href="{{ route('index', ['lang' => $lang]) }}">
          <img src="{{ asset('images/img/logo2.png') }}" alt="logo peruandestop travel more" class="w-40" />
        </a>
      </div>

      <div>
        <div class="block">
          <nav class="text-white hidden lg:flex gap-5 font-acehSemibold text-text18 md:text-text22">
            <a href="{{ route('index', ['lang' => $lang]) }}"
              class="rounded-full hover:bg-colorBackgroundHeader md:duration-300 py-2 px-5">{{ $archivoObjeto->nav['home'] }}</a>

            <a href="{{ url($lang . '/destino?source=destino') }}"
              class="rounded-full hover:bg-colorBackgroundHeader md:duration-300 py-2 px-5 flex justify-center items-center gap-3">
              <span>{{ $archivoObjeto->nav['destino'] }}</span>
            </a>

            <a href="{{ route('ayuda', ['lang' => $lang]) }}"
              class="rounded-full hover:bg-colorBackgroundHeader md:duration-300 py-2 px-5">{{ $archivoObjeto->nav['paquetes'] }}
            </a>

            @if ($blogs > 0)
              <a href="{{ route('blog', ['lang' => $lang]) }} "
                class="rounded-full hover:bg-colorBackgroundHeader md:duration-300 py-2 px-5">{{ $archivoObjeto->nav['blog'] }}
              </a>
            @endif

            <a href="{{ route('nosotros', ['lang' => $lang]) }}"
              class="rounded-full hover:bg-colorBackgroundHeader md:duration-300 py-2 px-5">{{ $archivoObjeto->nav['nosotros'] }}
            </a>

            <a href="{{ route('contacto', ['lang' => $lang]) }}"
              class="rounded-full hover:bg-colorBackgroundHeader md:duration-300 py-2 px-5">{{ $archivoObjeto->nav['contact'] }}
            </a>
          </nav>
        </div>

        <div class="lg:hidden">
          <button aria-label="hamburguer" class="hamburger onMenu">
            <div id="bar1" class="bar"></div>
            <div id="bar2" class="bar"></div>
            <div id="bar3" class="bar"></div>
          </button>
        </div>
      </div>
      <div class="hidden lg:flex justify-center items-center gap-2 lg:gap-5">
        <div>

        </div>
        <div>
          <div class="dropdown-perfil inline-block relative">
            <button class=" font-acehSemibold py-2  rounded inline-flex items-center">


            </button>
            <ul> </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script>
    function cerrarModal() {
      console.log('cerrando modal');
      $('.modal-ordenar').removeClass('modal--show');
      $('.scroll__hidden_explorar').removeClass('overflow-hidden');
    }
    document.addEventListener('DOMContentLoaded', function() {
      // Obtener el idioma seleccionado de la URL
      const selectedLang = "{{ request()->segment(1) }}";

      // Obtener el elemento donde se mostrará el idioma seleccionado
      const selectedLanguageElement = document.getElementById('selected-language');

      // Definir los textos correspondientes según el idioma seleccionado
      const languageTexts = {
        'es': 'Español',
        'en': 'Inglés',
        'pt': 'Portugués',
        'fr': 'Francés'
      };

      // Mostrar el texto del idioma seleccionado en el elemento correspondiente
      if (selectedLang && languageTexts[selectedLang]) {
        selectedLanguageElement.textContent = languageTexts[selectedLang];
      }

      /**/


      const openModal = document.querySelector(".mostrar-modal");
      // Captura al modal que se quiere mostrar
      const modal = document.querySelector(".modal-destino");
      //Captura el evento de cierre
      const closeModal = document.querySelector(".modal__close");
      // Captura el body para bloqueo
      const body = document.querySelector(".scroll__hidden_explorar");

      /*  */

      /* ---- */

      // Captura el click de abrir
      const openOrdenar = document.querySelector(".open-ordenar");
      // Captura al modal que se quiere mostrar
      const modalOrdenar = document.querySelector(".modal-ordenar");
      //Captura el evento de cierre
      const closeModalOrdenar = document.querySelector(".modal__close-ordenar");
      // Captura el body para bloqueo

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

      /* const openNewModal = document.querySelector('.openNewModal');
      openNewModal.addEventListener('click', (e) => {
        e.preventDefault();
        modal.classList.remove("modal--show");
        body.classList.remove("overflow-hidden");

        

        modalOrdenar.classList.add("modal--show");
        body.classList.add("overflow-hidden");
        modalOrdenar.style.display = "flex";
      }) */

      const cerrar_modal = document.querySelector('.cerrar_modal');
      cerrar_modal.addEventListener('click', (e) => {
        e.preventDefault();
        modalOrdenar.classList.remove("modal--show");
        body.classList.remove("overflow-hidden");

      })

      /*  openOrdenar.addEventListener("click", (e) => {
           e.preventDefault();
           modalOrdenar.classList.add("modal--show");
           body.classList.add("overflow-hidden");
           modalOrdenar.style.display = "flex";
       }); */

      closeModalOrdenar.addEventListener("click", (e) => {
        e.preventDefault();
        modalOrdenar.classList.remove("modal--show");
        body.classList.remove("overflow-hidden");
      });


      function resetEffects(event) {
        if (event.target === modal) {
          modal.classList.remove("modal--show");
          body.classList.remove("overflow-hidden");
        }


        if (event.target === modalOrdenar) {
          modalOrdenar.classList.remove("modal--show");
          body.classList.remove("overflow-hidden");
        }
      }

      window.addEventListener("click", resetEffects);

    });
  </script>
  <script>
    $('#confirmarRegistro').on('click', function(e) {
      e.preventDefault()
      console.log('precionando btn de confirmacion')

      let formDataArray = $("#formAgencia").serializeArray();
      let formDataObject = {};
      formDataArray.forEach(function(item) {
        formDataObject[item.name] = item.value;
      });


      $.ajax({
        url: "{{ route('guardarAgencia') }}",
        method: 'POST',
        data: formDataObject,
        success: function(success) {
          console.log(success)
          const openModal = document.querySelector(".mostrar-modal");
          // Captura al modal que se quiere mostrar
          const modal = document.querySelector(".modal-destino");
          //Captura el evento de cierre
          const closeModal = document.querySelector(".modal__close");
          // Captura el body para bloqueo
          const body = document.querySelector(".scroll__hidden_explorar");

          /*  */

          /* ---- */

          // Captura el click de abrir
          const openOrdenar = document.querySelector(".open-ordenar");
          // Captura al modal que se quiere mostrar
          const modalOrdenar = document.querySelector(".modal-ordenar");
          //Captura el evento de cierre
          const closeModalOrdenar = document.querySelector(".modal__close-ordenar");
          // Captura el body para bloqueo
          modal.classList.remove("modal--show");
          body.classList.remove("overflow-hidden");

          /* ---- */

          modalOrdenar.classList.add("modal--show");
          body.classList.add("overflow-hidden");
          modalOrdenar.style.display = "flex";
          const cerrar_modal = document.querySelector('.cerrar_modal');
          cerrar_modal.addEventListener('click', (e) => {
            e.preventDefault();
            modalOrdenar.classList.remove("modal--show");
            body.classList.remove("overflow-hidden");

          })
          closeModalOrdenar.addEventListener("click", (e) => {
            e.preventDefault();
            modalOrdenar.classList.remove("modal--show");
            body.classList.remove("overflow-hidden");
          });

        },
        error: function(error) {
          console.log(error.responseJSON.errors)

          let errors = error.responseJSON.errors

          let errorMessages = '';

          for (let field in errors) {
            if (errors.hasOwnProperty(field)) {
              errorMessages += `${errors[field][0]}  <br>`;
            }
          }



          Swal.fire({

            icon: "warning",
            title: "Opss ",
            html: `${errorMessages}`
          });

        }

      })
    })
  </script>
  <script>
    File.toBase64 = function(blob) {
      return new Promise((resolve, reject) => {
        let reader = new FileReader();
        reader.onloadend = () => {
          resolve(reader.result);
        }
        reader.onerror = () => {
          reject(new Error('No se pudo convertir el archivo en base64'));
        }
        reader.readAsDataURL(blob);
      });
    }
  </script>
  @include('_layout.scripts')


</header>
