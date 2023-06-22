<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trabajo Práctico N° 4</title>
</head>
<body>
    <?php
        // spm 20230610: LLama a la cabecera
        include("cabecera.php");
        // Llamamos a la función que contiene todas las funciones PHP
        include("tp3-funciones.php");

        // isset(): Determina si una variable ha sido definida y no es nula. Devuelve FALSE en caso de le pasemos una variable sin definir, 
        // una variable definida pero sin valor o con el valor puesto a null, y en el resto de casos devuelve TRUE.
        // empty(): Determina si la variable tiene un valor vacío, por llamarlo de alguna forma.
        if((isset($_POST['valor1']) && isset($_POST['valor2']) && !empty($_POST['valor1']) && !empty($_POST['valor2']))){
            $valor1 = $_POST['valor1'];
            $valor2 = $_POST['valor2'];
            echo "El producto de $valor1 y $valor2 es ". producto($valor1, $valor2) ."<br><br>";
            echo par_impar(producto($valor1, $valor2)) ."<br><br>";
            echo "La suma de los enteros positivos hasta ". producto($valor1, $valor2) ." es: ". sumatoria(producto($valor1, $valor2)) . "<br><br>";
        }
        else if (isset($_POST['lado'])){
            $resultado = perim_super($_POST['lado']);
        }        
        else {
            echo "Ambos números tienen que tener un valor";
        }
    ?>
    <form action="#" method="post">
        <br>
        <label>Valor 1 </label><input type="text" name="valor1" required>
        <label>Valor 2 </label><input type="text" name="valor2">
        <input type="submit" value="Calcular">
    </form>
    <hr>
    <br><br><br>
    <form action="#" method="post">
        <input type="text" name="cadena">
        <input type="submit" value="Mayúsculas">
    </form>
    <?php  if (isset($_POST['cadena'])) echo "En mayúsculas: ".mayusculas($_POST['cadena']); ?>
    <br><br><br>
    <hr>
    <form action="#" method="post">
        <label>Valor Lado </label><input type="text" name="lado">
        <input type="submit" value="Calcular">
    </form>
    <?php  if (isset($_POST['lado'])) {
        echo "Perímetro: ". $resultado['perimetro'] ,"<br>"; 
        echo "Superficie: ". $resultado['superficie']; 
        }
    ?>
    <?php
        // spm 20230611: LLama al pie de página
        include("pie.php");
    ?>
</body>
</html>