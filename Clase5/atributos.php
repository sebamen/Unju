<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Argentina Programa</title>
</head>
<body>
<?php
  class Menu {
    private $enlaces=array();
    private $titulos=array();
    public function cargarOpcion($en,$tit){
      $this->enlaces[]=$en;
      $this->titulos[]=$tit;
    }
    public function mostrar(){
      for($f=0;$f<count($this->enlaces);$f++)
      {
        echo "<a href='" . $this->enlaces[$f] . "'>" . $this->titulos[$f]."</a>";
        echo " - ";
      }
    }
  }

$menu1=new Menu();
$menu1->cargarOpcion('http://www.google.com','Google');
$menu1->cargarOpcion('http://www.w3schools.com/','w3schols');
$menu1->cargarOpcion('https://www.php.net/','php');
$menu1->cargarOpcion('ejemplo1.php','Ejemplo 1');
$menu1->mostrar();
?>
</body>
</html>
