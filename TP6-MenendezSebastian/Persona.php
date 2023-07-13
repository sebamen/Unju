<?php
class Persona{
    
    private string $nombre;
    private string $apellido;
    private string $fecha_nacimiento;
    private string $direccion;
    private string $sexo;

    public function __construct($nom, $apell, $fn, $dir, $s){
        $this->nombre= $nom;
        $this->apellido= $apell;
        $this->fecha_nacimiento= $fn;
        $this->direccion= $dir;
        $this->sexo= $s;
    }

    public function imprimir(){
        return "Datos de Persona: ". $this->apellido . ", " . $this->nombre . "; " . $this->direccion. "; " . $this->fecha_nacimiento . ";" . $this->sexo . "<br>";
    }
    public function getNombre(){
        return $this->nombre;
    }
    public function setNombre($nomb){
        $this->nombre = $nomb;
    }
    public function getApellido(){
        return $this->apellido;
    }
    public function getFechaNacimiento(){
        return $this->fecha_nacimiento;
    }
    public function getSexo(){
        return $this->sexo;
    }
}
?>