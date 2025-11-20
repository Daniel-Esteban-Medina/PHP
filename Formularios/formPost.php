<!DOCTYPE html>
<html>
    <head>
        <title>Formulario</title>
    </head>
    <body>
        <form action="landingPost.php" method="post">
            <label for="name">Nombre:</label>
            <input type="text" placeholder="Nombre..." name="name" id="name">
            <br>
            <label for="pass">Contraseña:</label>
            <input type="password" name="pass" id="pass">
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