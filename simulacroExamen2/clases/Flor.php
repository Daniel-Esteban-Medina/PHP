<?php 
require_once __DIR__ . "/Planta.php";
class Flor extends Planta{
    private $mesFloracion;
    public function __construct($especie, $altura, $mesFloracion){
        $this->mesFloracion = $mesFloracion;
        parent::__construct($especie, $altura);
    }
    public function crecer(float $cm){
        $this->altura = $this->altura + $cm; 
    }
    public function __toString(){
        return parent::__toString()." Su mes de floración es ".$this->mesFloracion;
    }
}