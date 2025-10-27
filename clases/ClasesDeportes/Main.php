<!DOCTYPE html>
<html>
    <head>
        <title>Herencia</title>
    </head>
    <body>
        <?php
            include "Rugby.php"; include "Tenis.php";
            $r1 = new Rugby("El rayo","Equipo",11,false);
            $t1 = new Tenis("14", [1,2,3,4],"individual",2,true);
            echo $t1->__tostring();
        ?>
    </body>
</html>