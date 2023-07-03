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
        $miCabecera->graficar('Punto 1','center');
        $miCabecera->graficar('Auto: Sebastián Menéndez','center');
        //Definimos la clase Persona
        class Persona{
            //Definición de atributos
            private $nombre;
            private $apellido;
            private $edad;

            //Definición de Métodos
            public function inicializar($nom,$apell,$ed){
                $this->nombre=$nom;
                $this->apellido=$apell;
                $this->edad=$ed;
            }
            public function imprimir(){
                echo $this->nombre . "<br>";
                echo $this->apellido . "<br>";
                echo $this->edad . "<br>";
                //echo $this->nombre .", " . $this->apellido . " - " . $this->dni . "<br>";
            }
            public function setName(){
                echo strtolower($this->nombre) ;
            }
            public function getName(){
                echo ucwords($this->nombre) ;
            }
        }

        //Definición de Objeto (instancia de la clase Persona)
        $persona1=new Persona();
        $persona1->inicializar("Sebastián pablo","Menéndez",51);
        echo "<br><br><br><br><br><br><br><br>";
        echo "Nombre en minúsculas con setName: ";
        $persona1->setName();
        echo "<br><br>";
        echo "Nombre en Capital con getName: ";
        $persona1->getName();
        echo "<br><br><br><br><br><br><br><br>";
    

        // spm 20230622: LLama a la calse Pie de página
        include("pie.php");
        $miPie = new PiePagina();
        $miPie->graficar('Fin Trabajo Práctico Nº 5','center');
        $miCabecera->graficar('Punto 1','center');
    ?>
</body>
</html>