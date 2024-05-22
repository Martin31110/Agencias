<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Viajes</title>
</head>
<body>
@if (session()->has('success'))
    <p>SI SE BORRO</p>
@endif

<h1>PRODUCTOS</h1>
<a href="/viajes/create">CREAR PRODUCTO</a>
<table>
    <thead>
          <tr>
            <th>ID</th>
            <th>Destino</th>
            <th>Cliente</th>
            <th>Hotel</th>
            <th>Fecha</th>
            <th>Numero de Personas</th>
            <th>Servicios</th>
            <th>Estado</th>
            <th>Tipo de Viaje</th>
          </tr>
    </thead>
    <tbody>
        @foreach ($viajes as $viaje)
            <tr>
                <td>{{$viaje->id}}</td>
                <td>{{$viaje->Destino}}</td>
                <td>{{$viaje->Cliente}}</td>
                <td>{{$viaje->Hotel}}</td>
                <td>{{$viaje->Fecha}}</td>
                <td>{{$viaje->numeroPersonas}}</td>
                <td>{{$viaje->Servicios}}</td>
                <td>{{$viaje->Estado}}</td>
                <td>
                    @foreach ($viaje->tipo_viajes as $tip_viaje)
                        {{$tip_viaje->tipo_de_viaje}} <br>
                    @endforeach
                </td>
                <td><a href="/viajes/{{$viaje->id}}" class="details-link">Ver detalles</a></td>
            </tr>
        @endforeach
    </tbody>
  </table>
</body>
</html>