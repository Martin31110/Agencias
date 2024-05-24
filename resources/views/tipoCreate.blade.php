<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/Navbar.css') }}">
    <link rel="stylesheet" href="{{ asset('css/viajeCreate.css') }}">
    <title>Crear tipo de viaje</title>
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
        <h1 class="form-title">Crear tipo de Viaje</h1>
        <form class="styled-form" method="POST" action="/tipoViajes" id="formulario">
            @csrf
            
            <div class="input-field">
                <label for="nombre">Tipo del Viaje</label>
                <input type="text" name="tipo_de_viaje" id="tipo_de_viaje" required/>
            </div>
            <div class="input-field">
                <input type="submit" name="action" value="Enviar" class="submit-button">
            </div>
        </form>        
    </main>

    
</body>
</html>