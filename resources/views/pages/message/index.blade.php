<x-app-layout>
  <div class="px-4 sm:px-6 lg:px-8 py-8 w-full max-w-9xl mx-auto">

    <div
      class="col-span-full xl:col-span-8 bg-white dark:bg-slate-800 shadow-lg rounded-sm border border-slate-200 dark:border-slate-700">
      <header class="px-5 py-4 border-b border-slate-100 dark:border-slate-700">
        <h2 class="font-semibold text-slate-800 dark:text-slate-100 text-2xl tracking-tight">Mis Mensajes</h2>
      </header>
      <div class="p-3">

        <!-- Table -->
        <div class="overflow-x-auto">

          <table id="tabladatos" class="display text-lg table" style="width:100%">
            <thead>
              <tr>
                <th>Nombre</th>
                <th>Correo</th>

                <th>Teléfono</th>
                <th>Fecha</th>
                <th>Origen</th>
                <th>Acción</th>
              </tr>
            </thead>
            <tbody>

              @foreach ($mensajes as $item)
                <tr class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-100 even:dark:bg-gray-800">
                  <td class="text-center">
                    @if ($item->is_read == '0')
                      <a href="{{ route('mensajes.show', $item->id) }}"><span class="mr-4"><i
                            class="fa-regular fa-envelope"></i></span><span
                          class="font-bold">{{ $item->full_name }}</span></a>
                    @else
                      <a href="{{ route('mensajes.show', $item->id) }}"><span class="mr-4"><i
                            class="fa-regular fa-envelope-open"></i></span><span>{{ $item->full_name }}</span></a>
                    @endif

                  </td>
                  <td class="text-center">{{ $item->email }}</td>
                  <td class="text-center">{{ $item->phone }}</td>
                  <td class="text-center">{{ $item->created_at->translatedFormat('j \d\e F \d\e\l Y') }}</td>
                  <td class="text-center">{{ $item->pais }} , {{ $item->ciudad }}</td>
                  <td class="text-center">
                    <button method="POST" onclick="borrarmensaje({{ $item->id }})"
                      class="bg-red-600 p-2 rounded text-white"><i class="fa-regular fa-trash-can"></i></button>
                    <!--a href="" class="bg-yellow-400 p-2 rounded text-white mr-6"><i class="fa-regular fa-pen-to-square"></i></a-->
                  </td>
                </tr>
              @endforeach

            </tbody>
            <tfoot>
              <tr>
                <th>Nombre</th>
                <th>Correo</th>
                <th>Teléfono</th>
                <th>Fecha</th>
                <th>Origen</th>

                <th>Tool</th>
              </tr>
            </tfoot>
          </table>

        </div>
      </div>
    </div>

  </div>

  <script>
    $('document').ready(function() {
      // new DataTable('#tabladatos');

      ('#tabladatos').DataTable({
        ordering: false,
      })

    })

    function borrarmensaje(id) {
      console.log(id)
      $.ajax({
        url: '{{ route('mensajes.borrar') }}',
        method: 'POST',
        headers: {
          'X-CSRF-TOKEN': '{{ csrf_token() }}'
        },
        data: {
          id
        },
        success: function(success) {
          Swal.fire({
            title: "Exito",
            text: 'Solicitud enviada con exito ',
            icon: "success"
          });

          window.location.href = '/admin/mensajes';
        },
        error: function(error) {
          console.log(error)
          Swal.fire({
            title: "Ops !",
            text: 'El mensaje no ha podido ser enviado, en breves momentos volvera a estar disponible',
            icon: "warning"
          });
        }

      })
    }
  </script>

</x-app-layout>
