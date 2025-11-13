<?php
class TareaGrafica extends Tarea{
    private $herramienta;
    private $numVistas;
    private $coloresPrincipales = [];
    private $tiempoRender;

    public function __construct($herramienta, $numVistas, $coloresPrincipales, $tiempoRender, $nombre, $descripcion, $fechaLimite, $fechInicio, $prioridad, $estado) {
        $this->herramienta = $herramienta;
        $this->numVistas = $numVistas;
        $this->coloresPrincipales = $coloresPrincipales;
        $this->tiempoRender = $tiempoRender;
        parent::__construct($nombre, $descripcion, $fechaLimite, $fechInicio, $prioridad, $estado);
    }
    public function infoDiseno(){
        return " La tarea Grafica '".$this->getNombre()."', usa la herramienta ".$this->herramienta.", tiene ".
        $this->numVistas." vistas, tiene ".count($this->coloresPrincipales)." colores principales".
        ", el tiempo de renderizado es ".$this->tiempoRender." segundos";
    }
    public function calcularEficienciaRender(){
        return floor(($this->tiempoRender / $this->numVistas) * 100);
    }
    public function calcularComplejidad(){
        $complejidad = "";
        $valorDias = 0; $valorDensidad = 0; $valorCompleto = 0;
        if($this->diasRestantes() < 12){
            $valorDias = 10;
        }
        if($this->diasRestantes() < 6){
            $valorDias = 20;
        }
        if($this->diasRestantes() < 3){
            $valorDias = 30;
        }
        if($this->calcularEficienciaRender() > 15){
            $valorDensidad = 10;
        }
        if($this->calcularEficienciaRender() > 55){
            $valorDensidad = 20;
        }
        if($this->calcularEficienciaRender() > 80){
            $valorDensidad = 30;
        }
        $valorCompleto = $valorDensidad + $valorDias;
        if($valorCompleto < 21) {
            $complejidad = "baja";
        }
        if($valorCompleto >= 30 && $valorCompleto < 41) {
            $complejidad = "media";
        }
        if($valorCompleto >= 50) {
            $complejidad = "alta";
        }
        return $complejidad;
    }
// GETS AND SETS
    public function getHerramienta()
    {
        return $this->herramienta;
    }
    public function setHerramienta($herramienta)
    {
        $this->herramienta = $herramienta;
        return $this;
    }
    public function getNumVistas()
    {
        return $this->numVistas;
    }
    public function setNumVistas($numVistas)
    {
        $this->numVistas = $numVistas;
        return $this;
    }
    public function getColoresPrincipales()
    {
        return $this->coloresPrincipales;
    }
    public function setColoresPrincipales($coloresPrincipales)
    {
        $this->coloresPrincipales = $coloresPrincipales;
        return $this;
    }
    public function getTiempoRender()
    {
        return $this->tiempoRender;
    }
    public function setTiempoRender($tiempoRender)
    {
        $this->tiempoRender = $tiempoRender;
        return $this;
    }
    // MÉTODOS ARRAY
    public function addInicioColor($ref){
        array_unshift($this->coloresPrincipales, $ref);
    }
    public function addFinalColor($ref){
        array_push($this->coloresPrincipales, $ref);
    }
    public function deletAllColor(){
        array_splice($this->coloresPrincipales, 0, count($this->coloresPrincipales));
    }
    public function deletElementColor($element){
        $indice = array_search($element, $this->coloresPrincipales);
        array_splice($this->coloresPrincipales, $indice, 1);
    }
    public function buscarIndiceColor($element){
        return array_search($element, $this->coloresPrincipales);
    }
    public function buscarElementoColor($indice){
        return $this->coloresPrincipales[$indice];
    }
    public function buscarPorPrimeraLetraColor($letra){
        $arr = [];
        for($i = 0; $i < count($this->coloresPrincipales); $i++){
            if($this->coloresPrincipales[$i][0] == $letra){
                $arr[] = $this->coloresPrincipales[$i];
            }
        }
        return $arr;
    }
    public function editElementColor($indice, $element){
        $this->coloresPrincipales[$indice] = $element;
    }
    public function ColoresToString(){
        return implode(",", $this->coloresPrincipales);
    }
}