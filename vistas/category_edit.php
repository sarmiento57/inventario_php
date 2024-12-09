<div class="container">
    <div class="row">
        <div class="col-md-6 offset-md-3">
            <h1 class="text-center">Editar Categoria</h1>
        </div>
        <div class="form-reset">
        
        </div>
        <form action="./php/update_category.php" method="POST" class="FormularioAjax">
            <?php 
                include './php/main.php';
                $category_edit=$_GET['category_edit'];    
                $categoria_lista=conexion();
                $categoria_lista=$categoria_lista->query('SELECT * FROM categoria WHERE id_categoria='.$category_edit.'');

                while($datos_categoria=$categoria_lista->fetchObject()){ ?>

            <input type="hidden" name="id_categoria" value="<?=$datos_categoria->id_categoria?>">
            <div class="form-group">
                <label>Nombre</label>
                <input type="text" name="nombre_categoria" class="form-control" value="<?=$datos_categoria->nombre_categoria?>">
                <br>
            </div>
            <div class="form-group">
                <label>Ubicacion</label>
                <input type="text" name="ubicacion_categoria" class="form-control" value="<?=$datos_categoria->ubicacion_categoria?>">
                <br>
            </div>
            <div class="form-group" >
                <button type="submit" class="btn btn-primary">Actualizar</button>
            </div>
            <?php } ?>
        </form>
    </div>
</div>