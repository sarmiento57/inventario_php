<?php 
    if(isset($_GET['product_del'])){
        $product_del = $_GET['product_del'];

        $check_producto = conexion();
        $check_producto = $check_producto->query("SELECT * FROM producto WHERE id_producto = '$product_del'");

        if($check_producto->rowCount()==1){
            $eliminar_producto = conexion();
            $eliminar_producto = $eliminar_producto->prepare("DELETE FROM producto WHERE id_producto = :id_producto");
            $eliminar_producto->execute(["id_producto" => $product_del]);

            if($eliminar_producto->rowCount()== 1){
                echo '<div class="alert alert-success" role="alert">Producto eliminado</div>';
            }else{
                echo '<div class="alert alert-danger" role="alert">Error al eliminar el producto</div>';
            }
            $eliminar_producto = null;
        }else{
            echo '<div class="alert alert-danger" role="alert">El producto no existe</div>';
        }
        $check_producto = null;
    }

?>