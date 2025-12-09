<!DOCTYPE html>
<html>
    <head>
        <title>ConectionBD</title>
    </head>
    <body>
        <?php
            $host = "localhost";
            $user = "root";
            $pass = "Sandia4you";
            $db = "shop";
            $port = 3306;
            //Conenctamos
            $conn = new mysqli($host,$user,$pass,$db,$port);

            echo "BIEEEN";

            $sql = "CREATE TABLE IF NOT EXISTS trees (
                id int AUTO_INCREMENT PRIMARY KEY,
                precio float not null,
                altura float,
                material varchar(255)
            );";

            if($conn->query($sql)){
                echo "<p>Tabla creada</p>";
            } else {
                echo "<p>Error al crear tabla</p>";
            }

            $sql = "INSERT  INTO trees (precio, altura, material) VALUES (1.4, 33.5, 'Plastico')";

            // REcuperar id
            $conn->insert_id;

            // Bucle
            while(fetch_assoc != null){
               echo "<p>{$fila['id']}</p>";
            }
            
        ?>
    </body>
</html>