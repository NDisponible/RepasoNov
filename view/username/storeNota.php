<?php 
require_once ("c://xampp/htdocs/RepasoNov/controller/notasController.php");
$obj = new NotasController();
$obj->guardar($_POST['codigo'],$_POST['nota1'],$_POST['nota2'],$_POST['nota3'],$_POST['notaFinal'],$_POST['aprobado'],$_POST['suspenso']);
?>