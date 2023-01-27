<?php 
require_once ("c://xampp/htdocs/RepasoNov/view/head/head.php");
require_once ("c://xampp/htdocs/RepasoNov/controller/usernameController.php");
$obj = new UsernameController();
$date = $obj->show($_GET['idAlumno']);
?>
<h2 class="text-center">Detalles del registro</h2>
<div class="pb3">
    <a href="index.php" class="btn btn-primary">Volver</a>
    <a href="edit.php?idAlumno=<?= $date[0]?>" class="btn btn-success">Actualizar</a>
    <a class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal">Eliminar</a>
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">¿Desea eliminar el registro?</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        Una vez eliminado no se podra recuperar el registro
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-success" data-bs-dismiss="modal">Cerrar</button>
        <a href="delete.php?idAlumno=<?= $date[0]?>" class="btn btn-danger">Eliminar</a>
      </div>
    </div>
  </div>
</div>
</div>
<div class="table-responsive">
<table class="table container-fluid table-hover">
    <thead>
        <tr>
            <th scope ="col">Id alumno</th>
            <th scope ="col">Codigo alumno</th>
            <th scope ="col">Nombre</th>
            <th scope ="col">Apellidos</th>
            <th scope ="col">Telefono</th>
            <th scope ="col">Email</th>
            <th scope ="col">Direccion</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td scope="col"><?= $date[0]?></td>
            <td scope="col"><?= $date[1]?></td>
            <td scope="col"><?= $date[2]?></td>
            <td scope="col"><?= $date[3]?></td>
            <td scope="col"><?= $date[4]?></td>
            <td scope="col"><?= $date[5]?></td>
            <td scope="col"><?= $date[6]?></td>
        </tr>
    </tbody>
</table>
</div>
<?php 
require_once ("c://xampp/htdocs/RepasoNov/view/head/footer.php");
?>