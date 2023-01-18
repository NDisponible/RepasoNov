<?php 
require_once ("c://xampp/htdocs/RepasoNov/view/head/headNota.php");
?>
<form action="storeNota.php" method="POST" autocomplete="off">
<div class="mb-3">
    <label for="exampleInputCodigo" class="form-label">Codigo alumno</label>
    <input type="text" name="codigo" required class="form-control" id="exampleInputCodigo" aria-describedby="codigoHelp">
    </div>
<div class="mb-3">
    <label for="exampleInputNota1" class="form-label">Nota 1</label>
    <input type="text" name="nota1" required class="form-control" id="exampleInputNota1" aria-describedby="nota1Help">
    </div>
  <div class="mb-3">
    <label for="exampleInputNota2" class="form-label">Nota 2</label>
    <input type="text" name="nota2" required class="form-control" id="exampleInputNota2" aria-describedby="nota2Help">
  </div>
  <div class="mb-3">
    <label for="exampleInputNota3" class="form-label">Nota 3</label>
    <input type="text" name="nota3" required class="form-control" id="exampleInputNota3" aria-describedby="nota3Help">
  </div>
  <div class="mb-3">
    <label for="exampleInputNotaFinal" class="form-label">Nota final</label>
    <input type="text" name="notaFinal" required class="form-control" id="exampleInputNotaFinal" aria-describedby="notaFinalHelp">
  </div>
  <div class="mb-3">
    <label for="exampleInputAprobado" class="form-label">Aprobado</label>
    <input type="text" name="aprobado" class="form-control" id="exampleInputAprobado" aria-describedby="aprobadoHelp">
  </div>
  <div class="mb-3">
    <label for="exampleInputSuspenso" class="form-label">Suspenso</label>
    <input type="text" name="suspenso" class="form-control" id="exampleInputSuspenso" aria-describedby="suspensoHelp">
  </div>

  <button type="submit" class="btn btn-primary">Guardar</button>
  <a class="btn btn-danger" href="indexNota.php">Cancelar</a>
</form>
<?php 
require_once ("c://xampp/htdocs/RepasoNov/view/head/footerNota.php");
?>