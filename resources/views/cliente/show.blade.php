
<div class="container">
    <h1>MOSTRAR CLIENTE</h1>
    <br>

    <div>
        <p><strong>Identificación:</strong> {{ $cliente->identificacioncliente }}</p>
        <p><strong>Nombre:</strong> {{ $cliente->nombrecliente }}</p>
        <p><strong>Telefono:</strong> {{ $cliente->telefonocliente }}</p>
        <p><strong>Domicilio:</strong> {{ $cliente->domiciliocliente }}</p>
    </div>
</div>

<a href="{{url('cliente')}}" class="btn btn-primary"> <h3> Regresar  </h3> </a>
