<?php
include_once __DIR__ . "/Empleado.php";
include_once __DIR__ . "/Payslip.php";
class Employee extends Empleado implements Payslip{
    public function calcularSalario(){
        return $this->getSueldo() - $this->pagarImpuestos();
    }
    public function createPayslip(Employee $employee){
        return "Payslip of employee ".$employee->getNombreCompleto().". Gross slary ".$employee->getSueldo().". Net salary ".$employee->calcularSalario();
    }
}