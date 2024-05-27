<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
  @vite(['resources/css/app.css', 'resources/js/app.js'])

  {{-- Aqui van los CSS --}}
  @yield('css_improtados')

  {{-- Swipper --}}
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
  <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <!-- Google Tag Manager -->
  <script>
    (function(w, d, s, l, i) {
      w[l] = w[l] || [];
      w[l].push({
        'gtm.start': new Date().getTime(),
        event: 'gtm.js'
      });
      var f = d.getElementsByTagName(s)[0],
        j = d.createElement(s),
        dl = l != 'dataLayer' ? '&l=' + l : '';
      j.async = true;
      j.src =
        'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
      f.parentNode.insertBefore(j, f);
    })(window, document, 'script', 'dataLayer', 'GTM-5P7RQPW6');
  </script>
  <!-- End Google Tag Manager -->

  <style>
    /* @font-face {
            font-family: "acehSemibold";
            src: url({{ asset('fonts/acehsoft-bold-webfont.woff') }}) format("woff");
        }
 */
    @font-face {
      font-family: "acehblack";
      src: url({{ asset('fonts/acehsoft-black-webfont') }}) format("woff");
    }

    @font-face {
      font-family: "acehbold";
      src: url({{ asset('fonts/acehsoft-bold-webfont.woff') }}) format("woff");
    }

    @font-face {
      font-family: "acehExtraLight";
      src: url({{ asset('fonts/acehsoft-extralight-webfont.woff') }}) format("woff");
    }

    @font-face {
      font-family: "acehLight";
      src: url({{ asset('fonts/acehsoft-light-webfont.woff') }}) format("woff");
    }

    @font-face {
      font-family: "acehMedium";
      src: url({{ asset('fonts/acehsoft-medium-webfont.woff') }}) format("woff");
    }

    @font-face {
      font-family: "acehRegular";
      src: url({{ asset('fonts/acehsoft-regular-webfont.woff') }}) format("woff");
    }

    @font-face {
      font-family: "acehSemibold";
      src: url({{ asset('fonts/acehsoft-semibold-webfont.woff') }}) format("woff");
    }

    @font-face {
      font-family: "acehThin";
      src: url({{ asset('fonts/acehsoft-thin-webfont.woff') }}) format("woff");
    }

    @font-face {
      font-family: "extraLightDemo";
      src: url({{ asset('fonts/mont-extralightdemo-webfont.woff') }}) format("woff");
    }

    @font-face {
      font-family: "extraHeavyDemo";
      src: url({{ asset('fonts/mont-heavydemo-webfont.woff') }}) format("woff");
    }
  </style>
  <title>PeruAndesTop | Travel More</title>
  <link rel="stylesheet" href="{{ asset('/css/vendor/dropzone.min.css') }}" />
  <link rel="stylesheet" href="{{ asset('/css/cssDropzone.css') }}" />
  <script src="{{ asset('/js/cs/scrollspy.js') }}"></script>
  <script src="{{ asset('/js/vendor/dropzone.min.js') }}"></script>
  <script src="{{ asset('/js/vendor/singleimageupload.js') }}"></script>
  <script src="{{ asset('/js/cs/dropzone.templates.js') }}"></script>
  <script src="{{ asset('/js/forms/controls.dropzone.js') }}"></script>
</head>

<body class="scroll__hidden_explorar">
  <!-- Google Tag Manager (noscript) -->
  <noscript><iframe src=“https://www.googletagmanager.com/ns.html?id=GTM-5P7RQPW6” height=“0" width=“0”
      style=“display:none;visibility:hidden”></iframe></noscript>
  <!-- End Google Tag Manager (noscript) -->
  @include('components.public.header', ['lang' => $lang])

  <div>
    {{-- Aqui va el contenido de cada pagina --}}
    @yield('content')

  </div>

  @include('components.public.footer')


  @yield('scripts_improtados')


  <script>
    $('#formContactos').submit(function(event) {
      // Evita que se envíe el formulario automáticamente
      //console.log('evcnto')
      event.preventDefault();
      let formDataArray = $(this).serializeArray();
      //console.log(formDataArray);
      $.ajax({
        url: '{{ route('guardarContactos', ['lang' => $lang]) }}',
        method: 'POST',
        data: $(this).serialize(),
        success: function(response) {
          Swal.fire({
            title: response.message,
            icon: "success",
          });
        }
      });
    })
  </script>

</body>

</html>
