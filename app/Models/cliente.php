<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class cliente extends Model
{
    use HasFactory;

    public function proyectos(){// 3- Relacion muchos a muchos entidad debil
        return $this->hasMany('App\Models\proyecto');
    }    
}
