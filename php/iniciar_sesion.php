<?php

    $login_usuario = $_POST['login_user'];
    $login_clave = $_POST['login_contra'];

    if($login_usuario == "" || $login_clave == ""){
        echo '<div class="alert alert-danger" role="alert">Por favor, llene todos los campos</div>';
        exit();
    }

    //verificar si el usuario existe
    $check_user = conexion();
    $check_user = $check_user->query("SELECT * FROM usuario WHERE usuario_usuario='$login_usuario'");

    if($check_user->rowCount() == 1){
        $check_user = $check_user->fetch();
        if($check_user['usuario_usuario']==$login_usuario && $check_user['clave_usuario']==$login_clave){
               $_SESSION['id'] = $check_user['id_usuario'];
               $_SESSION['nombre'] = $check_user['nombre_usuario'];
               $_SESSION['apellido'] = $check_user['apellido_usuario'];
               $_SESSION['usuario'] = $check_user['usuario_usuario'];

               if(headers_sent()){
                     echo "<script>window.location.href='./index.php?vista=home'</script>";
               }else{
                        header("Location: ./index.php?vista=home");
               }

        }else {
            echo '<div class="alert alert-danger" role="alert">Contraseña incorrecta</div>';
        }
    }else{
        echo '<div class="alert alert-danger" role="alert">El usuario no existe</div>';
    }
    $check_user = null;