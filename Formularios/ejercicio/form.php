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
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <?php
        session_start();
            $errores = false;
            $tipoError = "";
            $glutenError = "";

            if($_SERVER['REQUEST_METHOD'] == "POST"){
        
            $nombre = $_POST["name"];
            $receta = $_POST["titulo"];
            $tiempo = $_POST["tiempo"];
            $gmail = $_POST["gmail"];
            $tipo = $_POST["opts"];
            $gluten = $_POST["rango"];
            $color = $_POST["color"];
            
            //comprobaciones
            if(!isset($tipo)){
                $errores = true;
                $tipoError = "Tienes que marcar algún tipo";
            }
            if(!isset($gluten)){
                $errores = true;
                $glutenError = "Tienes que marcar si con gluten o no.";
            }


            if(isset($_POST["cookie"])){
                setcookie("Receta", "valor de la cookie", Time()+(14*24*60*60));
            }
            if($errores == false){
                $_SESSION["nombre"] = $nombre;
                $_SESSION["receta"] = $receta;
                $_SESSION["tiempo"] = $tiempo;
                $_SESSION["gmail"] = $gmail;
                $_SESSION["tipo"] = $tipo;
                $_SESSION["gluten"] = $gluten;
                $_SESSION["color"] = $color;
                header("Location: index.php");
                exit();
            }
            }  
        ?>
        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="post">
            <label for="name">Nombre:</label>
            <input type="text" placeholder="Persona..." name="name" id="name">
            <br>
            <label for="titulo">Titulo receta:</label>
            <input type="text" placeholder="Receta..." name="titulo" id="titulo">
            <br>
            <label for="tiempo">Tiempo:</label>
            <input type="number" name="tiempo" id="tiempo">
            <br>
            <label>Tipo:</label>
            <select name="opts" id="opts">
                <option value="VEGANA">VEGANA</option>
                <option value="VEGETARIANA">VEGETARIANA</option>
                <option value="CARNIVORA">CARNIVORA</option>
            </select>
            <br>

            <?php if($tipoError != "") : ?>
                <p class="error"><?= $tipoError ?></p><br>
            <?php endif; ?>

            <label for="gmail">Email:</label>
            <input type="email" name="gmail" id="gmail">
            <br>

            <label>Espacificaciones dieteticas:</label>

            <input type="radio" name="rango" id="conGluten" value="con_gluten">
            <label for="conGluten">Con gluten</label>

            <input type="radio" name="rango" id="sinGluten" value="sin_gluten">
            <label for="sinGluten">Sin gluten</label>

            <?php if($glutenError != "") : ?>
                <p class="error"><?= $glutenError ?></p>
            <?php endif; ?>
            <br>

            <label for="color">Color:</label>
            <input type="color" name="color" id="color">
            <br>
            <input type="submit" value="enviar"><br>
            <input type="checkbox" name="cookie" id="cookie">
            <label for="cookie">Quiero que me hagas una cookie</label>
        </form>
        <?php include __DIR__ . "/footer.php";?>
    </body>
</html>