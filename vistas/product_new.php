<div class="container">
    <h1 class="title text-center">Nuevo producto</h1>

    <?php
    include './php/main.php';
    ?>

    <div class="form-reset">
        
    </div>

    <form class="FormularioAjax" action="./php/guardar_producto.php" method="POST" enctype="multipart/form-data">
        <div class="form-group">
            <label for="nombre">Nombre</label>
            <input type="text" name="nombre_producto" class="form-control" required >
        </div>
        <div class="form-group">
            <label for="descripcion">Descripción</label>
            <input type="text" name="descripcion_producto" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="stock">Stock</label>
            <input type="number" name="stock_producto" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="codigo">Codigo de barra</label>
            <input type="number" name="codigo_producto" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="precio">Precio</label>
            <input type="number" name="precio_producto" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="categoria">Categoria</label>
            <div class="select is-rounded">
                <select name="categoria_producto" class="form-control" required>
                    <option value="" select="">Seleccione una categoria</option>
                    <?php
                    $check_categoria = conexion();
                    $check_categoria = $check_categoria->query('SELECT * FROM categoria');
                    if($check_categoria->rowCount()>0){
                        $check_categoria=$check_categoria->fetchAll();
                        foreach($check_categoria as $categorias){
                            echo '<option value="'.$categorias['id_categoria'].'">'.$categorias['nombre_categoria'].'</option>';
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