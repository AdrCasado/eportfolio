<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class CicloFormativo extends Model
{
    /** @use HasFactory<\Database\Factories\CicloFormativoFactory> */
    use HasFactory, Notifiable;

    protected $table = 'ciclos_formativos';

    protected $fillable = ['familia_profesional_id', 'nombre', 'codigo', 'grado', 'descripcion'];
}
