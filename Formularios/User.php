<?php
class User{
    private $nombre;
    private $con;
    private $gmail;
    private $edad;
    public function __construct($nombre, $con, $gmail, $edad){
        $this->nombre = $nombre;
        $this->con = $con;
        $this->gmail = $gmail;
        $this->edad = $edad;
    }
    public function __toString()
    {
        return "Usuario: ".$this->nombre.
        "<br>Contraseña: ".$this->con.
        "<br>Gmail: ".$this->gmail.
        "<br>Edad: ".$this->edad;
    }
}