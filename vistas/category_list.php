<div class="container">
<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nombre</th>
      <th scope="col">Ubicacion</th>
      <th scope="col">Acciones</th>
    </tr>
  </thead>
  <?php
    include './php/main.php';
    include './php/categoria_eliminar.php';

    $categoria_lista = conexion();
    $categoria_lista = $categoria_lista->query('SELECT * FROM categoria');

    while($datos_categoria = $categoria_lista->fetchObject()) { ?>
  <tbody>
    <tr>
        <td><?=$datos_categoria->id_categoria?></td>
        <td><?=$datos_categoria->nombre_categoria?></td>
        <td><?=$datos_categoria->ubicacion_categoria?></td>
        <td>
        <a href="index.php?vista=category_edit&category_edit=<?=$datos_categoria->id_categoria?>" class="btn btn-warning">Editar</a>
        <a href="index.php?vista=category_list&category_del=<?=$datos_categoria->id_categoria?>" class="btn btn-danger" onclick="return confirm('¿Estás seguro de que deseas eliminar este usuario?');" >Eliminar</a>
        </td>
    </tr>
  </tbody>
  <?php } ?>
</table>

</div>