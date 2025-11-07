<!DOCTYPE html>
<html>
    <head>
        <title>DEBUGER</title>
    </head>
    <body>
        <h2>Debuger</h2>
        <?php
            function sumar($a, $b) {
                $resultado = $a + $b;
                return $resultado;
            }

            $numero1 = 5;
            $numero2 = 7;

            $total = sumar($numero1, $numero2);

            echo "La suma es: $total\n";
        ?>
    </body>
</html>