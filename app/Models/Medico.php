<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Medico extends Model
{
    use HasFactory;
    public function consultas()
{
    return $this->hasMany(Consulta::class, 'idmedico');
}
    protected $fillable = ['nombre', 'apellido', 'especialidad_id', 'telefono', 'email', 'direccion'];

    public function especialidad()
    {
        return $this->belongsTo(Especialidad::class);
    }

public function nombreCompleto()
{
    return $this->nombre . ' ' . $this->apellido;
}

}
