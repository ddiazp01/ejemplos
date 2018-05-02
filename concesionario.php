<?php
class Vehiculo {

     var $matricula;
     var $numruedas;
     var $kms;

     function __construct($matricula, $numruedas, $kms) {
      
     $this->matricula = $matricula;
     $this->numruedas = $numruedas;
     $this->kms = $kms;
     }    
     
     function getMatricula() {
         return $this->matricula;
     }

     function setMatricula($matricula) {
         $this->matricula = $matricula;
    }

     function getNumruedas() {
         return $this->numruedas;
    }

    function setNumruedas($numruedas) {
         $this->numruedas= $numruedas;   
    }

    function getKms() {
        return $this->kms;
    }

    function setKms($kms) {
        $this->kms = $kms;
    }
}    

class Concesionario {
     var $ciudad;
     var $vehiculos;

     function __construct($ciudadad, $vehiculos) {
      $this->ciudad = $ciudad; 
      $this->vehiculos = $vehiculos; 
     }
     
     function getCiudad(){
         return $this->ciudad;
     }
         function setCiudad($ciudad){
           $this->ciudad = $ciudad;

     }    

}
 //Alta vehiculo
    function addvehiculo($vehiculo) {
    $this->$vehiculos[] = $vehiculo;
    }

// Baja Vehiculo
    function bajavehiculos($matricula){
     $x= false;
      for($i=0; $i< count ($this->vehiculo) && ($x==false) ;$i++) {
         if($this->vehiculos[$i] != null){
            if($vehiculos == $this->vehiculos[$i]->getMatricula()) {
           $this->vehiculos[$i] = null;
           $x=true;
            }
        }
    }
}

function matricularVehiculo () {
    //Suponemos que se conecta con la DGT y devuelve el numero de matricula
    $mat_aleatoria = rand();

    $enc = false;
    $pos = 0;
    for ($i=0; $i < count($this->vehiculos) && ($enc==false); $i++) { 
        if ($this->vehiculos[$i] != null) {
            if ($this->vehiculos[$i]->getMatricula() == '') {
                $this->vehiculos[$i]->setMatricula($mat_aleatoria);
                $enc = true;
                $pos = $i;
            }       
        }
    }
    return $this->vehiculos[$pos];
}
function venderVehiculo() {
    $vaux = $this->matricularVehiculo();
    $this->bajaVehiculo($vaux->getMatricula());
}
 

