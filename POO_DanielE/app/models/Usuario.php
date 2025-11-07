<?php
class Usuario{
    private $nombre;
    private $password;
    private $fechaNacimiento;

    public function __construct($nombre, $password, $fechaNacimiento){
        $this->nombre = $nombre;
        $this->password = $password;
        $this->fechaNacimiento = $fechaNacimiento;
    }

    public function esAdulto(): bool {
        $esAdulto = false;
        if($this->fechaNacimiento > 17){
            $esAdulto = true;
        }
        return $esAdulto;
    }

    public function __tostring(){
        return "Usuario: ".$this->nombre."\nContraseña: ".$this->password."\nFecha de nacimiento: ".$this->fechaNacimiento;
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
}