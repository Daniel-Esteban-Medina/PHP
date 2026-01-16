<!DOCTYPE html>
<html>
    <head>
        <title>REGISTRO USUARIO</title>
        <link rel="stylesheet" href="css/styles.css">
    </head>
    <body>
        <h2 id="tituloPage">REGISTRO USUARIO</h2>
        <?php
            // INCLUDES
            session_start();
            if(isset($_POST["name"]) && isset($_POST["pass"]) && isset($_POST["fecha"])){
                $nombre = $_POST["name"];
                $con = $_POST["pass"];
                $nacimiento = $_POST["fecha"];
                var_dump($nombre.", ".$con.", ".fechaSpain($nacimiento));
            }
            
            include __DIR__ . "/../app/models/Tarea.php";
            include __DIR__ . "/../app/models/TareaDoc.php"; include __DIR__ . "/../app/models/TareaScript.php"; include __DIR__ . "/../app/models/TareaGrafica.php";
            include __DIR__ . "/../app/models/Usuario.php";
            include __DIR__ . "/../utils/funcionesGenerales.php";
            include __DIR__ . "/../resources/views/components/signup.php";
        ?>
            
    </body>
<html>