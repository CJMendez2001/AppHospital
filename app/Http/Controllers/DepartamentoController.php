<?php

namespace App\Http\Controllers;
use App\Models\Departamento;

use Illuminate\Http\Request;

class DepartamentoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $datosDepartamentos = Departamento::all();
        return view('departamento.index_depto')->with('departamentos', $datosDepartamentos);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view ('departamento.create_depto');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $departamento= new Departamento();
        $departamento->departamento=$request->get('nombre'); 
        $departamento->save();
        return redirect('departamentos');  
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $departamentoEliminar = Departamento::find($id);
        return view("departamento.delete_depto")->with('departamentoEliminado', $departamentoEliminar);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $departamento = Departamento::findOrFail($id);
        return view('departamento.edit_depto', compact('departamento'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $departamento=Departamento::find($id);
        $departamento->departamento=$request->get('nombre'); 
        $departamento->save();
        return redirect('departamentos');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $eliminado = Departamento::find($id);
        $eliminado->delete();

        return redirect('departamentos');   
    }
}
