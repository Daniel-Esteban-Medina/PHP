<?php
enum Prioridad { case BAJA; case MEDIA; case ALTA;}
enum Estado { case PENDIENTE; case EN_CURSO; case COMPLETADA;}
abstract class Tarea{
    private $nombre;
    private $descripcion;
    private $fechaLimite;
    private $fechInicio;
    private Prioridad $prioridad;
    private Estado $estado;
    private static $contTareas = 0;
    public function __construct($nombre, $descripcion, $fechaLimite, $fechInicio, Prioridad $prioridad, Estado $estado) {
        $this->nombre = $nombre;
        $this->descripcion = $descripcion;
        $this->fechaLimite = DateTime::createFromFormat("d/m/Y", $fechaLimite);
        $this->fechInicio = DateTime::createFromFormat("d/m/Y", $fechInicio);
        $this->prioridad = $prioridad;
        $this->estado = $estado;
        static::$contTareas++;
    }
    /**
     * Calcula la complejidad de la tarea.
     * Este método debe ser implementado por las clases hijas.
     *
     * @return string Nivel de complejidad de la tarea.
     */
    abstract public function calcularComplejidad();
    /**
     * Devuelve la cantidad total de tareas creadas.
     *
     * @return int Número total de instancias de tareas.
     */
    static public function cantidadDeTareas() {
        return static::$contTareas;
    }

    /**
     * Determina si la tarea es urgente. 
     * Se considera urgente si:
     * - Tiene prioridad ALTA.
     * - Está en estado PENDIENTE.
     * - Faltan menos de 7 días para su fecha límite.
     *
     * @return bool true si la tarea es urgente, false en caso contrario.
     */
    public function esUrgente(){
        $esUrgente = false;
        if($this->prioridad == Prioridad::ALTA && $this->estado == Estado::PENDIENTE && $this->diasRestantes() < 7){
            $esUrgente = true;
        }
        return $esUrgente;
    }
    /**
     * Calcula la cantidad de días restantes hasta la fecha límite de la tarea.
     *
     * @return int Número de días restantes.
     */
    public function diasRestantes(){
        $dias = (new DateTime())->diff($this->fechaLimite);
        return $dias->days;
    }
    public function __tostring(){
        return "Tarea: ".$this->nombre."\nDescripción: ".$this->descripcion.
        "\nFecha inicio: ".$this->fechInicio->format("d/m/Y")." Fecha limite: ".$this->fechaLimite->format("d/m/Y").
        "\nEstado: ".$this->estado->name." Prioridad: ".$this->prioridad->name;
    }
    // GETS AND SETS
    public function getNombre()
    {
        return $this->nombre;
    }
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;

        return $this;
    }
    public function getDescripcion()
    {
        return $this->descripcion;
    }
    public function setDescripcion($descripcion)
    {
        $this->descripcion = $descripcion;

        return $this;
    }
    public function getPrioridad()
    {
        return $this->prioridad;
    }
    public function setPrioridad($prioridad)
    {
        $this->prioridad = $prioridad;

        return $this;
    }
    public function getEstado()
    {
        return $this->estado;
    }
    public function setEstado($estado)
    {
        $this->estado = $estado;

        return $this;
    }
    public function getFechaLimite()
    {
        return $this->fechaLimite->format("d/m/Y");
    }
    public function setFechaLimite($fechaLimite)
    {
        $this->fechaLimite = DateTime::createFromFormat("d/m/Y", $fechaLimite);
        return $this;
    }
    public function getFechInicio()
    {
        return $this->fechInicio->format("d/m/Y");
    }
    public function setFechInicio($fechInicio)
    {
        $this->fechInicio = DateTime::createFromFormat("d/m/Y", $fechInicio);

        return $this;
    }
}