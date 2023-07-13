<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Punto 4</title>
</head>
<body>
    <?php
        // spm 20230713: LLama a la cabecera
        include("cabecera.php");
        $miCabecera = new CabeceraPagina('','');
        $miCabecera->graficar('Trabajo Práctico Nº 6','center');
        $miCabecera->graficar('Puntos 4','center');
        $miCabecera->graficar('Autor: Sebastián Menéndez','center');
        // Fin cabecera
        echo "<br><br>";
        include("Informatico.php");
        $info1 = new Informatico("Juan","Castro","1979-11-21","Av. Libertad 234","Masculino","Medio tiempo","informática","2010-05-04","8");
        echo $info1->imprimir();
        echo "Sueldo:" . $info1->calcularSueldo()."<br><br>";
        include("Contable.php");
        $conta1 = new Contable("Flavia","Corradini","1984-03-01","Santo Tomé 987","Femenino","Tiempo Completo","contable","2008-11-14","8");
        echo $conta1->imprimir();
        echo "Sueldo:" . $conta1->calcularSueldo()."<br><br>";
        include("RRHH.php");
        $rrhh1 = new RRHH("Domingo","Feriado","1955-12-04","Periquito 1025 PB 3","Masculino","Medio tiempo","rrhh","1985-08-01","8");
        echo $rrhh1->imprimir();
        echo "Sueldo:" . $rrhh1->calcularSueldo()."<br><br>";
        // spm 20230713: LLama a la calse Pie de página
        echo "<br><br>";
        include("pie.php");
        $miPie = new PiePagina();
        $miPie->graficar('Fin Trabajo Práctico Nº 6','center');
        $miCabecera->graficar('Punto 4','center');
        // Fin pie
        ?>
</body>
</html>