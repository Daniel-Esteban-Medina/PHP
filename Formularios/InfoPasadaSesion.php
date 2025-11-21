<?php
session_start();
// Se comprueba si se a llegado a esta pagina mediante el formulario
// de no ser el caso se redigira al formulario
if(!isset($_SESSION["origen"])){
    if($_SESSION["origen"]  != "Signup"){
        header("Location: Segurity&sesion.php");
        exit();
    }
}
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
            $con = $_SESSION["pass"];
            $email = $_SESSION["gmail"];
            $edad = $_SESSION["edad"];
            
            include __DIR__ . "/User.php";
            $u1 = new User($nombre,$con,$email,$edad);
            echo $u1->__toString();
        ?>
    </body>
</html>