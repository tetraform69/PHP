<?php
include 'conexion.php';

$nombre = $_POST["nombre"];
$codigo = $_POST["codigo"];

$sql = "INSERT INTO prueba ('nombre','codigo') values ('$nombre',$codigo)";
$data = $pdo->prepare( $sql );
$data->execute();

$sql = 'SELECT * FROM prueba';

$data = $pdo->prepare( $sql );
$data->execute();
$info = $data->fetchALL( PDO::FETCH_ASSOC );

$result = $pdo->query($sql);

foreach ($result as $key) {
    echo "Codigo: ". $result['codigo']. " Pokemon: ". $result['nombre'];
    echo "<br>"
}