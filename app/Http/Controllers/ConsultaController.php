<?php

namespace App\Http\Controllers;
use App\Models\Consulta;
use Illuminate\Support\Carbon;
use Illuminate\Http\Request;
use App\Models\Medico;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use App\Models\Especialidad;

class ConsultaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
            // $consultas = Consulta::all();
            // return view('consulta.index')->with('consultas', $consultas);
            $idPaciente = Auth::id();

            // Obtener las consultas del paciente actual
            $consultas = Consulta::where('idpaciente', $idPaciente)->get();

            $now = Carbon::now();
        
            return view('consulta.index', ['consultas' => $consultas, 'now'=>$now]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $medicos = Medico::all();
        $paciente = User::all();
        return view('consulta.create')->with('medicos',$medicos)->with('pacientes',$paciente);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $consulta = new Consulta();
        $consulta->idmedico = $request->idmedico;
        $consulta->idpaciente = $request->idpaciente;
        $consulta->fecha_hora = $request->fecha_hora;
        $consulta->save();
        return redirect('consulta');  
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
