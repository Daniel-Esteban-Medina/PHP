<!DOCTYPE html>
<html>
    <head>
        <title>EJER_U4POO</title>
    </head>
    <body>
        <h3>Clase empleado</h3>
        <?php
            include "./clases/Employee.php"; include "./clases/Manager.php";
            $em1 = new Employee("Jose", "Montes Rios", 1600);
            $em1->addTelefono(657231892); $em1->addTelefono(657456892); $em1->addTelefono(663218092);
            $man1 = new Manager("Paola", "Moya Aznar", 1600, 50);
            $man1->addTelefono(699324567); $man1->addTelefono(674232556); $man1->addTelefono(644333222);
            echo $em1->toHtml();
            echo $man1->toHtml();
            echo "<br><br><p>Empleado ".$em1->calcularSalario();
            echo "<br><br><p>Manager ".$man1->calcularSalario();

            echo "<br><br>Método interfaz ".$em1->createPayslip($em1);
        ?>
    </body>
</html>