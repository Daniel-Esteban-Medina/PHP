<!DOCTYPE html>
<html>
    <head>
        <title>INDEX PRACTICA POO</title>
        <link rel="stylesheet" href="css/styles.css">
    </head>
    <body>
        <h2>INDEX PRACTICA POO</h2>
        <img src="../resources/assets/UML.png" id="UML">
        <?php
            // INCLUDES
            include __DIR__ . "/../app/models/Tarea.php";
            include __DIR__ . "/../app/models/TareaDoc.php"; include __DIR__ . "/../app/models/TareaScript.php"; include __DIR__ . "/../app/models/TareaGrafica.php";
            include __DIR__ . "/../app/models/Usuario.php";
            include __DIR__ . "/../utils/funcionesGenerales.php";
            
            // CREACIÓN TAREAS
            $td1 = new TareaDoc(6,["cerbantes","wikipedia","Homero"],false, 
            "Documeto final de curso","documentar toda la información del indexB3","11/12/2025","11/11/2025", Prioridad::ALTA, Estado::EN_CURSO);

            $ts1 = new TareaScript("java", 258, 15, "Hibernate",
            "Código tienda online", "ampliar el funcionamiento de la app", "29/01/2026", "14/10/2025", Prioridad::BAJA, Estado::EN_CURSO);

            $tg1 = new TareaGrafica("photoshop", 14,["rajo","naranja","negro"], 900,
            "vista ferretería Pepe", "una pagina principal y otras administrativas", "11/05/2025", "01/01/2024", Prioridad::MEDIA, Estado::COMPLETADA);

            // CREACIÓN USUARIO
            $u1 = new Usuario("Jose", "1234", "29/05/2006", $td1);

            // PRUEBAS
            echo "<span class='negSub'>TareaDoc 1 info:</span> ".$td1->infoDoc()."<br>".$td1->__tostring();
            echo "<br><br>";
            echo "<span class='negSub'>TareaScript 1 info:</span> ".$ts1->infoScript()."<br>".$ts1->__tostring();
            echo "<br><br>";
            echo "<span class='negSub'>TareaGrafica 1 info:</span> ".$tg1->infoDiseno()."<br>".$tg1->__tostring();

            echo "<br><br>".($u1->esAdulto() ? "Sí, ".$u1->getNombre()." es adulto" : "No, ".$u1->getNombre()." no es adulto");

            echo "<br>funcines generales: lista de la bibliografia de doc1".arrayListUnorder($td1->getBibliografia());
            echo "<br>metodo Estatico cantidad tareas ".Tarea::cantidadDeTareas();
        ?>
    </body>
<html>