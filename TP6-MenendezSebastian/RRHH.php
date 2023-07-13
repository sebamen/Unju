<?php
require_once("Empleado.php");
class RRHH extends Empleado{
    
    private int $basico=300000;
    private int $proyectos;

    public function __construct($nom, $apell, $fn, $dir, $s, $disp, $pues, $fi, $ap){
        parent::__construct($nom, $apell, $fn, $dir, $s, $disp, $pues, $fi);
        $this->proyectos = $ap;
    }
    public function calcularSueldo(){
        $calculo = $this->basico;
        if($this->proyectos<6){
            $calculo += 20000;
        }else{
            $calculo += 30000;
        }
        return $calculo;
    } 
}
?>