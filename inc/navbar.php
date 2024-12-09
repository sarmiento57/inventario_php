<!-- navbar -->

<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="index.php?vista=home">CRUD</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav"
        aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ml-auto">
            <div class="btn-group me-3" role="group">
                <button type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                Usuario
                </button>
                <ul class="dropdown-menu">
                <a class="nav-link" href="index.php?vista=user_new">Nuevo usuario</a>
                <a class="nav-link" href="index.php?vista=user_list">Lista usuario</a>
                </ul>
            </div>
            <div class="btn-group me-3" role="group">
                <button type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                Categoria
                </button>
                <ul class="dropdown-menu">
                <a class="nav-link" href="index.php?vista=category_new">Nueva categoria</a>
                <a class="nav-link" href="index.php?vista=category_list">Lista categoria</a>
                </ul>
            </div>
            <div class="btn-group" role="group">
                <button type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                Producto
                </button>
                <ul class="dropdown-menu">
                <a class="nav-link" href="index.php?vista=product_new">Nuevo producto</a>
                <a class="nav-link" href="index.php?vista=product_list">Lista producto</a>
                <a class="nav-link" href="index.php?vista=product_list_category">Lista por categoria</a>
                </ul>
            </div>        
        </ul>
    </div>
    <?php echo $_SESSION['nombre']. " ". $_SESSION['apellido'];?>
    <ul class="navbar-nav ml-auto">
        <li class="nav-item">
            <a class="nav-link" href="index.php?vista=logout">Cerrar Sesión</a>
        </li>
    </ul>
</nav>