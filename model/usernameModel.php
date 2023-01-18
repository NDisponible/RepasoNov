<?php 
class UsernameModel{
    private $PDO;
    public function __construct() {
        require_once("c://xampp/htdocs/RepasoNov/config/db.php");
        $con = new Db();
        $this->PDO = $con->conexion();
    }
    public function insertar($codigo,$nombre,$apellidos,$telefono,$email,$direccion,$idNota,$idMatriculas) {
        $stament = $this->PDO->prepare("INSERT INTO username VALUES(null,:codigo,:nombre,:apellidos,:telefono,:email,:direccion,:idNota,:idMatriculas)");
        $stament->bindParam(":codigo",$codigo);
        $stament->bindParam(":nombre",$nombre);
        $stament->bindParam(":apellidos",$apellidos);
        $stament->bindParam(":telefono",$telefono);
        $stament->bindParam(":email",$email);
        $stament->bindParam(":direccion",$direccion);
        $stament->bindParam(":idNota",$idNota);
        $stament->bindParam(":idMatriculas",$idMatriculas);
        return ($stament->execute()) ? $this->PDO->lastInsertId() : false;
    }
    public function show($idAlumno) {
        $stament = $this->PDO->prepare("SELECT * FROM username where idAlumno = :idAlumno limit 1");
        $stament->bindParam(":idAlumno",$idAlumno);
        return ($stament->execute()) ? $stament->fetch() : false;
    }
    public function index() {
        $stament = $this->PDO->prepare("SELECT * FROM username");
        return ($stament->execute()) ? $stament->fetchAll() : false;
    }
    public function update($idAlumno,$codigo,$nombre,$apellidos,$telefono,$email,$direccion,$idNota,$idMatriculas) {
        $stament = $this->PDO->prepare("UPDATE username SET codigo=:codigo, nombre=:nombre, apellidos=:apellidos, telefono=:telefono, email=:email, direccion=:direccion, idNota=:idNota, idMatriculas=:idMatriculas WHERE idAlumno=:idAlumno");
        $stament->bindParam(":codigo",$codigo);
        $stament->bindParam(":nombre",$nombre);
        $stament->bindParam(":apellidos",$apellidos);
        $stament->bindParam(":telefono",$telefono);
        $stament->bindParam(":email",$email);
        $stament->bindParam(":direccion",$direccion);
        $stament->bindParam(":idNota",$idNota);
        $stament->bindParam(":idMatriculas",$idMatriculas);
        $stament->bindParam(":idAlumno",$idAlumno);
        return ($stament->execute()) ? $idAlumno : false;
    }
    public function delete($idAlumno) {
        $stament = $this->PDO->prepare("DELETE FROM username WHERE idAlumno = :idAlumno");
        $stament->bindParam(":idAlumno",$idAlumno);
        return ($stament->execute()) ? true : false;
    }
}
?>