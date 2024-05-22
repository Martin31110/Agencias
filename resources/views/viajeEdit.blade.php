<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Editar Viaje</title>
</head>
<body>
    <form method="POST" action="/viajes/{{$viajes->id}}" id="formulario">
        @csrf
        @method('patch')
        
        <div class="">
            <label for="nombre">Destino del Viaje</label>
            <input type="text" name="Destino" id="Destino" value='{{$viajes->Destino}}' required/>
        </div>
        <div class="">
            <label for="marca">Nombre del Cliente</label>
            <input type="text" name="Cliente" id="Cliente" value='{{$viajes->Cliente}}' required/>
        </div>
        <div class="">
            <label for="marca">Hotel del Viaje</label>
            <input type="text" name="Hotel" id="Hotel" value='{{$viajes->Hotel}}' required/>
        </div>
        <div class="">
            <label for="marca">Fecha del Viaje</label>
            <input type="date" name="Fecha" id="Fecha" value='{{$viajes->Fecha}}' required/>
        </div>
        <div class="">
            <label for="marca">Personas del Viaje</label>
            <input type="number" name="numeroPersonas" id="numeroPersonas" value='{{$viajes->numeroPersonas}}' required/>
        </div>
        <div class="">
            <label for="marca">Servicios Adicionales</label>
            <input type="text" name="Servicios" id="Servicios" value='{{$viajes->Servicios}}' required/>
        </div>
        <div class="">
            <label for="estado">Estado del Viaje</label>
            <select name="Estado" id="Estado" required>
                <option value="{{$viajes->Destino}}">{{$viajes->Estado}}</option>
                <option value="{{$viajes->Destino}}">{{$viajes->Estado}}</option>
            </select>
        </div>
        <div class="input-field">
            <label for="categorias">Tipos de viajes</label>
            <select name="tipo_viajes[]" id="tipo_viajes" multiple>
                @foreach ($tipo_viajes as $tip_viajes)
                    <option value="{{ $tip_viajes->id }}"
                        @if($viajes->tipo_viajes->contains($tip_viajes->id)) selected @endif>
                        {{$tip_viajes->tipo_de_viaje}}
                    </option>
                @endforeach
            </select>
        </div>
        <input type="submit" name="action" value="enviar">
    </form>
    
</body>
</html>