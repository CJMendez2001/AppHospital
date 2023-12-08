<?php

namespace App\Http\Controllers;
use App\Models\Especialidad;

use Illuminate\Http\Request;

class EspecialidadController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $datosEspecialidads = Especialidad::all();
        return view('Especialidad.index_esp')->with('especialidads', $datosEspecialidads);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view ('especialidad.create_esp');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $especialidad= new Especialidad();
        $especialidad->especialidad=$request->get('nombre'); 
        $especialidad->save();
        return redirect('especialidads');  
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $especialidadEliminar = Especialidad::find($id);
        return view("especialidad.delete_esp")->with('especialidadEliminado', $especialidadEliminar);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $especialidad = Especialidad::findOrFail($id);
        return view('especialidad.edit_esp', compact('especialidad'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $especialidad=Especialidad::find($id);
        $especialidad->especialidad=$request->get('nombre'); 
        $especialidad->save();
        return redirect('especialidads');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $eliminado = Especialidad::find($id);
        $eliminado->delete();

        return redirect('especialidads');  
    }
}
