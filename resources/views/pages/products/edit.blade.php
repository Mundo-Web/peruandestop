<x-app-layout>

  @section('css')
    <link rel="stylesheet" href="{{ asset('/css/vendor/dropzone.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('/css/cssDropzone.css') }}" />
  @endsection

  @section('js_vendor')
    <script src="{{ asset('/js/cs/scrollspy.js') }}"></script>
    <script src="{{ asset('/js/vendor/dropzone.min.js') }}"></script>
    <script src="{{ asset('/js/vendor/singleimageupload.js') }}"></script>
  @endsection

  @section('js_page')
    <script src="{{ asset('/js/cs/dropzone.templates.js') }}"></script>
    <script src="{{ asset('/js/forms/controls.dropzone.js') }}"></script>
  @endsection


  <div class="px-4 sm:px-6 lg:px-8 py-8 w-full max-w-9xl mx-auto">
    <form action="{{ route('activity.update', $product->id) }}" method="POST" enctype="multipart/form-data">
      @csrf
      @method('PUT')
      <div
        class="col-span-full xl:col-span-8 bg-white dark:bg-slate-800 shadow-lg rounded-sm border border-slate-200 dark:border-slate-700">
        <header class="px-5 py-4 border-b border-slate-100 dark:border-slate-700">

          <h2 class="font-semibold text-slate-800 dark:text-slate-100 text-2xl tracking-tight">

            Edición de producto: {{ $product->producto }}
          </h2>
        </header>
        <div class="flex flex-col gap-2 p-3 ">
          <div class="flex gap-2 p-3 ">
            <div class="basis-0 md:basis-3/5">
              <div class="rounded shadow-lg p-4 px-4 ">


                <div id='general' class="grid gap-4 gap-y-2 text-sm grid-cols-1 md:grid-cols-5 ">

                  <div class="md:col-span-5 mt-2">

                    <label for="producto">Producto</label>

                    <div class="relative mb-2  mt-2">
                      <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                        <svg class="w-5 h-5 text-gray-500 dark:text-gray-400" xmlns="http://www.w3.org/2000/svg"
                          version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" width="512" height="512" x="0"
                          y="0" viewBox="0 0 469.336 469.336" style="enable-background:new 0 0 512 512"
                          xml:space="preserve" class="">
                          <g>
                            <path
                              d="m456.836 76.168-64-64.054c-16.125-16.139-44.177-16.17-60.365.031L45.763 301.682a10.733 10.733 0 0 0-2.688 4.587L.409 455.73a10.682 10.682 0 0 0 10.261 13.606c.979 0 1.969-.136 2.927-.407l149.333-42.703a10.714 10.714 0 0 0 4.583-2.69l289.323-286.983c8.063-8.069 12.5-18.787 12.5-30.192s-4.437-22.124-12.5-30.193zM285.989 89.737l39.264 39.264-204.996 204.997-14.712-29.434a10.671 10.671 0 0 0-9.542-5.896H78.921L285.989 89.737zm-259.788 353.4L40.095 394.5l34.742 34.742-48.636 13.895zm123.135-35.177-51.035 14.579-51.503-51.503 14.579-51.035h28.031l18.385 36.771a10.671 10.671 0 0 0 4.771 4.771l36.771 18.385v28.032zm21.334-17.543v-17.082c0-4.042-2.281-7.729-5.896-9.542l-29.434-14.712 204.996-204.996 39.264 39.264-208.93 207.068zM441.784 121.72l-47.033 46.613-93.747-93.747 46.582-47.001c8.063-8.063 22.104-8.063 30.167 0l64 64c4.031 4.031 6.25 9.385 6.25 15.083s-2.219 11.052-6.219 15.052z"
                              fill="#9F9F9F" opacity="1" data-original="#000000" class=""></path>
                          </g>
                        </svg>
                      </div>
                      <input type="text" id="producto" name="producto" value="{{ $product->producto }}"
                        class="mt-1 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="Producto">


                    </div>
                  </div>
                  <div class="md:col-span-5 mt-2">

                    <label for="extract">Extracto</label>

                    <div class="relative mb-2  mt-2">
                      <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                        <svg class="w-5 h-5 text-gray-500 dark:text-gray-400" xmlns="http://www.w3.org/2000/svg"
                          version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" width="512" height="512" x="0"
                          y="0" viewBox="0 0 469.336 469.336" style="enable-background:new 0 0 512 512"
                          xml:space="preserve" class="">
                          <g>
                            <path
                              d="m456.836 76.168-64-64.054c-16.125-16.139-44.177-16.17-60.365.031L45.763 301.682a10.733 10.733 0 0 0-2.688 4.587L.409 455.73a10.682 10.682 0 0 0 10.261 13.606c.979 0 1.969-.136 2.927-.407l149.333-42.703a10.714 10.714 0 0 0 4.583-2.69l289.323-286.983c8.063-8.069 12.5-18.787 12.5-30.192s-4.437-22.124-12.5-30.193zM285.989 89.737l39.264 39.264-204.996 204.997-14.712-29.434a10.671 10.671 0 0 0-9.542-5.896H78.921L285.989 89.737zm-259.788 353.4L40.095 394.5l34.742 34.742-48.636 13.895zm123.135-35.177-51.035 14.579-51.503-51.503 14.579-51.035h28.031l18.385 36.771a10.671 10.671 0 0 0 4.771 4.771l36.771 18.385v28.032zm21.334-17.543v-17.082c0-4.042-2.281-7.729-5.896-9.542l-29.434-14.712 204.996-204.996 39.264 39.264-208.93 207.068zM441.784 121.72l-47.033 46.613-93.747-93.747 46.582-47.001c8.063-8.063 22.104-8.063 30.167 0l64 64c4.031 4.031 6.25 9.385 6.25 15.083s-2.219 11.052-6.219 15.052z"
                              fill="#9F9F9F" opacity="1" data-original="#000000" class=""></path>
                          </g>
                        </svg>
                      </div>
                      <input type="text" id="extract" name="extract" value="{{ $product->extract }}"
                        class="mt-1 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="Extracto">


                    </div>
                  </div>
                  <div class="md:col-span-5 mt-2">
                    <div class=" flex items-end justify-between gap-2 ">
                      <label for="especificacion">Especificacion </label>
                      <button type="button" id="AddEspecifiacion"
                        class="text-blue-500 hover:underline focus:outline-none font-medium">
                        Agregar Especificacion
                      </button>
                    </div>

                    @foreach ($product->specifications as $espec)
                      <div class="flex gap-2">

                        <div class="relative mb-2  mt-2">
                          <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                            <svg class="w-5 h-5 text-gray-500 dark:text-gray-400" xmlns="http://www.w3.org/2000/svg"
                              version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" width="512" height="512"
                              x="0" y="0" viewBox="0 0 469.336 469.336" style="enable-background:new 0 0 512 512"
                              xml:space="preserve" class="">
                              <g>
                                <path
                                  d="m456.836 76.168-64-64.054c-16.125-16.139-44.177-16.17-60.365.031L45.763 301.682a10.733 10.733 0 0 0-2.688 4.587L.409 455.73a10.682 10.682 0 0 0 10.261 13.606c.979 0 1.969-.136 2.927-.407l149.333-42.703a10.714 10.714 0 0 0 4.583-2.69l289.323-286.983c8.063-8.069 12.5-18.787 12.5-30.192s-4.437-22.124-12.5-30.193zM285.989 89.737l39.264 39.264-204.996 204.997-14.712-29.434a10.671 10.671 0 0 0-9.542-5.896H78.921L285.989 89.737zm-259.788 353.4L40.095 394.5l34.742 34.742-48.636 13.895zm123.135-35.177-51.035 14.579-51.503-51.503 14.579-51.035h28.031l18.385 36.771a10.671 10.671 0 0 0 4.771 4.771l36.771 18.385v28.032zm21.334-17.543v-17.082c0-4.042-2.281-7.729-5.896-9.542l-29.434-14.712 204.996-204.996 39.264 39.264-208.93 207.068zM441.784 121.72l-47.033 46.613-93.747-93.747 46.582-47.001c8.063-8.063 22.104-8.063 30.167 0l64 64c4.031 4.031 6.25 9.385 6.25 15.083s-2.219 11.052-6.219 15.052z"
                                  fill="#9F9F9F" opacity="1" data-original="#000000" class=""></path>
                              </g>
                            </svg>
                          </div>
                          <input type="text" id="specifications-{{ $espec->id }}"
                            name="tittle-{{ $espec->id }}" value="{{ $espec->tittle }}"
                            class="mt-1 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            placeholder="Tittle">

                        </div>
                        <div class="relative mb-2  mt-2">
                          <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                            <svg class="w-5 h-5 text-gray-500 dark:text-gray-400" xmlns="http://www.w3.org/2000/svg"
                              version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" width="512" height="512"
                              x="0" y="0" viewBox="0 0 469.336 469.336" style="enable-background:new 0 0 512 512"
                              xml:space="preserve" class="">
                              <g>
                                <path
                                  d="m456.836 76.168-64-64.054c-16.125-16.139-44.177-16.17-60.365.031L45.763 301.682a10.733 10.733 0 0 0-2.688 4.587L.409 455.73a10.682 10.682 0 0 0 10.261 13.606c.979 0 1.969-.136 2.927-.407l149.333-42.703a10.714 10.714 0 0 0 4.583-2.69l289.323-286.983c8.063-8.069 12.5-18.787 12.5-30.192s-4.437-22.124-12.5-30.193zM285.989 89.737l39.264 39.264-204.996 204.997-14.712-29.434a10.671 10.671 0 0 0-9.542-5.896H78.921L285.989 89.737zm-259.788 353.4L40.095 394.5l34.742 34.742-48.636 13.895zm123.135-35.177-51.035 14.579-51.503-51.503 14.579-51.035h28.031l18.385 36.771a10.671 10.671 0 0 0 4.771 4.771l36.771 18.385v28.032zm21.334-17.543v-17.082c0-4.042-2.281-7.729-5.896-9.542l-29.434-14.712 204.996-204.996 39.264 39.264-208.93 207.068zM441.784 121.72l-47.033 46.613-93.747-93.747 46.582-47.001c8.063-8.063 22.104-8.063 30.167 0l64 64c4.031 4.031 6.25 9.385 6.25 15.083s-2.219 11.052-6.219 15.052z"
                                  fill="#9F9F9F" opacity="1" data-original="#000000" class=""></path>
                              </g>
                            </svg>
                          </div>
                          <input type="text" id="specifications-{{ $espec->id }}"
                            name="specifications-{{ $espec->id }}" value="{{ $espec->specifications }}"
                            class="mt-1 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            placeholder="Valor">

                        </div>


                      </div>
                    @endforeach


                  </div>
                  <div class="md:col-span-5">
                    <label for="description">Descripcion</label>
                    <div class="relative mb-2 mt-2">
                      <textarea type="text" rows="2" id="description" name="description"
                        class="mt-1 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="Descripción">{{ $product->description }}</textarea>
                    </div>
                  </div>



                  <div class="md:col-span-5 mt-2">
                    <div class=" flex items-end justify-between gap-2 ">
                      <label for="especificacion">Entrada Multiples </label>
                      <button type="button" id="AddEntrada"
                        class="text-blue-500 hover:underline focus:outline-none font-medium">
                        Agregar Entrada
                      </button>
                    </div>
                    @foreach ($product->entradasMulti as $entradas)
                      <div class="flex gap-2">
                        <div class="relative mb-2  mt-2">
                          <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                            <svg class="w-5 h-5 text-gray-500 dark:text-gray-400" xmlns="http://www.w3.org/2000/svg"
                              version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" width="512"
                              height="512" x="0" y="0" viewBox="0 0 469.336 469.336"
                              style="enable-background:new 0 0 512 512" xml:space="preserve" class="">
                              <g>
                                <path
                                  d="m456.836 76.168-64-64.054c-16.125-16.139-44.177-16.17-60.365.031L45.763 301.682a10.733 10.733 0 0 0-2.688 4.587L.409 455.73a10.682 10.682 0 0 0 10.261 13.606c.979 0 1.969-.136 2.927-.407l149.333-42.703a10.714 10.714 0 0 0 4.583-2.69l289.323-286.983c8.063-8.069 12.5-18.787 12.5-30.192s-4.437-22.124-12.5-30.193zM285.989 89.737l39.264 39.264-204.996 204.997-14.712-29.434a10.671 10.671 0 0 0-9.542-5.896H78.921L285.989 89.737zm-259.788 353.4L40.095 394.5l34.742 34.742-48.636 13.895zm123.135-35.177-51.035 14.579-51.503-51.503 14.579-51.035h28.031l18.385 36.771a10.671 10.671 0 0 0 4.771 4.771l36.771 18.385v28.032zm21.334-17.543v-17.082c0-4.042-2.281-7.729-5.896-9.542l-29.434-14.712 204.996-204.996 39.264 39.264-208.93 207.068zM441.784 121.72l-47.033 46.613-93.747-93.747 46.582-47.001c8.063-8.063 22.104-8.063 30.167 0l64 64c4.031 4.031 6.25 9.385 6.25 15.083s-2.219 11.052-6.219 15.052z"
                                  fill="#9F9F9F" opacity="1" data-original="#000000" class=""></path>
                              </g>
                            </svg>
                          </div>

                          <select id="tipo_entrada_id" name="tipo_entrada_id-{{ $entradas->id }}"
                            class="mt-1 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            <option value="">Seleccionar Tipo Entrada </option>

                            @foreach ($tipoEntrada as $item)
                              {{ $entradas->producto_id }} {{ $item->id }}
                              @if ($entradas->tipo_entrada_id == $item->id)
                                <option selected value="{{ $item->id }}">{{ $item->description }}</option>
                              @else
                                <option value="{{ $item->id }}">{{ $item->description }}</option>
                              @endif
                            @endforeach


                          </select>

                        </div>
                        <div class="relative mb-2  mt-2">
                          <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                            <svg class="w-5 h-5 text-gray-500 dark:text-gray-400" xmlns="http://www.w3.org/2000/svg"
                              version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" width="512"
                              height="512" x="0" y="0" viewBox="0 0 469.336 469.336"
                              style="enable-background:new 0 0 512 512" xml:space="preserve" class="">
                              <g>
                                <path
                                  d="m456.836 76.168-64-64.054c-16.125-16.139-44.177-16.17-60.365.031L45.763 301.682a10.733 10.733 0 0 0-2.688 4.587L.409 455.73a10.682 10.682 0 0 0 10.261 13.606c.979 0 1.969-.136 2.927-.407l149.333-42.703a10.714 10.714 0 0 0 4.583-2.69l289.323-286.983c8.063-8.069 12.5-18.787 12.5-30.192s-4.437-22.124-12.5-30.193zM285.989 89.737l39.264 39.264-204.996 204.997-14.712-29.434a10.671 10.671 0 0 0-9.542-5.896H78.921L285.989 89.737zm-259.788 353.4L40.095 394.5l34.742 34.742-48.636 13.895zm123.135-35.177-51.035 14.579-51.503-51.503 14.579-51.035h28.031l18.385 36.771a10.671 10.671 0 0 0 4.771 4.771l36.771 18.385v28.032zm21.334-17.543v-17.082c0-4.042-2.281-7.729-5.896-9.542l-29.434-14.712 204.996-204.996 39.264 39.264-208.93 207.068zM441.784 121.72l-47.033 46.613-93.747-93.747 46.582-47.001c8.063-8.063 22.104-8.063 30.167 0l64 64c4.031 4.031 6.25 9.385 6.25 15.083s-2.219 11.052-6.219 15.052z"
                                  fill="#9F9F9F" opacity="1" data-original="#000000" class=""></path>
                              </g>
                            </svg>
                          </div>
                          <input type="text" id="descEntrada-{{ $entradas->id }}"
                            name="entrada_multiple-{{ $entradas->id }}" value="{{ $entradas->description }}"
                            class="mt-1 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            placeholder="Valor">

                        </div>

                      </div>
                    @endforeach


                  </div>




                  <div class="md:col-span-5">
                    <label for="imagen">Impagen Principal</label>
                    <div class="relative mb-2  mt-2">
                      <img src="{{ asset($product->imagen) }}" class="rounded-lg mb-2 w-52" alt="Imagen actual">
                      <input id="imagen" name="imagen"
                        class="p-2.5 block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                        aria-describedby="user_avatar_help" id="user_avatar" type="file">
                    </div>
                  </div>


                  <div class="">

                    <label for="destacar">Destacar
                    </label>

                    <div class="relative mb-2  mt-2">
                      <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">

                      </div>
                      <input type="checkbox" id="destacar" name="destacar"
                        class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600"
                        @if ($product->destacar) checked @endif>


                    </div>
                  </div>
                  <div class="">

                    <label for="recomendar">Recomendar</label>

                    <div class="relative mb-2  mt-2">
                      <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">

                      </div>
                      <input type="checkbox" id="recomendar" name="recomendar"
                        class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600"
                        @if ($product->recomendar) checked @endif>
                    </div>
                  </div>


                </div>


              </div>
            </div>
            <div class="basis-0 md:basis-2/5">
              <div class=" grid gap-4 gap-y-2 text-sm grid-cols-1 md:grid-cols-5 rounded shadow-lg p-4 px-4 ">
                <div class="md:col-span-5 flex justify-between gap-4">
                  <div class="w-full">
                    <label for="precio">Precio</label>
                    <div class="relative mb-2  mt-2">
                      <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                        <svg class="w-5 h-5 text-gray-500 dark:text-gray-400" xmlns="http://www.w3.org/2000/svg"
                          fill="none" width="512" height="512" x="0" viewBox="0 0 24 24" stroke-width="1.5"
                          stroke="currentColor">
                          <path stroke-linecap="round" stroke-linejoin="round"
                            d="M12 6v12m-3-2.818.879.659c1.171.879 3.07.879 4.242 0 1.172-.879 1.172-2.303 0-3.182C13.536 12.219 12.768 12 12 12c-.725 0-1.45-.22-2.003-.659-1.106-.879-1.106-2.303 0-3.182s2.9-.879 4.006 0l.415.33M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                        </svg>

                      </div>
                      <input type="number" id="precio" name="precio" value="{{ $product->precio }}"
                        class="mt-1 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="precio">
                    </div>

                  </div>
                  <div class="w-full">
                    <label for="descuento">Descuento</label>
                    <div class="relative mb-2  mt-2">
                      <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                        <svg class="w-5 h-5 text-gray-500 dark:text-gray-400" xmlns="http://www.w3.org/2000/svg"
                          fill="none" width="512" height="512" x="0" viewBox="0 0 24 24" stroke-width="1.5"
                          stroke="currentColor">
                          <path stroke-linecap="round" stroke-linejoin="round"
                            d="M12 6v12m-3-2.818.879.659c1.171.879 3.07.879 4.242 0 1.172-.879 1.172-2.303 0-3.182C13.536 12.219 12.768 12 12 12c-.725 0-1.45-.22-2.003-.659-1.106-.879-1.106-2.303 0-3.182s2.9-.879 4.006 0l.415.33M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                        </svg>
                      </div>
                      <input type="number" id="descuento" name="descuento" value="{{ $product->descuento }}"
                        class="mt-1 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="descuento">
                    </div>

                  </div>


                </div>
                <div class="md:col-span-5 mt-2">

                  <label for="costo_agencia">Costo Agencia</label>

                  <div class="relative mb-2  mt-2">
                    <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                      <svg class="w-5 h-5 text-gray-500 dark:text-gray-400" xmlns="http://www.w3.org/2000/svg"
                        version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" width="512" height="512"
                        x="0" y="0" viewBox="0 0 469.336 469.336" style="enable-background:new 0 0 512 512"
                        xml:space="preserve" class="">
                        <g>
                          <path
                            d="m456.836 76.168-64-64.054c-16.125-16.139-44.177-16.17-60.365.031L45.763 301.682a10.733 10.733 0 0 0-2.688 4.587L.409 455.73a10.682 10.682 0 0 0 10.261 13.606c.979 0 1.969-.136 2.927-.407l149.333-42.703a10.714 10.714 0 0 0 4.583-2.69l289.323-286.983c8.063-8.069 12.5-18.787 12.5-30.192s-4.437-22.124-12.5-30.193zM285.989 89.737l39.264 39.264-204.996 204.997-14.712-29.434a10.671 10.671 0 0 0-9.542-5.896H78.921L285.989 89.737zm-259.788 353.4L40.095 394.5l34.742 34.742-48.636 13.895zm123.135-35.177-51.035 14.579-51.503-51.503 14.579-51.035h28.031l18.385 36.771a10.671 10.671 0 0 0 4.771 4.771l36.771 18.385v28.032zm21.334-17.543v-17.082c0-4.042-2.281-7.729-5.896-9.542l-29.434-14.712 204.996-204.996 39.264 39.264-208.93 207.068zM441.784 121.72l-47.033 46.613-93.747-93.747 46.582-47.001c8.063-8.063 22.104-8.063 30.167 0l64 64c4.031 4.031 6.25 9.385 6.25 15.083s-2.219 11.052-6.219 15.052z"
                            fill="#9F9F9F" opacity="1" data-original="#000000" class=""></path>
                        </g>
                      </svg>
                    </div>
                    <input type="text" id="costo_agencia" name="costo_agencia"
                      value="{{ $product->costo_agencia }}"
                      class="mt-1 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                      placeholder="Costo para agencias">


                  </div>
                </div>
                <div class=" md:col-span-5">
                  <label for="description">Idioma</label>
                  <select id="langSelect" name="langs"
                    class="mt-1 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    <option value="">Seleccionar Idioma </option>

                    @foreach ($langs as $item)
                      @if ($item->code == $product->langs)
                        <option selected value="{{ $item->code }}">{{ $item->description }}</option>
                      @else
                        <option value="{{ $item->code }}">{{ $item->description }}</option>
                      @endif
                    @endforeach
                  </select>
                </div>

                <div class="md:col-span-5">
                  <label for="costo_x_art">Destino</label>
                  <div class="relative mb-2  mt-2">
                    <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                      <svg class="w-5 h-5 text-gray-500 dark:text-gray-400" xmlns="http://www.w3.org/2000/svg"
                        fill="none" width="512" height="512" x="0" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round"
                          d="M12 6v12m-3-2.818.879.659c1.171.879 3.07.879 4.242 0 1.172-.879 1.172-2.303 0-3.182C13.536 12.219 12.768 12 12 12c-.725 0-1.45-.22-2.003-.659-1.106-.879-1.106-2.303 0-3.182s2.9-.879 4.006 0l.415.33M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                      </svg>
                    </div>
                    <select name="categoria_id" id="categoriaSelect"
                      class="mt-1 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                      <option value="">Seleccionar Destino </option>
                      @foreach ($categoria as $item)
                        @if ($item->id == $product->categoria_id)
                          <option selected value="{{ $item->id }}">{{ $item->description }}</option>
                        @else
                          <option value="{{ $item->id }}">{{ $item->name }}</option>
                        @endif
                      @endforeach

                    </select>
                  </div>
                </div>

                <div class="md:col-span-5">
                  <label for="tags_id">Tags</label>
                  <select id="tags_id" name="tags_id[]" multiple
                    class="mt-1 selectTags bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    @foreach ($allTags as $tag)
                      <option value="{{ $tag->id }}"
                        {{ in_array($tag->id, $product->tags->pluck('id')->toArray()) ? 'selected' : '' }}>
                        {{ $tag->name }}
                      </option>
                    @endforeach
                  </select>
                </div>
                <div class="md:col-span-5 mt-2">

                  <label for="id_marketplace">Producto marketplace ID</label>

                  <div class="relative mb-2  mt-2">
                    <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                      <svg class="w-5 h-5 text-gray-500 dark:text-gray-400" xmlns="http://www.w3.org/2000/svg"
                        version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" width="512" height="512"
                        x="0" y="0" viewBox="0 0 469.336 469.336" style="enable-background:new 0 0 512 512"
                        xml:space="preserve" class="">
                        <g>
                          <path
                            d="m456.836 76.168-64-64.054c-16.125-16.139-44.177-16.17-60.365.031L45.763 301.682a10.733 10.733 0 0 0-2.688 4.587L.409 455.73a10.682 10.682 0 0 0 10.261 13.606c.979 0 1.969-.136 2.927-.407l149.333-42.703a10.714 10.714 0 0 0 4.583-2.69l289.323-286.983c8.063-8.069 12.5-18.787 12.5-30.192s-4.437-22.124-12.5-30.193zM285.989 89.737l39.264 39.264-204.996 204.997-14.712-29.434a10.671 10.671 0 0 0-9.542-5.896H78.921L285.989 89.737zm-259.788 353.4L40.095 394.5l34.742 34.742-48.636 13.895zm123.135-35.177-51.035 14.579-51.503-51.503 14.579-51.035h28.031l18.385 36.771a10.671 10.671 0 0 0 4.771 4.771l36.771 18.385v28.032zm21.334-17.543v-17.082c0-4.042-2.281-7.729-5.896-9.542l-29.434-14.712 204.996-204.996 39.264 39.264-208.93 207.068zM441.784 121.72l-47.033 46.613-93.747-93.747 46.582-47.001c8.063-8.063 22.104-8.063 30.167 0l64 64c4.031 4.031 6.25 9.385 6.25 15.083s-2.219 11.052-6.219 15.052z"
                            fill="#9F9F9F" opacity="1" data-original="#000000" class=""></path>
                        </g>
                      </svg>
                    </div>
                    <input type="text" id="id_marketplace" name="id_marketplace"
                      value="{{ $tag->id_marketplace }}"
                      class="mt-1 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                      placeholder="Marketplace Id">


                  </div>
                </div>
                <div class="md:col-span-5 mt-2">
                  <div class="flex justify-between gap-5">
                    @foreach ($product->galeria as $item)
                      @if ($item->type_img == 'portada')
                        <div id="portada-{{ $item->id }}">
                          <i onclick="borrarImg({{ $item->id }})" class=" w-5 cursor-pointer"
                            style="position: absolute;"><svg xmlns="http://www.w3.org/2000/svg"
                              viewBox="0 0 384 512"><!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                              <path
                                d="M376.6 84.5c11.3-13.6 9.5-33.8-4.1-45.1s-33.8-9.5-45.1 4.1L192 206 56.6 43.5C45.3 29.9 25.1 28.1 11.5 39.4S-3.9 70.9 7.4 84.5L150.3 256 7.4 427.5c-11.3 13.6-9.5 33.8 4.1 45.1s33.8 9.5 45.1-4.1L192 306 327.4 468.5c11.3 13.6 31.5 15.4 45.1 4.1s15.4-31.5 4.1-45.1L233.7 256 376.6 84.5z" />
                            </svg></i>


                          <img src="{{ asset($item->imagen) }}" alt="" class="w-24">
                        </div>
                      @endif
                    @endforeach

                  </div>

                </div>

                <div class="md:col-span-5 mt-2">
                  <section class="scroll-section overflow-y-auto" id="uploadedFiles">
                    <h2 class="small-title">Uploaded Files Portada</h2>


                    <div class="card mb-5">
                      <div class="card-body">

                        <div class="dropzone border-gray-300  " id="dropzoneServerFiles"></div>

                      </div>
                    </div>
                  </section>
                </div>
                <div class="md:col-span-5 mt-2">
                  <div class="flex justify-between gap-5">
                    @foreach ($product->galeria as $item)
                      @if ($item->type_img == 'gall')
                        <div id="portada-{{ $item->id }}">
                          <i onclick="borrarImg({{ $item->id }})" class=" w-5 cursor-pointer"
                            style="position: absolute;"><svg xmlns="http://www.w3.org/2000/svg"
                              viewBox="0 0 384 512"><!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                              <path
                                d="M376.6 84.5c11.3-13.6 9.5-33.8-4.1-45.1s-33.8-9.5-45.1 4.1L192 206 56.6 43.5C45.3 29.9 25.1 28.1 11.5 39.4S-3.9 70.9 7.4 84.5L150.3 256 7.4 427.5c-11.3 13.6-9.5 33.8 4.1 45.1s33.8 9.5 45.1-4.1L192 306 327.4 468.5c11.3 13.6 31.5 15.4 45.1 4.1s15.4-31.5 4.1-45.1L233.7 256 376.6 84.5z" />
                            </svg></i>


                          <img src="{{ asset($item->imagen) }}" alt="" class="w-24">
                        </div>
                      @endif
                    @endforeach

                  </div>

                </div>

                <div class="md:col-span-5 mt-2">
                  <section class="scroll-section overflow-y-auto" id="uploadedFilesGallery">
                    <h2 class="small-title">Uploaded Files to Gallery</h2>
                    <div class="card mb-5">
                      <div class="card-body">

                        <div class="dropzone border-gray-300  " id="dropzoneServerFilesGallery"></div>

                      </div>
                    </div>
                  </section>
                </div>



              </div>

            </div>
          </div>

          <div class="md:col-span-5 text-right mt-6 flex justify-between px-4 pb-4">
            <div class="inline-flex items-end">
              <a href="{{ URL::previous() }}"
                class="bg-red-500 hover:bg-red-700 text-white font-semibold py-2 px-4 rounded">Volver</a>
            </div>
            <div class="inline-flex items-end">
              <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-semibold py-2 px-4 rounded">
                Actualizar
              </button>
            </div>
          </div>
        </div>
      </div>

    </form>


  </div>
  {{-- <script>
    // Obtener los enlaces de pestaña
    const generalTab = document.getElementById('general-tab');
    const attributesTab = document.getElementById('attributes-tab');

    // Obtener los contenedores de contenido
    const generalContent = document.getElementById('general');
    const attributesContent = document.getElementById('Attributes');

    // Agregar event listeners para los enlaces de pestaña
    generalTab.addEventListener('click', function(event) {
      generalTab.classList.add('active', 'dark:bg-slate-900')
      attributesTab.classList.remove('active', 'dark:bg-slate-900')
      // Ocultar el contenido de Attributes
      attributesContent.classList.add('hidden');
      // Mostrar el contenido de General
      generalContent.classList.remove('hidden');
    });

    attributesTab.addEventListener('click', function(event) {
      generalTab.classList.remove('active', 'dark:bg-slate-900')
      attributesTab.classList.add('active', 'dark:bg-slate-900')
      // Ocultar el contenido de General
      generalContent.classList.add('hidden');
      // Mostrar el contenido de Attributes
      attributesContent.classList.remove('hidden');
    });
  </script> --}}

  <script>
    let editor = null
    $('document').ready(async function() {




      $('.selectTags').select2()

      tinymce.init({
        selector: 'textarea#description',
        height: 500,
        plugins: [
          'advlist', 'autolink', 'lists', 'link', 'charmap', 'preview',
          'searchreplace', 'visualblocks', 'code', 'fullscreen',
          'insertdatetime', 'table'
        ],
        toolbar: 'undo redo | blocks | ' +
          'bold italic backcolor | alignleft aligncenter ' +
          'alignright alignjustify | bullist numlist outdent indent | ' +
          'removeformat | help',
        content_style: 'body { font-family:Helvetica,Arial,sans-serif; font-size:14px;}'
      });
    })
  </script>
  <script>
    function capitalizeFirstLetter(string) {
      return string.charAt(0).toUpperCase() + string.slice(1);
    }

    function agregarElementos(elemento, valorInput, name) {
      elemento.setAttribute("type", "text");
      elemento.setAttribute("name", `${name}-${valorInput}ac`);
      elemento.setAttribute("placeholder", `${capitalizeFirstLetter(name)}`);
      elemento.setAttribute("id", `${name}-${valorInput}ac`);
      elemento.setAttribute("id", `${name}-${valorInput}ac`);
      elemento.setAttribute("id", `${name}-${valorInput}ac`);

      elemento.classList.add("mt-1", "bg-gray-50", "border", "border-gray-300", "text-gray-900", "text-sm",
        "rounded-lg",
        "focus:ring-blue-500", "focus:border-blue-500", "block", "w-full", "pl-10", "p-2.5",
        "dark:bg-gray-700",
        "dark:border-gray-600", "dark:placeholder-gray-400", "dark:text-white",
        "dark:focus:ring-blue-500",
        "dark:focus:border-blue-500");

      return elemento
    }
    $(document).ready(function() {
      let valorInput = 1
      $("#AddEntrada").on('click', function(e) {
        e.preventDefault()


        const selectElement = document.getElementById('tipo_entrada_id');
        // console.log(selectElement)

        // Obtener todas las opciones del select
        const opciones = Array.from(selectElement.options).map(option => {
          return {
            value: option.value,
            text: option.textContent.trim()
          };
        });

        // Ahora tienes todas las opciones en el array 'opciones'
        console.log(opciones);


        valorInput++
        console.log('agregando especificacion')
        const addButton = document.getElementById("AddEntrada");
        const divFlex = document.createElement("div");
        const dRelative = document.createElement("div");
        const dRelative2 = document.createElement("div");

        divFlex.classList.add('flex', 'gap-2')
        dRelative.classList.add('relative', 'mb-2', 'mt-2')
        dRelative2.classList.add('relative', 'mb-2', 'mt-2')

        const iconContainer = document.createElement("div");
        const icon = `<div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                    <svg class="w-5 h-5 text-gray-500 dark:text-gray-400" xmlns="http://www.w3.org/2000/svg"
                      version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" width="512" height="512" x="0"
                      y="0" viewBox="0 0 469.336 469.336" style="enable-background:new 0 0 512 512"
                      xml:space="preserve" class="">
                      <g>
                        <path
                          d="m456.836 76.168-64-64.054c-16.125-16.139-44.177-16.17-60.365.031L45.763 301.682a10.733 10.733 0 0 0-2.688 4.587L.409 455.73a10.682 10.682 0 0 0 10.261 13.606c.979 0 1.969-.136 2.927-.407l149.333-42.703a10.714 10.714 0 0 0 4.583-2.69l289.323-286.983c8.063-8.069 12.5-18.787 12.5-30.192s-4.437-22.124-12.5-30.193zM285.989 89.737l39.264 39.264-204.996 204.997-14.712-29.434a10.671 10.671 0 0 0-9.542-5.896H78.921L285.989 89.737zm-259.788 353.4L40.095 394.5l34.742 34.742-48.636 13.895zm123.135-35.177-51.035 14.579-51.503-51.503 14.579-51.035h28.031l18.385 36.771a10.671 10.671 0 0 0 4.771 4.771l36.771 18.385v28.032zm21.334-17.543v-17.082c0-4.042-2.281-7.729-5.896-9.542l-29.434-14.712 204.996-204.996 39.264 39.264-208.93 207.068zM441.784 121.72l-47.033 46.613-93.747-93.747 46.582-47.001c8.063-8.063 22.104-8.063 30.167 0l64 64c4.031 4.031 6.25 9.385 6.25 15.083s-2.219 11.052-6.219 15.052z"
                          fill="#9F9F9F" opacity="1" data-original="#000000" class=""></path>
                      </g>
                    </svg>
                  </div>`
        iconContainer.innerHTML = icon;

        // Obtener el nodo del icono
        const iconNode = iconContainer.firstChild;



        const inputTittle = document.createElement("select");
        const inputValue = document.createElement("input");

        opciones.forEach(opcion => {
          const optionElement = document.createElement("option");
          optionElement.value = opcion.value;
          optionElement.textContent = opcion.text;
          inputTittle.appendChild(optionElement);
        });

        let inputT = agregarElementos(inputTittle, valorInput, 'tipo_entrada_id')
        let inputV = agregarElementos(inputValue, valorInput, 'entrada_multiple')


        dRelative.appendChild(inputT);
        dRelative2.appendChild(inputV);


        // Agregar el icono como primer hijo de dRelative
        dRelative.insertBefore(iconNode, inputT);

        // Clonar el nodo del icono para agregarlo como primer hijo de dRelative2
        const iconNodeCloned = iconNode.cloneNode(true);
        dRelative2.insertBefore(iconNodeCloned, inputV);


        divFlex.appendChild(dRelative);
        divFlex.appendChild(dRelative2);

        const parentContainer = addButton.parentElement
          .parentElement; // Obtener el contenedor padre
        parentContainer.insertBefore(divFlex, addButton.parentElement
          .nextSibling); // Insertar el input antes del siguiente elemento después del botón



      })
    });
  </script>
  <script>
    function agregarEspecifiacion(elemento, valorInput, name) {
      elemento.setAttribute("type", "text");
      elemento.setAttribute("name", `${name}-${valorInput}ac `);
      elemento.setAttribute("placeholder", `${capitalizeFirstLetter(name)}`);
      elemento.setAttribute("id", `${name}-${valorInput}`);
      elemento.setAttribute("id", `${name}-${valorInput}`);
      elemento.setAttribute("id", `${name}-${valorInput}`);

      elemento.classList.add("mt-1", "bg-gray-50", "border", "border-gray-300", "text-gray-900", "text-sm",
        "rounded-lg",
        "focus:ring-blue-500", "focus:border-blue-500", "block", "w-full", "pl-10", "p-2.5",
        "dark:bg-gray-700",
        "dark:border-gray-600", "dark:placeholder-gray-400", "dark:text-white",
        "dark:focus:ring-blue-500",
        "dark:focus:border-blue-500");

      return elemento
    }

    let valorInput = 1
    $("#AddEspecifiacion").on('click', function(e) {
      e.preventDefault()
      valorInput++
      console.log('agregando especificacion')
      const addButton = document.getElementById("AddEspecifiacion");
      const divFlex = document.createElement("div");
      const dRelative = document.createElement("div");
      const dRelative2 = document.createElement("div");

      divFlex.classList.add('flex', 'gap-2')
      dRelative.classList.add('relative', 'mb-2', 'mt-2')
      dRelative2.classList.add('relative', 'mb-2', 'mt-2')

      const iconContainer = document.createElement("div");
      const icon = `<div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                    <svg class="w-5 h-5 text-gray-500 dark:text-gray-400" xmlns="http://www.w3.org/2000/svg"
                      version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" width="512" height="512" x="0"
                      y="0" viewBox="0 0 469.336 469.336" style="enable-background:new 0 0 512 512"
                      xml:space="preserve" class="">
                      <g>
                        <path
                          d="m456.836 76.168-64-64.054c-16.125-16.139-44.177-16.17-60.365.031L45.763 301.682a10.733 10.733 0 0 0-2.688 4.587L.409 455.73a10.682 10.682 0 0 0 10.261 13.606c.979 0 1.969-.136 2.927-.407l149.333-42.703a10.714 10.714 0 0 0 4.583-2.69l289.323-286.983c8.063-8.069 12.5-18.787 12.5-30.192s-4.437-22.124-12.5-30.193zM285.989 89.737l39.264 39.264-204.996 204.997-14.712-29.434a10.671 10.671 0 0 0-9.542-5.896H78.921L285.989 89.737zm-259.788 353.4L40.095 394.5l34.742 34.742-48.636 13.895zm123.135-35.177-51.035 14.579-51.503-51.503 14.579-51.035h28.031l18.385 36.771a10.671 10.671 0 0 0 4.771 4.771l36.771 18.385v28.032zm21.334-17.543v-17.082c0-4.042-2.281-7.729-5.896-9.542l-29.434-14.712 204.996-204.996 39.264 39.264-208.93 207.068zM441.784 121.72l-47.033 46.613-93.747-93.747 46.582-47.001c8.063-8.063 22.104-8.063 30.167 0l64 64c4.031 4.031 6.25 9.385 6.25 15.083s-2.219 11.052-6.219 15.052z"
                          fill="#9F9F9F" opacity="1" data-original="#000000" class=""></path>
                      </g>
                    </svg>
                  </div>`
      iconContainer.innerHTML = icon;

      // Obtener el nodo del icono
      const iconNode = iconContainer.firstChild;



      const inputTittle = document.createElement("input");
      const inputValue = document.createElement("input");

      let inputT = agregarEspecifiacion(inputTittle, valorInput, 'tittle')
      let inputV = agregarEspecifiacion(inputValue, valorInput, 'specifications')


      dRelative.appendChild(inputT);
      dRelative2.appendChild(inputV);


      // Agregar el icono como primer hijo de dRelative
      dRelative.insertBefore(iconNode, inputT);

      // Clonar el nodo del icono para agregarlo como primer hijo de dRelative2
      const iconNodeCloned = iconNode.cloneNode(true);
      dRelative2.insertBefore(iconNodeCloned, inputV);


      divFlex.appendChild(dRelative);
      divFlex.appendChild(dRelative2);

      const parentContainer = addButton.parentElement
        .parentElement; // Obtener el contenedor padre
      parentContainer.insertBefore(divFlex, addButton.parentElement
        .nextSibling); // Insertar el input antes del siguiente elemento después del botón



    })
  </script>

  <script>
    function toggleMenu() {
      console.log('cambiando toggle')
      var menuItems = document.getElementById('menu-items');
      var isExpanded = menuItems.classList.contains('hidden');
      menuItems.classList.toggle('hidden', !isExpanded);
      document.getElementById('menu-button').setAttribute('aria-expanded', !isExpanded);
    }
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
  <script>
    function borrarImg(id) {
      console.log('borranmdo ', id)

      $.ajax({
        url: "{{ route('activity.borrarimg') }}",
        method: 'POST',
        data: {
          _token: $('input[name="_token"]').val(),
          status: status,
          id: id,

        },
        success: function(success) {
          Swal.fire({

            icon: "success",
            title: 'Img borrada exitosamente',
            showConfirmButton: false,
            timer: 1500

          });
          $(`#portada-${id}`).remove()
        },
        error: function(error) {
          console.log(error)
        }

      })




    }
  </script>
  @include('_layout.scripts')
</x-app-layout>
