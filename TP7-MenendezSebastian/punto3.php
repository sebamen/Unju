<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Punto 1 TP7</title>
</head>
<body>
    <?php
        // spm 20230718: LLama a la cabecera
        include("cabecera.php");
        $miCabecera = new CabeceraPagina('','');
        $miCabecera->graficar('Trabajo Práctico Nº 7','center');
        $miCabecera->graficar('Punto 3 - Interfaces y Clases abstractas','center');
        $miCabecera->graficar('Autor: Sebastián Menéndez','center');
        echo "<br><br><br><br><br>"; 
        
        interface EncenderApagar {
            public function encender();
            public function apagar();
        }
        
        interface GPS {
            public function obtenerCoordenadas();
            public function indicarLlegada();
        }
        
        interface Radio {
            public function sintonizarAM();
            public function sintonizarFM();
        }
        
        abstract class Dispositivo implements EncenderApagar {
        }
        
        class Smartphone extends Dispositivo implements GPS, Radio {
            public function encender() {
                return "Encendiendo Smartphone";
            }
            public function apagar() {
                return "Apagando  Smartphone";
            }
            public function obtenerCoordenadas(){
                return "Obteniendo coordenadas Smartphone";
            }
            public function indicarLlegada(){
                return "Indicando llegada Smartphone";
            }
            public function sintonizarAM(){
                return "Sintoniza AM Smartphone";
            }
            public function sintonizarFM(){
                return "Sintoniza FM Smartphone";
            }
        }
        
        class Smartwatch extends Dispositivo implements GPS {
            public function encender() {
                return "Encendiendo Smartwatch";
            }
            public function apagar() {
                return "Apagando  Smartwatch";
            }
            public function obtenerCoordenadas(){
                return "Obteniendo coordenadas Smartwatch";
            }
            public function indicarLlegada(){
                return "Indicando llegada Smartwatch";
            }
        }

        class Notebook extends Dispositivo implements Radio {
            public function encender() {
                return "Encendiendo Notebook";
            }
            public function apagar() {
                return "Apagando  Notebook";
            }
            public function sintonizarAM(){
                return "Sintoniza AM Notebook";
            }
            public function sintonizarFM(){
                return "Sintoniza FM Notebook";
            }
        }
        
        $phone1 = new Smartphone();
        echo "Smartphone: " . $phone1->encender() . "<br>";
        echo "Smartphone: " . $phone1->apagar() . "<br>";
        echo "Smartphone: " . $phone1->obtenerCoordenadas() . "<br>";
        echo "Smartphone: " . $phone1->indicarLlegada() . "<br>";
        echo "Smartphone: " . $phone1->sintonizarAM() . "<br>";
        echo "Smartphone: " . $phone1->sintonizarFM() . "<br>";

        echo "<br><br>"; 
           
        $watch1 = new Smartwatch();
        echo "Smartwatch: " . $watch1->encender() . "<br>";
        echo "Smartwatch: " . $watch1->apagar() . "<br>";
        echo "Smartwatch: " . $watch1->obtenerCoordenadas() . "<br>";
        echo "Smartwatch: " . $watch1->indicarLlegada() . "<br>";

        echo "<br><br>"; 

        $note1 = new Notebook();
        echo "Notebook: " . $note1->encender() . "<br>";
        echo "Notebook: " . $note1->apagar() . "<br>";
        echo "Notebook: " . $note1->sintonizarAM() . "<br>";
        echo "Notebook: " . $note1->sintonizarFM() . "<br>";

        echo "<br><br><br><br><br>"; 

        // spm 20230718: LLama a la calse Pie de página
        include("pie.php");
        $miPie = new PiePagina();
        $miPie->graficar('Fin Trabajo Práctico Nº 7','center');
        $miCabecera->graficar('Punto 3','center');
    ?>
</body>
</html>