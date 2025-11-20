<!DOCTYPE html>
<html>
    <head>
        <title>Formulario</title>
    </head>
    <body>
        <h2>Landing page</h2>
        <?php


            if($_SERVER['REQUEST_METHOD'] == "POST"){
            var_dump($_POST);
        
            $nombre = $_POST["name"];
            $edad = $_POST["edad"];
            $gmail = $_POST["gmail"];
            $pass = $_POST["pass"];
            
            //comprobaciones
            if(empty($edad)){
                $edad = 0;
            } 

            // creacion del objeto User con los datos sustraidos 
            include __DIR__ . "/User.php";
            $u1 = new User($nombre, $pass, $gmail, $edad);
            echo $u1->__toString();
            } else {
                echo "no puedes estar aqui";
            }
        ?>

        <?php
        echo "El método usado es ".$_SERVER['REQUEST_METHOD'];
        var_dump($_SERVER)?>
    </body>
</html>