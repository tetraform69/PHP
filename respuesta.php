<?php
$nombre = $_POST["nombre"];
$apellido = $_POST["apellido"];
$edad = $_POST["edad"];
$dia = $_POST["diaTrabajo"];
$jornada = $_POST["jornada"];
$pasatiempos = $_POST["pasatiempos"];

echo "Nombre: $nombre y Apellido: $apellido";
echo "<br>";
echo "Edad: $edad";

echo "<br>";

if ($edad >= 18){
    echo "Usted es mayor de edad";
}else{
    echo "Usted es menor de edad";
}

echo "<br>";

echo "dia del trabajo: $dia";
echo "<br>";
echo "Jornada: $jornada";
echo "<br>";

// var_dump($_POST);

foreach ($pasatiempos as $key => $value) {
    echo "Pasatiempos: ". $key+1 ." $value<br>";
}

$frutas = [
    "dulce" => "mango",
    "acida" => "limon",
    "diuretica" => "piña",
    "afrodiciaca" => "borojo"
];

foreach ($frutas as $key => $value) {
    echo "frutas de tipo $key:  $value <br>";
}

$numeros = [23, "años", 10.2, true];

foreach ($numeros as $key => $value) {
    echo "$key:  $value <br>";
}

unset($numeros[2]);

print_r(array_values($numeros));