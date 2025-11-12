<?php
class TareaScript extends Tarea{
    private $lenguaje;
    private $numLineas;
    private $numErrores;
    private $framework;

    public function __construct($lenguaje, $numLineas, $numErrores, $framework, $nombre, $descripcion, $fechaLimite, $fechInicio, Prioridad $prioridad, Estado $estado){
        $this->lenguaje = $lenguaje;
        $this->numLineas = $numLineas;
        $this->numErrores = $numErrores;
        $this->framework = $framework;
        parent::__construct($nombre, $descripcion, $fechaLimite, $fechInicio, $prioridad, $estado);
    }
    public function infoScript(){
        return "Tarea de Script '".$this->getNombre()."', usa ".$this->lenguaje." como lenguaje, tiene una cantidad de lineas de ".
        $this->numLineas.", la cantidad de errores en ella es ".$this->numErrores.
        "y esta echa en el framework: ".$this->framework;
    }
    public function calcularPorcentajeErrores(){
        //floor redondea
        return floor(($this->numErrores / $this->numLineas) * 100);
    }
    public function calcularComplejidad(){
        $complejidad = "";
        if($this->diasRestantes() < 12 && $this->calcularPorcentajeErrores() > 15){
            $complejidad = "baja";
        }
        if($this->diasRestantes() < 6 && $this->calcularPorcentajeErrores() > 55){
            $complejidad = "media";
        }
        if($this->diasRestantes() < 3 && $this->calcularPorcentajeErrores() > 80){
            $complejidad = "alta";
        }
        return $complejidad;
    }
// GETS AND SETS
    public function getLenguaje()
    {
        return $this->lenguaje;
    }
    public function setLenguaje($lenguaje)
    {
        $this->lenguaje = $lenguaje;
        return $this;
    } 
    public function getNumLineas()
    {
        return $this->numLineas;
    }
    public function setNumLineas($numLineas)
    {
        $this->numLineas = $numLineas;
        return $this;
    }
    public function getNumErrores()
    {
        return $this->numErrores;
    }
    public function setNumErrores($numErrores)
    {
        $this->numErrores = $numErrores;
        return $this;
    }
    public function getFramework()
    {
        return $this->framework;
    }
    public function setFramework($framework)
    {
        $this->framework = $framework;
        return $this;
    }
}