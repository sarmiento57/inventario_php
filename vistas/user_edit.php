<div class="container">
    <div class="row">
        <div class="col-md-6 offset-md-3">
            <h1>Modificar usuario</h1>
        </div>
        <div class="form-reset">

        </div>
        
        <form action="./php/update_user.php" method="POST" class="FormularioAjax">
        <?php 
        
        include './php/main.php';
        $user_edit = $_GET['user_edit'];
        $usuario_edit = conexion();
        $usuario_edit = $usuario_edit->query("SELECT * FROM usuario WHERE id_usuario = $_GET[user_edit]");   
        while($datos = $usuario_edit->fetchObject()){
        ?>
            <input type="hidden" name="user_edit" value="<?=$datos->id_usuario?>">
            <div class="form-group">
                <label>Nombre</label>
                <input type="text" name="nombre_usuario" value="<?=$datos->nombre_usuario?>" class="form-control">
                <br>
            </div>
            <div class="form-group">
                <label>Apellido</label>
                <input type="text" name="apellido_usuario" value="<?=$datos->apellido_usuario?>" class="form-control">
                <br>
            </div>
            <div class="form-group">
                <label>Usuario</label>
                <input type="text" name="usuario_usuario" value="<?=$datos->usuario_usuario?>" class="form-control">
                <br>
            </div>
            <div class="form-group">
                <label>Correo</label>
                <input type="email" name="correo_usuario" value="<?=$datos->email_usuario?>" class="form-control">
                <br>
            </div>
            <div class="form-group" >
                <button type="submit" class="btn btn-primary">Autualizar</button>
            </div>
        </form>
        <?php } ?>
    </div>
</div>