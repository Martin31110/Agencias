<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mostrar Viajes</title>
</head>
<body>
    <h1>{{$viajes->Destino}}</h1>
    <h3>{{$viajes->Cliente}}</h3>

    <a href="/viajes/{{$viajes->id}}/edit">Modificar</a>

    <form method="POST" action="/viajes/{{$viajes->id}}" id="formulario">
        @csrf
        @method('DELETE')		
        <input type="submit"  name="action" value="Eliminar">
    </form>
</body>
</html>