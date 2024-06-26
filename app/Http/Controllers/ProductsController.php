<?php

namespace App\Http\Controllers;

use App\Models\Attributes;
use App\Models\AttributesValues;
use App\Models\Category;
use App\Models\EntradasMultiples;
use App\Models\Galerie;
use App\Models\Langs;
use App\Models\Products;
use App\Models\Specifications;
use App\Models\Tag;
use App\Models\TipoEntrada;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\DB;
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\File;
use SoDe\Extend\File as ExtendFile;

class ProductsController extends Controller
{
  /**
   * Display a listing of the resource.
   */
  public function index()
  {
    $products =  Products::where("status", "=", true)->get();

    return view('pages.products.index', compact('products'));
  }

  /**
   * Show the form for creating a new resource.
   */
  public function create()
  {
    $atributos = Attributes::where("status", "=", true)->get();
    $valorAtributo = AttributesValues::where("status", "=", true)->get();
    $categoria = Category::all();
    $tags = Tag::where("status", "=", true)->get();
    $langs = Langs::all();
    $tipoEntrada = TipoEntrada::all();
    return view('pages.products.create', compact('atributos', 'valorAtributo', 'categoria', 'tags', 'langs', 'tipoEntrada'));
  }

  public function saveImg($file, $route, $nombreImagen)
  {
    $manager = new ImageManager(new Driver());
    $img =  $manager->read($file);

    $img->coverDown(1200, 800);
    if (!file_exists($route)) {
      mkdir($route, 0777, true); // Se crea la ruta con permisos de lectura, escritura y ejecución
    }

    $img->save($route . $nombreImagen);
  }

