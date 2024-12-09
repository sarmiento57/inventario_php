<?php
    require_once "../php/main.php";
    
    $nombre_categoria=$_POST['nombre_categoria'];
    $ubicacion_categoria=$_POST['ubicacion_categoria'];
    $id_categoria=$_POST['id_categoria'];

    if($nombre_categoria=="" || $ubicacion_categoria== ""){
        echo '<dev class="alert alert-danger" role="alert">Los campos no pueden estar vacíos</dev>';
    }

    $check_categoria = conexion();
    $check_categoria = $check_categoria->query('SELECT * FROM categoria WHERE id_categoria='.$id_categoria.'');

    if($check_categoria->rowCount()==1){
        $autualizar_categoria = conexion();
        $marcadores_categoria = 
        [
            "nombre" => $nombre_categoria,
            "ubicacion" => $ubicacion_categoria,
            "id" => $id_categoria
        ];
        $autualizar_categoria = $autualizar_categoria->prepare('UPDATE categoria SET nombre_categoria=:nombre, ubicacion_categoria=:ubicacion WHERE id_categoria=:id');
        $autualizar_categoria->execute($marcadores_categoria);

        if($autualizar_categoria->rowCount()==1){
            echo '<div class="alert alert-success" role="alert">Categoria actualizada con éxito</div>';
        }else{
            echo '<div class="alert alert-danger" role="alert">Error al actualizar la categoria</div>';
        }
    } else{
        echo '<div class="alert alert-danger" role="alert">La categoria no existe</div>';
    }
    ?>