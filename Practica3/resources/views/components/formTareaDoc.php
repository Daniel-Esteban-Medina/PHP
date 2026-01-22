<form action="<?= $_SERVER['PHP_SELF'] ?>" method="post">
    <label for="nombre">Nombre:</label>
    <input type="text" id="nombre" name="nombre" 
        required
            minlength="3"
            pattern="[a-zA-Z]+"
            title="Solo letras y minimo 3 caracteres."
    ><br>
    <label for="descripción">Descripción: </label><br>
    <textarea id="descripción" name="descripción" rows="10" cols="50"></textarea><br>
    <label for="fechaInicio">Fecha inicio: </label>
    <input type="date" id="fechaInicio" name="fechaInicio">&nbsp;
    <label for="fechaLimite">Fecha limite: </label>
    <input type="date" id="fechaLimite" name="fechaLimite"><br>
    <label for="prioridad">Prioridad:</label>
    <select id="prioridad" name="prioridad">
        <option value="BAJA">Baja</option>
        <option value="MEDIA">Media</option>
        <option value="ALTA">Alta</option>
    </select>
    <label for="estado">Estado:</label>
    <select id="estado" name="estado">
        <option value="PENDIENTE">Pendiente</option>
        <option value="EN_CURSO">En curso</option>
        <option value="COMPLETADA">Completada</option>
    </select>
    

    <!-- TAREA DOC -->
    <label for="numPaginas">Número de paginas del documento: </label>
    <input type="number" id="numPaginas" name="numPaginas">&nbsp;

    <label for="bibliografia">Bibliografia: </label>
    <input type="text" id="bibliografia" placeholder="Elemento1, Elemento2, Elemento3, etc" name="bibliografia"><br>

    <label>¿El documento esta desactualizado?</label><br>
        <input type="radio" name="desactualizada" id="si" value="Sí">
        <label for="si">Sí</label>

        <input type="radio" name="desactualizada" id="no" value="No">
        <label for="no">No</label>
    <br>
    <input type="submit" value="Enviar">
</form>