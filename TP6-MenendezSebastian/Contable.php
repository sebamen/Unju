<?php
require_once("Empleado.php");
class Contable extends Empleado{
    
    private int $basico=100000;
    private int $expedientes;

    public function __construct($nom, $apell, $fn, $dir, $s, $disp, $pues, $fi, $ap){
        parent::__construct($nom, $apell, $fn, $dir, $s, $disp, $pues, $fi);
        $this->expedientes = $ap;
    }
    public function calcularSueldo(){
        $calculo = $this->basico;
        if($this->expedientes<6){
            $calculo += 50000;
        }else{
            $calculo += 80000;
        }
        return $calculo;
    } 
}
?>