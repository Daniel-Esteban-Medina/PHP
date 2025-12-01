<?php
    session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <title>registro Exitoso</title>
    </head>
    <body>
        <p>Registro en el formulario exitoso.</p>
        <p>Errores en el formulario: 0</p>
        <p>FELICIDADES</p>

        <?php
            var_dump($_SESSION);
            $nombre = $_SESSION["nombre"];
            $receta = $_SESSION["receta"];
            $tiempo = $_SESSION["tiempo"];
            $gmail = $_SESSION["gmail"];
            $tipo = $_SESSION["tipo"];
            $gluten = $_SESSION["gluten"];
            $color = $_SESSION["color"];
            include __DIR__ . "/Receta.php";
            $r = new Receta($receta,$tiempo,$tipo,$gluten,$color);
            echo "<br>".$r->__toString()."<br>";
            var_dump($_COOKIE);
            
            //Así se borra la cookie
            setcookie("receta", "", Time()-3600);
        ?>
    </body>
</html>