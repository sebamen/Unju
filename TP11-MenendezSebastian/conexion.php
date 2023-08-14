<?php

    if(isset($_POST["fecha"])){
        alta();
    }

    if(isset($_POST["fecham"])){
        modificar();
    }

    function conectar(){
        $servidor   = "localhost";
        $usuario    = "root";
        $contraseña = "vertrigo";
        $db         = "db_movimientos";

        $enlace = mysqli_connect($servidor,$usuario,$contraseña,$db);

        if(!$enlace){
            echo mysqli_error();
            exit();
        }

        //echo "Conexión Exitosa";
        return $enlace;
    }


    function desconectar($e){
        mysqli_close($e);
    }

    function alta(){
        $fecha = $_POST["fecha"];
        $tipo = $_POST["tipo"];
        $descripcion = $_POST["descripcion"];
        $importe = $_POST["importe"];
        $forpag = $_POST["forpag"];
        $familiar = $_POST["familiar"];

        $enlace = conectar();

        $insertar = "INSERT INTO `movimientos`(`id_mov`, `fecha`, `tipo`, `descripcion`, `monto`, `forma_de_pago`, `id_familia`) 
            VALUES (NULL,'$fecha','$tipo','$descripcion',$importe,'$forpag','$familiar')";
        $resultado = mysqli_query($enlace,$insertar);
        if($resultado){
            echo "Movimiento ingresado.<br><button type=''><a href='consulta.php'>Volver</a></button>";
        }else{
            echo "No pudo ingresarse el movimiento.<br><button type=''><a href='consulta.php'>Volver</a></button>";
        }
        desconectar($enlace);

    }

    function modificar(){
        $idmov = $_POST["id_movm"];
        $fecha = $_POST["fecham"];
        $tipo = $_POST["tipom"];
        $descripcion = $_POST["descripcionm"];
        $importe = $_POST["importem"];
        $forpag = $_POST["forpagm"];
        $familiar = $_POST["familiarm"];

        $enlace = conectar();

        $update_mov = "UPDATE `movimientos` SET `fecha`='$fecha',`tipo`='$tipo',`descripcion`='$descripcion',`monto`=$importe,`forma_de_pago`='$forpag',`id_familia`='$familiar' WHERE id_mov = $idmov ";
        $resultado = mysqli_query($enlace,$update_mov);
        if($resultado){
            echo "Movimiento modificado.<br><button type=''><a href='consulta.php'>Volver</a></button>";
        }else{
            echo "No se pudo modificar el movimiento.<br><button type=''><a href='consulta.php'>Volver</a></button>";
        }
        desconectar($enlace);

    }
?>