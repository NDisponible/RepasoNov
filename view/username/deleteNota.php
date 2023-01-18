<?php 
require_once ("c://xampp/htdocs/RepasoNov/controller/notasController.php");
$obj = new NotasController();
$obj->delete($_GET['idNota']);
?>