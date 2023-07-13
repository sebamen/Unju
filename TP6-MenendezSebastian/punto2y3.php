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
        // spm 20230713: LLama a la cabecera
        include("cabecera.php");
        $miCabecera = new CabeceraPagina('','');
        $miCabecera->graficar('Trabajo Práctico Nº 6','center');
        $miCabecera->graficar('Puntos 2 y 3','center');
        $miCabecera->graficar('Autor: Sebastián Menéndez','center');
        // Fin cabecera

        echo "<br><br><br>";
        include("Postulante.php");
        include("Empleado.php");
        $postulante =new Postulante("Sebastián","Menéndez","1972-03-13","Av. Carlos Calvo 3643","Masculino","Tiempo completo","informática","cv.pdf");
        echo $postulante->imprimir();
        echo "Edad: " . $postulante->edad() . "<br>";
        $empleado = new Empleado("Juan Carlos","Heredia","1999-10-23","Av. Córdoba 988","Masculino","Medio tiempo","contable","2014-08-24");
        echo $empleado->imprimir();
        echo "Antiguedad: ".$empleado->antiguedad() . "<br>";
        //Punto 3
        echo Empleado::puestos();
        echo "<br><br><br>";

        // spm 20230713: LLama a la calse Pie de página
        include("pie.php");
        $miPie = new PiePagina();
        $miPie->graficar('Fin Trabajo Práctico Nº 6','center');
        $miCabecera->graficar('Puntos 2 y 3','center');
        // FIn pie
    ?>
</body>
</html>