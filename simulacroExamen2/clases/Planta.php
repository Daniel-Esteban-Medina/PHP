<?php 
abstract class Planta{
    public $especie;
    public $altura;

    public function __construct($especie, $altura){
        $this->especie = $especie;
        $this->altura = $altura;
    }

    public function __toString(){
        return $this->especie.": altura ".$this->altura."cm.";   
    }

    abstract public function crecer(float $cm);

    public function getEspecie(){
        return $this->especie;
    }
    public function setEspecie($especie){
        $this->especie = $especie;
        return $this->especie;
    }
    public function getAltura(){
        return $this->altura;
    }
    public function setAltura($altura){
        $this->altura = $altura;
        return $this;
    }
}