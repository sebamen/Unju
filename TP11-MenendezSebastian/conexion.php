<?php

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
?>