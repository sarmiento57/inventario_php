<div class="container">
    <?php 
    include './php/main.php';
    include './php/eliminar_producto.php'
    ?>
    <table class="table">
    <thead class="thead-dark">
        <tr>
        <th scope="#">#</th>
        <th scope="Nombre">Nombre</th>
        <th scope="Descripcion">Descripción</th>
        <th scope="Stock">Stock</th>
        <th scope="Codigo">Código</th>
        <th scope="Precio">Precio</th>
        <th scope="usuario">Usuario</th>
        <th scope="Acciones">Acciones</th>
        </tr>
    </thead>
    <?php 
        $check_producto = conexion();
        $check_producto = $check_producto->query('SELECT * FROM producto INNER JOIN usuario ON producto.id_usuario = usuario.id_usuario');
        while($datos_producto = $check_producto->fetchObject()){ ?>
    <tbody>
        <tr>
            <th><?=$datos_producto->id_producto?></th>
            <td><?=$datos_producto->nombre_producto?></td>
            <td><?=$datos_producto->descripcion_producto?></td>
            <td><?=$datos_producto->stock_producto?></td>
            <td><?=$datos_producto->codigo_producto?></td>
            <td><?=$datos_producto->precio_producto?></td>
            <td><?=$datos_producto->nombre_usuario?> <?=$datos_producto->apellido_usuario?></td>
            <td>
                <a href="./index.php?vista=product_edit&product_edit=<?=$datos_producto->id_producto?>" class="btn btn-warning">Editar</a>
                <a href="./index.php?vista=product_list&product_del=<?=$datos_producto->id_producto?>" class="btn btn-danger">Eliminar</a>
            </td>
        </tr>
    </tbody>
    <?php } ?>
    </table>
</div>