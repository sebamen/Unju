<?php
require_once("Persona.php");
class Empleado extends Persona{
    private string $disponibilidad;
    private string $puesto;
    private string $fecha_ingreso;

    public function __construct($nom, $apell, $fn, $dir, $s, $disp, $pues, $fi){
        parent::__construct($nom, $apell, $fn, $dir, $s);
        $this->disponibilidad= $disp;
        $this->puesto = $pues;
        $this->fecha_ingreso = $fi;
    }

    public function imprimir(){
        return parent::imprimir()  ."; " . $this->disponibilidad . "; " . $this->puesto . ";" . $this->fecha_ingreso ."<br>";  
    }
    public function imprimir2(){
        return "El empleado: ". parent::getNombre() . ", " . parent::getApellido() . " trabaja en el puesto " . $this->puesto."<br>";
    }
    public function antiguedad(){        
        $ingreso = new DateTime($this->fecha_ingreso);
        $ahora = new DateTime(date("Y-m-d"));
        $diferencia = $ahora->diff($ingreso);
        return $diferencia->format("%y");
    }

    public static function puestos(){
        return "Puestos disponibles: informática, contable y rrhh.";
    }

    public function calcularSueldo(){
        return "50000";
    }
}

?>