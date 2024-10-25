<?php

namespace App\Http\Controllers;

use App\Helpers\EmailConfig;
use App\Http\Requests\StoreIndexRequest;
use App\Http\Requests\UpdateIndexRequest;
use App\Models\AboutUs;
use App\Models\Agencias;
use App\Models\Attributes;
use App\Models\AttributesValues;
use App\Models\Blog;
use App\Models\Faqs;
use App\Models\General;
use App\Models\Index;
use App\Models\Message;
use App\Models\Products;
use App\Models\Slider;
use App\Models\Strength;
use App\Models\Testimony;
use App\Models\Category;
use App\Models\NewsletterSubscriber;
use App\Models\politycsCondition;
use App\Models\Specifications;
use App\Models\Tag;
use App\Models\termsCondition;
use App\Models\TipoEntrada;
use App\Models\User;
use App\Models\UserDetails;
use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use SoDe\Extend\File as ExtendFile;
use Illuminate\Support\Str;
use Illuminate\Validation\ValidationException;

use function PHPUnit\Framework\isNull;

class IndexController extends Controller
{
  /**
   * Display a listing of the resource.
   */
  public function index(Request $request, $lang)
  {
    // $productos =  Products::where("destacar", "=", true)->where("status","=",true)->get();
    $productos =  Products::with('tags')->activeDestacado()->where('langs', '=', $lang)->get();
    //$categorias = Category::all();
    $categorias = Category::where("visible", "=", true)->where('status', '=', 1)->where('langs', '=', $lang)->where('category_type', '=', 'destino')->get();
    $destacados = Products::where('destacar', '=', 1)->where('status', '=', 1)->where('visible', '=', 1)->where('langs', '=', $lang)->get();
    $descuentos = Products::where('descuento', '>', 0)->where('status', '=', 1)->where('visible', '=', 1)->where('langs', '=', $lang)->get();
    $tags = Tag::where('status', '=', 1)->where('visible', '=', 1)->where('langs', '=', $lang)->get();
    $blogs = Blog::where('status', '=', 1)->where('visible', '=', 1)->where('langs', '=', $lang)->orderByDesc('created_at')->limit(4)->get();

    $general = General::all();
    $benefit = Strength::where('status', '=', 1)->get();
    $faqs = Faqs::where('status', '=', 1)->where('visible', '=', 1)->get();
    $testimonie = Testimony::where('status', '=', 1)->where('visible', '=', 1)->get();
    $slider = Slider::where('status', '=', 1)->where('visible', '=', 1)->get();
    $category = Category::where('status', '=', 1)->where('destacar', '=', 1)->get();

    $sliders = Slider::where('status', '=', 1)->where('visible', '=', 1)->get();
    $tours =  Products::where('status', '=', 1)->where('visible', '=', 1)->where('langs', '=', $lang)->get();

    $langInfo = $request->attributes->all();

    return view('public.index', compact('tours', 'sliders', 'productos', 'destacados', 'descuentos', 'general', 'benefit', 'faqs', 'testimonie', 'slider', 'categorias', 'category', 'tags', 'blogs', 'lang', 'langInfo'));
  }

