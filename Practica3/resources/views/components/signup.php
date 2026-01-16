<form action="<?= $_SERVER['PHP_SELF'] ?>" method="post">
    <label for="name">NOMBRE: </label>
    <input type="text" name="name" id="name"
        required
            minlength="3"
            pattern="[a-zA-Z]+"
            title="Solo letras y minimo 3 caracteres."
    >

    <label for="pass">CONTRASEÑA: </label>
    <input type="password" name="pass" id="pass"
        required
            minlength="6"
            pattern="(?=.*[0-9])(?=.*[a-zA-Z])(?=.*[@#./_-]).{6,}"
            title="Minimo 6 caracteres que contengan numeros, letras y caracteres especiales (@ # . / _ -)."
    >

    <label for="fecha">FECHA DE NACIMIENTO: </label>
    <input type="date" name="fecha" id="fecha">
    <br>
    <input type="submit" value="Enviar">
</form>