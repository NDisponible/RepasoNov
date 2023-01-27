<?php 
require_once ("c://xampp/htdocs/RepasoNov/view/head/head.php");
?>
<form action="store.php" method="POST" autocomplete="off">
<div class="mb-3">
    <label for="exampleInputCodigo" class="form-label">Codigo</label>
    <input type="number" name="codigo" required class="form-control" id="exampleInputCodigo" aria-describedby="codigoHelp">
    </div>
  <div class="mb-3">
    <label for="exampleInputNombre" class="form-label">Nombre</label>
    <input type="text" name="nombre" required class="form-control" id="exampleInputNombre" aria-describedby="nombrelHelp">
  </div>
  <div class="mb-3">
    <label for="exampleInputApellidos" class="form-label">Apellidos</label>
    <input type="text" name="apellidos" required class="form-control" id="exampleInputApellidos" aria-describedby="apellidoslHelp">
  </div>
  <div class="mb-3">
    <label for="exampleInputTelefono" class="form-label">Telefono</label>
    <input type="number" name="telefono" required class="form-control" id="exampleInputTelefono" aria-describedby="telefonolHelp">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email</label>
    <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="exampleInputDireccion" class="form-label">Direccion</label>
    <input type="text" name="direccion" class="form-control" id="exampleInputDireccion" aria-describedby="direccionlHelp">
  </div>
  <div class="mb-3">
    <label for="exampleInputIdNota" class="form-label">Id nota</label>
    <input type="number" name="idNota" class="form-control" id="exampleInputIdNota" aria-describedby="idNotalHelp">
  </div>
  <div class="mb-3">
    <label for="exampleInputIdMatriculas" class="form-label">Id matriculas</label>
    <input type="number" name="idMatriculas" class="form-control" id="exampleInputIdMatriculas" aria-describedby="idMatriculaslHelp">
  </div>
  <button type="submit" class="btn btn-primary">Guardar</button>
  <a class="btn btn-danger" href="index.php">Cancelar</a>
</form>
<?php 
require_once ("c://xampp/htdocs/RepasoNov/view/head/footer.php");
?>