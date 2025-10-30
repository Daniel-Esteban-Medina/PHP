<?php
class Empleado{
    public $nombre;
    public $apellidos;
    public $sueldo;
    public $telefonos = [];

    public function __construct($nombre, $apellidos, $sueldo = -1){
        $this->nombre = $nombre;
        $this->apellidos = $apellidos;
        $this->sueldo = $sueldo;
    }

    public function getNombre()
    {
        return $this->nombre;
    }
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;

        return $this;
    }
    public function getApellidos()
    {
        return $this->apellidos;
    }
    public function setApellidos($apellidos)
    {
        $this->apellidos = $apellidos;

        return $this;
    }
    public function getSueldo()
    {
        return $this->sueldo;
    }
    public function setSueldo($sueldo)
    {
        $this->sueldo = $sueldo;

        return $this;
    }
    public function __tostring(){
        return "Nombre: ".$this->nombre."\nApellidos: ".$this->apellidos."\nSueldo: ".$this->sueldo;
    }
    public function getNombreCompleto(){
        return $this->nombre." ".$this->apellidos;
    }
    public function pagarImpuestos():float{
        $re = $this->sueldo;
        if($this->sueldo > 0 && $this->sueldo <= 12.450){
            $re = $re * 0.19;
        }
        if($this->sueldo > 12.450 && $this->sueldo <= 20.199){
            $re = $re * 0.24;
        }
        if($this->sueldo > 20.199 && $this->sueldo <= 35.199){
            $re = $re * 0.3;
        }
        if($this->sueldo > 35.199 && $this->sueldo <= 59.999){
            $re = $re * 0.37;
        }
        if($this->sueldo > 59.999 && $this->sueldo <= 299.999){
            $re = $re * 0.45;
        }
        if($this->sueldo > 299.999){
            $re = $re * 0.47;
        }
        if($this->sueldo == -1){
            $re = -1;
        }
        return $re;
    }
    public function addTelefono($num){
        $this->telefonos[] = $num;
    }
    public function listarTelefonos():string{
        $lista = "";
        for($i = 0; $i < count($this->telefonos); $i++){
            if($i < count($this->telefonos) - 1){
                $lista = $lista.$this->telefonos[$i].", ";
            } else {
                $lista = $lista.$this->telefonos[$i];
            }
        }
        return $lista;
    }
    public function eliminarTelefonos(){
        $this->telefonos = [];
    }
    public function toHtml():string{
        $html = "<p>nombre: $this->nombre apellidos: $this->apellidos salario: </p>";
        return $html;
    }
}