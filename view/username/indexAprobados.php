<?php 
require_once ("c://xampp/htdocs/RepasoNov/view/head/headMatriculas.php");
require_once ("c://xampp/htdocs/RepasoNov/controller/matriculasController.php");
$obj = new MatriculasController();
$rows = $obj->indexAprobados();
?>
<h2 class="text-center">Alumnos aprobados</h2>
<table class="table">
    <thead>
        <tr>
            <th scope="col">Codigo alumno</th>
            <th scope="col">Nombre</th>
            <th scope="col">Apellidos</th>
            <th scope="col">Nota final</th>
            <th scope="col">Aprobado</th>
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
        </tr>
        <?php endforeach; ?>
        <?php else: ?>
            <tr>
                <td colspan="5" class="text-center">No hay registros actualmente</td>
            </tr>
    <?php endif; ?>
    </tbody>
</table>
<?php 
require_once ("c://xampp/htdocs/RepasoNov/view/head/footerMatriculas.php");
?>