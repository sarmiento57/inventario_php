<div class="container">
    <div class="row">
        <div class="col-md-6 offset-md-3">
            <h1 class="text-center">Nueva Categoria</h1>
        </div>
        <div class="form-reset">
        
        </div>
        <form action="./php/crear_categoria.php" method="POST" class="FormularioAjax">
            <div class="form-group">
                <label>Nombre</label>
                <input type="text" name="nombre_categoria" class="form-control">
                <br>
            </div>
            <div class="form-group">
                <label>Ubicacion</label>
                <input type="text" name="ubicacion_categoria" class="form-control">
                <br>
            </div>
            <div class="form-group" >
                <button type="submit" class="btn btn-primary">Guardar</button>
            </div>
        </form>
    </div>
</div>