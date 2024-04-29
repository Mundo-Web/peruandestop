<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Http\Requests\StoreCategoryRequest;
use App\Http\Requests\UpdateCategoryRequest;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\File;
use Intervention\Image\Drivers\Gd\Driver;
use Intervention\Image\ImageManager;
use Illuminate\Support\Str;



class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $category = Category::where("status", "=", true)->orderByDesc('created_at')->get();
       
        return view('pages.categories.index', compact('category'));
        
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.categories.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $category = new Category(); 

        if ($request->hasFile("imagen")) {

            $manager = new ImageManager(new Driver());

            $nombreImagen = Str::random(10) . '_' . $request->file('imagen')->getClientOriginalName();

            $img =  $manager->read($request->file('imagen'));

            //adaptamos el tamaño de la imagen
            $img->coverDown(669, 446);

            $ruta = 'storage/images/categories/';

            if (!file_exists($ruta)) {
                mkdir($ruta, 0777, true); // Se crea la ruta con permisos de lectura, escritura y ejecución
            }
            
            $img->save($ruta.$nombreImagen);

            $category ->url_image = $ruta;
            $category ->name_image = $nombreImagen;
        }

        $slug = strtolower(str_replace(' ', '-', $request->name));

        if (Category::where('slug', $slug)->exists()) {
            // Si el slug existe, agregar un número aleatorio al final
            $slug .= '-' . rand(1, 1000); // Puedes ajustar el rango según tu necesidad
        }

        
        $category->name = $request->name;
        $category->pais = $request->pais;
        $category->description = $request->description;
        $category->color = $request->color;
        $category->slug = $slug;
        $category->status = 1;
        $category->visible = 1;

        $category->save();
       
        return redirect()->route('destino.index')->with('success', 'Destino creado');
    }

    /**
     * Display the specified resource.
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Category $category, $id)
    {
        $category = Category::findOrfail($id);

        return view('pages.categories.edit', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $category = Category::findOrfail($id); 

        if ($request->hasFile("imagen")) {

            $manager = new ImageManager(new Driver());


            $ruta = storage_path() . '/app/public/images/categories/' . $category->name_image;

            // dd($ruta);
            if (File::exists($ruta)) {
                File::delete($ruta);
            }

            $rutanueva = 'storage/images/categories/';
            $nombreImagen = Str::random(10) . '_' . $request->file('imagen')->getClientOriginalName();

            $img =  $manager->read($request->file('imagen'));
            $img->coverDown(669, 446);

            
            if (!file_exists($rutanueva)) {
                mkdir($rutanueva, 0777, true); // Se crea la ruta con permisos de lectura, escritura y ejecución
            }
            
            $img->save($rutanueva . $nombreImagen);


            $category->url_image = $rutanueva;
            $category->name_image = $nombreImagen;
            
        }

        $slug = strtolower(str_replace(' ', '-', $request->name));

        if (Category::where('slug', $slug)->exists()) {
            // Si el slug existe, agregar un número aleatorio al final
            $slug .= '-' . rand(1, 1000); // Puedes ajustar el rango según tu necesidad
        }


        $category->name = $request->name;
        $category->pais = $request->pais;
        $category->description = $request->description;
        $category->color = $request->color;
        $category->slug = $slug;
        
        $category->save();

        return redirect()->route('destino.index')->with('success', 'Destino Actualizado');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $category)
    {
        //
    }


    public function deleteCategory(Request $request)
    {
        $id = $request->id;
       
        $category = Category::findOrfail($id); 
       
        $category->status = false;
       
        $category->save();

        return response()->json(['message' => 'Destino eliminado']);
    }


    
    public function updateVisible(Request $request)
    {
        // Lógica para manejar la solicitud AJAX
        $cantidad = $this->contarCategoriasDestacadas();


        if($cantidad >= 4 && $request->status == 1){
            return response()->json(['message' => 'Solo puedes destacar 4 Destinos'], 409 );
        }


        $id = $request->id;

        $field = $request->field;

        $status = $request->status;

        // Actualizar el estado de la categoría
        $category = Category::findOrFail($id);

        $category->$field = $status;

        $category->save();
    
        $cantidad = $this->contarCategoriasDestacadas();

        
        return response()->json(['message' => 'Visibilidad del Destino modificada',  'cantidad' => $cantidad]);
    
    }


    public function contarCategoriasDestacadas(){

        $cantidad = Category::where('destacar', '=', 1)->count();
   
        return  $cantidad;
    }


}
