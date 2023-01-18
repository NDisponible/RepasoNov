<?php 
class Db {
    private $host = "localhost";
    private $dbname = "alumnos";
    private $user = "root";
    private $password = "";
    public function conexion() {
        try {
            $PDO = new PDO("mysql:host=".$this->host.";dbname=".$this->dbname,$this->user,$this->password);
            return $PDO;
        }catch(PDOException $e) {
            return $e->getMessage();
        }
    }
}
/*$obj = new Db();
print_r($obj->conexion());*/
?>