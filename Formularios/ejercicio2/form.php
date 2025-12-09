<!DOCTYPE html>
<html>
    <head>
        <title>Formulario</title>
        <style>
            body * {
                margin-bottom: 5px;
            }
            .error{
                color:red;
                font-size: 0.5em;
            }
        </style>
    </head>
    <body>
        <?php
            $errores = false;
            $errorNombre = ""; $errorPass = ""; $errorCondiciones="";
            

            if($_SERVER['REQUEST_METHOD'] == "POST"){
        
            $nombre = $_POST["name"];
            $pass = $_POST["pass"];
            $pass2 = $_POST["pass2"];
            $edad = $_POST["opts"];
            $condiciones = $_POST["condiciones"];
            
            //comprobaciones
            if($nombre == ""){
                $errores = true;
                $errorNombre = "Tienes que escribir algún nombre";
            }
            if($pass != $pass2){
                $errores = true;
                $errorPass = "Las contraseñas no coinciden";
            }
            if(!isset($condiciones)){
                $errores = true;
                $errorCondiciones = "Debe aceptar las condiciones de uso si desea continuar";
            }

            if($errores == false){
                
            }
            }  
        ?>
        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="post">
            <label for="name">Nombre:</label>
            <input type="text" name="name" id="name">
            <br>
            <?php if($errorNombre != "") : ?>
                <p class="error"><?= $errorNombre ?></p>
            <?php endif; ?>
            <label for="pass">Contraseña:</label>
            <input type="password" name="pass" id="pass">
            <br>
            <label for="pass2">Repite la contraseña:</label>
            <input type="password" name="pass2" id="pass2">
            <br>
            <?php if($errorPass != "") : ?>
                <p class="error"><?= $errorPass ?></p>
            <?php endif; ?>
            <label>Grupo de edad:</label>
            <select name="opts" id="opts">
                <option value="Menor">Menor de edad</option>
                <option value="18-65">Entre 18 y 65</option>
                <option value="TerceraEdad">mayor de 65</option>
            </select>
            <br>

            <input type="checkbox" name="condiciones" id="condiciones">
            <label for="condiciones">Acepto las condiciones de uso</label>
            <?php if($errorCondiciones != "") : ?>
                <p class="error"><?= $errorCondiciones ?></p>
            <?php endif; ?>
            <br>
            <input type="submit" value="Enviar">&nbsp;<input type="reset" value="Borrar">     
        </form>
        <?php if(!$errores && $_SERVER['REQUEST_METHOD'] === 'POST') : ?>
            <p><?= "Formulario completado con exito. Errores 0.<br>Datos recogidos:".
            $nombre.", ".
            $pass.", ".
            $edad.", ".
            $condiciones ?></p>
        <?php endif; ?>
    </body>
</html>