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
    <section class="w-11/12 mx-auto grid grid-cols-1 pt-60 pb-16 lg:pb-20 gap-7">
      <div class="flex flex-col gap-2" data-aos="fade-up" data-aos-offset="150">
        <h1 class="font-acehSemibold text-text40 md:text-text44 text-[#141841] leading-none md:leading-tight">
           {{ $langInfo['lang']['nosotros']['titulonosotros'] }}
        </h1>
        <p class="font-acehRegular text-text18 text-[#495560]">
          {{ $langInfo['lang']['nosotros']['descripcion1'] }}
        </p>
        <p class="font-acehRegular text-text18 text-[#495560]">
          {{ $langInfo['lang']['nosotros']['descripcion2'] }}
        </p>
      </div>

      <div class="flex flex-col gap-2" data-aos="fade-up" data-aos-offset="150">
        <h1 class="font-acehSemibold text-text40 md:text-text44 text-[#141841] leading-none md:leading-tight">
           {{ $langInfo['lang']['nosotros']['titulomision'] }}
        </h1>
        <p class="font-acehRegular text-text18 text-[#495560]">
          {{ $langInfo['lang']['nosotros']['descripcionmision'] }}
        </p>
      </div>

      <div class="flex flex-col gap-2" data-aos="fade-up" data-aos-offset="150">
        <h1 class="font-acehSemibold text-text40 md:text-text44 text-[#141841] leading-none md:leading-tight">
           {{ $langInfo['lang']['nosotros']['titulovision'] }}
        </h1>
        <p class="font-acehRegular text-text18 text-[#495560]">
          {{ $langInfo['lang']['nosotros']['descripcionvision'] }}
        </p>
      </div>

      <div class="flex flex-col gap-3" data-aos="fade-up" data-aos-offset="150">
        <h1 class="font-acehSemibold text-text40 md:text-text44 text-[#141841] leading-none md:leading-tight">
           {{ $langInfo['lang']['nosotros']['titulopromesas'] }}
        </h1>
        <p class="font-acehRegular text-text18 text-[#495560]">
          {{ $langInfo['lang']['nosotros']['promesas1'] }}
        </p>
        <p class="font-acehRegular text-text18 text-[#495560]">
          {{ $langInfo['lang']['nosotros']['promesas2'] }}
        </p>
        <p class="font-acehRegular text-text18 text-[#495560]">
          {{ $langInfo['lang']['nosotros']['promesas3'] }}
        </p>
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
