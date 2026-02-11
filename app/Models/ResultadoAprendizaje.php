<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class ResultadoAprendizaje extends Model
{
    /** @use HasFactory<\Database\Factories\ResultadoAprendizajeFactory> */
    use HasFactory, Notifiable;

    protected $table = 'resultados_aprendizaje';

    protected $fillable = ['modulo_formativo_id', 'codigo', 'peso_procentaje', 'orden', 'descripcion'];
}
