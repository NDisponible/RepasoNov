<?php 
require_once ("c://xampp/htdocs/RepasoNov/view/head/headNota.php");
require_once ("c://xampp/htdocs/RepasoNov/controller/notasController.php");
$obj = new NotasController();
$rows = $obj->index();
?>
<div class="mb-3">
    <a href="/RepasoNov/view/username/createNota.php" class="btn btn-primary">Añadir nueva nota</a>
</div>
<div class="table-responsive">
<table class="table table-hover">
    <thead>
        <tr>
            <th scope="col">Id nota</th>
            <th scope="col">Codigo alumno</th>
            <th scope="col">Nota 1</th>
            <th scope="col">Nota 2</th>
            <th scope="col">Nota 3</th>
            <th scope="col">Nota final</th>
            <th scope="col">Aprobado</th>
            <th scope="col">Suspenso</th>
            <th scope="col">Acciones</th>
        </tr>
    </thead>
    <tbody>
    <?php if($rows): ?>
        <?php foreach($rows as $row): ?>
    <tr>
            <th><?= $row[0]?></th>
            <th><?= $row[1]?></th>
            <th><?= $row[2]?></th>
            <th><?= $row[3]?></th>
            <th><?= $row[4]?></th>
            <th><?= $row[5]?></th>
            <th><?= $row[6]?></th>
            <th><?= $row[7]?></th>
            <th>
                <a href="showNota.php?idNota=<?= $row[0]?>" class="btn btn-primary">Ver</a>
                <a href="editNota.php?idNota=<?= $row[0]?>" class="btn btn-success">Modificar</a>
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
        <a href="deleteNota.php?idNota=<?= $row[0]?>" class="btn btn-danger">Eliminar</a>
        <!--<button type="button" class="btn btn-danger">Eliminar</button>-->
      </div>
    </div>
  </div>
</div>
     </th>
        </tr>
        <?php endforeach; ?>
        <?php else: ?>
            <tr>
                <td colspan="8" class="text-center">No hay notas actualmente</td>
            </tr>
    <?php endif; ?>
    </tbody>
</table>
</div>
<?php 
require_once ("c://xampp/htdocs/RepasoNov/view/head/footerNota.php");
?>