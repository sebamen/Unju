<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Argentina Programa - Clase 5</title>
</head>
<body>
    <?php
    //Definimos la clase Persona
    class Persona{
        //Definición de atributos
        private $nombre;
        private $apellido;
        private $dni;

        //Definición de Métodos
        public function inicializar($nom,$apell,$d){
            $this->nombre=$nom;
            $this->apellido=$apell;
            $this->dni=$d;
        }
        public function imprimir(){
            echo $this->nombre . "<br>";
            echo $this->apellido . "<br>";
            echo $this->dni . "<br>";
            //echo $this->nombre .", " . $this->apellido . " - " . $this->dni . "<br>";
        }
    }

    //Definición de Objeto (instancia de la clase Persona)
    $persona1=new Persona();
    //Llamada de Métodos
    $persona1->inicializar("Juan","Astorga","232323232");
    $persona1->imprimir();

    //Otra instancia
    $persona2=new Persona();
    $persona2->inicializar("Ana","Gimenez","565656565");
    $persona2->imprimir();

    ?>
</body>
</html>