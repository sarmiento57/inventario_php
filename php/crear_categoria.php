<?php

    require_once "../php/main.php";
    $nombre_categoria = $_POST['nombre_categoria'];
    $ubicacion_categoria = $_POST['ubicacion_categoria'];

    if($nombre_categoria=="" || $ubicacion_categoria==""){
        echo 
        '
        <div class="alert alert-danger" role="alert">
            Los campos no pueden estar vacíos
        </div>
        ';
        exit();
    }

    $categoria_guardar = conexion();
    $marcadores_categoria = 
    [
        'nombre' => $nombre_categoria,
        'ubicacion'=> $ubicacion_categoria
    ];
    
    $categoria_guardar = $categoria_guardar->prepare('INSERT INTO categoria (nombre_categoria, ubicacion_categoria) VALUES (:nombre, :ubicacion)');

    $categoria_guardar->execute($marcadores_categoria);

    if($categoria_guardar->rowCount()>=0){
        echo 
        '
        <div class="alert alert-success" role="alert">
            Categoria guardada con éxito
        </div>
        ';
    } else{
        echo 
        '
        <div class="alert alert-danger" role="alert">
            Error al guardar la categoria
        </div>
        ';
    }

