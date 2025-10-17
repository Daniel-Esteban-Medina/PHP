<!DOCTYPE html>
<html>
        <body>
            <!-- Comentario 0 -->
            <?php
                /*
                Comentario varias lineas
                */
                echo "Hola Mundo";
                // Comentario lineal

                //Variables
                // Java -> String name = "nombre";
                $name = "Nombre";
                echo '<br>';
                echo $name;
                echo "<p>Hola me llamo $name</p>";
                //Los tipos de las variables pueden cambiar
                $name = 3;
                echo "Numero $name";
            ?>
            <h2>Más PHP</h2>
            <?php
            echo "variable de la etiqueta de arriba se mantiene  VARIABLE = $name";
            ?>
        </body>
</html>