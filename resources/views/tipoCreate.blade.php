<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form method="POST" action="/tipoViajes" id="formulario">
        @csrf
        
        <div class="">
            <label for="nombre">Tipo del Viaje</label>
            <input type="text" name="tipo_de_viaje" id="tipo_de_viaje" required/>
        </div>
        <input type="submit" name="action" value="enviar">
    </form>
    
</body>
</html>