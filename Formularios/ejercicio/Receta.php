<?php
class Receta{
    private $nombre;
    private $tiempo;
    private $tipo;
    private $gluten;
    private $color;
    public function __construct($nombre, $tiempo, $tipo, $gluten, $color)
    {
        $this->nombre = $nombre;
        $this->tiempo = $tiempo;
        $this->tipo = $tipo;
        $this->gluten = $gluten;
        $this->color = $color;
    }
    public function __toString()
    {
        return "Receta: ".$this->nombre."<br>Tiempo: ".$this->tiempo."<br>Tipo: ".$this->tipo."<br>Gluten: ".$this->gluten."<br>Color: ".$this->color;
    }
}