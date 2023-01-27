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
</div>
<div class="table-responsive">
<table class="table container-fluid table-hover">
    <thead>
        <tr>
            <th scope ="col">Id nota</th>
            <th scope ="col">Codigo alumno</th>
            <th scope ="col">Nota 1</th>
            <th scope ="col">Nota 2</th>
            <th scope ="col">Nota 3</th>
            <th scope ="col">Nota Final</th>
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
        </tr>
    </tbody>
</table>
</div>
<?php 
require_once ("c://xampp/htdocs/RepasoNov/view/head/footerNota.php");
?>