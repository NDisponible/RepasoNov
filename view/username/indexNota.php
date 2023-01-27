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
            <th>
                <a href="showNota.php?idNota=<?= $row[0]?>" class="btn btn-primary" title="Ver"><i class="fa-regular fa-eye"></i></a>
                <a href="editNota.php?idNota=<?= $row[0]?>" class="btn btn-success" title="Actualizar"><i class="fa-regular fa-pen-to-square"></i></a>
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