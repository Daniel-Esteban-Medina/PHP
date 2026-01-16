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
    /**
     * Devuelve una descripción completa sobre la documentación, 
     * incluyendo el nombre, número de páginas, cantidad de referencias 
     * y si está desactualizada o al día.
     * 
     * @return string Descripcíon de la parte referente a la documentación.
     */
    public function infoDoc() {
        return "Tarea de documentación '".$this->getNombre()."', tiene ".$this->numPaginas.
        " paginas, tiene ".count( $this->bibliografia ).
        " referencías bibliograficas y la tarea de documentación esta"
        .($this->getDesactualizada() ? " desactualizada." : " al día.");
    }
    /**
     * Calcula la densidad bibliográfica de la tarea.
     * La densidad se obtiene del número de referencias bibliográficas por cada 100 páginas.
     *
     * @return int Densidad bibliográfica redondeada hacia abajo.
     */
    public function calcularDensidadBibliografica(){
        return floor((count($this->bibliografia) / $this->numPaginas) * 100);
    }
    /**
     * Calcula la complejidad de la tarea en función del tiempo restante y la densidad bibliográfica.
     *
     * @return string Nivel de complejidad: "baja", "media" o "alta".
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
    /**
     * Agrega una referencia bibliográfica al inicio del array.
     *
     * @param string $ref Referencia bibliográfica a agregar.
     * @return void
     */
    public function addInicioBiblio($ref){
        array_unshift($this->bibliografia, $ref);
    }
    /**
     * Agrega una referencia bibliográfica al final del array.
     *
     * @param string $ref Referencia bibliográfica a agregar.
     * @return void
     */
    public function addFinalBiblio($ref){
        array_push($this->bibliografia, $ref);
    }
    /**
     * Elimina todas las referencias bibliográficas del array.
     *
     * @return void
     */
    public function deletAllBiblio(){
        array_splice($this->bibliografia, 0, count($this->bibliografia));
    }
    /**
     * Elimina una referencia bibliográfica específica.
     *
     * @param string $element Elemento a eliminar.
     * @return void
     */
    public function deletElementBiblio($element){
        $indice = array_search($element, $this->bibliografia);
        array_splice($this->bibliografia, $indice, 1);
    }
    /**
     * Busca el índice de una referencia bibliográfica.
     *
     * @param string $element Elemento a buscar.
     * @return int|false Índice del elemento si se encuentra, o false si no existe.
     */
    public function buscarIndiceBiblio($element){
        return array_search($element, $this->bibliografia);
    }
    /**
     * Devuelve el elemento bibliográfico correspondiente al índice especificado.
     *
     * @param int $indice Índice del elemento a recuperar.
     * @return string Referencia bibliográfica.
     */
    public function buscarElementoBiblio($indice){
        return $this->bibliografia[ $indice ];
    }
    /**
     * Busca referencias bibliográficas que comiencen por una letra determinada.
     *
     * @param string $letra Letra inicial a buscar.
     * @return array Array de referencias que comienzan por la letra indicada.
     */
    public function buscarPorPrimeraLetraBiblio($letra){
        $arr = [];
        for($i = 0; $i < count($this->bibliografia); $i++){
            if($this->bibliografia[$i][0] == $letra){
                $arr[] = $this->bibliografia[$i];
            }
        }
        return $arr;
    }
    /**
     * Edita una referencia bibliográfica en una posición específica.
     *
     * @param int $indice Índice del elemento a editar.
     * @param string $element Nuevo valor de la referencia bibliográfica.
     * @return void
     */
    public function editElementBiblio($indice, $element){
        $this->bibliografia[$indice] = $element;
    }
    /**
     * Convierte el array de bibliografía en una cadena de texto separada por comas.
     *
     * @return string Texto con todas las referencias separadas por comas.
     */
    public function BibliografiaToString(){
        return implode(",", $this->bibliografia);
    }
}