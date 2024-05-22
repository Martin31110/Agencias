<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tipo de Viaje</title>
</head>
<body>
    @if (session()->has('success'))
    <p>SI SE BORRO</p>
@endif

<h1>PRODUCTOS</h1>
<a href="/tipoViajes/create">CREAR PRODUCTO</a>
<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Tipo de Viaje</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($tipo_viajes as $viaje)
            <tr>
                <td>{{$viaje->id}}</td>
                <td>{{$viaje->tipo_de_viaje}}</td>
            </tr>
        @endforeach
    </tbody>
  </table>
</body>
</html>