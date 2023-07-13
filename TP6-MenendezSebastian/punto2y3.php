<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Punto 2 TP6</title>
</head>
<body>
    <?php
    //Punto2
    include("Postulante.php");
    include("Empleado.php");
    $postulante =new Postulante("Diego Darío","Gómez","1987-05-13","Av. Villafañe 234","Masculino","Tiempo completo","rrhh","archivo.pdf");
    echo $postulante->imprimir();
    echo "Edad: " . $postulante->edad() . "<br>";
    $empleado = new Empleado("Leonardo","Ferrufino","1900-07-03","Av. Libertad 234","Masculino","Medio tiempo","informática","2010-05-04");
    echo $empleado->imprimir();
    echo "Antiguedad: ".$empleado->antiguedad() . "<br>";
    //Punto 3
    echo "<br>";
    echo Empleado::puestos();
    ?>
</body>
</html>