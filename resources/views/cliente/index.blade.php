{{-- 10-   VISTA CLIENTENTE/INDEX --}}

<a href="{{url('cliente/create')}}" class="btn btn-primary"> <h3> Registrar Nuevo cliente  </h3> </a>
<br>
<br>

<h1>   LISTADO DE CLIENTES AGREGADOS   </h1>

<table class="table table-light">
    <thead class="thead-light">{{-- Cabezera de la consulta --}}
        <tr>
            <th>ID</th>
            <th>IDENTIFICACION</th>
            <th>NOMBRE</th>
            <th>DOMICILIO</th>
            <th>TELEFONO</th>
            <th>ACCIONES</th>
        </tr>
    </thead>


    <tbody>
        @foreach ($cliente as $cliente)
            
        <tr>
            <td>{{$cliente-> id }}</td>
            <td>{{$cliente-> identificacioncliente }}</td>
            <td>{{$cliente-> nombrecliente}}</td>
            <td>{{$cliente-> domiciliocliente}}</td>
            <td>{{$cliente-> telefonocliente}}</td>

            <td>
                {{-- 22- Crear boton Editar: <cliente/id/edit</edit> --}}
                <a href="{{url('/cliente/'.$cliente->id.'/edit')}}">
                Editar 
                </a>

                {{-- 19- ACCION ELIMINAR --}}
                <form action="{{url('/cliente/'.$cliente->id)}}"  method="post" >  {{-- Envio los datos para ser borrados  --}}
                    @csrf
                    {{method_field('DELETE')}} 
                    <input type="submit" onclick="return confirm('¿Quieres Borrar?')" value="Borrar">
                </form>

                {{-- Mostrar cliente --}}
                <a href="{{url('/cliente/'.$cliente->id.'/show')}}">
                Mostrar 
                </a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table> 

