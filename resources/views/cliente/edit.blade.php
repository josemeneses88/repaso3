{{-- 21- FORMULARIO EDITAR --}}
<h1> EDITAR DATOS</h1>
<form action="{{url('/cliente/'.$cliente->id)}}" method="post">
    @csrf
    
    {{ method_field ('PATCH')}} {{-- Envia a Update  todos los datos --}}
    @include('cliente.form');

</form>