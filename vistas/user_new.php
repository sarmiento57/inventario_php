<div class="container">
    <div class="row">
        <div class="col-md-6 offset-md-3">
            <h1>Nuevo usuario</h1>
        </div>
        <div class="form-reset">
        
        </div>
        <form action="./php/crear_usuario.php" method="POST" class="FormularioAjax">
            <div class="form-group">
                <label>Nombre</label>
                <input type="text" name="nombre_usuario" class="form-control">
                <br>
            </div>
            <div class="form-group">
                <label>Apellido</label>
                <input type="text" name="apellido_usuario" class="form-control">
                <br>
            </div>
            <div class="form-group">
                <label>Usuario</label>
                <input type="text" name="usuario_usuario" class="form-control">
                <br>
            </div>
            <div class="form-group">
                <label>Correo</label>
                <input type="email" name="correo_usuario" class="form-control">
                <br>
            </div>
            <div class="form-group">
                <label>Contraseña</label>
                <input type="password" name="contrasena_usuario" class="form-control" >
                <br>
            </div>
            <div class="form-group" >
                <button type="submit" class="btn btn-primary">Guardar</button>
            </div>
        </form>
    </div>
</div>