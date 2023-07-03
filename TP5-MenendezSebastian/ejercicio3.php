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
        // spm 20230703: LLama a la cabecera
        include("cabecera.php");
        $miCabecera = new CabeceraPagina('','');
        $miCabecera->graficar('Trabajo Práctico Nº 5','center');
        $miCabecera->graficar('Punto 3','center');
        $miCabecera->graficar('Autor: Sebastián Menéndez','center');
        echo "<br><br><br><br><br>";
        echo "<br><br><br><br><br>";

        $miCabecera->graficar('Clases Cabecera y Pie','center');

        echo "<br><br><br><br><br>";
        echo "<br><br><br><br><br>";
    

        // spm 20230703: LLama a la calse Pie de página
        include("pie.php");
        $miPie = new PiePagina('','');
        $miPie->graficar('Fin Trabajo Práctico Nº 5','center');
        $miCabecera->graficar('Punto 3','center');
    ?>
</body>
</html>