<?php 
require_once ("c://xampp/htdocs/RepasoNov/view/head/headNota.php");
?>
<form action="storeNota.php" method="POST" autocomplete="off">
<div class="mb-3">
    <label for="exampleInputCodigo" class="form-label">Codigo alumno</label>
    <input type="number" name="codigo" required class="form-control" id="exampleInputCodigo" aria-describedby="codigoHelp">
    </div>
<div class="mb-3">
    <label for="exampleInputNota1" class="form-label">Nota 1</label>
    <input type="number" name="nota1" required class="form-control" id="exampleInputNota1" aria-describedby="nota1Help" step="0.01" oninput="calcular();">
    </div>
  <div class="mb-3">
    <label for="exampleInputNota2" class="form-label">Nota 2</label>
    <input type="number" name="nota2" required class="form-control" id="exampleInputNota2" aria-describedby="nota2Help" step="0.01" oninput="calcular();">
  </div>
  <div class="mb-3">
    <label for="exampleInputNota3" class="form-label">Nota 3</label>
    <input type="number" name="nota3" required class="form-control" id="exampleInputNota3" aria-describedby="nota3Help" step="0.01" oninput="calcular();">
  </div>
  <div class="mb-3">
    <label for="exampleInputNotaFinal" class="form-label">Nota final</label>
    <input type="number" name="notaFinal" class="form-control" id="exampleInputNotaFinal" step="0.01" aria-describedby="notaFinalHelp"> 
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
<script>
  function calcular() {
    try {
    var v1 = parseFloat(document.getElementById("exampleInputNota1").value) || 0;
    var v2 = parseFloat(document.getElementById("exampleInputNota2").value) || 0;
    var v3 = parseFloat(document.getElementById("exampleInputNota3").value) || 0;
    var vf = document.getElementById("exampleInputNotaFinal").value = (v1+v2+v3)/3;
    //if (vf >= 5) { 
          //var aprobado = document.getElementById("exampleInputAprobado").value = "X";
          //document.getElementById("exampleInputSuspenso").style.display = "none";
    //} else {
          //var suspenso = document.getElementById("exampleInputSuspenso").value = "X";
    //}
    switch(vf) {
      case (vf>=5):
        var aprobado = document.getElementById("exampleInputAprobado").value = "X";
        document.getElementById("exampleInputSuspenso").style.display = "none";
        break;
        case (vf<5): 
        var suspenso = document.getElementById("exampleInputSuspenso").value = "X";
        break;
        default:
        var aprobado = document.getElementById("exampleInputAprobado").value = "X"; 
        //var suspenso = document.getElementById("exampleInputSuspenso").value = "X";
    }
    } catch(e) {}  
}
</script>
<?php 
require_once ("c://xampp/htdocs/RepasoNov/view/head/footerNota.php");
?>