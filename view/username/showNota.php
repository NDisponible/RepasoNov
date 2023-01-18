<?php 
require_once ("c://xampp/htdocs/RepasoNov/view/head/headNota.php");
require_once ("c://xampp/htdocs/RepasoNov/controller/notasController.php");
$obj = new NotasController();
$date = $obj->show($_GET['idNota']);
?>
<h2 class="text-center">Detalles de las notas</h2>
<div class="pb3">
    <a href="indexNota.php" class="btn btn-primary">Volver</a>
    <a href="editNota.php?idNota=<?= $date[0]?>" class="btn btn-success">Actualizar</a>
    <!-- Button trigger modal -->
    <a class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal">Eliminar</a>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">¿Desea eliminar la nota?</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        Una vez eliminada no se podra recuperar la nota
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-success" data-bs-dismiss="modal">Cerrar</button>
        <a href="deleteNota.php?idNota=<?= $date[0]?>" class="btn btn-danger">Eliminar</a>
        <!--<button type="button" class="btn btn-danger">Eliminar</button>-->
      </div>
    </div>
  </div>
</div>
</div>
<table class="table container-fluid">
    <thead>
        <tr>
            <th scope ="col">Id nota</th>
            <th scope ="col">Codigo alumno</th>
            <th scope ="col">Nota 1</th>
            <th scope ="col">Nota 2</th>
            <th scope ="col">Nota 3</th>
            <th scope ="col">Nota Final</th>
            <th scope ="col">Aprobado</th>
            <th scope ="col">Suspenso</th>
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
            <td scope="col"><?= $date[7]?></td>
        </tr>
    </tbody>
</table>
<?php 
require_once ("c://xampp/htdocs/RepasoNov/view/head/footerNota.php");
?>