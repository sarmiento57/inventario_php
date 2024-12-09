<div class="container">
    <?php 
    include './php/main.php';
    include './php/eliminar_producto.php'
    ?>
    <div class="container">
        <h1 class="title text-center">Productos por caterogira</h1>
            <form action="" method="POST" class="d-flex align-items-center">
            <div class="col-9 me-2">
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
            <div class="col-3">
                <button type="submit" class="btn btn-primary w-100">Buscar</button>
            </div>
            </form>
    </div>
    </div>
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
        if(isset($_POST['categoria_producto']) && $_POST['categoria_producto']!="")	{
            $check_producto = $check_producto->query('SELECT * FROM producto INNER JOIN usuario ON producto.id_usuario = usuario.id_usuario WHERE producto.id_categoria = '.$_POST['categoria_producto']);

            while($datos_producto = $check_producto->fetchObject()){
                echo '
                <tbody>
                <tr>
                    <th>'.$datos_producto->id_producto.'</th>
                    <td>'.$datos_producto->nombre_producto.'</td>
                    <td>'.$datos_producto->descripcion_producto.'</td>
                    <td>'.$datos_producto->stock_producto.'</td>
                    <td>'.$datos_producto->codigo_producto.'</td>
                    <td>'.$datos_producto->precio_producto.'</td>
                    <td>'.$datos_producto->nombre_usuario.' '.$datos_producto->apellido_usuario.'</td>
                    <td>
                        <a href="./index.php?vista=product_edit&product_edit='.$datos_producto->id_producto.'" class="btn btn-warning">Editar</a>
                        <a href="./index.php?vista=product_list&product_del='.$datos_producto->id_producto.'" class="btn btn-danger">Eliminar</a>
                    </td>
                </tr>
                </tbody>';
            }
        }       
       ?>
   
    </table>
</div>