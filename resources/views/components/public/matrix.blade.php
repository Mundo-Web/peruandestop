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
    <title>Index</title>
</head>

<body class="scroll__hidden_explorar">
    @include('components.public.header')

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
                url: '{{ route('guardarContactos') }}',
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
