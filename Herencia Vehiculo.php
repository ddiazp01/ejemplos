<?php

class Vehiculo {
    var $kms;
    var $cv;
    var $color;
    var $techosolar;
    
    function __construct ($color, $kms , $cv, $techosolar) {
        $this->color=$color;
        $this->kms=$kms;
        $this->cv=$cv;
        $this->techosolar=$techosolar;
    }

//faltan getter and setter

    function mostrar() { 
        echo "Color: ".$this->color."<br>";
        echo "Kilómetros: ".$this->kms."<br>";
        echo "Cv: ".$this->cv."<br>";
        echo "Techosolar: ".$this->techosolar."<br>";
    }
}

class Coche  extends Vehiculo {
    var $puertas;
    
    function __construct($color, $kms, $cv, $puertas, $techosolar) {
        parent::__construct ($color, $kms , $cv, $techosolar);
        $this->puertas= $puertas;  
    }
    function mostrar () {
        parent::mostrar();
        echo "Puertas: ".$this->puertas."<br>";
    }   
}
$a = new Coche("azul",3212,133,5,"No");
$a->mostrar();


// crear clase caravana
// crear clase camion

echo "<br>";
class Caravana extends Vehiculo {
    var $camas;
    var $cocina;
    var $remolque;


    function __construct($color, $kms, $cv, $techosolar, $camas, $cocina, $remolque) {
        parent::__construct ($color, $kms, $cv, $techosolar);
        $this->camas = $camas;
        $this->cocina = $cocina;
        $this->remolque = $remolque;
     }
    
     function getCamas() {
        return $this->camas;
     }

     function setCamas($camas) {
        $this->camas=$camas;
     }

     function getCocina() {
         return $this->cocina;
     }

     function setCocina($cocina) {
         $this->cocina=$cocina;
     }

     function getRemolque() {
         return $this->relmolque=$remolque;
     }

     function setRemolque($remolque) {
         $this->remolque=$remolque;
     }

     function mostrar() {
        parent::mostrar();
        echo "camas: ".$this->camas."<br>";
        echo "cocina:".$this->cocina."<br>";
        echo "remolque:".$this->remolque."<br>";
    }
}

echo "<br>";
$a= new Caravana ("azul",3212,133,"No",5,"si","no");
$a->mostrar();



class Camion extends Vehiculo {
    var $pma;
    var $tara;
   
    function __construct($color, $kms, $cv, $techosolar, $pma, $tara) {
        parent::__construct ($color, $kms, $cv, $techosolar);
        $this->pma = $pma;
        $this->tara = $tara;
        
     }
    
     function getPma() {
        return $this->pma;
     }

     function setPma($pma) {
        $this->pma=$pma;
     }

     function getTara() {
         return $this->tara;
     }

     function setTara($tara) {
         $this->tara=$tara;
     }

     
     function mostrar() {
        parent::mostrar();
        echo "pma: ".$this->pma."<br>";
        echo "tara:".$this->tara."<br>";
    }
}
echo "<br>";
$a = new Camion ("azul",3212,133, "no",5445,"no");
$a->mostrar();



