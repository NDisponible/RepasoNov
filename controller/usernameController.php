<?php 
class UsernameController{
    private $model;
    public function __construct() {
        require_once("c://xampp/htdocs/RepasoNov/model/usernameModel.php");
        $this->model = new UsernameModel();
    }
    public function guardar($codigo,$nombre,$apellidos,$telefono,$email,$direccion,$idNota,$idMatriculas) {
        $idAlumno = $this->model->insertar($codigo,$nombre,$apellidos,$telefono,$email,$direccion,$idNota,$idMatriculas);
        return ($idAlumno!=false) ? header("Location:show.php?idAlumno=".$idAlumno) : header("Location:create.php");
    }
    public function show($idAlumno) {
        return ($this->model->show($idAlumno)!=false) ? $this->model->show($idAlumno) : header("Location:index.php");
    }
    public function index() {
        return ($this->model->index()) ? $this->model->index() : false;
    }
    public function update($idAlumno,$codigo,$nombre,$apellidos,$telefono,$email,$direccion,$idNota,$idMatriculas) {
        return($this->model->update($idAlumno,$codigo,$nombre,$apellidos,$telefono,$email,$direccion,$idNota,$idMatriculas) != false) ? header("Location:show.php?idAlumno=".$idAlumno) : header("Location:index.php");
    }
    public function delete($idAlumno) {
        return ($this->model->delete($idAlumno)) ? header("Location:index.php") : header("Location:show.php?idAlumno=".$idAlumno);
    }
}
?>