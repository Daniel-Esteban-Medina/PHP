<?php 
require_once __DIR__ . "/Planta.php";
class Arbol extends Planta{
private $esPerenne;
public function __construct($especie, $altura, $esPerenne){
    $this->esPerenne = $esPerenne;
    parent::__construct($especie, $altura);
}
public function crecer(float $cm){
    $this->altura = $this->altura + $cm; 
}
public function getEsPeredne()
{
return $this->esPerenne;
}
public function __toString(){
    return parent::__toString().($this->getEsPeredne() ? " Sí es perenne" : " No es perenne");
}
}