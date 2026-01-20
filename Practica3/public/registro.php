<!DOCTYPE html>
<html>
    <head>
        <title>REGISTRO USUARIO</title>
        <link rel="stylesheet" href="css/styles.css">
    </head>
    <body>
        <h2 id="tituloPage">REGISTRO USUARIO</h2>
        <?php
            $errorPass = "";
            $errorFecha = "";
            $regexPass = '/^(?=.*[0-9])(?=.*[a-zA-Z])(?=.*[@#\.\/_\-]).{6,}$/';

            include __DIR__ . "/../app/models/Tarea.php";
            include __DIR__ . "/../app/models/TareaDoc.php"; include __DIR__ . "/../app/models/TareaScript.php"; include __DIR__ . "/../app/models/TareaGrafica.php";
            include __DIR__ . "/../app/models/Usuario.php";
            include __DIR__ . "/../utils/funcionesGenerales.php";
            if (!preg_match($regexPass, $_POST["pass"])) {
                $errorPass = "CONTRASEÑA: Mínimo 6 caracteres con letras, números y caracteres especiales.\n";
            }
            if ((new DateTime($_POST["fecha"])) < (new DateTime())) {
                $errorFecha = "FECHA: La fecha debe ser posterior a la actual.";
            }
            if($errorPass != "" || $errorFecha != ""){
                echo "<div class='cuadroError'>".$errorPass.$errorFecha."</div>";
            }
            include __DIR__ . "/../resources/views/components/signup.php";
            // INCLUDES
            session_start();
            if(isset($_POST["name"]) && isset($_POST["pass"]) && isset($_POST["fecha"])){
                $nombre = $_POST["name"];
                $con = $_POST["pass"];
                $nacimiento = $_POST["fecha"];
                echo "<p>".$nombre.", ".$con.", ".fechaSpain($nacimiento)."</p>";
            } 
        ?>
            
    </body>
<html>