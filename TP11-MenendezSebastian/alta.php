<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nuevo Movimiento</title>
</head>
<body>
    <form action="conexion.php" method="post">
        <!-- <label for="">ID:</label><input type="text" name="id_mov" id="id_mov" readonly><br> -->
        <label for="">Fecha:</label><input type="date" name="fecha" id="fecha"><br>
        <label for="">Tipo:</label>
            <select name="tipo" id="tipo">
            <option value="ingreso">Ingreso</option>
            <option value="egreso">Egreso</option>
        </select><br>
        <label for="">Descripción:</label><input type="text" name="descripcion" id="descripcion"><br>
        <label for="">Importe:</label><input type="number" step="0.01" name="importe" id="importe"><br>
        <label for="">Forma de pago:</label>
        <select name="forpag" id="forpag">
            <option value="efectivo">Efectivo</option>
            <option value="cheque">Cheque</option>
            <option value="tarjeta de credito">Tarjeta de Crédito</option>
            <option value="transferencia bancaria">Transferencia Bancaria</option>
        </select><br>
        <label for="">Familiar:</label>
        <select name="familiar" id="familiar">
            <option value="1">Damian Suarez</option>
            <option value="2">Julia Zambrano</option>
            <option value="3">Alberto Suarez</option>
            <option value="4">Julia Suarez</option>
            <option value="5">Delia Fernández</option>
        </select><br>
        <button type="submit">Dar de Alta</button>
        <button type="reset">Borrar</button>
    </form>
    <br><br>
    <button type=""><a href='consulta.php'>Volver</a></button>

</body>
</html>