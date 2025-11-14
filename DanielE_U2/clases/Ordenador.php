<?php 
require_once __DIR__ . "/Dispositivo.php";
class Ordenador extends Dispositivo{
    private $potencia;
    private $portatil;
    public function __construct($numSerie, $marca, $modelo, $potencia, $portatil){
        parent::__construct($numSerie, $marca, $modelo);
        $this->potencia = $potencia;
        $this->portatil = $portatil;
    } 
    public function __toString()
    {
        return "ORDENADOR: ".parent::__toString().", potencía de procesador ".$this->potencia.($this->portatil ? ", es un portatil.":", es una torre.");
    }
    public function getPotencia()
    {
        return $this->potencia;
    }
    public function setPotencia($potencia)
    {
        $this->potencia = $potencia;

        return $this;
    }
    public function getPortatil()
    {
        return $this->portatil;
    }
    public function setPortatil($portatil)
    {
        $this->portatil = $portatil;

        return $this;
    }
}