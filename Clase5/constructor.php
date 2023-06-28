<html>
<head>
<title>Argentina Programa</title>
</head>
<body>
<?php
  class CabeceraPagina{
    private $titulo;
    private $ubicacion;
    public function __construct($tit,$ubi){
      $this->titulo=$tit;
      $this->ubicacion=$ubi;
    }
    public function graficar(){
      echo "<div style='font-size:40px;text-align:".$this->ubicacion."'>";
      echo $this->titulo;
      echo "</div>";
    }
  }

  // valore de text-aling: center, left y right
  $cabecera=new CabeceraPagina('Programador PHP','center');
  $cabecera->graficar();
?>
</body>
</html>
