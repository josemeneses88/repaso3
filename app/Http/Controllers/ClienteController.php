<?php

namespace App\Http\Controllers;

use App\Models\cliente;
use Brick\Math\BigInteger;
use Illuminate\Http\Request;

class ClienteController extends Controller
{

    public function index()
    {   // 13- para mostrar en el index
        $datos['cliente']=cliente::paginate(10);//
        return view ('cliente.index', $datos);
    }

    public function create()// create lo que hace es hacer un envio a storage
    {
        //15 para mostrar la vista create
        return view ('cliente.create');
    }

    public function store(Request $request)
    {
        // 18-  envio de datos --importante
        $campos=[ // validaciones para los campo
            'identificacioncliente'=>'required|integer',
            'nombrecliente'=>'required|string|max:50',
            'telefonocliente'=>'required|integer',
            'domiciliocliente'=>'required|string|max:50',

        ];
        
        $mensaje=[// mensaje enviado
            'required'=>'El :attribute es requerido',
        ];

        $validatedData = $request->validate($campos, $mensaje);


        $datoscliente =  $request->except('_token');// obtiene los datos que le enviaron exceptuando _token
        cliente::insert($datoscliente); // Aqui guarda los datos recibidos menos el token
        //return response()->json($datoscliente); // muestra la informacion que le enviamos 
        return redirect ('cliente')->with('mensaje','AGREGADO CLIENTE CON EXITO');

    }

    public function show($id)
    {
        $cliente = cliente::findOrFail($id);
        return view('cliente.show', compact('cliente'));
    }


    
    public function edit($id)
    {
        // 25- recuperando los datos de empleado
        $cliente=cliente::findOrFail($id);
        // 24- Redireccionando a la vista edit
        return view('cliente.edit', compact('cliente'));// enviamos los datos encontrados a la vista
    }

    
    public function update(Request $request, $id)
    {
        //
        $datoscliente =  $request->except(['_token','_method']);// obtiene los datos que le enviaron exceptuando _token y _method
        cliente::where('id','=',$id)->update($datoscliente);// revisa si los id coinciden para hacer el update
        $cliente=cliente::findOrFail($id);
        //  Redireccionando a la vista edit
        return view('cliente.edit', compact('cliente'));// enviamos los datos encontrados a la vista

    }

    public function destroy($id)// se recibe id para usarlo en la linea  cliente::destroy($id);
    {
        // 20- ELIMINAR DATOS
        cliente::destroy($id);
        return redirect('cliente'); // redirecciona a la lista de cliente
    }
}
