<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/Navbar.css') }}">
    <link rel="stylesheet" href="{{ asset('css/viajeIndex.css') }}">
    <title>Tipo de Viaje</title>
</head>
<body>

    <nav class="navbar">
        <div class="navbar-brand">
            <a href="/tipoViajes" class="navbar-logo">AgenciasRH</a>
        </div>
        <ul class="navbar-menu">
            <li class="navbar-item"><a href="/tipoViajes" class="navbar-link">HomePage</a></li>
            <li class="navbar-item"><a href="/tipoViajes/create" class="navbar-link">Crear tipo de viaje</a></li>
        </ul>
    </nav>

    <main class="container">
            @if (session()->has('success'))
            <p>Tipo de Vijae borrado exitosamente</p>
            @endif
        
        <h1 class="main-title">Tipo de viajes</h1>
        <table class="styled-table">
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
    </main>
</html>