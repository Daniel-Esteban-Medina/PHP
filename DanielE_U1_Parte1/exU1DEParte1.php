<?php
include "modeloA.php"
?>
<!DOCTYPE html>
<html>
    <head>
        <title>exU1DEParte1</title>
    </head>
    <body>
        <h2>Ejercicio 1</h2>
        <?php
            echo "<ol>";
            asort($employees);
            foreach($employees as $key => $valor){   
                if($valor == "Sales"){          
                    echo "<li>".$key["name"]."-".$key["salary"]."</li>";
                }
            }
            echo "</ol>";
        ?>
        <h2>Ejercicio 2</h2>
        <?php
            $media = 0;
            
        ?>
    </body>
</html>