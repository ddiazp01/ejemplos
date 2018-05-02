<?php

class Figura {
    var $lado;

    function __construct ($lado){
        $this->lado = $lado;
    }
}

class Triangulo extends Figura{
    var $altura;

    function __construct ($base,$altura){
        $this->lado = $base;
        $this->altura = $altura;
    }

    function calcular (){
        echo "Area del Triangulo: <br>";
        echo (($this->lado * $this->altura) / 2)."<br>";
    }
}

class Cuadrado extends Figura{
    function calcular (){
        echo "Area del Cuadrado: <br>";
        echo ($this->lado * $this->lado)."<br>";
    }
}

class Rectangulo extends Figura{
    var $altura;

    function __construct ($base,$altura){
        $this->lado = $base;
        $this->altura = $altura;
    }

    function calcular (){
        echo "Area del Rectangulo: <br>";
        echo ($this->lado * $this->altura)."<br>";
    }
}

for ($i=0; $i < 300; $i++){
    $a = new Triangulo ($i%3 , $i+1);
    $vector[] = $a;
}
for ($i=0; $i < 300; $i++){
    $a = new Cuadrado ($i%3);
    $vector[] = $a;
}
for ($i=0; $i < 300; $i++){
    $a = new Rectangulo ($i%3 , $i+1);
    $vector[] = $a;
}

for ($i=0; $i < count($vectorr); $i++){
    $vector[$i]->calcular();
}

/*
$a = new Triangulo (10,5);
$b = new Cuadrado (10);
$c = new Rectangulo (15,20);
$a->calcular();
echo "<br>";
$b->calcular();
echo "<br>";
$c->calcular();
*/


?>


































