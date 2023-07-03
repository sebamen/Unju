<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trabajo Práctico N° 5</title>
</head>
<body>
    <?php
        // spm 20230622: LLama a la cabecera
        include("cabecera.php");
        $miCabecera = new CabeceraPagina('','');
        $miCabecera->graficar('Trabajo Práctico Nº 5','center');
        $miCabecera->graficar('Punto 2','center');
        $miCabecera->graficar('Autor: Sebastián Menéndez','center');
        //Definimos la clase Empleado
        class Empleado{
            //Definición de atributos
            private $nombre;
            private $sueldo;

            //Definición de Métodos
            public function inicializar($nom,$suel){
                $this->nombre=$nom;
                $this->sueldo=$suel;
            }
            public function pagarImpuestos(){
                if($this->sueldo < 45000){
                    $resultadoImpuestos = "No debe pagar impuestos <br>";
                } else{
                    $resultadoImpuestos = "Debe pagar impuestos <br>";
                }
                echo $resultadoImpuestos . "<br>";
            }
        }

        //Definición de Objeto (instancia de la clase Persona)
        $empleado1=new Empleado();
        $empleado1->inicializar("Sebastián pablo",1000);
        echo "<br><br><br><br><br><br><br><br>";
        echo "Impuestos según sueldo del empleado: ";
        $empleado1->pagarImpuestos();
        echo "<br><br><br><br><br><br><br><br>";
    

        // spm 20230622: LLama a la calse Pie de página
        include("pie.php");
        $miPie = new PiePagina();
        $miPie->graficar('Fin Trabajo Práctico Nº 5','center');
        $miCabecera->graficar('Punto 2','center');
    ?>
</body>
</html>