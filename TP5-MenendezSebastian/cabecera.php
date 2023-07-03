<html>
<head>
<title>Argentina Programa</title>
</head>
<body>
<?php
  class CabeceraPagina{
    private $titulo;
    private $ubicacion;
    public function __construct($tit='',$ubi=''){
      $this->titulo = $tit;
      $this->ubicacion = $ubi;
    }
    public function graficar($tit,$ubi){
        echo "<div style='font-size:40px;text-align:".$ubi."'>";
        echo $tit;
        echo "</div>";
      }
    }
?>
</body>
</html>
