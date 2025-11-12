<?php
class TareaDoc extends Tarea{
    private $numPaginas;
    private $bibliografia = [];
    private $desactualizada;
    public function __construct($numPaginas, $bibliografia, $desactualizada = false, $nombre, $descripcion, $fechaLimite, $fechInicio, Prioridad $prioridad, Estado $estado) {
        $this->numPaginas = $numPaginas;
        $this->bibliografia = $bibliografia;
        $this->desactualizada = $desactualizada;
        parent::__construct($nombre, $descripcion, $fechaLimite, $fechInicio, $prioridad, $estado);        
    }
    public function infoDoc() {
        return "Tarea de documentación '".$this->getNombre()."', tiene ".$this->numPaginas.
        " paginas, tiene ".count( $this->bibliografia ).
        " referencías bibliograficas y la tarea de documentación esta"
        .($this->getDesactualizada() ? " desactualizada." : " al día.");
    }
    public function calcularDensidadBibliografica(){
        return ($this->numPaginas * count($this->bibliografia)) / 100;
    }
    public function calcularComplejidad(){
        $complejidad = "";
        if($this->diasRestantes() < 12 && $this->calcularDensidadBibliografica() > 15){
            $complejidad = "baja";
        }
        if($this->diasRestantes() < 6 && $this->calcularDensidadBibliografica() > 55){
            $complejidad = "media";
        }
        if($this->diasRestantes() < 3 && $this->calcularDensidadBibliografica() > 80){
            $complejidad = "alta";
        }
        return $complejidad;
    }
// GETS AND SETS
    public function getNumPaginas()
    {
        return $this->numPaginas;
    }
    public function setNumPaginas($numPaginas)
    {
        $this->numPaginas = $numPaginas;
        return $this;
    }
    public function getBibliografia()
    {
        return $this->bibliografia;
    }
    public function setBibliografia($bibliografia)
    {
        $this->bibliografia = $bibliografia;
        return $this;
    }
    public function getDesactualizada()
    {
        return $this->desactualizada;
    }
    public function setDesactualizada($desactualizada)
    {
        $this->desactualizada = $desactualizada;
        return $this;
    }
}