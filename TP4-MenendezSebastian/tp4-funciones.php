<?php
// Calcula le producto de 2 parametros pasados por valor
function producto($v1, $v2){
    $calc = $v1*$v2;
    return $calc;
}

// Calcula si un valor pasado como parámetro es par o impar. Utiliza la función Módulo
function par_impar($v1){
    if($v1 % 2 != 0){
        echo "El nro $v1 es impar";
    } else {
        echo "El nro $v1 es par";
    }
}

// spm 20230610: Calcula la suma de los entreos positivos hasta un número ($v1).
function sumatoria($v1){
    return  ($v1/2) * (1 + $v1) ;
}

function mayusculas($cadena){
    return strtoupper($cadena);
}

// spm 20230610: Calcula el perímetro y la superficie de un cuadrado en base al valor del lado ($v1).
function perim_super($v1){
    $valores = array();
    $valores['perimetro'] = $v1 * 4;
    $valores['superficie'] = $v1 * $v1;
    return  ($valores) ;
}

// spm 20230623: Agrego la función que solicita el punto 5 del TP4
function cadena_sin_espacios($ciudades){
    return str_replace(" ","",implode($ciudades));
}
?>