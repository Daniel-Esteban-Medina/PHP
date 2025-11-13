<?php
class TareaDoc extends Tarea{
    private $numPaginas;
    private $bibliografia = [];
    private $desactualizada;
    public function __construct($numPaginas, $bibliografia, $desactualizada, $nombre, $descripcion, $fechaLimite, $fechInicio, Prioridad $prioridad, Estado $estado) {
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
        return floor((count($this->bibliografia) / $this->numPaginas) * 100);
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
        if($this->calcularDensidadBibliografica() > 15){
            $valorDensidad = 10;
        }
        if($this->calcularDensidadBibliografica() > 55){
            $valorDensidad = 20;
        }
        if($this->calcularDensidadBibliografica() > 80){
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
    public function getNumPaginas()
    {
        return $this->numPaginas;
    }
    public function setNumPaginas($numPaginas)
    {
        $this->numPaginas = $numPaginas;
        return $this;
    }
    public function getBibliografia():array
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

    // MÉTODOS ARRAY
    public function addInicioBiblio($ref){
        array_unshift($this->bibliografia, $ref);
    }
    public function addFinalBiblio($ref){
        array_push($this->bibliografia, $ref);
    }
    public function deletAllBiblio(){
        array_splice($this->bibliografia, 0, count($this->bibliografia));
    }
    public function deletElementBiblio($element){
        $indice = array_search($element, $this->bibliografia);
        array_splice($this->bibliografia, $indice, 1);
    }
    public function buscarIndiceBiblio($element){
        return array_search($element, $this->bibliografia);
    }
    public function buscarElementoBiblio($indice){
        return $this->bibliografia[ $indice ];
    }
    public function buscarPorPrimeraLetraBiblio($letra){
        $arr = [];
        for($i = 0; $i < count($this->bibliografia); $i++){
            if($this->bibliografia[$i][0] == $letra){
                $arr[] = $this->bibliografia[$i];
            }
        }
        return $arr;
    }
    public function editElementBiblio($indice, $element){
        $this->bibliografia[$indice] = $element;
    }
    public function BibliografiaToString(){
        return implode(",", $this->bibliografia);
    }
}