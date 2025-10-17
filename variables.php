<!DOCTYPE html>
<html>
        <body>
            <?php
                $adult = true;
                //regresa el tipo de esa variable
                echo gettype($adult);

                echo var_dump($adult);
                $text = "Texto de prueba";
                //Unir cadenas de texto con un punto
                echo "Variable=".gettype($text)." Valor de la variable=";
                var_dump($text);
                echo "<br>";
                define("SALUDO_CABECERA", "Soy una constante");
                echo SALUDO_CABECERA;
                const IVA = 0.21;
                $precio = 19.45;
                echo "El precio con IVA es " . $precio * IVA + $precio;
                //Operaciones
                $mod = 7 % 5;
                echo "<br>Devolver el resto con % de la division 7/5 mod = $mod";
                
            ?>
        </body>
</html>