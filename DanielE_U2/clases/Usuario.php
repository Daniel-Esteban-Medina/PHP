<?php 
require_once __DIR__ . "/Dispositivo.php";
class Usuario{
    private $id;
    private $nombre;
    private $dispositivos = [];
    public function __construct($id, $nombre, $dispositivos){
        $this->id = $id;
        $this->nombre = $nombre;
        $this->dispositivos = $dispositivos;
    }

    public function __toString()
    {
        return "Usuario: ".$this->nombre."<br>ID: ".$this->id."<br>Dispositivos asociados: ".$this->dispositivosToString();
    }

    public function dispositivosToString(){
        return implode(",", $this->dispositivos);
    }
    public function addDispositivo($dis){
        array_push($this->dispositivos, $dis);
    }

    public function estaDispositivo($numSerie){
        $esta = false;
        for($i = 0; $i < count($this->dispositivos); $i++){
            $dispositivo = $this->dispositivos[$i];
            if($dispositivo->getNumSerie() == $numSerie){
                $esta = true;
            }
        }
        return $esta;
    }
    public function getId()
    {
        return $this->id;
    } 
    public function setId($id)
    {
        $this->id = $id;

        return $this;
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
    public function getDispositivos()
    {
        return $this->dispositivos;
    }
    public function setDispositivos($dispositivos)
    {
        $this->dispositivos = $dispositivos;

        return $this;
    }
}