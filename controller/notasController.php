<?php 
class NotasController{
    private $model;
    public function __construct() {
        require_once("c://xampp/htdocs/RepasoNov/model/notasModel.php");
        $this->model = new NotasModel();
    }
    public function guardar($codigo,$nota1,$nota2,$nota3,$notaFinal,$aprobado,$suspenso) {
        $idNota = $this->model->insertar($codigo,$nota1,$nota2,$nota3,$notaFinal,$aprobado,$suspenso);
        return ($idNota!=false) ? header("Location:showNota.php?idNota=".$idNota) : header("Location:createNota.php");
    }
    public function show($idNota) {
        return ($this->model->show($idNota)!=false) ? $this->model->show($idNota) : header("Location:indexNota.php");
    }
    public function index() {
        return ($this->model->index()) ? $this->model->index() : false;
    }
    public function update($idNota,$codigo,$nota1,$nota2,$nota3,$notaFinal,$aprobado,$suspenso) {
        return($this->model->update($idNota,$codigo,$nota1,$nota2,$nota3,$notaFinal,$aprobado,$suspenso) != false) ? header("Location:showNota.php?idNota=".$idNota) : header("Location:indexNota.php");
    }
}
?>