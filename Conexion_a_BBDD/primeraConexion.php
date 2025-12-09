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
        ?>
    </body>
</html>