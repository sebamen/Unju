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
        $miCabecera->graficar('Punto 1 - Interfaces (Herencia)','center');
        $miCabecera->graficar('Autor: Sebastián Menéndez','center');
        echo "<br><br><br><br><br>"; 
        
        interface OperacionesBasicas {
            public function sumar($num1, $num2);
            public function restar($num1, $num2);
            public function multiplicar($num1, $num2);
            public function dividir($num1, $num2);
        }
        
        interface OperacionesTrigonometricas extends OperacionesBasicas{
            public function seno(float $num1);
            public function coseno(float $num1);
        }
        
        class Calculadora implements OperacionesBasicas, OperacionesTrigonometricas {
            public function sumar($num1, $num2) {
                return $num1+$num2;
            }
            public function restar($num1, $num2) {
                return $num1-$num2;
            }
            public function multiplicar($num1, $num2) {
                return $num1*$num2;
            }
            public function dividir($num1, $num2) {
                return $num1/$num2;
            }
            public function seno($num1) {
                return sin($num1);
            }
            public function coseno($num1) {
                return cos($num1);
            }
        }
        
        $calc1 = new Calculadora();
        echo "Suma (8+5): " . $calc1->sumar(8,5) . "<br>";
        echo "Resta (8-5): " . $calc1->restar(8,5) . "<br>";
        echo "Multiplica (8*5): " . $calc1->multiplicar(8,5) . "<br>";
        echo "Divide (8/5): " . $calc1->dividir(8,5) . "<br>";
        echo "Seno (90º) - Convierto de grados a radianes: " . $calc1->seno(deg2rad(90)) . "<br>";
        echo "Coseno (Pi): - El valor ya está en radianes:" . $calc1->coseno(M_PI) . "<br>";
            

        echo "<br><br><br><br><br>"; 
        // spm 20230718: LLama a la calse Pie de página
        include("pie.php");
        $miPie = new PiePagina();
        $miPie->graficar('Fin Trabajo Práctico Nº 7','center');
        $miCabecera->graficar('Punto 1','center');
    ?>
</body>
</html>