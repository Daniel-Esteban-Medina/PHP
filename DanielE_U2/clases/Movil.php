<?php 
require_once __DIR__ . "/Dispositivo.php";
class Movil extends Dispositivo{
    private $numTelefono;
    private $pulgadas;
    public function __construct($numSerie, $marca, $modelo, $numTelefono, $pulgadas){
        parent::__construct($numSerie, $marca, $modelo);
        $this->numTelefono = $numTelefono;
        $this->pulgadas = $pulgadas;
    }
    public function __toString()
    {
        return "MÓVIL: ".parent::__toString().", número de teléfono ".$this->numTelefono.", pulgadas ".$this->pulgadas;
    }
    public function getNumTelefono()
    {
        return $this->numTelefono;
    }
    public function setNumTelefono($numTelefono)
    {
        $this->numTelefono = $numTelefono;

        return $this;
    }
}