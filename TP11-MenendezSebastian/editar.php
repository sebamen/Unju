<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel = "stylesheet" type ="text/css" href="estilos.css" media="screen">
    <title>Modifica Movimiento</title>
</head>
<body style="background-color: lightblue;">
    <?php 
        if(!isset($_GET["idmov"])){
            echo "No existe el movimiento.";
        }else{
            include("conexion.php");
            $enlace = conectar();

            $sql = "SELECT `id_mov`, `fecha`, `tipo`, `descripcion`, `monto`, `forma_de_pago`, `id_familia` FROM `movimientos` WHERE id_mov=".$_GET["idmov"].";";
            $resultado = mysqli_query($enlace,$sql);
            desconectar($enlace);
            
            if(mysqli_num_rows($resultado)<>1){
                echo "No se encontró el movimiento con ese id.";
            }else{
                $fila = mysqli_fetch_array($resultado);
        ?>
            <br><br><br><br><br>
            <div class="container center-h center-v">
                <form action="conexion.php" method="post">
                <center><h1>Edición de Movimiento</h1></center><br><br>
                <div class="form-group" style="border-top: 1px">
                    <row>
                        <label for="">ID:</label><input style="text-align:right;" size="10" type="text" name="id_movm" id="id_movm" value="<?php echo $fila["id_mov"]; ?>" readonly>
                        <label for="">Fecha:</label><input type="date" name="fecham" id="fecham" value="<?php echo $fila["fecha"]; ?>">
                    </row>
                    <br><br>
                    <row>
                        <label for="">Tipo:</label>
                            <select name="tipom" id="tipom">
                            <option value="ingreso" <?php if($fila["tipo"]=="ingreso") echo "selected"; ?>>Ingreso</option>
                            <option value="egreso" <?php if($fila["tipo"]=="egreso") echo "selected"; ?>>Egreso</option>
                        </select>
                        <label for="">Descripción:</label><input type="text" name="descripcionm" id="descripcionm" value="<?php echo mb_convert_encoding($fila["descripcion"], 'UTF-8'); ?>"><br><br>
                        <label for="">Importe:</label><input style="text-align:right;" size="8" type="number" step="0.01" name="importem" id="importem" value="<?php echo $fila["monto"]; ?>">
                    </row>
                    <br><br>
                    <row>
                        <label for="">Forma de pago:</label>
                        <select name="forpagm" id="forpagm">
                            <option value="efectivo" <?php if($fila["forma_de_pago"]=="efectivo") echo "selected"; ?>>Efectivo</option>
                            <option value="cheque" <?php if($fila["forma_de_pago"]=="cheque") echo "selected"; ?>>Cheque</option>
                            <option value="tarjeta de crédito" <?php if($fila["forma_de_pago"]=="tarjeta de crédito") echo "selected"; ?>>Tarjeta de Crédito</option>
                            <option value="transferencia bancaria" <?php if($fila["forma_de_pago"]=="transferencia bancaria") echo "selected"; ?>>Transferencia Bancaria</option>
                        </select>
                        <label for="">Familiar:</label>
                        <select name="familiarm" id="familiarm">
                            <option value="1" <?php if($fila["id_familia"]=="1") echo "selected"; ?>>Damian Suarez</option>
                            <option value="2" <?php if($fila["id_familia"]=="2") echo "selected"; ?>>Julia Zambrano</option>
                            <option value="3" <?php if($fila["id_familia"]=="3") echo "selected"; ?>>Alberto Suarez</option>
                            <option value="4" <?php if($fila["id_familia"]=="4") echo "selected"; ?>>Julia Suarez</option>
                            <option value="5" <?php if($fila["id_familia"]=="5") echo "selected"; ?>>Delia Fernández</option>
                        </select>
                    </row>
                    <br><br>
                    <button type="submit">Modificar</button>
                    <br><br>
                    <button type=""><a href='consulta.php'>Volver</a></button>
                </div>
            </form>
            </div>
        <?php
            }
        }
    ?>
</body>
</html>