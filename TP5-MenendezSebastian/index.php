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
        // Llamamos a la función que contiene todas las funciones PHP
        include("tp4-funciones.php");

        // isset(): Determina si una variable ha sido definida y no es nula. Devuelve FALSE en caso de le pasemos una variable sin definir, 
        // una variable definida pero sin valor o con el valor puesto a null, y en el resto de casos devuelve TRUE.
        if(isset($_POST['cadena1'])){
            $cadena1 = $_POST['cadena1'];
            if(strlen($cadena1) > 80){
                echo "'".$cadena1. "' tiene más de 80 caracteres";
            }else{
                echo "'".$cadena1. "' no tiene más de 80 caracteres";
            }
            echo "<br>";
            echo "En mayúsculas: ". strtoupper($cadena1);
            echo "<br>";
            echo "Sin espacios: ". str_replace(" ","",$cadena1);
            echo "<br>";
        }
    ?>
    <form action="#" method="post">
        <br>
        <label>1. Cadena de caracteres: </label><input type="text" name="cadena1" required>
        <input type="submit" value="Resolver">
    </form>
    <hr><br>
    <p>
        2.<br>
        Lo que realiza el código es lo siguiente. Declara array1 con caracteres como elementos y array2 como un string vacío.<br>
        Le asigna a la variable calculo una cadena de caracteres. <br>
        Quita de la cadena calculo los caracteres que sean elementos de array1.<br>
        De la cadena que resulta, toma los dos caracteres a partir de la segunda posición y los muestra.
    </p>
    <br>
    <hr>
    <?php
        $entrada = 'juanperezcom.ar'; 
        if (strpos($entrada,'@') == false) {
            echo "3a. e-mail incorrecto, no se encuentra el símbolo @ <br>"; 
        }
        $entrada2 = '@gmail.com.ar'; 
        if (strpos($entrada2,'@') == 0) {
            echo "3b. e-mail incompleto, por favor corrija su email <br>"; 
        }
    ?>
    <br>
    <hr>
    <form action="#" method="post">
        <br>
        <label>4. Nro. de DNI: </label><input type="text" name="dni"> <!-- spm 20230623: si pongo la opción required no hace falta que controle que está vacío -->
        <input type="submit" value="Controlar">
    </form>
    <?php  if (isset($_POST['dni'])) {
        echo "a. Eliminar puntos: ". str_replace('.','',$_POST['dni']) ."  <br>";
        if(strlen(str_replace('.','',$_POST['dni']))==7) echo "b. DNI de 7 dígitos: Trámite para jubilación <br>"; 
        if(empty($_POST['dni'])) echo "c. DNI es obligatorio y no puede estar en blanco <br>"; //spm 20230623: si pongo la opción required en el input no hace falta que controle que está vacío
        }
    ?>
    <hr><br>
    <?php
        $ciudades = array('Buenos Aires', 'Nueva York', 'Montevideo'); 
        echo "5. <br>Ciudades: ";
        echo print_r($ciudades)."<br><br>";
        echo "Ciudades sin espacios: ". cadena_sin_espacios($ciudades) ."<br>"; 
    ?>
    <br>
    <hr>
    
    <?php
        // spm 20230622: LLama al pie de página
        include("pie.php");
    ?>
</body>
</html>