  public function catalogo($filtro, Request $request)
  {
    $categorias = null;
    $productos = null;

    $rangefrom = $request->query('rangefrom');
    $rangeto = $request->query('rangeto');



    try {
      $general = General::all();
      $faqs = Faqs::where('status', '=', 1)->where('visible', '=', 1)->get();

      $categorias = Category::all();

      $testimonie = Testimony::where('status', '=', 1)->where('visible', '=', 1)->get();



      if ($filtro == 0) {
        $productos = Products::paginate(3);
        $categoria = Category::all();
      } else {
        $productos = Products::where('categoria_id', '=', $filtro)->paginate(3);
        $categoria = Category::findOrFail($filtro);
      }



      if ($rangefrom !== null && $rangeto !== null) {

        if ($filtro == 0) {
          $productos = Products::all();
          $categoria = Category::all();
        } else {
          $productos = Products::where('categoria_id', '=', $filtro)->get();
          $categoria = Category::findOrFail($filtro);
        }

        $cleanedData = $productos->filter(function ($value) use ($rangefrom, $rangeto) {

          if ($value['descuento'] == 0) {

            if ($value['precio'] <= $rangeto && $value['precio'] >= $rangefrom) {
              return $value;
            }
          } else {

            if ($value['descuento'] <= $rangeto && $value['descuento'] >= $rangefrom) {
              return $value;
            }
          }
        });

        $currentPage = LengthAwarePaginator::resolveCurrentPage();
        $productos = new LengthAwarePaginator(
          $cleanedData->forPage($currentPage, 3), // Obtener los productos por página
          $cleanedData->count(), // Contar todos los elementos
          3, // Número de elementos por página
          $currentPage, // Página actual
          ['path' => request()->url()] // URL base para la paginación
        );
      }



      return view('public.catalogo', compact('general', 'faqs', 'categorias', 'testimonie', 'filtro', 'productos', 'categoria', 'rangefrom', 'rangeto'));
    } catch (\Throwable $th) {
    }
  }

  public function comentario()
  {
    $general = General::all();
    return view('public.comentario', compact('general'));
  }

  public function contacto(Request $request, string $lang)
  {
    $general = General::all();
    $langInfo = $request->attributes->all();
    return view('public.contacto', compact('general', 'lang', 'langInfo'));
  }

  public function carrito()
  {
    //
    $url_env = $_ENV['APP_URL'];
    return view('public.checkout_carrito', compact('url_env'));
  }

  public function pago()
  {
    //
    $detalleUsuario = [];
    $user = auth()->user();
    if (!isNull($user)) {
      $detalleUsuario = UserDetails::where('email', $user->email)->get();
    }
    $distritos  = DB::select('select * from districts where active = ? order by 3', [1]);
    $provincias = DB::select('select * from provinces where active = ? order by 3', [1]);
    $departamento = DB::select('select * from departments where active = ? order by 2', [1]);


    $url_env = $_ENV['APP_URL'];
    return view('public.checkout_pago', compact('url_env', 'distritos', 'provincias', 'departamento', 'detalleUsuario'));
  }

  public function procesarPago(Request $request)
  {

    $codigoAleatorio = '';
    $mensajes2compra = [
      'email.required' => 'El campo Email es obligatorio.',
      'nombre.required' => 'El campo Nombre es obligatorio.',
      'apellidos.required' => 'El campo Email es obligatorio.',
      'departamento_id.required ' => 'Seleccione un Departamento es obligatorio.',
      'provincia_id.required' => 'Seleccione una Provincia es obligatorio.',
      'distrito_id.required' => 'Seleccione un Distrito obligatorio.',
      'dir_av_calle.required' => 'El campo Avenida/Calle obligatorio.',
      'dir_numero.required' => 'El campo Numero es obligatorio.'
    ];

    try {
      $reglasPrimeraCompra = [
        'email' => 'required',
      ];
      $mensajes = [
        'email.required' => 'El campo Email es obligatorio.',

      ];
      $request->validate($reglasPrimeraCompra, $mensajes);

      $email = $request->email;
      $existeUser = UserDetails::where('email', $email)->get()->toArray();

      if (count($existeUser) === 0) {
        UserDetails::create($request->all());

        $codigoAleatorio = $this->codigoVentaAleatorio();
        $this->guardarOrden();

        return response()->json(['message' => 'Data procesada correctamente', 'codigoCompra' => $codigoAleatorio],);
      } else {
        $existeUsuario = User::where('email', $email)->get()->toArray();
        if ($existeUsuario) {
          $validator = Validator::make($request->all(), [
            'email' => 'required',
            'nombre' => 'required',
            'apellidos' => 'required',
            'departamento_id' => 'required',
            'provincia_id' => 'required',
            'distrito_id' => 'required',
            'dir_av_calle' => 'required',
            'dir_numero' => 'required',
            'dir_bloq_lote' => 'required',
            // Otras reglas de validación
          ]);

          if ($validator->fails()) {
            // Aquí puedes manejar el error como desees, por ejemplo, devolver una respuesta con los errores
            return response()->json(['errors' => $validator->errors()], 422);
          } else {

            //Procesar Compra
            $userdetailU = UserDetails::where('email', $email)->first();
            $userdetailU->update($request->all());

            $codigoAleatorio = $this->codigoVentaAleatorio();
            $this->guardarOrden();
            return response()->json(['message' => 'Todos los datos estan correctos', 'codigoCompra' => $codigoAleatorio],);
          }
        } else {
          return response()->json(['errors' => 'Por favor registrese e inicie session '], 422);
        }
      }
    } catch (\Throwable $th) {
      //throw $th;
      return response()->json(['message' => $th], 400);
    }
  }

