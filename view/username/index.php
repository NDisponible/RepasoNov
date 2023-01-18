<?php 
require_once ("c://xampp/htdocs/RepasoNov/view/head/head.php");
require_once ("c://xampp/htdocs/RepasoNov/controller/usernameController.php");
$obj = new UsernameController();
$rows = $obj->index();
?>
<style>
  .active a{
    background-color: #2c3e50;
    color: #ffffff !important;
}
.main-container{
    margin: 50px auto;
    width: 80%;
}
.pagination{    
    display: flex;
    justify-content: center;
    list-style: none;
    text-align: center;
}
.pagination li a{
    border-radius: 5px;
    color: #000000;
    display: block;
    padding: 5px 10px;
    text-decoration: none;
}
.pagination li a:hover{
    background-color: rgba(0, 0, 0, 0.2);
}  
</style>
<div class="mb-3">
    <a href="/RepasoNov/view/username/create.php" class="btn btn-primary">Añadir nuevo alumno</a>
</div>
<table class="table">
    <thead>
        <tr>
            <th scope="col">Id alumno</th>
            <th scope="col">Codigo alumno</th>
            <th scope="col">Nombre</th>
            <th scope="col">Apellidos</th>
            <th scope="col">Telefono</th>
            <th scope="col">Email</th>
            <th scope="col">Direccion</th>
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
            <th>
                <a href="show.php?idAlumno=<?= $row[0]?>" class="btn btn-primary">Ver</a>
                <a href="edit.php?idAlumno=<?= $row[0]?>" class="btn btn-success">Modificar</a>
                    <!-- Button trigger modal -->
    <a href="delete.php?idAlumno" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal">Eliminar</a>

<!-- Modal -->
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
        <a href="delete.php?idAlumno=<?= $row[0]?>" class="btn btn-danger">Eliminar</a>
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
                <td colspan="7" class="text-center">No hay registros actualmente</td>
            </tr>
    <?php endif; ?>
    </tbody>
</table>
<?php 
require_once ("c://xampp/htdocs/RepasoNov/view/head/footer.php");  
?>