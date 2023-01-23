<?php 
require_once ("c://xampp/htdocs/RepasoNov/controller/usernameController.php");
$obj = new UsernameController();
$obj->delete($_GET['idAlumno']);
?>