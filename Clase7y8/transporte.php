<?php
interface Transporte {
    public function getTipo();
    public function getRuedas();
}

class Coche implements Transporte {
    public function getTipo(){
        return "Coche";
    }
    public function getRuedas(){
        return "4";
    }
}

class Moto implements Transporte {
    public function getTipo(){
        return "Moto";
    }
    public function getRuedas(){
        return "2";
    }
}


$auto1 = new Coche();
echo $auto1->getTipo() . " con " . $auto1->getRuedas() . " ruedas <br>";

$moto1 = new Moto();
echo $moto1->getTipo() . " con " . $moto1->getRuedas() . " ruedas <br>";



?>