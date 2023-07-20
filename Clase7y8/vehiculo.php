<?php
interface Maquina {
    public function getCombustible();
}

interface Vehiculo{
    public function getRuedas();
}

class Auto implements Maquina, Vehiculo {
    public function getCombustible() {
        return ["Nafta", "Gasoil", "Electricidad", "Híbrido"];
    }
    
    public function getRuedas() {
        return 4;
    }
}

$car1 = new Auto();
echo "# de Ruedas: " . $car1->getRuedas() . "<br>"; // 4
echo "Tipos de combustible: " . implode(', ', $car1->getCombustible()); // Gasoline, Gasoil, Electricity, Hybrid

?>