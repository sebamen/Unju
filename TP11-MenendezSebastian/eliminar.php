<?php
    if(isset($_GET["idmov"])){
        include("conexion.php");
        $enlace=conectar();

        $sql = "DELETE FROM movimientos WHERE id_mov = ".$_GET["idmov"].";";

        $resultado = mysqli_query($enlace,$sql);
        if($resultado){
            echo "<center>Movimiento eliminado.<br><button type=''><a href='consulta.php'>Volver</a></button></center>";
        }

        desconectar($enlace);
    }else{
        echo "<center>No se pudo eliminar el movimiento.<br><button type=''><a href='consulta.php'>Volver</a></button></center>";
        exit();
    }
?>