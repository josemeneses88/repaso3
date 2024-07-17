<br>
@if(count($errors) > 0) 
<div class="alert alert-danger" role="alert">
    <ul>
    @foreach($errors->all() as $error)
        <li> {{$error}} </li>
    @endforeach
    </ul>
</div>
@endif

<br>
<label for=Identificacion> Identificacion </label>
<input type="text" name="identificacioncliente" value="{{isset($cliente->identificacioncliente)?$cliente->identificacioncliente:old('identificacioncliente')}}" id="identificacioncliente">
<br>
<br>
<label for=Nombre> Nombre </label> {{--  en iisset pregunta si existe un valor, si existe que lo mueste  $cliente->nombrecliente : si no, que imprima vacio--}}
<input type="text" name="nombrecliente" value="{{isset($cliente->nombrecliente)?$cliente->nombrecliente:old('nombrecliente')}}" id="nombrecliente">
<br>
<br>
<label for=Domicilio> Direccion </label>
<input type="text" name="domiciliocliente" value="{{isset($cliente->domiciliocliente)?$cliente->domiciliocliente:old('domiciliocliente')}}" id="domiciliocliente">
<br>
<br>
<label for=Telefono> Telefono </label>
<input type="text" name="telefonocliente" value="{{isset($cliente->telefonocliente)?$cliente->telefonocliente:old('telefonocliente')}}"  id="telefonocliente">
<br>
<br>

<input type="submit" Value="Guardar"> {{-- se pone value para eliminar el dato del envio name="Enviar" --}}
<br>

<a href="{{url('cliente')}}" class="btn btn-primary"> <h3> Regresar  </h3> </a>

