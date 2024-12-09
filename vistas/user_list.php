<div class="container">
<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nombre</th>
      <th scope="col">Apellido</th>
      <th scope="col">Usuario</th>
      <th scope="col">Correo</th>
      <th scope="col">Acciones</th>
    </tr>
  </thead>
  <tbody>
    <?php 
    include './php/main.php';
    include './php/eliminar_usuario.php';
    $sql = conexion();
    $sql=$sql->query('SELECT * FROM usuario');
    while($datos=$sql->fetchObject()){ ?>
    <tr>
        <th scope="row"><?= $datos->id_usuario ?></th>
        <td><?= $datos->nombre_usuario ?></td>
        <td><?= $datos->apellido_usuario ?></td>
        <td><?= $datos->usuario_usuario ?></td>
        <td><?= $datos->email_usuario ?></td>
    <!--acciones -->
    <td>
        <a href="index.php?vista=user_edit&user_edit=<?=$datos->id_usuario?>" class="btn btn-warning">Editar</a>
        <a href="index.php?vista=user_list&user_del=<?=$datos->id_usuario?>" class="btn btn-danger" onclick="return confirm('¿Estás seguro de que deseas eliminar este usuario?');" >Eliminar</a>
    </td>
    </tr>
    <?php } ?>
  </tbody>
</table>

</div>