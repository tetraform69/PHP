<?php 
    try{
        $pdo = new PDO("mysql:dbname=pokemon;host=localhost", "root", "");
    }catch (PDOExeption $e){
        die("Error: no se conecto" . $e->getCode());
    }
?>