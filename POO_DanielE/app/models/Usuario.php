<?php
include "TareaDoc.php";
class Usuario{
    private $nombre;
    private $password;
    private $fechaNacimiento;
    private TareaScript|TareaDoc|TareaGrafica $tareaActual;

    public function __construct($nombre, $password, $fechaNacimiento, TareaScript|TareaDoc|TareaGrafica $tareaActual){
        $this->nombre = $nombre;
        $this->password = $password;
        $this->fechaNacimiento = DateTime::createFromFormat("d/m/Y", $fechaNacimiento);
        $this->tareaActual = $tareaActual;
    }

    public function calcularEdad(){
        return new DateTime()->diff($this->fechaNacimiento)->y;
    }

    public function esAdulto(): bool {
        $esAdulto = false;
        if($this->calcularEdad() > 17){
            $esAdulto = true;
        }
        return $esAdulto;
    }

    public function __tostring(){
        return "Usuario: ".$this->nombre."\nContraseña: ".$this->password."\nFecha de nacimiento: ".$this->fechaNacimiento->format("d/m/Y");
    }

    // GETERS AND SETERS
    public function getNombre()
    {
        return $this->nombre;
    }
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;

        return $this;
    }
    public function getFecha() {
        return $this->fechaNacimiento->format("d/m/Y");
    }
    public function setFechaNacimiento($fechaNacimiento)
    {
        $this->fechaNacimiento = DateTime::createFromFormat("d/m/Y", $fechaNacimiento);
        return $this;
    }
    public function getTareaActual()
    {
        return $this->tareaActual;
    }
    public function setTareaActual($tareaActual)
    {
        $this->tareaActual = $tareaActual;

        return $this;
    }
}