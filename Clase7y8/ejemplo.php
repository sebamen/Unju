<?php
abstract class ClaseAbstracta{
    // Forzar la extensión de clase para definir este método
    abstract protected function getValor();
    abstract protected function valorPrefijo($prefijo);
    
    // Método común
    public function imprimir() {
        echo $this->getValor() . "<br>";
    }
}

// clase que hereda de ClaseAbstracta
class ClaseConcreta1 extends ClaseAbstracta{
    protected function getValor() {
        return "ClaseConcreta1";
    }
    
    public function valorPrefijo($prefijo) {
        return "{$prefijo}ClaseConcreta1";
    }
}

// Instanciación de Clase
    $clase1 = new ClaseConcreta1;
    $clase1->imprimir(); // uso de método que proviene de clase abstracta
    echo $clase1->valorPrefijo('FOO_') ."\n";
    
?>