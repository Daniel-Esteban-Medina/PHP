<!DOCTYPE html>
<html>
    <head>
        <title>INDEX PRACTICA POO</title>
    </head>
    <body>
        <h2>INDEX PRACTICA POO</h2>
        <img src="../resources/assets/UML.png" height="470px" width="400px" style="float:right">
        <?php
            
            include __DIR__ . "/../app/models/Tarea.php";
            include __DIR__ . "/../app/models/TareaDoc.php";
            include __DIR__ . "/../app/models/Usuario.php";
            include __DIR__ . "/../utils/funcionesGenerales.php";
            $desc = "El trabajo consiste en documentar toda la información del indexB3";
            $td1 = new TareaDoc(6,["cerbantes","wikipedia","Homero"],false, 
            "Documeto final de curso",$desc,"11/12/2025","11/11/2025", Prioridad::ALTA, Estado::EN_CURSO);
            $u1 = new Usuario("Jose", "1234", "29/05/2006", $td1);
            echo ($u1->esAdulto() ? "Sí, ".$u1->getNombre()." es adulto" : "No, ".$u1->getNombre()." no es adulto");

            echo "<br>funcines generales".arrayListUnorder(["casa", "sarten", "pan"]);
            echo "<br>metodo Estatico cantidad tareas ".Tarea::cantidadDeTareas();
        ?>
    </body>
</html>