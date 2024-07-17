<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class colaborador_proyecto extends Model
{
    use HasFactory;

    protected $table = 'colaborador_proyectos';// solucion al error de que la tabla no existe
}
