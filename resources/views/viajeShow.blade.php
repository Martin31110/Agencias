<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/Navbar.css') }}">
    <link rel="stylesheet" href="{{ asset('css/viajeShow.css') }}">
    <title>Mostrar Viajes</title>
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
        <div class="card">
            <h2>Detalles del Viaje</h2>
            <div class="info">
                <p><strong>Destino:</strong> {{$viajes->Destino}}</p>
                <p><strong>Cliente:</strong> {{$viajes->Cliente}}</p>
                <p><strong>Hotel:</strong> {{$viajes->Hotel}}</p>
                <p><strong>Fecha:</strong> {{$viajes->Fecha}}</p>
                <p><strong>Estado:</strong> {{$viajes->Estado}}</p>
                <p><strong>Número de Personas:</strong> {{$viajes->numeroPersonas}}</p>
                <p><strong>Servicios:</strong> {{$viajes->Servicios}}</p>
            </div>
            <div class="actions">
                <a href="/viajes/{{$viajes->id}}/edit" class="modify-button">Modificar</a>
                <form method="POST" action="/viajes/{{$viajes->id}}" id="formulario" class="delete-form">
                    @csrf
                    @method('DELETE')		
                    <input type="submit" name="action" value="Eliminar" class="delete-button">
                </form>
            </div>
        </div>
    </main>
</body>
</html>