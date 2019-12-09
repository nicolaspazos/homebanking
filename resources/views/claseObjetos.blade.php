<?php 

class Persona {
    private $nombre;
    private $altura;
    private $dni;

    public function __construct($nombre, $altura, $dni){
        $this->nombre = $nombre;
        $this->altura = $altura;
        $this->dni = $dni;
    }

    const BRAZOS = 2;

    public function getNombre(){
        return $this->nombre;
    }
    public function getAltura(){
        return $this->altura;
    }
    public function getDni(){
        return $this->dni;
    }

    public function setNombre($nombre=""){
        $this->nombre = $nombre;
    }
    public function setAltura($altura=""){
        $this->altura = $altura;
    }
    public function setDni($dni=""){
        $this->dni = $dni;
    }
}

class Estudiante extends Persona {
private $calificacion;

public function __construct($nombre, $altura, $dni, $calificacion){
    parent::__construct($nombre, $altura, $dni);
    $this->calificacion = $calificacion;
}

    public function getCalificacion(){
        return $this->calificacion;
    }

    public function __toString(){
        return "el es ".$this->getNombre().", mide: ".$this->getAltura()." y su DNI es: ".$this->getDni()." y tiene ".Persona::BRAZOS." brazos"." y su calificacion es: ".$this->getCalificacion();
    }
}

$nico = new Estudiante("Nico", "120", "324324", "10");

echo $nico;

?>
