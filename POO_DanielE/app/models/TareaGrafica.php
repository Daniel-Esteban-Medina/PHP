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
    /**
     * Devuelve una descripción detallada de la tarea por la parte gráfica, incluyendo la herramienta utilizada,
     * la cantidad de vistas, los colores principales y el tiempo de renderizado.
     *
     * @return string Descripción completa de la tarea de diseño gráfico.
     */
    public function infoDiseno(){
        return " La tarea Grafica '".$this->getNombre()."', usa la herramienta ".$this->herramienta.", tiene ".
        $this->numVistas." vistas, tiene ".count($this->coloresPrincipales)." colores principales".
        ", el tiempo de renderizado es ".$this->tiempoRender." segundos";
    }
    /**
     * Calcula la eficiencia del renderizado en función del tiempo y la cantidad de vistas.
     * La fórmula devuelve un valor redondeado hacia abajo usando floor().
     *
     * @return int Porcentaje que representa la eficiencia del renderizado.
     */
    public function calcularEficienciaRender(){
        return floor(($this->tiempoRender / $this->numVistas) * 100);
    }
    /**
     * Calcula la complejidad de la tarea gráfica considerando el tiempo restante
     * y la eficiencia de renderizado. 
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
    /**
     * Agrega un color al inicio del array de colores principales.
     *
     * @param string $ref Color a agregar.
     * @return void
     */
    public function addInicioColor($ref){
        array_unshift($this->coloresPrincipales, $ref);
    }
    /**
     * Agrega un color al final del array de colores principales.
     *
     * @param string $ref Color a agregar.
     * @return void
     */
    public function addFinalColor($ref){
        array_push($this->coloresPrincipales, $ref);
    }
    /**
     * Elimina todos los colores del array de colores principales.
     *
     * @return void
     */
    public function deletAllColor(){
        array_splice($this->coloresPrincipales, 0, count($this->coloresPrincipales));
    }
    /**
     * Elimina un color específico del array de colores principales.
     *
     * @param string $element Color que se desea eliminar.
     * @return void
     */
    public function deletElementColor($element){
        $indice = array_search($element, $this->coloresPrincipales);
        array_splice($this->coloresPrincipales, $indice, 1);
    }
    /**
     * Busca el índice de un color en el array de colores principales.
     *
     * @param string $element Color a buscar.
     * @return int|false Índice del color si se encuentra, o false si no existe.
     */
    public function buscarIndiceColor($element){
        return array_search($element, $this->coloresPrincipales);
    }
    /**
     * Obtiene un color del array por su índice.
     *
     * @param int $indice Posición del color dentro del array.
     * @return string Color correspondiente al índice indicado.
     */
    public function buscarElementoColor($indice){
        return $this->coloresPrincipales[$indice];
    }
    /**
     * Busca colores que comiencen con una letra determinada.
     *
     * @param string $letra Letra inicial a buscar.
     * @return array Lista de colores que comienzan con la letra indicada.
     */
    public function buscarPorPrimeraLetraColor($letra){
        $arr = [];
        for($i = 0; $i < count($this->coloresPrincipales); $i++){
            if($this->coloresPrincipales[$i][0] == $letra){
                $arr[] = $this->coloresPrincipales[$i];
            }
        }
        return $arr;
    }
    /**
     * Modifica el valor de un color en una posición específica del array.
     *
     * @param int $indice Posición del color a editar.
     * @param string $element Nuevo valor del color.
     * @return void
     */
    public function editElementColor($indice, $element){
        $this->coloresPrincipales[$indice] = $element;
    }
    /**
     * Convierte el array de colores principales en una cadena de texto, cuyos elementos estan separados por comas.
     *
     * @return string Cadena de texto con todos los colores principales separados por comas.
     */
    public function ColoresToString(){
        return implode(",", $this->coloresPrincipales);
    }
}