  /**
   * Store a newly created resource in storage.
   */
  public function store(Request $request)
  {
    $especificaciones = [];
    $entradaMultiple = [];
    $data = $request->all();
    $atributos = null;
    $tagsSeleccionados = $request->input('tags_id');
    // Hacer algo con los valores seleccionados, como almacenarlos en la base de datos
    // Por ejemplo:

    // $valorprecio = $request->input('precio') - 0.1;


    $request->validate([
      'producto' => 'required',
      'precio' => 'min:0|required|numeric',

    ]);

    try {
      if ($request->hasFile("imagen")) {
        $file = $request->file('imagen');
        $routeImg = 'storage/images/imagen/';
        $nombreImagen = Str::random(10) . '_' . $file->getClientOriginalName();

        $this->saveImg($file, $routeImg, $nombreImagen);

        $data['imagen'] = $routeImg . $nombreImagen;
        // $AboutUs->name_image = $nombreImagen;
      }
      foreach ($data as $key => $value) {

        if (strstr($key, ':')) {
          // Separa el nombre del atributo y su valor
          $atributos = $this->stringToObject($key, $atributos);
          unset($request[$key]);
        } elseif (strstr($key, '-')) {

          //strpos primera ocurrencia que enuentre
          if (strpos($key, 'tittle-') === 0 || strpos($key, 'title-') === 0) {
            $num = substr($key, strrpos($key, '-') + 1); // Obtener el número de la especificación
            $especificaciones[$num]['tittle'] = $value; // Agregar el título al array asociativo
          } elseif (strpos($key, 'specifications-') === 0) {
            $num = substr($key, strrpos($key, '-') + 1); // Obtener el número de la especificación
            $especificaciones[$num]['specifications'] = $value; // Agregar las especificaciones al array asociativo
          }

          if(strpos($key, 'tipo_entrada_id-') === 0){
            $num = substr($key, strrpos($key, '-') + 1);
            $entradaMultiple[$num]['tipo_entrada_id'] = $value; 
          }elseif(strpos($key, 'entrada_multiple-') === 0){
            $num = substr($key, strrpos($key, '-') + 1);
            $entradaMultiple[$num]['entrada_multiple'] = $value; 

          }
        }
      }

      $jsonAtributos = json_encode($atributos);


      if (array_key_exists('destacar', $data)) {
        if (strtolower($data['destacar']) == 'on') $data['destacar'] = 1;
      }
      if (array_key_exists('recomendar', $data)) {
        if (strtolower($data['recomendar']) == 'on') $data['recomendar'] = 1;
      }


      $data['atributes'] = $jsonAtributos;
      $cleanedData = Arr::where($data, function ($value, $key) {
        return !is_null($value);
      });

      $producto = Products::create($cleanedData);
      $this->GuardarEspecificaciones($producto->id, $especificaciones);

      $this->guardarEntradaMultiple($producto->id,$entradaMultiple);

      if (count($tagsSeleccionados) !== 0) {
        $this->TagsXProducts($producto->id, $tagsSeleccionados);
      }
      if (isset($data['files'])) {

        foreach ($data['files'] as $file) {
          # code...

          // data:image/png; base64,code
          [$first, $code] = explode(';base64,', $file);
          $imageData = base64_decode($code);
          $routeImg = 'storage/images/imagen/';

          $ext = ExtendFile::getExtention(str_replace("data:", '', $first));



          $nombreImagen = Str::random(10) . '.' . $ext;

          // Verificar si la ruta no existe y crearla si es necesario
          if (!file_exists($routeImg)) {
            mkdir($routeImg, 0777, true); // Se crea la ruta con permisos de lectura, escritura y ejecución
          }

          // Guardar los datos binarios en un archivo
          file_put_contents($routeImg . $nombreImagen, $imageData);
          $dataGalerie['imagen'] = $routeImg . $nombreImagen;
          $dataGalerie['product_id'] = $producto->id;
          $dataGalerie['type_img'] = 'portada';
          Galerie::create($dataGalerie);
        }
      }
      if (isset($data['filesGallery'])) {

        foreach ($data['filesGallery'] as $file) {
          # code...

          // data:image/png; base64,code
          [$first, $code] = explode(';base64,', $file);
          $imageData = base64_decode($code);
          $routeImg = 'storage/images/gallery/';

          $ext = ExtendFile::getExtention(str_replace("data:", '', $first));



          $nombreImagen = Str::random(10) . '.' . $ext;

          // Verificar si la ruta no existe y crearla si es necesario
          if (!file_exists($routeImg)) {
            mkdir($routeImg, 0777, true); // Se crea la ruta con permisos de lectura, escritura y ejecución
          }

          // Guardar los datos binarios en un archivo
          file_put_contents($routeImg . $nombreImagen, $imageData);
          $dataGalerie['imagen'] = $routeImg . $nombreImagen;
          $dataGalerie['product_id'] = $producto->id;
          $dataGalerie['type_img'] = 'gall';
          Galerie::create($dataGalerie);
        }
      }

      return redirect()->route('activity.index')->with('success', 'Publicación creado exitosamente.');
    } catch (\Throwable $th) {
      //throw $th;
    }
  }
  private function TagsXProducts($id, $nTags)
  {
    foreach ($nTags as $key => $value) {
      DB::insert('insert into tags_xproducts (producto_id, tag_id) values (?, ?)', [$id, $value]);
    }
  }
  private function GuardarEspecificaciones($id, $especificaciones)
  {

    foreach ($especificaciones as $value) {
      $value['product_id'] = $id;
      Specifications::create($value);
    }
  }
  private function guardarEntradaMultiple ($id , $values) {
    foreach ($values as $key => $value) {
      EntradasMultiples::create([
        'description' =>$value['entrada_multiple'], 
        'tipo_entrada_id' =>$value['tipo_entrada_id']  , 
        'producto_id' => $id 
      ]);
    }

  }

  private function stringToObject($key, $atributos)
  {

    $parts = explode(':', $key);
    $nombre = strtolower($parts[0]); // Nombre del atributo
    $valor = strtolower($parts[1]); // Valor del atributo en minúsculas

    // Verifica si el atributo ya existe en el array
    if (isset($atributos[$nombre])) {
      // Si el atributo ya existe, agrega el nuevo valor a su lista
      $atributos[$nombre][] = $valor;
    } else {
      // Si el atributo no existe, crea una nueva lista con el valor
      $atributos[$nombre] = [$valor];
    }
    return $atributos;
  }

  /**
   * Display the specified resource.
   */
  public function show(Products $products)
  {
    //
  }

