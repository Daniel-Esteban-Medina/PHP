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
    /**
     * Devuelve una descripción completa del script, incluyendo el nombre, 
     * lenguaje utilizado, cantidad de líneas, número de errores y framework asociado.
     *
     * @return string Descripción detallada de la tarea de script.
     */
    public function infoScript(){
        return "Tarea de Script '".$this->getNombre()."', usa ".$this->lenguaje." como lenguaje, tiene una cantidad de lineas de ".
        $this->numLineas.", la cantidad de errores en ella es ".$this->numErrores.
        "y esta echa en el framework: ".$this->framework;
    }
    /**
     * Calcula el porcentaje de errores en el script con respecto al número total de líneas.
     * El resultado se redondea hacia abajo usando floor().
     *
     * @return int Porcentaje de errores en el código del script.
     */
    public function calcularPorcentajeErrores(){
        return floor(($this->numErrores / $this->numLineas) * 100);
    }
    /**
     * Calcula la complejidad de la tarea de script en función del tiempo restante 
     * y del porcentaje de errores en el código.
     *
     * @return string Nivel de complejidad de la tarea: "baja", "media" o "alta".
     */
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
        if($this->calcularPorcentajeErrores() > 15){
            $valorDensidad = 10;
        }
        if($this->calcularPorcentajeErrores() > 55){
            $valorDensidad = 20;
        }
        if($this->calcularPorcentajeErrores() > 80){
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