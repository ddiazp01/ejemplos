<?php

class Medicamento {
    var $nombre;
    var $precio;

    function __construct ($nombre, $precio) {
        $this->nombre = $nombre;
        $this->precio = $precio;
    }

    function getNombre () {
        return $this->nombre;
    } 
    function setNombre ($nombre) {
        $this->$nombre = $nombre;
    }
    function getPrecio () {
        return $this->precio;
    } 
    function setEdad ($precio) {
        $this->$precio = $precio;
    }
}

class Farmacia {
    var $cif;
    var $medicamentos;

    function __construct ($cif) {
        $this->cif = $cif;
    }

    function setCif ($cif) {
        $this->cif = $cif;
    }

    function getCif ($cif) {
        return $cif;
    }

    // Da de baja un medicamento anulando su casilla
    function bajaMedicamento ($nombreMedicamento) {
        $enc = false;
        for ($i=0; $i < count($this->medicamentos) && ($enc == false); $i++) { 
            if ($this->medicamentos[$i] != null) {
                if ($nombreMedicamento == $this->medicamentos[$i]) {
                    $this->medicamentos[$i] = null;
                    $enc = true;
                }
            }
        }
    }

    //Desarrollar altaMedicamento (esto te toca a ti)
    function altaMedicamento ($medicamento) {
        $enc = true;
        for ($i=0; $i < count($this->medicamentos) && ($enc == true); $i++) { 
            if ($this->medicamentos[$i] == null) {
                if ($nombreMedicamento != $this->medicamentos[$i]) {
                    $this->medicamentos[$i] != null;
                    $enc = false;
                }
            }
        }
    }
            
}



