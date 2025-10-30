<?php
abstract class Poligono{
    public $side;
    public function __construct($side){
        $this->side = $side;
    }
    public abstract function calcularArea();

    public function getSide()
    {
        return $this->side;
    }
}