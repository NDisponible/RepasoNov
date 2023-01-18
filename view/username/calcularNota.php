<?php 
class Notas {
    private $nota1, $nota2, $nota3, $notafinal;
    public function __construct($n1,$n2,$n3) {
        $this->nota1=$n1;
        $this->nota2=$n2;
        $this->nota3=$n3;
    }
    public function calcularNotaFinal() {
        $this->notafinal=$this->nota1*0.25 + $this->nota2*0.5 + $this->nota3*0.25;
        return $this->notafinal;
    }
}  /*
$nota = new Notas(7,3,4);
$notafinal = $nota->calcularNotaFinal();
echo "La nota final de es: ".$notafinal;  */
?>