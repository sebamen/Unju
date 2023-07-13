<?php
require_once("Persona.php");
class Postulante extends Persona{
    private string $disponibilidad;
    private string $puesto;
    private string $cv;

    public function __construct($nom, $apell, $fn, $dir, $s, $disp, $pues, $c){
        parent::__construct($nom, $apell, $fn, $dir, $s);
        //$this->nombre = $nom; //no funciona
        //parent::setNombre($nom);
        $this->disponibilidad= $disp;
        $this->puesto = $pues;
        $this->cv = $c;
    }

    public function imprimir(){
        return parent::imprimir()  ."; " . $this->disponibilidad . "; " . $this->puesto . ";" . $this->cv ."<br>";  
    }
    public function imprimir2(){
        return "El postulante: ". parent::getNombre() . ", " . parent::getApellido() . " se insccribió en el puesto " . $this->puesto."<br>";
    }
    public function edad(){        
        $nacimiento = new DateTime(parent::getFechaNacimiento());
        $ahora = new DateTime(date("Y-m-d"));
        $diferencia = $ahora->diff($nacimiento);
        return $diferencia->format("%y");
    }
}

?>