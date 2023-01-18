<?php 
require_once ("c://xampp/htdocs/RepasoNov/view/head/headNota.php");
require_once ("c://xampp/htdocs/RepasoNov/controller/notasController.php");
$obj = new notasController();
$user = $obj->show($_GET['idNota']);
?>
<form action="updateNota.php" method="POST" autocomplete="off">
    <h2>Modificando nota</h2>
  <div class="mb-3 row">
    <label for="staticId" class="col-sm-2 col-form-label">Id</label>
    <div class="col-sm-10">
      <input type="text" name="idNota" readonly class="form-control-plaintext" id="staticId" value="<?= $user[0]?>">
    </div>
  </div>
  <div class="mb-3 row">
    <label for="inputCodigo" class="col-sm-2 col-form-label">Codigo alumno</label>
    <div class="col-sm-10">
      <input type="text" name="codigo" class="form-control" id="inputCodigo" value="<?= $user[1]?>">
    </div>
  </div>
  <div class="mb-3 row">
    <label for="inputNota1" class="col-sm-2 col-form-label">Nota 1</label>
    <div class="col-sm-10">
      <input type="text" name="nota1" class="form-control" id="inputNota1" value="<?= $user[2]?>">
    </div>
  </div>
  <div class="mb-3 row">
    <label for="inputNota2" class="col-sm-2 col-form-label">Nota 2</label>
    <div class="col-sm-10">
      <input type="text" name="nota2" class="form-control" id="inputNota2" value="<?= $user[3]?>">
    </div>
  </div>
  <div class="mb-3 row">
    <label for="inputNota3" class="col-sm-2 col-form-label">Nota 3</label>
    <div class="col-sm-10">
      <input type="text" name="nota3" class="form-control" id="inputNota3" value="<?= $user[4]?>">
    </div>
  </div>
  <div class="mb-3 row">
    <label for="inputNotaFinal" class="col-sm-2 col-form-label">Nota final</label>
    <div class="col-sm-10">
      <input type="text" name="notaFinal" class="form-control" id="inputNotaFinal" value="<?= $user[5]?>">
    </div>
  </div>
  <div class="mb-3 row">
    <label for="inputAprobado" class="col-sm-2 col-form-label">Aprobado</label>
    <div class="col-sm-10">
      <input type="text" name="aprobado" class="form-control" id="inputAprobado" value="<?= $user[6]?>">
    </div>
  </div>
  <div class="mb-3 row">
    <label for="inputSuspenso" class="col-sm-2 col-form-label">Suspenso</label>
    <div class="col-sm-10">
      <input type="text" name="suspenso" class="form-control" id="inputSuspenso" value="<?= $user[7]?>">
    </div>
  </div>
  <div>
    <input type="submit" class="btn btn-success" value="Actualizar">
    <a class="btn btn-danger" href="showNota.php?idNota=<? $user[0]?>">Cancelar</a>
  </div>
</form>
<?php 
require_once ("c://xampp/htdocs/RepasoNov/view/head/footerNota.php");
?>