  /**
   * Show the form for editing the specified resource.
   */
  public function edit(string $id)
  {
    $product =  Products::with('tags')->find($id);
    $atributos = Attributes::where("status", "=", true)->get();
    $valorAtributo = AttributesValues::where("status", "=", true)->get();
    $allTags = Tag::all();

    $langs = Langs::all();
    $categoria = Category::all();
    $tipoEntrada = TipoEntrada::all();



    return view('pages.products.edit', compact('langs', 'product', 'atributos', 'valorAtributo', 'allTags', 'categoria' , 'tipoEntrada'));
  }
  private function actEntradaMultiple ($id , $values) {
    
    foreach ($values as $key => $entrada) {

      $registroDB = EntradasMultiples::find($key);
      if($entrada['entrada_multiple'] == null ){
        $registroDB->delete();
      }
      elseif ($registroDB) {
        $registroDB->description = $entrada['entrada_multiple'];
        $registroDB->tipo_entrada_id = $entrada['tipo_entrada_id'];
        $registroDB->save();
      }else{
        EntradasMultiples::create([
          'description' =>$entrada['entrada_multiple'], 
          'tipo_entrada_id' =>$entrada['tipo_entrada_id']  , 
          'producto_id' => $id 
        ]);
      }
    }
   

  }

  /**
   * Update the specified resource in storage.
   */
  public function update(Request $request, string $id)
  {
    $especificaciones = [];
    $entradaMultiple = [];
    $product = Products::find($id);
    $tagsSeleccionados = $request->input('tags_id');
    $data = $request->all();
    $atributos = null;
    $request->validate([
      'producto' => 'required',
    ]);

    if ($request->hasFile("imagen")) {
      $file = $request->file('imagen');
      $routeImg = 'storage/images/imagen/';
      $nombreImagen = Str::random(10) . '_' . $file->getClientOriginalName();

      $this->saveImg($file, $routeImg, $nombreImagen);

      $data['imagen'] = $routeImg . $nombreImagen;
      // $AboutUs->name_image = $nombreImagen;
    }

    foreach ($request->all() as $key => $value) {

      

      if (strstr($key, ':')) {
        // Separa el nombre del atributo y su valor
        $atributos = $this->stringToObject($key, $atributos);
        unset($request[$key]);
      } elseif (strstr($key, '-')) {

        //strpos primera ocurrencia que enuentre
        if (strpos($key, 'tittle-') === 0 || strpos($key, 'title-') === 0) {
          $num = substr($key, strrpos($key, '-') + 1); // Obtener el número de la especificación
          $especificaciones[$num]['tittle'] = $value; // Agregar el título al array asociativo
        } elseif (strpos($key, 'specifications-') === 0) {
          $num = substr($key, strrpos($key, '-') + 1); // Obtener el número de la especificación
          $especificaciones[$num]['specifications'] = $value; // Agregar las especificaciones al array asociativo
        }

        if(strpos($key, 'tipo_entrada_id-') === 0){
          $num = substr($key, strrpos($key, '-') + 1);
          $entradaMultiple[$num]['tipo_entrada_id'] = $value; 
        }elseif(strpos($key, 'entrada_multiple-') === 0){
          $num = substr($key, strrpos($key, '-') + 1);
          $entradaMultiple[$num]['entrada_multiple'] = $value; 

        }
      }
    }
    if (isset($data['files'])) {

      foreach ($data['files'] as $file) {
        # code...

        // data:image/png; base64,code
        [$first, $code] = explode(';base64,', $file);
        $imageData = base64_decode($code);
        $routeImg = 'storage/images/imagen/';

        $ext = ExtendFile::getExtention(str_replace("data:", '', $first));



        $nombreImagen = Str::random(10) . '.' . $ext;

        // Verificar si la ruta no existe y crearla si es necesario
        if (!file_exists($routeImg)) {
          mkdir($routeImg, 0777, true); // Se crea la ruta con permisos de lectura, escritura y ejecución
        }

        // Guardar los datos binarios en un archivo
        file_put_contents($routeImg . $nombreImagen, $imageData);
        $dataGalerie['imagen'] = $routeImg . $nombreImagen;
        $dataGalerie['product_id'] = $id;
        $dataGalerie['type_img'] = 'portada';
        Galerie::create($dataGalerie);
      }
    }
    if (isset($data['filesGallery'])) {

      foreach ($data['filesGallery'] as $file) {
        # code...

        // data:image/png; base64,code
        [$first, $code] = explode(';base64,', $file);
        $imageData = base64_decode($code);
        $routeImg = 'storage/images/gallery/';

        $ext = ExtendFile::getExtention(str_replace("data:", '', $first));



        $nombreImagen = Str::random(10) . '.' . $ext;

        // Verificar si la ruta no existe y crearla si es necesario
        if (!file_exists($routeImg)) {
          mkdir($routeImg, 0777, true); // Se crea la ruta con permisos de lectura, escritura y ejecución
        }

        // Guardar los datos binarios en un archivo
        file_put_contents($routeImg . $nombreImagen, $imageData);
        $dataGalerie['imagen'] = $routeImg . $nombreImagen;
        $dataGalerie['product_id'] = $id;
        $dataGalerie['type_img'] = 'gall';
        Galerie::create($dataGalerie);
      }
    }
    $this->actualizarSpecificaciones($id,$especificaciones);

    
    $this->actEntradaMultiple($id, $entradaMultiple); 


    $jsonAtributos = json_encode($atributos);

    if (array_key_exists('destacar', $data)) {
      if (strtolower($data['destacar']) == 'on') $data['destacar'] = 1;
    }
    if (array_key_exists('recomendar', $data)) {
      if (strtolower($data['recomendar']) == 'on') $data['recomendar'] = 1;
    }



    $data['atributes'] = $jsonAtributos;
    $cleanedData = Arr::where($data, function ($value, $key) {
      return !is_null($value);
    });
    $product->update($cleanedData);
    DB::delete('delete from tags_xproducts where producto_id = ?', [$id]);

    $this->TagsXProducts($id, $tagsSeleccionados);


    return redirect()->route('activity.index')->with('success', 'Producto editado exitosamente.');
  }
  public function actualizarSpecificaciones($id,$especificaciones)
  {

    foreach ($especificaciones as $key => $registro) {

      $registroDB = Specifications::find($key);
      if($registro['specifications'] == null ){
        $registroDB->delete();
      }
      elseif ($registroDB) {
        $registroDB->tittle = $registro['tittle'];
        $registroDB->specifications = $registro['specifications'];
        $registroDB->save();
      }else{
        Specifications::create([
          'tittle' =>$registro['tittle'], 
          'specifications' =>$registro['specifications']  , 
          'product_id' => $id 
        ]);
      }
    }

   
  }

