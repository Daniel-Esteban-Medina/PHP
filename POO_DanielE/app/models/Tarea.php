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
    
    abstract public function calcularComplejidad();

    static public function cantidadDeTareas() {
        return static::$contTareas;
    }

    public function esUrgente(){
        $esUrgente = false;
        if($this->prioridad == Prioridad::ALTA && $this->estado == Estado::PENDIENTE && $this->diasRestantes() < 7){
            $esUrgente = true;
        }
        return $esUrgente;
    }
    public function diasRestantes(){
        return (new DateTime())->diff($this->fechaLimite)->d;
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