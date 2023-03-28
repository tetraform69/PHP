<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="respuesta.php" method="POST">
        <label for="nombre">Nombre</label>
        <input type="text" name="nombre" id="nombre">
        <br>
        <label for="apellido">Apellido</label>
        <input type="text" name="apellido" id="apellido">
        <br>
        <label for="edad">Edad</label>
        <input type="number" name="edad" id="edad">
        <br>
        <select name="diaTrabajo" id="diaTrabajo">
            <option value="0">Selecione dia</option>
            <option value="lunes">lunes</option>
            <option value="martes">martes</option>
            <option value="miercoles">miercoles</option>
            <option value="jueves">jueves</option>
            <option value="viernes">viernes</option>
            <option value="sabado">sabado</option>
            <option value="domingo">domingo</option>
        </select>
        <br>
        <label for="jornada">Selecione:</label>
        <input type="radio" name="jornada" value="dia">
        <label for="">Dia</label>
        <input type="radio" name="jornada" value="tarde">
        <label for="">Tarde</label>
        <input type="radio" name="jornada" value="noche">
        <label for="">Noche</label>
        <br>
        
        <input type="checkbox" name="pasatiempos[]" value="jugar futbol">
        <label for="">jugar futbol</label>
        <input type="checkbox" name="pasatiempos[]" value="bicicleta">
        <label for="">bicicleta</label>
        <input type="checkbox" name="pasatiempos[]" value="bailar">
        <label for="">bailar</label>
        <input type="checkbox" name="pasatiempos[]" value="nadar">
        <label for="">nadar</label>
        <br>

        <button type="submit">registrar</button>
    </form>
</body>
</html>