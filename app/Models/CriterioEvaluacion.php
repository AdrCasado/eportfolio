<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class CriterioEvaluacion extends Model
{
    /** @use HasFactory<\Database\Factories\CriterioEvaluacionFactory> */
    use HasFactory, Notifiable;

    protected $table = 'criterios_evaluacion';

    protected $fillable = ['resultado_aprendizaje_id', 'codigo', 'descripcion', 'peso_porcentaje', 'orden'];
}