  private function guardarOrden()
  {
    //almacenar venta, generar orden de pedido , guardar en tabla detalle de compra, li
  }

  private function codigoVentaAleatorio()
  {
    $codigoAleatorio = '';

    // Longitud deseada del código
    $longitudCodigo = 10;

    // Genera un código aleatorio de longitud 10
    for ($i = 0; $i < $longitudCodigo; $i++) {
      $codigoAleatorio .= mt_rand(0, 9); // Agrega un dígito aleatorio al código
    }
    return $codigoAleatorio;
  }
  public function destino(Request $request, $lang)
  {
    $tagsId = $request->input('tags');
    $source = $request->input('source');
    $tipoCategoria = null;
    if ($source == 'destino') {
      $tipoCategoria = "Destino";
    } else {
      $tipoCategoria = "Paquetes";
    }

    //en categoria tenemos tipocategoria en donde tiene que ser igual al source

    $destino = Category::where('status', '=', 1)->where('visible', '=', 1)->where('category_type', '=', $source)->where('langs', '=', $lang)->with('productos')->paginate(6);
    $tours =  Products::where('status', '=', 1)->where('visible', '=', 1)->where('langs', '=', $lang)->get();
    $tags = Tag::where('status', '=', 1)->where('visible', '=', 1)->where('langs', '=', $lang)->get();

    if ($tagsId !== null) {
      $tagsIdNumeric = intval($tagsId);


      // $destino = Tag::where('id',$tagsId)->with('productos')->with('productos.categoria')->get();
      // $destino= Category::where('status', '=', 1)->where('visible', '=', 1)->with('productos')->with('productos.tags')->where('id',$tagsId)->paginate(6);
      // $destino = Category::select()
      // ->join('tags_xproducts', 'tags.id' ,  'tags_xproducts.tag_id' )
      // ->with(['productos.tags' => function ($query) use ($tagsIdNumeric) {
      //     $query->where('tag_id', $tagsIdNumeric);
      //   }])

      //   ->get();

      $destino = Category::select([
        DB::raw('DISTINCT(categories.id)'),
        'categories.*',

      ])
        ->join('products', 'categories.id', '=', 'products.categoria_id')
        ->join('tags_xproducts', 'products.id', '=', 'tags_xproducts.producto_id')
        ->join('tags', 'tags_xproducts.tag_id', '=', 'tags.id')
        ->where('tags.id', $tagsIdNumeric)

        ->paginate(6);




      /* $destino = Tag::select('tags.id', 'tags.name', 'categories.description', 'categories.id AS category_id')
      ->join('tags_xproducts', 'tags.id', '=', 'tags_xproducts.tag_id')
      ->join('products', 'tags_xproducts.producto_id', '=', 'products.id')
      ->join('categories', 'products.categoria_id', '=', 'categories.id')
      ->where('tags.id', $tagsId)
      ->distinct()
      ->get(); */
    }


    $langInfo = $request->attributes->all();

    return view('public.destino', compact('destino', 'tours', 'tags', 'tipoCategoria', 'lang', 'langInfo'));
  }

