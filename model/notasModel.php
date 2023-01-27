<?php 
class NotasModel{
    private $PDO;
    public function __construct() {
        require_once("c://xampp/htdocs/RepasoNov/config/db.php");
        $con = new Db();
        $this->PDO = $con->conexion();
    }
    public function insertar($codigo,$nota1,$nota2,$nota3,$notaFinal,$aprobado,$suspenso) {
        $stament = $this->PDO->prepare("INSERT INTO notas VALUES(null,:codigo,:nota1,:nota2,:nota3,:notaFinal,:aprobado,:suspenso)");
        $stament->bindParam(":codigo",$codigo);
        $stament->bindParam(":nota1",$nota1);
        $stament->bindParam(":nota2",$nota2);
        $stament->bindParam(":nota3",$nota3);
        $stament->bindParam(":notaFinal",$notaFinal);
        $stament->bindParam(":aprobado",$aprobado);
        $stament->bindParam(":suspenso",$suspenso);
        return ($stament->execute()) ? $this->PDO->lastInsertId() : false;
    }
    public function show($idNota) {
        $stament = $this->PDO->prepare("SELECT * FROM notas where idNota = :idNota limit 1");
        $stament->bindParam(":idNota",$idNota);
        return ($stament->execute()) ? $stament->fetch() : false;
    }
    public function index() {
        $stament = $this->PDO->prepare("SELECT * FROM notas");
        return ($stament->execute()) ? $stament->fetchAll() : false;
    }
    public function update($idNota,$codigo,$nota1,$nota2,$nota3,$notaFinal,$aprobado,$suspenso) {
        $stament = $this->PDO->prepare("UPDATE notas SET codigo=:codigo, nota1=:nota1, nota2=:nota2, nota3=:nota3, notaFinal=:notaFinal, aprobado=:aprobado, suspenso=:suspenso WHERE idNota=:idNota");
        $stament->bindParam(":codigo",$codigo);
        $stament->bindParam(":nota1",$nota1);
        $stament->bindParam(":nota2",$nota2);
        $stament->bindParam(":nota3",$nota3);
        $stament->bindParam(":notaFinal",$notaFinal);
        $stament->bindParam(":aprobado",$aprobado);
        $stament->bindParam(":suspenso",$suspenso);
        $stament->bindParam(":idNota",$idNota);
        return ($stament->execute()) ? $idNota : false;
    }
}
?>