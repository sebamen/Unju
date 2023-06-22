<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TP2-2</title>
</head>
<body>
    <?php
        //spm 20230606: Crea un array con el nombre de las 4 imágenes que se van a usar
        $imagenes = array("imagen1.jpg","imagen2.jpg","imagen3.jpg","imagen4.jpg");


        //spm 20230606: Usa la función shuffle para mezclar los elementos del array de forma aleatoria
        shuffle($imagenes) ;

        //spm 20230606: Variable contadora para luego insertar un salto de línea cada 2 imágenes
        $zz=0;

        //spm 20230606: Recorre el array y muestra todas las imágenes del array
        foreach($imagenes as $imagen){

            //spm 20230606: Si el contador es múltiplo de 2 (par) inserta un salto de línea antes de mostrar la siguiente imagen
            if($zz % 2 == 0) echo("<br>") ;
            echo ("<img src='".$imagen."' width = '300px' >");
            $zz++;
        }
    ?>
</body>
</html>