<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Consulta extends Model
{
    use HasFactory;
    protected $fillable = ['idmedico', 'idpaciente', 'fecha_hora'];
    // Modelo Consulta
public function medico()
{
    return $this->belongsTo(Medico::class, 'medico_id');
}

public function paciente()
{
    return $this->belongsTo(User::class, 'paciente_id');
}

    
}
