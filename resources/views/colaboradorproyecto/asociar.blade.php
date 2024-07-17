{{--  7-  CREAR FORMULARIO --}}
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <h1>Vista Asociar:</h1>

    <form action="{{route('colaboradorproyecto.store')}}" method="POST" enctype="multipart/form-data">

        @csrf

        <br>
        <h1>colaborador:</h1>
        <select name="colaborador_id">
            @foreach($colaboradors as $colaborador)
                <option value="{{ $colaborador->id }}">{{ $colaborador->id }} - {{ $colaborador->nombrecolaborador}}</option>
            @endforeach
        </select>
        <br>
        <h1>proyecto:</h1>    
        <select name="proyecto_id">
            @foreach($proyectos as $proyecto)
                <option value="{{ $proyecto->id }}">{{ $proyecto->id }} - {{ $proyecto->descripcionproyecto }}</option>
            @endforeach
        </select>
 
       
         <br> <br>
        <button type="submit">Enviar Formulario:</button>
        </form>

</body>
</html>