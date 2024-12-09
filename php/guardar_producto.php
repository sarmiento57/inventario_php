<?php
    require_once '../inc/start_session.php';
    require_once '../php/main.php';

    $nombre_producto = $_POST['nombre_producto'];
    $descripcion_producto = $_POST['descripcion_producto'];
    $stock_producto = $_POST['stock_producto'];
    $codigo_producto = $_POST['codigo_producto'];
    $precio_producto = $_POST['precio_producto'];
    $categoria_producto = $_POST['categoria_producto'];
   

    if($nombre_producto == '' || $descripcion_producto == '' || $stock_producto == '' || $codigo_producto == '' || $precio_producto == '' || $categoria_producto == ''){
        echo '<div class="alert alert-danger" role="alert">Por favor, complete todos los campos</div>';
    }

    $check_producto = conexion();
    $check_producto = $check_producto->query("SELECT * FROM producto WHERE nombre_producto = '$nombre_producto' AND codigo_producto = '$codigo_producto'");

    if($check_producto->rowCount()<= 0){
        $guardar_producto = conexion();
        $marcadores_producto = [
            'nombre_producto' => $nombre_producto,
            'descripcion_producto' => $descripcion_producto,
            'stock_producto' => $stock_producto,
            'codigo_producto' => $codigo_producto,
            'precio_producto' => $precio_producto,
            'id_categoria' => $categoria_producto,
            'id_usuario' => $_SESSION['id']
        ];
        $guardar_producto = $guardar_producto->prepare("INSERT INTO producto (nombre_producto, descripcion_producto, stock_producto, codigo_producto, precio_producto, id_categoria, id_usuario) VALUES (:nombre_producto, :descripcion_producto, :stock_producto, :codigo_producto, :precio_producto, :id_categoria, :id_usuario)");
        $guardar_producto->execute($marcadores_producto);

        if($guardar_producto->rowCount()==1){
            echo '<div class="alert alert-success" role="alert">Producto guardado</div>';
        }else{
            echo '<div class="alert alert-danger" role="alert">Error al guardar el producto</div>';
        }
        $guardar_producto = null;

    }else{
        echo '<div class="alert alert-danger" role="alert">El producto ya existe</div>';
    }
    $check_producto = null;