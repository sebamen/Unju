<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movimientos</title>
</head>
<body>
    <?php
        include("conexion.php");
        $enlace = conectar();

        $sql = "SELECT m.*, f.nombre FROM movimientos AS m INNER JOIN familiares AS f ON m.id_familia = f.id_familia ";
        $resultado = mysqli_query($enlace, $sql);
        if(!$resultado){
            echo "No hay movimientos.";
        }
        else{
            /*while($fila = mysqli_fetch_assoc($resultado)){
                echo $fila["id_mov"]."<br>";
            }*/
            ?>
            <table>
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Fecha</th>
                        <th>Tipo</th>
                        <th>Descripción</th>
                        <th>Importe</th>
                        <th>Forma de Pago</th>
                        <th>Familiar</th>
                    </tr>
                </thead>
                <tbody>
                    <?php while($fila = mysqli_fetch_assoc($resultado)){ ?>
                    <tr>
                        <td style = "text-align:right"><?php echo $fila["id_mov"]."<br>"; ?></td>
                        <td><?php echo $fila["fecha"]."<br>"; ?></td>
                        <td><?php echo $fila["tipo"]."<br>"; ?></td>
                        <td><?php echo mb_convert_encoding($fila["descripcion"], 'UTF-8')."<br>"; ?></td>
                        <td><?php echo $fila["monto"]."<br>"; ?></td>
                        <td><?php echo mb_convert_encoding($fila["forma_de_pago"], 'UTF-8')."<br>"; ?></td>
                        <td><?php echo mb_convert_encoding($fila["nombre"], 'UTF-8')."<br>"; ?></td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
        <?php 
        } 
        desconectar($enlace);
        ?>            
        
</body>
</html>