<?php
include "functions/functionsDE.php"
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Parte 2</title>
    </head>
    <body>
        <h3>
            EJERCICIO 1
        </h3>
        <?php
            $parImpar = array(
                array("","","","",""),
                array("","","","",""),
                array("","","","",""),
                array("","","","","")
            );
            for($i = 0; $i <= 3; $i++){
                for($j = 0; $j <= 4; $j++){
                    if(($i + $j) == 0 || (($i + $j) % 2) == 0 ){
                        $parImpar[$i][$j] = "par";
                    } else {
                        $parImpar[$i][$j] = "impar";
                    }
                }
            }
            echo "<table border=1>";
            for($i = 0; $i <= 3; $i++){
                echo "<tr>";
                for($j = 0; $j <= 4; $j++){
                    echo "<td>".$parImpar[$i][$j]."</td>";
                }
                echo "</tr>";            
            }
            echo "</table>";
        ?>
        <h3>
            EJERCICIO 2
        </h3>
        <?php

        ?>
        <h3>
            EJERCICIO 3
        </h3>
        <?php
            $respuesta = operations([15,6,8.3,4]); var_dump($respuesta);
            $respuesta = operations([15,6,8.3,4],"order",false); var_dump($respuesta);
            $respuesta = operations([15,6,8.3,4],"sum"); var_dump($respuesta);
            $respuesta = operations([15,6,8.3,4],"product",true); var_dump($respuesta);
        ?>
    </body>
</html>