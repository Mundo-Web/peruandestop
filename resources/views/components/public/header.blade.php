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
            <ul </ul>
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
    });
  </script>


</header>
