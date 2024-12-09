<?php
    
    if(isset($_GET['category_del'])){
        $eliminar_categoria = $_GET['category_del'];

        $check_categoria = conexion();
        $check_categoria = $check_categoria->query("SELECT * FROM categoria WHERE id_categoria = $eliminar_categoria");

        if($check_categoria->rowCount()==1){
            $eliminar_cate = conexion();
            $eliminar_cate = $eliminar_cate->prepare("DELETE FROM categoria WHERE id_categoria = :id");
            $eliminar_cate->execute(["id" => $eliminar_categoria]);
    
        if($eliminar_cate->rowCount()==1){
            echo '
            <div class="alert alert-success" role="alert">
                Categoria eliminado con éxito
            </div>
        ';
        }else{
            echo '
            <div class="alert alert-danger" role="alert">
                Ocurrio un error al eliminar la categoria
            </div>
        ';
        }
    }else{
        echo '
            <div class="alert alert-danger" role="alert">
                Categoria no existe
            </div>
        ';
    }
}
    ?>