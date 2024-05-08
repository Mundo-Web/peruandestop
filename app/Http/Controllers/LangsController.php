<?php

namespace App\Http\Controllers;

use App\Models\Langs;
use Illuminate\Http\Request;

class LangsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $langs = Langs::all();
        return view('pages.langs.index', compact('langs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.langs.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Langs::create($request->all());
        return redirect()->route('langs.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Langs $langs)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $langs)
    {
        
        $lang = Langs::find($langs);
        return view('pages.langs.edit', compact('lang'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $langs)
    {
        
        $langs =  Langs::find($langs);
        $langs->update($request->all());
        return redirect()->route('langs.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Langs $langs)
    {
        //
    }
    public function updateVisible(){

    }
    public function borrar(Request $request){
        $langs =  Langs::find($request->id );
        $langs->delete();
        return response()->json(['message' => 'Registro eliminado con exito']);

    }
}
