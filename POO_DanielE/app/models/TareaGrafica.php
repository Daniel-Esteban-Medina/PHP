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
        return ($this->numVistas * $this->tiempoRender) / 100;
    }
    public function calcularComplejidad(){
        $complejidad = "";
        if($this->diasRestantes() < 12 && $this->calcularEficienciaRender() > 15){
            $complejidad = "baja";
        }
        if($this->diasRestantes() < 6 && $this->calcularEficienciaRender() > 55){
            $complejidad = "media";
        }
        if($this->diasRestantes() < 3 && $this->calcularEficienciaRender() > 80){
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
}