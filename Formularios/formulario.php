<!DOCTYPE html>
<html>
    <head>
        <title>Formulario</title>
    </head>
    <body>
        <form action="landing.php" method="get">
            <label for="name">Nombre:</label>
            <input type="text" placeholder="Nombre..." name="name" id="name">
            <br>
            <label for="password">Contraseña:</label>
            <input type="password" name="pass" id="password">
            <br>
            <label for="terminos">Acepta terminos:</label>
            <input type="checkbox" name="terms" id="terminos">
            <br>
            <label for="opts">Acepta terminos:</label>
            <select name="opts" id="opts">
                <option value="DAW">desarrollo web</option>
                <option value="DAM">desarrollo multiplataforma</option>
                <option value="ASIR">redes</option>
            </select>
            <br>
            <label>Género:</label>

            <input type="radio" name="rango" id="mujer" value="Mujer">
            <label for="mujer">Mujer</label>

            <input type="radio" name="rango" id="hombre" value="Hombre">
            <label for="hombre">Hombre</label>

            <input type="radio" name="rango" id="otro" value="Otro">
            <label for="otro">Otro</label>
            <br>
            <input type="submit" value="enviar">
        </form>
    </body>
</html>