  /**
   * Remove the specified resource from storage.
   */
  public function borrar(Request $request)
  {
    //softdelete
    DB::delete('delete from galeries where product_id = ?', [$request->id]);
    DB::delete('delete from entradas_multiples where producto_id = ?', [$request->id]);
    DB::delete('delete from specifications where product_id = ?', [$request->id]);
    

    $product = Products::find($request->id);
    $product->status = 0;
    $product->delete();
  }

  public function updateVisible(Request $request)
  {
    $id = $request->id;
    $field = $request->field;
    $status = $request->status;

    // Verificar si el producto existe
    $product = Products::find($id);

    if (!$product) {
      return response()->json(['message' => 'Producto no encontrado'], 404);
    }

    // Actualizar el campo dinámicamente
    $product->update([
      $field => $status
    ]);
    return response()->json(['message' => 'registro actualizado']);
  }
  public function borrarimg(Request $request){
    try {
      //code...
      $imagenGaleria = Galerie::find($request->id);
      $rutaCompleta  = $imagenGaleria->imagen;
      if (file_exists($rutaCompleta)) {
        // Intentar eliminar el archivo
        if (unlink($rutaCompleta)) {
            // Archivo eliminado con éxito
           
        } 
      }
      $imagenGaleria->delete();
      return response()->json(['message'=>'imagen eliminada con exito ']);
    } catch (\Throwable $th) {
      //throw $th;
      return response()->json(['message'=>'no se ha podido eliminar la imagen '], 400);

    }
   
    
  }
}
