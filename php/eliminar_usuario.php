<?php
if(isset($_GET['user_del'])){
    $user_del = $_GET['user_del'];

    $check_user = conexion();
    $check_user = $check_user->query("SELECT * FROM usuario WHERE id_usuario = $user_del");

    if($check_user->rowCount()==1){
    $eliminar_usuario = conexion();
    $eliminar_usuario = $eliminar_usuario->prepare("DELETE FROM usuario WHERE id_usuario = :id");
    $eliminar_usuario->execute(["id" => $user_del]);

    if($eliminar_usuario->rowCount()==1){
        echo '
        <div class="alert alert-success" role="alert">
            Usuario eliminado con éxito
        </div>
        ';
    } else {
        echo '
        <div class="alert alert-danger" role="alert">
            Error al eliminar el usuario
        </div>
        ';
    }
    $eliminar_usuario = null;
    } else {
        echo '
        <div class="alert alert-danger" role="alert">
            El usuario no existe
        </div>
        ';
    }
    $check_user = null;    
}
