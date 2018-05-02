<?php

class Persona {
    var $nombre;
    var $edad;

    function __construct ($nombre, $edad) {
        $this->nombre = $nombre;
        $this->edad = $edad;
    }

    function setNombre ($nombre) {
        $this->$nombre = $nombre;
    }

    function getNombre () {
        return $this->nombre;
    } 
    function setEdad ($edad) {
        $this->$edad = $edad;
    }

    function getEdad () {
        return $this->edad;
    }

    function mostrar () {
        echo "Soy ".$this->nombre." y tengo ".$this->edad." años.<br>";
    }
    function vector()
    
        for ($i=0; $i<count($personas); $i++) {
            $cont=0
            if(($personas[$i]->$jugadores <= 2) && true=enc) {
            echo ($jugadores[$i]->$jugadores);
            $cont++
            }
        }
}

    class Jugadores extends Persona {
        var $numPartidos;

        function __construct($nombre, $edad, $numPartidos) {
            parent::__construct ($nombre, $edad);
            $this->numPartidos = $numPartidos;
        }
        function getnumPartidos() {
            return $this->numPartidos;
        }
        function setnumPartidos($numPartidos) {
            $this->numPartidos = $numPartidos;
        }

        function mostrar() {
            parent::mostrar();
            echo "numPartidos: ".$this->numPartidos."<br>";
        }
}

$a = new NumJugadores ("Lucas",25,38);
$a->mostrar();
    