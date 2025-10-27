<?php
// Declaración de la clase
class Persona {
    // Propiedades (atributos)
    public $nombre;
    public $edad;

    // Método del constructor (opcional)
    public function __construct($nombre, $edad) {
        $this->nombre = $nombre;
        $this->edad = $edad;
    }

    // Método para saludar
    public function saludar() {
        return "Hola, mi nombre es " . $this->nombre . " y tengo " . $this->edad . " años.";
    }

    public function getNombre():string{
        return $this->nombre;
    }
    public function setNombre($nom){
        $this->nombre = $nom;
    }
    
    public function cumpleAyos(){
        $this->edad++;
        if($this->edad != -1){
            return $this->edad;
        } else {
            return false;
        }
    }
}