  public function actividad(Request $request, string $lang,  string $id)
  {
    $destino = null;
    $tours = null;
    $tagsId = $request->input('tags');
    try {


      if ($id == 0) {
        $destino = Category::where("visible", "=", true)->where('status', '=', 1)->where('langs', '=', $lang)->first();
        $tours = Products::where('status', '=', 1)
          ->where('visible', '=', 1)
          ->where('langs', '=', $lang);
        if ($tagsId !== null) {
          $tours = $tours->whereHas('tags', function ($query) use ($tagsId) {
            $query->where('tags.id', $tagsId);
          })
            ->get();

          $destino->name = 'Nuestros Tours';
          $destino->pais =  Tag::find($tagsId)->name;
        } else {
          $tours = $tours->get();
          $destino->name = 'Nuestros Tours';
          $destino->pais =  'Todos';
        }
      } else {

        $destino = Category::find($request->id);
        $tours = Products::where('destacar', '=', 1)->where('status', '=', 1)->where('visible', '=', 1)->where('categoria_id', '=', $id)->where('langs', '=', $lang)->get();
      }
      $langInfo = $request->attributes->all();

      $tags = Tag::where('status', '=', 1)->where('visible', '=', 1)->where('langs', '=', $lang)->get();

      return view('public.actividad', compact('destino', 'lang', "langInfo", 'tours', 'tags'));
    } catch (\Throwable $th) {
      //throw $th;
    }
  }

  public function detalleActividad(Request $request, string $lang, string $id)
  {
    //
    $destinos = Category::all();
    $tagsProducto = Products::with('tags')->find($id);
    $tagsIds = $tagsProducto->tags->pluck('id')->toArray();
    $tagsIdsString = implode(', ', $tagsIds);

    $sql = $sql = "
          SELECT DISTINCT categories.name, categories.*
          FROM tags
          INNER JOIN tags_xproducts ON tags.id = tags_xproducts.tag_id
          INNER JOIN products ON tags_xproducts.producto_id = products.id
          INNER JOIN categories ON products.categoria_id = categories.id
          WHERE tags.id IN ($tagsIdsString)
      ";

    // Ejecutar la consulta SQL y obtener los resultados
    $tagsDestinos = DB::select($sql);

    $langInfo = $request->attributes->all();
    // producto -> categoria -> 
    $tour = Products::with(['galeria' => function ($query) {
      $query->where('type_img', '=', 'portada');
    }])->find($id);

    $entradasOrdenadas = $tour->entradasMulti->sortBy('tipo_entrada_id');
    $tipo_entradas = TipoEntrada::all();

    return view('public.detalleActividad', compact('tour', 'destinos', 'tagsDestinos', 'lang', 'langInfo', 'entradasOrdenadas', 'tipo_entradas'));
  }

  public function blog(Request $request, string $lang)
  {
    //
    $langInfo = $request->attributes->all();
    $blogs = Blog::where('status', '=', 1)->where('visible', '=', 1)->where('langs', '=', $lang)->orderByDesc('created_at')->limit(3)->get();
    $blogsAll = Blog::where('status', '=', 1)->where('visible', '=', 1)->where('langs', '=', $lang)->orderByDesc('created_at')->paginate(6);


    return view('public.blog', compact('blogs', 'blogsAll', 'lang', 'langInfo'));
  }

  public function post(Request $request, string $lang, string $id)
  {
    $blog = Blog::find($id);
    $blogsAll = Blog::all();



    // Obtener los blogs paginados ordenados por created_at
    $blogsPaginated = Blog::orderByDesc('created_at')->paginate(1);

    // Encontrar la posición del blog en el conjunto de resultados paginados
    $position = $this->getPosition($blogsPaginated, $id);


    return view('public.post', compact('blog', 'blogsAll', 'id', 'position', 'lang'));
  }

