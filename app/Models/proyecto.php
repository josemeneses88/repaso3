<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class proyecto extends Model
{
    use HasFactory;

    public function cliente(){ // 3- Relacion uno a muchos entidad debil 
        return $this->belongsTo('App\Models\cliente');
    }

    public function colaboradors(){ // 4- Relacion muchos a muchos
        return $this->belongsToMany(Colaborador::class,'colaborador_proyectos','proyecto_id','colaborador_id');
        //return $this->belongsToMany('App\Models\colaborador');
    }

}
