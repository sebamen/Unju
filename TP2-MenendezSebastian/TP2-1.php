<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        //Crear un vector asociativo que almacena las claves de acceso de 5 tipos de
        //usuarios en el sistema: Administrador, Editor, Autor, Colaborador y Suscriptor.
        
        //spm 20230606: Genera el array con los tipos de usuario
        $tiposUsuarios = array(0 => "Administrador", 1 => "Editor", 2 => "Autor", 3 => "Colaborador", 4 => "Suscriptor",);

        //spm 20230606: Muestra la clave y el valor de cada elemento del array
        foreach($tiposUsuarios as $k => $v){
            echo ("clave: ".$k." valor: ".$v."<br>");
        }
    ?>
</body>
</html>