  function getPosition($paginator, $id)
  {
    // Obtener el índice del primer elemento en la página actual
    $firstItemIndex = $paginator->firstItem() - 1;

    // Buscar la posición del elemento en el conjunto de resultados paginados
    $items = $paginator->items();
    $position = array_search($id, array_column($items, 'id'));

    // Si no se encuentra el ID en la matriz, devolver -1
    if ($position === false) {
      return -1;
    }

    // Ajustar la posición para tener en cuenta la paginación
    $position += $firstItemIndex;

    return $position;
  }



  public function ayuda()
  {
    $faqs = Faqs::all();
    return view('public.ayuda', compact('faqs'));
  }

  public function agradecimiento()
  {
    //
    return view('public.checkout_agradecimiento');
  }

  public function micuenta()
  {
    //
    return view('public.dashboard');
  }


  public function pedidos()
  {
    //
    return view('public.dashboard_order');
  }


  public function direccion()
  {
    //
    return view('public.dashboard_direccion');
  }

  public function error()
  {
    //
    return view('public.404');
  }

  public function producto(string $id)
  {

    $productos = Products::where('id', '=', $id)->get();
    $especificaciones = Specifications::where('product_id', '=', $id)->get();
    $productosConGalerias = DB::select("
            SELECT products.*, galeries.*
            FROM products
            INNER JOIN galeries ON products.id = galeries.product_id
            WHERE products.id = :productId limit 5 
        ", ['productId' => $id]);


    $IdProductosComplementarios = $productos->toArray();
    $IdProductosComplementarios = $IdProductosComplementarios[0]['categoria_id'];

    $ProdComplementarios = Products::where('categoria_id', '=', $IdProductosComplementarios)->get();
    $atributos = Attributes::where("status", "=", true)->get();
    $valorAtributo = AttributesValues::where("status", "=", true)->get();
    $url_env = $_ENV['APP_URL'];



    return view('public.product', compact('productos', 'atributos', 'valorAtributo', 'ProdComplementarios', 'productosConGalerias', 'especificaciones', 'url_env'));
  }

  //  --------------------------------------------
  /**
   * Show the form for creating a new resource.
   */
  public function create()
  {
    //
  }

  /**
   * Store a newly created resource in storage.
   */
  public function store(StoreIndexRequest $request)
  {
    //
  }

  /**
   * Display the specified resource.
   */
  public function show(Index $index)
  {
    //
  }

  /**
   * Show the form for editing the specified resource.
   */
  public function edit(Index $index)
  {
    //
  }

  /**
   * Update the specified resource in storage.
   */
  public function update(UpdateIndexRequest $request, Index $index)
  {
    //
  }

  /**
   * Remove the specified resource from storage.
   */
  public function destroy(Index $index)
  {
    //
  }

  /**
   * Save contact from blade
   */
  public function guardarContacto(Request $request)
  {
    //Del modelo
    //'full_name', 'email', 'phone', 'message', 'status', 'is_read'
    $data = $request->all();

    $data['full_name'] = $request->name . ' ' . $request->apellido;

    $reglasValidacion = [
      'name' => 'required|string|max:255',
      'email' => 'required|email|max:255',
      'phone' => 'required|integer|max:99999999999',
    ];
    $mensajes = [
      'name.required' => 'El campo nombre es obligatorio.',
      'email.required' => 'El campo correo electrónico es obligatorio.',
      'email.email' => 'El formato del correo electrónico no es válido.',
      'email.max' => 'El campo correo electrónico no puede tener más de :max caracteres.',
      'phone.required' => 'El campo teléfono es obligatorio.',
      'phone.integer' => 'El campo teléfono debe ser un número entero.',
    ];
    $request->validate($reglasValidacion, $mensajes);
    $formlanding = Message::create($data);

    $this->envioCorreo($formlanding);
    $this->envioCorreoAdmin($formlanding);
    // return redirect()->route('landingaplicativos', $formlanding)->with('mensaje','Mensaje enviado exitoso')->with('name', $request->nombre);
    return response()->json(['message' => 'Mensaje enviado con exito']);
  }

  private function envioCorreo($data)
  {

    $name = $data['full_name'];
    $mail = EmailConfig::config();
    try {
      $mail->addAddress($data['email']); // correo del administrador 
      $mail->Body = '<html lang="en">
      <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Fit2finance</title>
        <link rel="preconnect" href="https://fonts.googleapis.com" />
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
        <link
          href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap"
          rel="stylesheet"
        />
        <style>
          * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
          }
        </style>
      </head>
      <body>
        <main>
          <table
            style="
              width: 600px;
              margin: 0 auto;
              text-align: center;
              background-image: url(https://peruandestop.com/public/images/peruandesmail/Fondo_600px.png);
              background-repeat: no-repeat;
              background-position: center;
              background-size: cover;
            "
          >
            <thead>
              <tr>
                <th style="text-align: center; padding-top: 50px">
                  <img src="https://peruandestop.com/public/images/peruandesmail/logo.png" alt="Peruandes" />
                </th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>
                  <p
                    style="
                      color: #ffffff;
                      font-weight: 500;
                      font-size: 18px;
                      text-align: center;
                      width: 500px;
                      margin: 0 auto;
                      padding: 20px 0;
                      font-family: Montserrat, sans-serif;
                    "
                  ></p>
                </td>
              </tr>
              <tr>
                <td>
                  <p
                    style="
                      color: #e38533;
                      font-size: 40px;
                      line-height: 20px;
                      font-family: Montserrat, sans-serif;
                    "
                  ></p>
                </td>
              </tr>
              <tr>
                <td>
                  <p
                    style="
                      font-size: 40px;
                      line-height: 70px;
                      font-family: Montserrat, sans-serif;
                      font-weight: bold;
                    "
                  >
                    <span style="color: #ffffff">¡Gracias por escribirnos!</span>
                  </p>
                </td>
              </tr>
              <tr>
                <td>
                  <p
                    style="
                      color: #ffffff;
                      font-weight: 500;
                      font-size: 18px;
                      text-align: center;
                      width: 500px;
                      margin: 0 auto;
                      padding: 20px 0;
                      font-family: Montserrat, sans-serif;
                    "
                  >
                    !Hola '.$name.'
                  </p>
                  <p
                    style="
                      color: #ffffff;
                      font-weight: 500;
                      font-size: 18px;
                      text-align: center;
                      width: 500px;
                      margin: 0 auto;
                      padding: 20px 0;
                      font-family: Montserrat, sans-serif;
                    "
                  >
                    En breve estaremos comunicandonos contigo.
                  </p>
                </td>
              </tr>
              <tr>
                <td>
                  <a
                    target="_blank"
                    href="https://peruandestop.com/public/"
                    style="
                      text-decoration: none;
                      background-color: #fffffff3;
                      color: rgb(101, 110, 226);
                      padding: 12px 16px;
                      display: inline-flex;
                      justify-content: center;
                      align-items: center;
                      gap: 10px;
                      font-weight: 600;
                      font-family: Montserrat, sans-serif;
                      font-size: 16px;
                      border-radius: 10px;
                    "
                  >
                    <span>Visita nuestra Web</span>
                  </a>
                </td>
              </tr>
              <tr style="height: 300px">
                <td style="text-align: center">
                  <img src="https://peruandestop.com/public/images/peruandesmail/Face.svg" alt="" srcset="" />
                  <img src="https://peruandestop.com/public/images/peruandesmail/Insta.svg" alt="" srcset="" />
                  <img src="https://peruandestop.com/public/images/peruandesmail/X.svg" alt="" srcset="" />
                  <img src="https://peruandestop.com/public/images/peruandesmail/Linkedin(2).svg" alt="" srcset="" />
                  <img src="https://peruandestop.com/public/images/peruandesmail/Youtube.svg" alt="" srcset="" />
                </td>
              </tr>
            </tbody>
          </table>
        </main>
      </body>
    </html>
    ';
      $mail->isHTML(true);
      $mail->send();
    } catch (\Throwable $th) {
      //throw $th;
    }
  }
  private function envioCorreoAdmin($data)
  {
    $name = $data['nombre'];
    $mail = EmailConfig::config();
    $DataGeneral = General::find(1);

    try {
      $mail->addAddress('agencias@peruandestop.com'); // correo del administrador 
      $mail->Body = "Buenas tardes un cliente se ha puesto en contacto via correo ";
      $mail->isHTML(true);
      $mail->send();
    } catch (\Throwable $th) {
      //throw $th;
    }

  }

  public function guardarUserNewsLetter(Request $request)
  {

    NewsletterSubscriber::create($request->all());
    $data = $request->all();
    $data['nombre'] = '';
    $this->envioCorreo($data);
    return response()->json(['message' => 'Newsletter guardado ']);
  }

  public function guardarAgencia(Request $request)
  {

    $data = $request->all();
    $attachmentPath = null;
    try {


      $rules = [
        "nombre_agencia" => 'required',
        "ruc" => 'required',
        "no_registro" => 'required',
        "direccion" => 'required',
        "telefono" => 'required',
        "email" => 'required',
        "pagina_web" => 'required',
        "nombre_representante" => 'required',
        "identificacion_representante" => 'required',
        "telefono_representante" => 'required',
        "email_representante" => 'required',
        "tipo_agencia" => 'required',
        "url_declaracion" => 'required'
      ];

      $messages = [
        'nombre_agencia.required' => 'El campo Nombre de la Agencia de Viajes es obligatorio.',
        "ruc.required" => 'El campo Numero de identificacion fiscal es obligatorio.',
        "no_registro.required" => 'El campo No. de Registro de la Agencia es obligatorio.',
        "direccion.required" => 'El campo Dirección legal es obligatorio.',
        "telefono.required" => 'El campo Número de teléfono es obligatorio.',
        "email.required" => 'El campo NE-mail es obligatorio.',
        "pagina_web.required" => 'El campo Página Web es obligatorio.',
        "nombre_representante.required" => 'El campo Nombre del Representante Legal es obligatorio.',
        "identificacion_representante.required" => 'El campo Identificación del Representante Legal es obligatorio.',
        "telefono_representante.required" => 'El campo Teléfono del Representante Legal es obligatorio.',
        "email_representante.required" => 'El campo Email del Representante Legal es obligatorio.',
        "tipo_agencia.required" => 'El campo Tipo de Agencia obligatorio.',
        "url_declaracion.required" => 'El Documento de la declaracion jurada es obligatorio.'
        // Agrega más mensajes personalizados según sea necesario
      ];

      $request->validate($rules, $messages);


      if (isset($request['url_declaracion'])) {
        foreach ($request['url_declaracion'] as $file) {
          # code...

          // data:image/png; base64,code
          [$first, $code] = explode(';base64,', $file);
          $imageData = base64_decode($code);
          $routeImg = 'storage/docs/declaracion_jurada/';

          $ext = ExtendFile::getExtention(str_replace("data:", '', $first));



          $nombreImagen = Str::random(10) . '.' . $ext;

          // Verificar si la ruta no existe y crearla si es necesario
          if (!file_exists($routeImg)) {
            mkdir($routeImg, 0777, true); // Se crea la ruta con permisos de lectura, escritura y ejecución
          }

          // Guardar los datos binarios en un archivo
          file_put_contents($routeImg . $nombreImagen, $imageData);

          $data['url_declaracion'] =  $routeImg . $nombreImagen;
          $attachmentPath = $routeImg . $nombreImagen;
        }
      }

      Agencias::create($data);

      $this->enviarMailFormularioAgencia($data, $attachmentPath);



      return response()->json(['message' => 'Agencia Guardada']);
    } catch (ValidationException $e) {
      //throw $th;
      // return response()->json(['message'=> 'Estamos trabajando en una solucion'], 400);
      return response()->json([
        'status' => 'error',
        'message' => 'Validation Error',
        'errors' => $e->errors()
      ], 400);
    }
  }
  private function enviarMailFormularioAgencia($data, $attachtment)
  {
    $name = $data['nombre_agencia'];
    $ruc  = $data['ruc'];
    $no_registro = $data['no_registro'];
    $direccion = $data['direccion'];
    $telefono = $data['telefono'];
    $email = $data['email'];
    $pagina_web = $data['pagina_web'];
    $nombre_representante = $data['nombre_representante'];
    $identificacion_representante = $data['identificacion_representante'];
    $telefono_representante = $data['telefono_representante'];
    $email_representante = $data['email_representante'];
    $tipo_agencia = $data['tipo_agencia'];

    $mail = EmailConfig::config();
    try {
      $mail->addAddress($data['email']); // correo del administrador 
      $mail->Body = "Buenas tardes un cliente se ha puesto en contacto via correo <br>
      RUC: $ruc <br>
      N REGISTRO : $no_registro <br>
      DIRECCION: $direccion <br>
      TELEFONO: $telefono <br>
      EMAIL: $email <br>
      PAGINA WEB: $pagina_web <br>
      NOMBRE REPRESENTANTE: $nombre_representante <br>
      N IDENTIFICACION REPRESENTANTE: $identificacion_representante <br>
      N TELEFONO REPRESENTANTE: $telefono_representante <br>
      EMAIL REPRESENTANTE: $email_representante <br>
      TIPO AGENCIA REPRESENTANTE: $tipo_agencia <br>
      ";
      $mail->isHTML(true);
      if (file_exists($attachtment)) {
        $mail->addAttachment($attachtment);
      }
      $mail->send();
    } catch (\Throwable $th) {
      //throw $th;
    }
  }

  public function buscartour(string $lang, Request $request)
  {

    

    $slider = Slider::where('status', '=', 1)->where('visible', '=', 1)->get();
    $category = Category::where('status', '=', 1)->where('destacar', '=', 1)->get();

    $sliders = Slider::where('status', '=', 1)->where('visible', '=', 1)->get();
    $promp = $request->query('serch');
    $langInfo = $request->attributes->all();
    $tags = Tag::where('status', '=', 1)->where('visible', '=', 1)->where('langs', '=', $lang)->get();



    $productos  = Products::where('producto', 'like', "%$promp%")->where('langs', '=', $lang)->get();
    

    // return response()->json(['message' => 'llegamos a buscartour', 'data' => $ToursSearch]);
    return view('public.buscqueda', compact('productos', 'langInfo', 'sliders', 'tags', 'lang'));
  }
  public function politicaprivacidad(string $lang){
    $politicas = politycsCondition::where('langs', '=', $lang)->get();
    return view('public.politicaPriv', compact('politicas', 'lang'));
  }
  public function term_condiciones(string $lang){
    $terms = termsCondition::where('langs', '=', $lang)->get();
    return view('public.termsCondiciones', compact('terms', 'lang'));
  }

  public function librodereclamaciones(string $lang)
  {
    $departamentofiltro = DB::select('select * from departments where active = ? order by 2', [1]);
    
    return view('public.librodereclamaciones', compact('departamentofiltro', 'lang'));
  }
  public function esnapolicies(string $lang)
  {
    
    if($lang === 'es'){
      return view('public.esnnacode', compact( 'lang'));
    }elseif($lang === 'en'){
      return view('public.esnnacodeEn', compact( 'lang'));
    }
    
    
    
  }

  public function obtenerProvincia($departmentId)
  {
      $provinces = DB::select('select * from provinces where active = ? and department_id = ? order by description', [1, $departmentId]);
      return response()->json($provinces);
  }

  public function obtenerDistritos($provinceId)
  {
      $distritos = DB::select('select * from districts where active = ? and province_id = ? order by description', [1, $provinceId]);
      return response()->json($distritos);
  }

  public function nosotros(Request $request, string $lang)
  {
    $langInfo = $request->attributes->all();
    return view('public.nosotros', compact('lang', 'langInfo'));
  }
  
}
