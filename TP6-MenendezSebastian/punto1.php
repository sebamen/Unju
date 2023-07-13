<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Punto 1 TP6</title>
</head>
<body>
    <?php
        // spm 20230713: LLama a la cabecera
        include("cabecera.php");
        $miCabecera = new CabeceraPagina('','');
        $miCabecera->graficar('Trabajo Práctico Nº 6','center');
        $miCabecera->graficar('Punto 1','center');
        $miCabecera->graficar('Autor: Sebastián Menéndez','center');
        //if(isset($_POST['nombre'])){
        if($_SERVER['REQUEST_METHOD'] === 'POST'){
            dar_de_alta();
        }

        function dar_de_alta(){
            include("Postulante.php");
            $n = $_POST["nombre"];
            $a = $_POST["apellido"];
            $f_n = $_POST["fecha"];
            $d = $_POST["direccion"];
            $s = $_POST["sexo"];
            $dis = $_POST["disponibilidad"];
            $p = $_POST["puesto"];
            $c = $_POST["cv"];
            $post = new Postulante($n,$a,$f_n,$d,$s,$dis,$p,$c);
            //echo $post->imprimir();
            echo $post->mostrarPostulacion();
            //echo "Edad: ". $post->edad();
        }
        
    
    ?>
    <form action="" method="post">
        <label for="">Nombre: </label><input type="text" name="nombre" id="nombre" style="margin: 10px;"><br>
        <label for="">Apellido: </label><input type="text" name="apellido" id="apellido" style="margin: 10px;"><br>
        <label for="">Fecha de Nacimiento: </label><input type="date" name="fecha" id="fecha" style="margin: 10px;"><br>
        <label for="">Dirección: </label><input type="text" name="direccion" id="direccion" style="margin: 10px;"><br>
        
        <!-- <label for="">Sexo: </label><input type="text" name="sexo" id="sexo" style="margin: 10px;"><br> -->
        <label for="">Sexo: </labe> 
         <select name="sexo" id="sexo" style="margin: 10px;">
            <option value="masculino">Masculino</option>
            <option value="fenenino" selected>Femenino</option>
         </select><br>
        
        <!-- <label for="">Disponibilidad: </label><input type="text" name="diponibilidad" id="disponibilidad" style="margin: 10px;"><br> 
        <label for="">Puesto: </label><input type="text" name="puesto" id="puesto" style="margin: 10px;"><br> -->
        <label for="">Disponibilidad: </labe> 
        <select name="disponibilidad" id="disponibilidad" style="margin: 10px;">
            <option value="medio_tiempo">medio tiempo</option>
            <option value="tiempo_completo" selected>tiempo completo</option>
          </select><br>
        <label for="">Puesto: </labe> 
        <select name="puesto" id="puesto" style="margin: 10px;">
            <option value="informatica">Informática</option>
            <option value="contable" selected>Contable</option>
            <option value="rrhh" selected>RRHH</option>
          </select><br>

        <label for="">Cirrículum: </label><input type="file" name="cv" id="cv" style="margin: 10px;"><br>
        <button type="submit">Enviar datos</button>
        <button type="reset">Borrar</button>
    </form>
    <?php
        // spm 20230713: LLama a la calse Pie de página
        include("pie.php");
        $miPie = new PiePagina();
        $miPie->graficar('Fin Trabajo Práctico Nº 6','center');
        $miCabecera->graficar('Punto 1','center');
    ?>
</body>
</html>