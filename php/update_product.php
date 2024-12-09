<?php
    require_once './main.php';

    $nombre_producto = $_POST['nombre_producto'];
    $descripcion_producto = $_POST['descripcion_producto'];
    $stock_producto = $_POST['stock_producto'];
    $codigo_producto = $_POST['codigo_producto'];
    $precio_producto = $_POST['precio_producto'];
    $categoria_producto = $_POST['categoria_producto'];
    $id_producto = $_POST['id_producto'];   

    if($nombre_producto=="" || $descripcion_producto=="" || $stock_producto=="" || $codigo_producto=="" || $precio_producto== ""|| $categoria_producto== ""){
        echo '<div class="alert alert-danger" role="alert"><strong>¡Error!</strong> Todos los campos son obligatorios</div>';
    }
    //validando que el producto exista
    $check_producto = conexion();
    $check_producto = $check_producto->query('SELECT * FROM producto WHERE id_producto ="'.$id_producto.'"');

    if($check_producto->rowCount()==1){
        $autualizar_producto = conexion();
        $marcadores_product = 
        ["nombre_producto"=>$nombre_producto,
        "descripcion_producto"=>$descripcion_producto,
        "stock_producto"=>$stock_producto,
        "codigo_producto"=>$codigo_producto,
        "precio_producto"=>$precio_producto,
        "id_categoria"=>$categoria_producto];

        $autualizar_producto = $autualizar_producto->prepare('UPDATE producto SET nombre_producto=:nombre_producto, descripcion_producto=:descripcion_producto, stock_producto=:stock_producto, codigo_producto=:codigo_producto, precio_producto=:precio_producto, id_categoria=:id_categoria WHERE id_producto="'.$id_producto.'"');

        $autualizar_producto->execute($marcadores_product);
        if($autualizar_producto->rowCount()==1){
            echo '<div class="alert alert-success" role="alert"><strong>¡Correcto!</strong> Producto actualizado</div>';
        } else{
            echo '<div class="alert alert-danger" role="alert"><strong>¡Error!</strong> No se pudo actualizar el producto</div>';
        }
    }else{
        echo '<div class="alert alert-danger" role="alert"><strong>¡Error!</strong> El producto no existe</div>';
    }