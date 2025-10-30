<?php
include_once $_SERVER['DOCUMENT_ROOT']."/clases/ClasesGeometricas/Poligono.php";
include_once $_SERVER['DOCUMENT_ROOT']."/clases/ClasesGeometricas/Paint.php";
class Cuadrado extends Poligono implements Paint{ 
    public static int $statico = 15;
    public function __construct($side){
        parent::__construct($side);
    }
    public function calcularArea(){
        return $this->getSide() **2;
    }
    public function __tostring(){
        return "<p>Estatico: ".Cuadrado::$statico."</p>";
    }
    public static function universalCalcularAreas($lado){
        return $lado**2;
    }
    public function draw(){
        return "dibujo de un cuadrado";
    }
}