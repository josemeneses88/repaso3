<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pago extends Model
{
    use HasFactory;

    public function tipopago(){// 1- relacion uno a mucho entidad debil
        return $this->belongsTo('App\Models\tipopago');
    }

    public function colaboradors(){// 2- relacion uno a mucho entidad fuerte
        return $this->hasMany('App\Models\colaborador');
    }
}
