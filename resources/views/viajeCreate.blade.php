<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/Navbar.css') }}">
    <link rel="stylesheet" href="{{ asset('css/viajeCreate.css') }}">
    <title>Crear Viaje</title>
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
        <h1 class="form-title">Crear Viaje</h1>
        <form method="POST" action="/viajes" id="formulario" class="styled-form">
            @csrf
            <div class="input-field">
                <label for="Destino">Destino del Viaje</label>
                <input type="text" name="Destino" id="Destino" required/>
            </div>
            <div class="input-field">
                <label for="Cliente">Nombre del Cliente</label>
                <input type="text" name="Cliente" id="Cliente" required/>
            </div>
            <div class="input-field">
                <label for="Hotel">Hotel del Viaje</label>
                <input type="text" name="Hotel" id="Hotel" required/>
            </div>
            <div class="input-field">
                <label for="Fecha">Fecha del Viaje</label>
                <input type="date" name="Fecha" id="Fecha" required/>
            </div>
            <div class="input-field">
                <label for="numeroPersonas">Personas del Viaje</label>
                <input type="number" name="numeroPersonas" id="numeroPersonas" required/>
            </div>
            <div class="input-field">
                <label for="Servicios">Servicios Adicionales</label>
                <input type="text" name="Servicios" id="Servicios" required/>
            </div>
            <div class="input-field">
                <label for="Estado">Estado del Viaje</label>
                <select name="Estado" id="Estado" required>
                    <option value="En Proceso">En Proceso</option>
                    <option value="Finalizado">Finalizado</option>
                </select>
            </div>
            <div class="input-field">
                <label for="tipo_viajes">Tipo de Viaje</label>
                <select name="tipo_viajes[]" id="tipo_viajes" multiple>
                    <option value="" disabled selected>Selecciona un tipo de Viaje</option>
                    @foreach ($tipo_viajes as $tip_viajes)
                        <option value="{{ $tip_viajes->id }}">{{ $tip_viajes->tipo_de_viaje }}</option>
                    @endforeach
                </select>
            </div>
            <div class="input-field">
                <input type="submit" name="action" value="Enviar" class="submit-button">
            </div>
        </form>
    </main>
</body>
</html>