<div class="container">
    <h1 class="title text-center">Editar producto</h1>
    <div class="form-reset">
        
    </div>
    <form class="FormularioAjax" action="./php/update_product.php" method="POST" enctype="multipart/form-data">
    <?php
    include './php/main.php';
    $check_producto = conexion();
    $check_producto = $check_producto->query('SELECT * FROM producto WHERE id_producto ='.$_GET['product_edit']);
    $check_producto = $check_producto->fetchObject();
    ?>
        <input type="hidden" name="id_producto" value="<?=$check_producto->id_producto?>">
        <div class="form-group">
            <label for="nombre">Nombre</label>
            <input type="text" name="nombre_producto" class="form-control" value="<?=$check_producto->nombre_producto?>" required>
        </div>
        <div class="form-group">
            <label for="descripcion">Descripción</label>
            <input type="text" name="descripcion_producto" class="form-control" value="<?=$check_producto->descripcion_producto?>" required>
        </div>
        <div class="form-group">
            <label for="stock">Stock</label>
            <input type="number" name="stock_producto" class="form-control" value="<?=$check_producto->stock_producto?>">
        </div>
        <div class="form-group">
            <label for="codigo">Codigo de barra</label>
            <input type="number" name="codigo_producto" class="form-control" value="<?=$check_producto->codigo_producto?>" required>
        </div>
        <div class="form-group">
            <label for="precio">Precio</label>
            <input type="number" name="precio_producto" class="form-control" value="<?=$check_producto->precio_producto?>" required>
        </div>
        <div class="form-group">
            <label for="categoria">Categoria</label>
            <div class="select is-rounded">
                <select name="categoria_producto" class="form-control" required>
                    <?php
                    $check_categoria = conexion();
                    $check_categoria = $check_categoria->query('SELECT * FROM categoria');
                    if($check_categoria->rowCount()>0){
                        $check_categoria=$check_categoria->fetchAll();
                        foreach($check_categoria as $categorias){
                            if($check_producto->id_categoria == $categorias['id_categoria']){
                                echo '<option value="'.$categorias['id_categoria'].'" selected="" >'.$categorias['nombre_categoria'].' (Actual)</option>';
                            } else{
                                echo '<option value="'.$categorias['id_categoria'].'">'.$categorias['nombre_categoria'].'</option>';
                            }
                            
                        }
                    }
                    ?>
                </select>
            </div>
        </div>
        <div class="form-group">
            <br>
            <button type="submit" class="btn btn-primary">Guardar</button>
        </div>
    </form>
</div>