<?php 
class MatriculasController{
    private $model;
    public function __construct() {
        require_once("c://xampp/htdocs/RepasoNov/model/matriculasModel.php");
        $this->model = new MatriculasModel();
    }
    public function index() {
        return ($this->model->index()) ? $this->model->index() : false;
    }
    public function indexAprobados() {
        return ($this->model->indexAprobados()) ? $this->model->indexAprobados() : false;
    }
    public function indexSuspensos() {
        return ($this->model->indexSuspensos()) ? $this->model->indexSuspensos() : false;
    }
}
?>