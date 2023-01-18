<?php 
class MatriculasModel{
    private $PDO;
    public function __construct() {
        require_once("c://xampp/htdocs/RepasoNov/config/db.php");
        $con = new Db();
        $this->PDO = $con->conexion();
    }
    public function index() {
        $stament = $this->PDO->prepare("SELECT username.codigo,
        username.nombre, username.apellidos, notas.notaFinal, notas.aprobado, notas.suspenso
        FROM username inner join notas on username.idNota=notas.idNota");
        return ($stament->execute()) ? $stament->fetchAll() : false;
    }
    public function indexAprobados() {
        $stament = $this->PDO->prepare("SELECT username.codigo,
        username.nombre, username.apellidos, notas.notaFinal, notas.aprobado
        FROM username inner join notas on username.idNota=notas.idNota where notas.aprobado='x'");
        return ($stament->execute()) ? $stament->fetchAll() : false;
    }
    public function indexSuspensos() {
        $stament = $this->PDO->prepare("SELECT username.codigo,
        username.nombre, username.apellidos, notas.notaFinal, notas.suspenso
        FROM username inner join notas on username.idNota=notas.idNota where notas.suspenso='x'");
        return ($stament->execute()) ? $stament->fetchAll() : false;
    }
}
?>