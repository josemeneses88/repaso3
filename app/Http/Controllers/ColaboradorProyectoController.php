<?php

namespace App\Http\Controllers;
use App\Models\colaborador;
use App\Models\proyecto;
use App\Models\colaborador_proyecto;
use Illuminate\Http\Request;

class ColaboradorProyectoController extends Controller
{
    // 2- funcion asociar
    public function asociar(){
      
        $colaboradors = Colaborador::all();  // 3- Obtener todos los colaboradors
        $proyectos = Proyecto::all(); // 4- Obtener todos los proyectos

        return view('colaboradorproyecto.asociar', compact('colaboradors', 'proyectos'));// 5- Mostrar la vista con los datos
    }


    // 6- Funcion para asociar los colaboradors a los proyectos
    public function store(Request $request){
        
        $proyecto = Proyecto::find($request->proyecto_id);
        $proyecto->Colaboradors()->attach($request->colaborador_id);
    }
}