<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class colaborador extends Model
{
    use HasFactory;

    public function pago(){// 2 - relacion uno a mucho entidad debil
        return $this->belongsTo('App\Models\pago');
    }

    public function proyectos(){// 4- relacion muchos a muchos 
        return $this->belongsToMany(Proyecto::class,'colaborador_proyectos','colaborador_id','proyecto_id');
        //return $this->belongsToMany('App\Models\proyecto');
    }

}
