<footer class="bg-colorBackgroundMainTop">
  @php

    $route = resource_path("lang/{$lang}.json");
    $file = file_get_contents($route);
    $archivoArray = json_decode($file, true);

    $archivoArray;

    //  Convertir el array en un objeto
    $archivoObjeto = (object) $archivoArray;

  @endphp
  <div class="py-10 ">
    <div class="flex flex-col gap-10 md:grid grid-cols-5 md:gap-5 lg:gap-16 text-white w-11/12 mx-auto">
      <!-- --corregir-- el responsive -->
      <div class="flex flex-col justify-start gap-3 items-start z-[10]" data-aos="fade-up" data-aos-offset="150">
        <p class="font-acehbold text-text22 pb-2">Lenguaje</p>
        <div class="dropdown-idioma inline-block relative font-acehbold">
          <button class="font-semibold py-2 px-6 rounded inline-flex items-center">
            <span id="selected-language2" class="mr-12 text-white text-text18">Inglés</span>
            <svg width="10" height="6" viewBox="0 0 10 6" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path fill-rule="evenodd" clip-rule="evenodd"
                d="M9.20711 0.792893C8.81658 0.402369 8.18342 0.402369 7.79289 0.792893L5 3.58579L2.20711 0.792893C1.81658 0.402369 1.18342 0.402369 0.792894 0.792893C0.402369 1.18342 0.402369 1.81658 0.792894 2.20711L4.29289 5.70711C4.68342 6.09763 5.31658 6.09763 5.70711 5.70711L9.20711 2.20711C9.59763 1.81658 9.59763 1.18342 9.20711 0.792893Z"
                fill="#ffffff" />
            </svg>
          </button>
          <ul class="dropdown-menu-idioma absolute text-[#141718] text-text18 w-full hidden z-20 bg-white rounded-md">
            @foreach ($langs as $item)
              <li class="">
                <a class="rounded-md hover:bg-gray-200 py-2 px-4 block whitespace-no-wrap"
                  href="/{{ $item->code }}">{{ $item->description }}</a>
              </li>
            @endforeach


          </ul>
        </div>
      </div>


      <div data-aos="fade-up" data-aos-offset="150">
        <nav class="flex flex-col lg:items-start">
          <p class="font-acehbold text-text22 pb-4">{{ $archivoObjeto->footer['menu'] }}</p>
          <a href="{{ route('index', ['lang' => $lang]) }}"
            class="font-acehLight text-text20 py-1">{{ $archivoObjeto->footer['home'] }}</a>
          <a href="{{ url('destino?source=destino') }}"
            class="font-acehLight text-text20 py-1">{{ $archivoObjeto->footer['destino'] }}</a>
          <a href="{{ route('ayuda', ['lang' => $lang]) }}"
            class="font-acehLight text-text20 py-1">{{ $archivoObjeto->footer['paquetes'] }}</a>
          <a href="{{ route('contacto', ['lang' => $lang]) }}"
            class="font-acehLight text-text20 py-1">{{ $archivoObjeto->footer['contact'] }}</a>
        </nav>
      </div>

      <div data-aos="fade-up" data-aos-offset="150">
        <nav class="flex flex-col lg:items-start">
          <p class="font-acehbold text-text22 pb-4">{{ $archivoObjeto->footer['politicas'] }}</p>
          <a href="{{ route('politica_privacidad', ['lang' => $lang]) }}"
            class="font-acehLight text-text20  py-1">{{ $archivoObjeto->footer['politicasP'] }}</a>
          <a href="{{ route('term_condiciones', ['lang' => $lang]) }}"
            class="font-acehLight text-text20  py-1">{{ $archivoObjeto->footer['terms'] }}</a>
          <a href="#" class="font-acehLight text-text20 py-1">{{ $archivoObjeto->footer['libroR'] }}</a>
        </nav>
      </div>

      <div data-aos="fade-up" data-aos-offset="150">
        <nav class="flex flex-col lg:items-start">
          <img src="{{ asset('images/svg/headphone.svg') }}" alt="auriculares" class="w-6 pb-4" />
          <a onclick="document.getElementById('tw-modal').click()" class="cursor-pointer">
            <p class="font-acehbold text-text22  lg:text-left">{{ $archivoObjeto->footer['asistencia_agencias'] }}</p>
          </a>
          <a href="#numero" class="font-acehLight text-text20 py-1">{{ $datosgenerales[0]->cellphone }}</a>
          <a href="#correo"
            class="font-acehLight text-text20 py-1 flex-initial w-44">{{ $datosgenerales[0]->email }}</a>
        </nav>
      </div>

      <div class="lg:items-start" data-aos="fade-up" data-aos-offset="150">
        <h3 class="font-acehbold text-text22 pb-4 lg:text-left">{{ $archivoObjeto->footer['paymentMethods'] }}</h3>

        <div class="flex md:justify-center justify-start">
          <div class="flex flex-wrap md:justify-center items-center lg:justify-start gap-2">
            <img src="{{ asset('images/svg/mastercad.svg') }}" alt="mastercad" />
            <img src="{{ asset('images/svg/bitpay.svg') }}" alt="bitpay" />
            <img src="{{ asset('images/svg/visa.svg') }}" alt="visa" />
            <img src="{{ asset('images/svg/american.svg') }}" alt="american" />

            <img src="{{ asset('images/svg/discover.svg') }}" alt="discover" />
            <img src="{{ asset('images/svg/soport.svg') }}" alt="soport" />
            <img src="{{ asset('images/svg/gpa.svg') }}" alt="gpa" />

            <img src="{{ asset('images/svg/pay.svg') }}" alt="pay" />
            <img src="{{ asset('images/svg/paypal.svg') }}" alt="paypal" />
            <img src="{{ asset('images/svg/roja_azul.svg') }}" alt="roja_azul" />
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="bg-colorBackgroundHeader py-5">
    <div class="flex flex-col md:flex-row md:justify-between w-11/12 mx-auto items-center gap-5">
      <div class="w-full">
        <p class="font-acehbold  text-text16 text-white">
          Copyright &copy; 2023 Mundo Web. Reservados todos los derechos
        </p>
      </div>
      <div class="flex justify-start md:justify-end gap-5 w-full">
        @if ($datosgenerales[0]->instagram == null || $datosgenerales[0]->instagram == '')
          <a href="https://{{ $datosgenerales[0]->instagram }}"><img src="{{ asset('images/svg/instagram.svg') }}"
              alt="instagram" /></a>
        @endif
        @if ($datosgenerales[0]->facebook == null || $datosgenerales[0]->facebook == '')
          <a href="https://{{ $datosgenerales[0]->facebook }}"><img src="{{ asset('images/svg/facebook.svg') }}"
              alt="facebook" /></a>
        @endif
        @if ($datosgenerales[0]->youtube == null || $datosgenerales[0]->youtube == '')
          <a href="https://{{ $datosgenerales[0]->youtube }}"><img src="{{ asset('images/svg/youtube.svg') }}"
              alt="youtube" /></a>
        @endif



      </div>
    </div>
  </div>
  <div class="relative flex z-[500] flex-col items-center justify-center overflow-hidden bg-gray-50 ">
    <div>
      <input type="checkbox" id="tw-modal" class="peer fixed appearance-none opacity-0">
      <label for="tw-modal"
        class="pointer-events-none invisible fixed inset-0 flex cursor-pointer items-center justify-center overflow-hidden overscroll-contain bg-slate-700/30 opacity-0 transition-all duration-200 ease-in-out peer-checked:pointer-events-auto peer-checked:visible peer-checked:opacity-100 {{-- peer-checked:[&>*]:translate-y-0  --}}{{-- peer-checked::[&>*]:scale-100 --}}">
        <label
          class="max-h-[calc(100vh-5em)] h-fit max-w-lg {{-- scale-90 --}} overflow-y-auto overscroll-y-contain rounded-md 
          bg-white p-6 text-black shadow-2xl transition">
          Visualizacion del modal
        </label>
      </label>
    </div>
  </div>

  <div class="flex justify-end relative">

    <div class="fixed bottom-[40px] right-[40px] z-[100]">
      <a target="_blank"
        href="https://api.whatsapp.com/send?phone={{ $datosgenerales[0]->whatsapp }}&text={{ $datosgenerales[0]->mensaje_whatsapp }}"
        class="">

        <img src="{{ asset('images/svg/WhatsApp_header.svg') }}" alt="whatsapp"
          class="w-20 h-20 md:w-full md:h-full" />


      </a>
    </div>
  </div>

  <script>
    document.addEventListener('DOMContentLoaded', function() {
      // Obtener el idioma seleccionado de la URL
      const selectedLang = "{{ request()->segment(1) }}";

      // Obtener el elemento donde se mostrará el idioma seleccionado
      const selectedLanguageElement = document.getElementById('selected-language2');

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
</footer>
