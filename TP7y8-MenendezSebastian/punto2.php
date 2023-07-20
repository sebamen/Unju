<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Punto 2 TP7</title>
</head>
<body>
    <?php
        // spm 20230718: LLama a la cabecera
        include("cabecera.php");
        $miCabecera = new CabeceraPagina('','');
        $miCabecera->graficar('Trabajo Práctico Nº 7','center');
        $miCabecera->graficar('Punto 2 - Clases abstractas (Herencia)','center');
        $miCabecera->graficar('Autor: Sebastián Menéndez','center');
        echo "<br><br><br><br><br>"; 
        
        abstract class OperacionesBasicas {
            public function sumar($num1, $num2){
                return $num1+$num2;
            }

            public function restar($num1, $num2){
                return $num1-$num2;
            }
            
            abstract public function multiplicar($num1, $num2);
            abstract public function dividir($num1, $num2);
        }
        
        class OperacionesIntermedias extends OperacionesBasicas{
            public function coseno(float $num1){
                return cos($num1);
            }

            //spm 20230718: Hay que implementar los métodos abstractos de la clase padre si o si.
            public function multiplicar($num1, $num2){
                return $num1*$num2;                
            }
            public function dividir($num1, $num2){
                return $num1/$num2;                
            }
            // Fin implementación de métodos abstractos heredados.
        }
        
        $ope1 = new OperacionesIntermedias();
        echo "Coseno (Pi): - El valor ya está en radianes:" . $ope1->coseno(M_PI) . "<br>";
            

        echo "<br><br><br><br><br>"; 
        // spm 20230718: LLama a la calse Pie de página
        include("pie.php");
        $miPie = new PiePagina();
        $miPie->graficar('Fin Trabajo Práctico Nº 7','center');
        $miCabecera->graficar('Punto 2','center');
    ?>
</body>
</html>