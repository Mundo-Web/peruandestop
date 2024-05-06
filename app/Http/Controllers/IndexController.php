<?php

namespace App\Http\Controllers;

use App\Helpers\EmailConfig;
use App\Http\Requests\StoreIndexRequest;
use App\Http\Requests\UpdateIndexRequest;
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
use App\Models\Specifications;
use App\Models\Tag;
use App\Models\User;
use App\Models\UserDetails;
use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

use function PHPUnit\Framework\isNull;

class IndexController extends Controller
{
  /**
   * Display a listing of the resource.
   */
  public function index()
  {
    // $productos =  Products::where("destacar", "=", true)->where("status","=",true)->get();
    $productos =  Products::with('tags')->activeDestacado()->get();
    //$categorias = Category::all();
    $categorias = Category::where("visible", "=", true)->get();
    $destacados = Products::where('destacar', '=', 1)->where('status', '=', 1)->where('visible', '=', 1)->get();
    $descuentos = Products::where('descuento', '>', 0)->where('status', '=', 1)->where('visible', '=', 1)->get();
    $tags = Tag::where('status', '=', 1)->where('visible', '=', 1)->get();
    $blogs = Blog::where('status', '=', 1)->where('visible', '=', 1)->orderByDesc('created_at')->limit(4)->get();

    $general = General::all();
    $benefit = Strength::where('status', '=', 1)->get();
    $faqs = Faqs::where('status', '=', 1)->where('visible', '=', 1)->get();
    $testimonie = Testimony::where('status', '=', 1)->where('visible', '=', 1)->get();
    $slider = Slider::where('status', '=', 1)->where('visible', '=', 1)->get();
    $category = Category::where('status', '=', 1)->where('destacar', '=', 1)->get();



    return view('public.index', compact('productos', 'destacados', 'descuentos', 'general', 'benefit', 'faqs', 'testimonie', 'slider', 'categorias', 'category', 'tags', 'blogs'));
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

  public function contacto()
  {
    $general = General::all();
    return view('public.contacto', compact('general'));
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
  public function destino(Request $request)
  {
    $tagsId = $request->input('tags');
    $source = $request->input('source');
    $tipoCategoria = null ;
    if($source == 'destino'){
      // dump('viene de paquetes');
      $tipoCategoria = "Destino"; 
    }else{
      $tipoCategoria = "Paquetes"; 
    }

    //en categoria tenemos tipocategoria en donde tiene que ser igual al source

    $destino = Category::where('status', '=', 1)->where('visible', '=', 1)->where('category_type', '=',$source)->with('productos')->paginate(6);
    $tours =  Products::where('status', '=', 1)->where('visible', '=', 1)->get();
    $tags = Tag::where('status', '=', 1)->where('visible', '=', 1)->get();

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



    return view('public.destino', compact('destino', 'tours', 'tags', 'tipoCategoria'));
  }

  public function actividad(string $id)
  {
    //
    $destino = Category::find($id);
    return view('public.actividad', compact('destino'));
  }

  public function detalleActividad(string $id)
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

    // producto -> categoria -> 
    $tour = Products::find($id);
    return view('public.detalleActividad', compact('tour', 'destinos', 'tagsDestinos'));
  }

  public function blog()
  {
    //
    $blogs = Blog::where('status', '=', 1)->where('visible', '=', 1)->orderByDesc('created_at')->limit(3)->get();
    $blogsAll = Blog::where('status', '=', 1)->where('visible', '=', 1)->orderByDesc('created_at')->paginate(6);


    return view('public.blog', compact('blogs', 'blogsAll'));
  }

  public function post(string $id)
  {
    $blog = Blog::find($id);
    $blogsAll = Blog::all();



    // Obtener los blogs paginados ordenados por created_at
    $blogsPaginated = Blog::orderByDesc('created_at')->paginate(1);

    // Encontrar la posición del blog en el conjunto de resultados paginados
    $position = $this->getPosition($blogsPaginated, $id);


    return view('public.post', compact('blog', 'blogsAll', 'id', 'position'));
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
    // return redirect()->route('landingaplicativos', $formlanding)->with('mensaje','Mensaje enviado exitoso')->with('name', $request->nombre);
    return response()->json(['message' => 'Mensaje enviado con exito']);
  }

  private function envioCorreo($data)
  {

    $name = $data['nombre'];
    $mail = EmailConfig::config();
    try {
      $mail->addAddress($data['email']);
      $mail->Body = "Buenas tardes $name su solicitud fue procesada.";
      $mail->isHTML(true);
      $mail->send();
    } catch (\Throwable $th) {
      //throw $th;
    }
  }

  public function guardarUserNewsLetter(Request $request){

    NewsletterSubscriber::create($request->all());
    $data= $request->all(); 
    $data['nombre'] = '';
    $this->envioCorreo($data);
    return response()->json(['message' => 'Newsletter guardado ']);
  }
}
