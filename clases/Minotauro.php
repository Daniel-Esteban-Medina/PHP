<?php
class Minotauro{
    //Los atributos están declarados en el constructor
    public function __construct(
        private string $nombre,
        private int $edad
    ){}
    public function getNombre(){
        return $this->nombre;
    }
    public function setNombre($nom){
        return $this->nombre = $nom;
    }
    public function getEdad(){
        return $this->edad;
    }
    public function setEdad($ed){
        return $this->edad = $ed;
    }
    public function __tostring(){
        return "El minotauro ".$this->nombre." tiene ".$this->edad;
    }
}