<?php
require_once("Empleado.php");
class Informatico extends Empleado{
    
    private int $basico=200000;
    private int $aplicaciones;

    public function __construct($nom, $apell, $fn, $dir, $s, $disp, $pues, $fi, $ap){
        parent::__construct($nom, $apell, $fn, $dir, $s, $disp, $pues, $fi);
        $this->aplicaciones = $ap;
    }
    public function Sueldo(){
        $calculo = $this->basico;
        if($this->aplicaciones<6){
            $calculo += 10000;
        }else{
            $calculo += 20000;
        }
        return $calculo;
    } 
}
?>