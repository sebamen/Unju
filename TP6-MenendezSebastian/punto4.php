<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Punto 4</title>
</head>
<body>
    <?php
    include("Informatico.php");
    $info1 = new Informatico("Leonardo","Ferrufino","1900-07-03","Av. Libertad 234","Masculino","Medio tiempo","informática","2010-05-04","7");
    echo $info1->imprimir();
    echo "Sueldo:" . $info1->sueldo();
    ?>
</body>
</html>