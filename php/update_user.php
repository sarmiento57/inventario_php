<?php
    require_once "../php/main.php";

    $nombre = $_POST['nombre_usuario'];
    $apellido = $_POST['apellido_usuario'];
    $usuario = $_POST['usuario_usuario'];
    $email = $_POST['correo_usuario'];
    $user_edit = $_POST['user_edit'];
    
    if($nombre=="" || $apellido=="" || $usuario==""){
        echo '<div class="alert alert-danger" role="alert">
        Los campos no pueden estar vacíos
        </div>';
    }

    $check_user = conexion();
    $check_user = $check_user->query("SELECT * FROM usuario WHERE id_usuario = $user_edit");

    if($check_user->rowCount()==1){
        //guardar datos en la base de datos
    $guardar_usuario = conexion();
    $marcadores_usuario = [
        'nombre' => $nombre,
        'apellido'=> $apellido,
        'usuario'=> $usuario,
        'email'=> $email
        
    ];
    $guardar_usuario=$guardar_usuario->prepare("UPDATE usuario SET nombre_usuario = :nombre, apellido_usuario = :apellido, usuario_usuario = :usuario, email_usuario = :email WHERE id_usuario = $user_edit");

    $guardar_usuario->execute($marcadores_usuario);

    if($guardar_usuario->rowCount()==1){
        echo '
        <div class="alert alert-success" role="alert">
            Usuario actualizado correctamente
        </div>';
        
    } else{
        echo '
        <div class="alert alert-danger" role="alert">
            Error al actualizar el usuario
        </div>';
    }

    $guardar_usuario = null;
    }
    else{
        echo '
        <div class="alert alert-danger" role="alert">
            El usuario no existe
        </div>';
    }
    $check_user = null;
?>