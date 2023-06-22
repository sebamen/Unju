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
// Paso por valor del parámetro.
function agregar($string) {
	$string .= ' y algo más.';
}
$str = 'Esto es una cadena, '; 
agregar($str);
echo $str."<br/>"; // Escribe 'Esto es una cadena, '

// Paso por referencia del parámetro.
function agregarporreferencia(&$str) {
	$str .= ' y algo más.';
}
agregarporreferencia($str);
echo($str); // Escribe 'Esto es una cadena, y algo más.'
?>	
</body>
</html>
