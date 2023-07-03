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
        $miCabecera->graficar('Punto 4','center');
        $miCabecera->graficar('Autor: Sebastián Menéndez','center');
        //Definimos la clase Alumno
        class Alumno{
            //Definición de atributos
            private $nombreAlumno;
            private $nota1;
            private $nota2;
            private $nota3;
            private $nota4;
            private $notaFinal;

            //Definición de Métodos
            public function __construct($nom='',$not1=0,$not2=0,$not3=0,$not4=0){
                $this->nombreAlumno=$nom;
                $this->nota1=$not1;
                $this->nota2=$not2;
                $this->nota3=$not3;
                $this->nota4=$not4;
            }
            public function getNombreAlumno(){
                return $this->nombreAlumno;
            }
            public function calcularNotaFinal(){
                $notaFinal = ($this->nota1*0.15 + $this->nota2*0.20 + $this->nota3*0.25 + $this->nota4*0.40) ;
                echo $notaFinal . "<br>";
            }
        }

        //Definición de Objeto (instancia de la clase Alumno)
        $alumno1=new Alumno("Sebastián",4,5,8,7);
        echo "<br><br><br><br><br>";
        echo "La nota de ";
        echo $alumno1->getNombreAlumno();
        echo " es : ";
        echo $alumno1->calcularNotaFinal();
        echo "<br><br><br><br><br>";
    

        // spm 20230703: Llama a la clase Pie de página
        include("pie.php");
        $miPie = new PiePagina();
        $miPie->graficar('Fin Trabajo Práctico Nº 5','center');
        $miCabecera->graficar('Punto 4','center');
    ?>
</body>
</html>