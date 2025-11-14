<?php 
abstract class Dispositivo{
    private $numSerie;
    private $marca;
    private $modelo;
    public function __construct($numSerie, $marca, $modelo){
        $this->numSerie = $numSerie;
        $this->marca = $marca;
        $this->modelo = $modelo;
    }
    public function __toString()
    {
        return "número de serie ".$this->numSerie.", marca ".$this->marca.", modelo ".$this->modelo;
    }
    public function getNumSerie()
    {
        return $this->numSerie;
    }
    public function setNumSerie($numSerie)
    {
        $this->numSerie = $numSerie;

        return $this;
    }
    public function getMarca()
    {
        return $this->marca;
    }
    public function setMarca($marca)
    {
        $this->marca = $marca;

        return $this;
    }
    public function getModelo()
    {
        return $this->modelo;
    }
    public function setModelo($modelo)
    {
        $this->modelo = $modelo;

        return $this;
    }
}