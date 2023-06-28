<html>
<head>
<title>Argentina Programa</title>
</head>
<body>
<?php
    class CabeceraPagina{
        private $titulo;
        private $ubicacion;
        public function inicializar($tit,$ubi){
            $this->titulo=$tit;
            $this->ubicacion=$ubi;
        }
        public function graficar(){
        echo "<div style='font-size:40px;text-align:".$this->ubicacion."'>";
        echo $this->titulo;
        echo "</div>";
        }
    }

    $cabecera=new CabeceraPagina();
    // valore de text-aling: center, left y right
    $cabecera->inicializar('El blog del Argentina Programa','center');
    $cabecera->graficar();
?>
</body>
</html>
