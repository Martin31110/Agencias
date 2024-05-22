<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Crear Viaje</title>
</head>
<body>
    <form method="POST" action="/viajes" id="formulario">
        @csrf
        
        <div class="">
            <label for="nombre">Destino del Viaje</label>
            <input type="text" name="Destino" id="Destino" required/>
        </div>
        <div class="">
            <label for="marca">Nombre del Cliente</label>
            <input type="text" name="Cliente" id="Cliente" required/>
        </div>
        <div class="">
            <label for="marca">Hotel del Viaje</label>
            <input type="text" name="Hotel" id="Hotel" required/>
        </div>
        <div class="">
            <label for="marca">Fecha del Viaje</label>
            <input type="date" name="Fecha" id="Fecha" required/>
        </div>
        <div class="">
            <label for="marca">Personas del Viaje</label>
            <input type="number" name="numeroPersonas" id="numeroPersonas" required/>
        </div>
        <div class="">
            <label for="marca">Servicios Adicionales</label>
            <input type="text" name="Servicios" id="Servicios" required/>
        </div>
        <div class="">
            <label for="estado">Estado del Viaje</label>
            <select name="Estado" id="Estado" required>
                <option value="En Proceso">En Proceso</option>
                <option value="Finalizado">Finalizado</option>
            </select>
        </div>
        <div class="input-field">
            <label for="sucursales">Tipo de Viaje</label>
            <select name="tipo_viajes[]" id="tipo_viajes" multiple>
                <option value="" disabled selected>Selecciona un tipo de Viaje</option>
                @foreach ($tipo_viajes as $tip_viajes)
                    <option value="{{ $tip_viajes->id }}">{{ $tip_viajes->tipo_de_viaje }} </option> }}></option>
                @endforeach
            </select>
        </div>
        
        <input type="submit" name="action" value="enviar">
    </form>
    

</body>
</html>