<!DOCTYPE html>
<html>
    <head>
        <title>Formulario</title>
        <style>
            .error{
                color:red;
                font-size: 0.5em;
            }
        </style>
    </head>
    <body>
        <?php
            session_start();
            //Introducir seguridad
            function secure($text){
                //Quitar espacios en blanco
                $text = trim($text);
                //Quita las ' / '
                $text = stripslashes($text);
                //Quita las cadenas html
                $text = htmlspecialchars($text);
                return $text;
            }
            $errores = false;
            $passError = "";

            if($_SERVER['REQUEST_METHOD'] == "POST"){
        
            $nombre = secure($_POST["name"]);
            $edad = secure($_POST["edad"]);
            $gmail = secure($_POST["gmail"]);
            $pass = secure($_POST["pass"]);
            $pass2 = secure($_POST["pass2"]);
            
            //comprobaciones
            if(empty($edad)){
                $edad = 0;
            }
            if($pass != $pass2){
                $errores = true;
                $passError = "Las contraseñas no coinciden.";               
            }
            if($errores == false){
                //Guardo en la sesion cualquier dato que quiera pasar
                $_SESSION["nombre"] = $nombre;
                $_SESSION["edad"] = $edad;
                $_SESSION["gmail"] = $gmail;
                $_SESSION["pass"] = $pass;
                //Le puedo meter más datos com de donde vengo
                $_SESSION["origen"] = "Signup";
                header("Location: InfoPasadaSesion.php");  //Esto te envia a una pagina
                exit(); //Con esto se termina el script
            }
            }  
        ?>
        <!-- $_SERVER['PHP_SELF']: Se usa en formularios HTML para que el formulario se envíe a la misma página que lo generó. De esta forma, 
        se puede procesar el formulario dentro del mismo archivo. -->
        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="post">
            <label for="name">Nombre:</label>
            <input type="text" placeholder="Nombre..." name="name" id="name">
            <br>
            <label for="pass">Contraseña:</label>
            <input type="password" name="pass" id="pass">
            <br>
            <label for="pass2">Confirme contraseña:</label>
            <input type="password" name="pass2" id="pass2">
            <p class="error"><?= $passError ?></p>
            <br>
            <label for="edad">Edad:</label>
            <input type="number" name="edad" id="edad">
            <br>
            <label for="gmail">Email:</label>
            <input type="email" name="gmail" id="gmail">
            <br>
            <input type="submit" value="enviar">
        </form>
    </body>
</html>