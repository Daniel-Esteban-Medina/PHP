<!DOCTYPE html>
<html>
    <head>
        <title>Clases Geometricas</title>
    </head>
    <body>
        <h2>Cuadrado</h2>
        <?php
        include "Cuadrado.php";
            $c1 = new Cuadrado(20);
            echo $c1->calcularArea();
            echo "<br>".Cuadrado::$statico;
            $c1->statico = 27;
            echo "<br>".Cuadrado::$statico;
            echo "<br><br>".Cuadrado::universalCalcularAreas(24);
        ?>
    </body>
</html>