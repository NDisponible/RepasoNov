<?php 
require_once ("c://xampp/htdocs/RepasoNov/view/head/head.php");
require_once ("c://xampp/htdocs/RepasoNov/controller/usernameController.php");
$obj = new UsernameController();
$user = $obj->show($_GET['idAlumno']);
?>
<form action="update.php" method="POST" autocomplete="off">
    <h2>Actualizando registro</h2>
  <div class="staticId mb-3 row">
    <label for="staticId" class="col-sm-2 col-form-label">ID <?= $user[0]?></label>
  </div>
  <div class="mb-3 row">
    <label for="inputCodigo" class="col-sm-2 col-form-label">Codigo alumno</label>
    <div class="col-sm-10">
      <input type="number" name="codigo" class="form-control" id="inputCodigo" value="<?= $user[1]?>">
    </div>
  </div>
  <div class="mb-3 row">
    <label for="inputNombre" class="col-sm-2 col-form-label">Nombre</label>
    <div class="col-sm-10">
      <input type="text" name="nombre" class="form-control" id="inputNombre" value="<?= $user[2]?>">
    </div>
  </div>
  <div class="mb-3 row">
    <label for="inputApellidos" class="col-sm-2 col-form-label">Apellidos</label>
    <div class="col-sm-10">
      <input type="text" name="apellidos" class="form-control" id="inputApellidos" value="<?= $user[3]?>">
    </div>
  </div>
  <div class="mb-3 row">
    <label for="inputTelefono" class="col-sm-2 col-form-label">Telefono</label>
    <div class="col-sm-10">
      <input type="number" name="telefono" class="form-control" id="inputTelefono" value="<?= $user[4]?>">
    </div>
  </div>
  <div class="mb-3 row">
    <label for="inputEmail" class="col-sm-2 col-form-label">Email</label>
    <div class="col-sm-10">
      <input type="text" name="email" class="form-control" id="inputEmail" value="<?= $user[5]?>">
    </div>
  </div>
  <div class="mb-3 row">
    <label for="inputDireccion" class="col-sm-2 col-form-label">Direccion</label>
    <div class="col-sm-10">
      <input type="text" name="direccion" class="form-control" id="inputDireccion" value="<?= $user[6]?>">
    </div>
  </div>
  <div>
    <input type="submit" class="btn btn-success" value="Actualizar">
    <a class="btn btn-danger" href="show.php?idAlumno=<? $user[0]?>">Cancelar</a>
  </div>
</form>
<?php 
require_once ("c://xampp/htdocs/RepasoNov/view/head/footer.php");
?>