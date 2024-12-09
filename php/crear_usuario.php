<?php
    require_once "../php/main.php";

    $nombre = $_POST['nombre_usuario'];
    $apellido = $_POST['apellido_usuario'];
    $usuario = $_POST['usuario_usuario'];
    $email = $_POST['correo_usuario'];
    $clave = $_POST['contrasena_usuario'];

    if($nombre=="" || $apellido=="" || $usuario=="" || $clave==""){
        echo '<div class="alert alert-danger" role="alert">
        Los campos no pueden estar vacíos
        </div>';
    }

    //guardar datos en la base de datos
    $guardar_usuario = conexion();
    $marcadores_usuario = [
        'nombre' => $nombre,
        'apellido'=> $apellido,
        'usuario'=> $usuario,
        'email'=> $email,
        'clave'=> $clave
    ];
    $guardar_usuario=$guardar_usuario->prepare('INSERT INTO usuario (nombre_usuario, apellido_usuario, usuario_usuario, email_usuario, clave_usuario) VALUES (:nombre, :apellido, :usuario, :email, :clave)');

    $guardar_usuario->execute($marcadores_usuario);

    if($guardar_usuario->rowCount()>=0){
        echo '
        <div class="alert alert-success" role="alert">
            Usuario guardado con éxito
        </div>';
        
    } else{
        echo '
        <div class="alert alert-danger" role="alert">
            Error al guardar el usuario
        </div>';
    }

    $guardar_usuario = null;
?>