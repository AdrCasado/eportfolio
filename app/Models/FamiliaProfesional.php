<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class FamiliaProfesional extends Model
{
    /** @use HasFactory<\Database\Factories\FamiliaProfesionalFactory> */
    use HasFactory, Notifiable;

    protected $table = 'familias_profesionales';

    protected $fillable = ['nombre', 'codigo', 'descripcion'];
}
