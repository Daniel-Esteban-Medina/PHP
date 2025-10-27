<?php
include "Persona.php";
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Clases</title>
    </head>
    <body>
        <h3>clase</h3>
        <?php
            $persona1 = new Persona("Carlos", 25);
            echo $persona1->cumpleAyos();
            include "./Minotauro.php";
            $min1 = new Minotauro("Paco",34);
            $min2 = new Minotauro("Luis",25);
            echo "<br><br>".$min1->getNombre();
            echo"<br><br>".$min2->__tostring();
        ?>
    </body>
</html>