<header class="absolute w-full z-50">
  @php

    $route = resource_path("lang/{$lang}.json");
    $file = file_get_contents($route);
    $archivoArray = json_decode($file, true);

    // Convertir el array en un objeto
    $archivoObjeto = (object) $archivoArray;

  @endphp



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
        ¿Eres agencia?
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
                  Formulario de Resgistro
                </h2>

                <p class="text-[#495560] text-text18 font-acehRegular">
                  Todos los campos son necesarios para completar tu registro
                </p>

                <h3 class="text-[#3F76BB] font-acehSemibold text-text20">Información General</h3>
              </div>
            </div>

            <div class="overflow-y-scroll h-[300px] md:h-[500px] actividades_scroll pr-4">
              <div>
                <form id='formAgencia' action="{{ route('activity.store') }}" method="POST"
                  enctype="multipart/form-data">
                  @csrf
                  <div class="flex flex-col gap-5">
                    <div class="flex flex-col gap-2 flex-auto">
                      <label for="nombre" class="font-medium text-text14 text-[#344054]">Nombre de la Agencia de
                        Viajes</label>

                      <input name="nombre_agencia" type="text" placeholder="Agencia"
                        class="w-full border-[1px] focus:outline-none border-gray-200 rounded-xl py-4 text-text16 md:text-text20 font-acehRegular" />
                    </div>


                    <div class="flex flex-col md:flex-row gap-5 w-full">
                      <div class="flex flex-col gap-2 flex-auto">
                        <label for="nombre" class="font-medium text-text14  text-[#344054]">RUC</label>

                        <input name="ruc" type="text" placeholder="20 ...."
                          class="w-full border-[1px] focus:outline-none border-gray-200 rounded-xl py-4 text-text16 md:text-text20 font-acehRegular" />
                      </div>

                      <div class="flex flex-col gap-2 flex-auto">
                        <label for="no_registro" class="font-medium text-text14 text-[#344054]">No. de Registro de la
                          Agencia</label>
                        <input id="apellido" type="text" name="no_registro" placeholder="00000-000"
                          class="w-full border-[1px] focus:outline-none border-gray-200 rounded-xl py-4 text-text16 md:text-text20 font-acehRegular" />
                      </div>
                    </div>
                    <div class="flex flex-col gap-2 flex-auto">
                      <label for="direccion" class="font-medium text-text14  text-[#344054]">Dirección legal</label>

                      <input id="direccion" type="text" name="direccion" placeholder="Av, Calle, Jr, Psj..."
                        class="w-full border-[1px] focus:outline-none border-gray-200 rounded-xl py-4 text-text16 md:text-text20 font-acehRegular" />
                    </div>

                    <div class="flex flex-col gap-2">
                      <div class="flex flex-col gap-2">
                        <label for="codigo_pais" class="font-medium text-text14 md:text-text18 text-[#344054]">
                          Número de teléfono
                        </label>
                        <div class="border-gray-200 border-[1.5px] flex rounded-xl">
                          <select name="codigo_pais" id="pais"
                            class=" border-0 px-4 py-2 bg-white appearance-none focus:outline-none focus:ring-0 rounded-xl text-text14 md:text-text18 text-[#344054]">
                            <option value="0">US</option>
                            <option value="1">PE</option>
                            <option value="2">MXC</option>
                          </select>

                          <input type="tel" name="telefono"
                            class="font-acehRegular border-none focus:outline-none w-full py-4 rounded-xl text-text16 md:text-text20 text-[#344054]" />
                        </div>

                      </div>

                      <div>
                        <div class="flex flex-col gap-2 flex-auto">
                          <label for="email"
                            class="font-medium text-text14 md:text-text18 text-[#344054]">NE-mail</label>
                          <input id="apellido" type="email" name="email" placeholder="hola@mail.com"
                            class="w-full border-[1px] focus:outline-none border-gray-200 rounded-xl py-4 text-text16 md:text-text20 font-acehRegular" />
                        </div>
                      </div>
                    </div>

                    <div class="flex flex-col gap-2 flex-auto">
                      <label for="nombre" class="font-medium text-text14  text-[#344054]">Página Web</label>

                      <input id="nombre" type="text" name="pagina_web" placeholder="www..."
                        class="w-full border-[1px] focus:outline-none border-gray-200 rounded-xl py-4 text-text16 md:text-text20 font-acehRegular" />
                    </div>

                    <div class="flex flex-col gap-2 flex-auto">
                      <label for="nombre_representante" class="font-medium text-text14  text-[#344054]">Nombre del
                        Representante
                        Legal</label>

                      <input id="nombre_representante" name="nombre_representante" type="text"
                        placeholder="Nombre completo"
                        class="w-full border-[1px] focus:outline-none border-gray-200 rounded-xl py-4 text-text16 md:text-text20 font-acehRegular" />
                    </div>

                    <div class="flex flex-col md:flex-row gap-5 w-full">
                      <div class="flex flex-col gap-2 flex-auto">
                        <label for="identificacion_representante"
                          class="font-medium text-text14  text-[#344054]">Identificación del
                          Representante Legal</label>

                        <input id="nombre" name="identificacion_representante" type="text" placeholder="DNI"
                          class="w-full border-[1px] focus:outline-none border-gray-200 rounded-xl py-4 text-text16 md:text-text20 font-acehRegular" />
                      </div>

                      <div class="flex flex-col gap-2 flex-auto">
                        <label for="telefono_representante" class="font-medium text-text14 text-[#344054]">Teléfono
                          del
                          Representante Legal</label>
                        <input id="apellido" name="telefono_representante" type="text" placeholder="+51 ...."
                          class="w-full border-[1px] focus:outline-none border-gray-200 rounded-xl py-4 text-text16 md:text-text20 font-acehRegular" />
                      </div>
                    </div>

                    <div class="flex flex-col gap-2 flex-auto">
                      <label for="email_representante" class="font-medium text-text14  text-[#344054]">Email del
                        Representante
                        Legal</label>

                      <input id="nombre" name="email_representante" type="email" placeholder="EMAIL"
                        class="w-full border-[1px] focus:outline-none border-gray-200 rounded-xl py-4 text-text16 md:text-text20 font-acehRegular" />
                    </div>

                    <div>
                      <h2 class="text-text20 font-acehSemibold text-[#3F76BB]"> Tipo de Agencia</h2>
                      <div class="flex flex-col gap-2">
                        <h3 class="text-[#344054] font-acehMedium text-text14">Tipo de Agencia</h3>
                        <div class="flex flex-col md:flex-row gap-5 w-full justify-between">
                          <div class="flex items-center ps-4 w-full border-gray-200 border-[1px] rounded-xl px-5">
                            <label for="bordered-radio-minorista"
                              class="w-full py-4 text-text16 font-acehRegular text-[#495560] flex justify-between items-center px-4">
                              <span>Minorista</span>
                            </label>
                            <input type="radio" id="tipo_agencia" name="tipo_agencia" value="minorista"
                              class="focus:ring-transparent w-5 h-5 cursor-pointer border-[1px] border-gray-200 " />

                          </div>

                          <div class="flex items-center ps-4 w-full border-gray-200 border-[1px] rounded-xl px-5">
                            <label for="bordered-radio-mayorista"
                              class="w-full py-4 text-text16 font-acehRegular text-[#495560] flex justify-between items-center px-4">
                              <span>Mayorista</span>
                            </label>
                            <input type="radio" id="bordered-radio-mayorista" name="tipo_agencia"
                              value="mayorista"
                              class="focus:ring-transparent w-5 h-5 cursor-pointer border-[1px] border-gray-200 " />

                          </div>
                        </div>
                      </div>
                    </div>

                    <div class="flex flex-col gap-3">
                      <h2 class="text-text20 font-acehSemibold text-[#3F76BB]">Declaración Jurada</h2>
                      <div>
                        <a href="#"
                          class="bg-[#244D82] text-white py-2 px-5 inline-flex justify-start items-center rounded-full gap-2">
                          <span class="text-text14">Descargar Modelo de Declaración Jurada </span>
                          <div>
                            <img src="{{ asset('images/svg/file-download.svg') }}" alt="">
                          </div>
                        </a>
                      </div>


                      <div id="dropzoneHeader"
                        class="dropzone border border-dashed border-black roundex-2xl flex flex-col justify-center items-center py-10">
                        {{-- <div class="flex justify-center items-center">
                          <img src="{{ asset('images/img/header_1.png') }}" alt="">
                        </div>
                        <label for="upload"
                          class="font-acehSemibold text-text16 text-[#3F76BB] text-center cursor-pointer">Haga click
                          para cargar <span class="text-[#495560]">o arrastre y suelte</span> 
                        </label> --}}


                      </div>
                    </div>

                    <div class="w-full flex flex-col gap-2">
                      <input type="submit" id="confirmarRegistro" value="Confirmar Registro"
                        class="text-white bg-[#3F76BB] py-3 rounded-2xl cursor-pointer border-2 font-acehSemibold text-text20 md:text-text24 text-center border-none w-full hover:bg-colorBackgroundMainTop duration-500 openNewModal" />

                      <div class="flex justify-start items-center gap-2">
                        <input type="checkbox" id="acepta">
                        <label for="acepta" class="text-[#495560] font-acehRegular text-text16">Usted acepta nuestra
                          amigable política de privacidad</label>
                      </div>
                    </div>

                    <div class="bg-[#F5FAFF]">
                      <div class="text-center py-5">
                        <div class="flex justify-center items-center">
                          <img src="{{ asset('images/img/Avatar group.png') }}" alt="" />
                        </div>
                        <h2 class="font-acehMedium text-text24 md:text-text28 text-[#101828] mt-5">
                          ¿Necesitas ayuda?
                        </h2>
                        <p class="font-acehRegular text-text18 md:text-text22 text-[#667085] mt-2 mb-12">
                          Por favor chatee con nuestro amigable equipo de soporte
                        </p>
                        <div class="flex justify-center items-center">
                          <a href="#"
                            class="text-white bg-[#3F76BB] py-3 px-5 rounded-3xl cursor-pointer border-2 font-acehSemibold text-text20 md:text-text24
                                                         text-center border-none inline-block hover:bg-colorBackgroundMainTop duration-500">
                            Ponerse en contacto
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
              <a href="#" class="modal__close-ordenar">
                <img src="{{ asset('images/svg/close.svg') }}" alt="close" />
              </a>
            </div>
            <div class="flex flex-col gap-5">
              <p class="text-[#3F76BB] font-acehSemibold text-text32 md:text-text40 leading-tight">Registro realizado
                con Éxitos</p>
              <p class="text-[#495560] text-text18 font-acehRegular">Lorem ipsum dolor sit amet consectetur adipisicing
                elit. Possimus sint beatae dolorum similiq.</p>

              <div class="flex justify-center items-center">
                <img src="{{ asset('images/img/exitooo.png') }}" alt=""
                  class="w-20 h-20 md:w-auto md:h-auto">
              </div>

              <div class="flex justify-center items-center">
                <a href="#"
                  class="bg-[#3F76BB] text-white font-acehbold text-text20 rounded-3xl py-2 px-5 cerrar_modal">Iniciar
                  Sesión</a>
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
          <img src="{{ asset('images/img/logo.png') }}" alt="logo peruandestop travel more" class="" />
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

        },
        error: function(error) {
          console.log(error)
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
