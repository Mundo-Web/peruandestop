<?php

namespace App\Http\Controllers;

use App\Models\Index;
use App\Models\politycsCondition;
use App\Models\termsCondition;
use Illuminate\Http\Request;

class LegalesController extends Controller
{
    //
    public function verTerminosCondiciones()
    {
        
    }
    public function verPoliticasPrivacidad()
    {
        $politicas = politycsCondition::all();
        return view('pages.politicas_privacidad.index', compact('politicas'));
    }

    public function terminosycondicionesUpdate(Request $request, String $id)
    {
       
    }
    public function politicasPrivacidadUpdate(Request $request, String $id)
    {
        try {
            
            politycsCondition::find($id)->update($request->all());
            return redirect()->route('verPoliticasPrivacidad')->with('success', 'Publicación creado exitosamente.');
        } catch (\Throwable $th) {
            //throw $th;
            
        }
    }
}
