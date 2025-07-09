<?php

namespace App\Http\Controllers;

use App\Models\Tecnologia;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use PhpParser\Node\Stmt\Return_;

class TecnologiaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {   //recupero todos lo objetos de Tecnologia lo guardo en variable y se lo paso a la vista
        $tecnologias=Tecnologia::all();
        return view("tecnologias.index", compact("tecnologias"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {   //Devuelve la vista formulario de creacion
        return view("tecnologias.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //Valido que nombre tenga contenido
        $datos = $request->validate([
            'nombre'=>'required|string',
        ]);
        //crea la nueva tecnologia, la guarda en db y redirige
        $tecnologia = new Tecnologia();
        $tecnologia->nombre = $datos['nombre'];
        $tecnologia->save();
        return redirect()->route('tecnologias.index')
        ->with('success', 'Tecnología creada correctamente.');        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Tecnologia $tecnologia)
    {   
        //Devuelve la vista de formulario y le envia el objeto
        return view('tecnologias.edit',compact('tecnologia'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Tecnologia $tecnologia)
    {   
        //Recoge del edit los datos de request y los mete en el objeto
        $tecnologia->nombre = $request->nombre;
        $tecnologia->save();
        return redirect()->route('tecnologias.index')
        ->with('success', 'Tecnología editada correctamente.');        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Tecnologia $tecnologia)
    {
        //Se le pasa la tecnologia id por parametro, la borra y redirige al index
        $tecnologia->delete();
         return redirect()->route('tecnologias.index')
        ->with('success', 'Tecnología eliminada correctamente.');   
    }
}
