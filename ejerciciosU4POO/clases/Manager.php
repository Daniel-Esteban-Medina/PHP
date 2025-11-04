<?php
include_once __DIR__ . "/Empleado.php";
class Manager extends Empleado{
    public $seniority;
    public function __construct($nombre, $apellidos, $sueldo = -1, $seniority){
        $this->seniority = $seniority;
        parent::__construct($nombre, $apellidos, $sueldo);
    } 
    public function calcularSalario(){
        $num = $this->seniority * 50;
        return ($this->getSueldo() - $this->pagarImpuestos()) + $num;
    }
}