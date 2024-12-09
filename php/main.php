<?php
//conexion a la base de datos
function conexion(){
    $pdo = new PDO('mysql:host=localhost; dbname=crud', 'root', '');
    return $pdo;
}
?>