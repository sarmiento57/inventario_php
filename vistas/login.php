<div class="container">
    <h1 class="text-center">Iniciar Sesión</h1>
    <div class="container">
    <form class="box login" action="" method="POST">
        <div class="form-group">
            <label>Usuario</label>
            <input type="text" class="form-control" name="login_user" placeholder="Usuario">
        </div>
        <div class="form-group">
            <label>Contraseña</label>
            <input type="password" class="form-control" name="login_contra" placeholder="Contraseña">
        </div>
        <button type="submit" class="btn btn-primary">Ingresar</button>
        <?php
            if(isset($_POST["login_user"]) && isset($_POST["login_contra"])){
                require_once './php/main.php';
                require_once './php/iniciar_sesion.php';
            }
        ?>
    </form>
    </div>
</div>