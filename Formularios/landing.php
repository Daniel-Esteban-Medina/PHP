<!DOCTYPE html>
<html>
    <head>
        <title>Formulario</title>
    </head>
    <body>
        <h2>Landing page</h2>
        <?php
        var_dump($_GET);
        ?>
        <p>El nombre es: <?php echo $_GET["name"]?></p>
        <p>La contraseña es: <?=  $_GET["pass"]?></p>
        <?php
        var_dump($_SERVER)?>
    </body>
</html>