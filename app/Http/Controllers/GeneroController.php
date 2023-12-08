<?php

namespace App\Http\Controllers;
use App\Models\Genero;

use Illuminate\Http\Request;

class GeneroController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $datosGenero = Genero::all();
        return view('genero.index_gen')->with('generos', $datosGenero);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view ('genero.create_gen');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $genero= new Genero();
        $genero->genero=$request->get('nombre'); 
        $genero->save();
        return redirect('generos');  
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $generoEliminar = Genero::find($id);
        return view("genero.delete_gen")->with('generoEliminado', $generoEliminar);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $genero = Genero::findOrFail($id);
        return view('genero.edit_gen', compact('genero'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $genero=Genero::find($id);
        $genero->genero=$request->get('nombre'); 
        $genero->save();
        return redirect('generos');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $eliminado = Genero::find($id);
        $eliminado->delete();

        return redirect('generos');   
    }
}
