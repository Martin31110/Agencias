<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/Navbar.css') }}">
    <link rel="stylesheet" href="{{ asset('css/viajeIndex.css') }}">
    <title>Viajes</title>
</head>
<body>
    <nav class="navbar">
        <div class="navbar-brand">
            <a href="/viajes" class="navbar-logo">AgenciasRH</a>
        </div>
        <ul class="navbar-menu">
            <li class="navbar-item"><a href="/viajes" class="navbar-link">HomePage</a></li>
            <li class="navbar-item"><a href="/viajes/create" class="navbar-link">Crear Viaje</a></li>
        </ul>
    </nav>

    <main class="container">
        @if (session()->has('success'))
            <p class="success-message">¡Producto borrado exitosamente!</p>
        @endif

        <h1 class="main-title">Viajes</h1>
        <table class="styled-table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Destino</th>
                    <th>Cliente</th>
                    <th>Hotel</th>
                    <th>Fecha</th>
                    <th>Número de Personas</th>
                    <th>Servicios</th>
                    <th>Estado</th>
                    <th>Tipo de Viaje</th>
                    <th>Acciones</th>
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
    </main>
</body>
</html>