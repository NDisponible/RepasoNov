<?php 
require_once ("c://xampp/htdocs/RepasoNov/controller/usernameController.php");
$obj = new UsernameController();
$obj = $obj->update($_POST['idAlumno'],$_POST['codigo'],$_POST['nombre'],$_POST['apellidos'],$_POST['telefono'],$_POST['email'],$_POST['direccion'],$_POST['idNota'],$_POST['idMatriculas']);
?>