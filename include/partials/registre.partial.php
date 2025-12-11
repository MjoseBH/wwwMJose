<main>
    <h2>Formulario de registro</h2>
    <form method="post" action="include/processaRegistre.php">
        <label>Nombre:</label>
        <input type="text" name="nombre" required><br><br>

        <label>Apellidos:</label>
        <input type="text" name="apellidos"><br><br>

        <label>Contraseña:</label>
        <input type="password" name="contrasenya" required><br><br>

        <label>Email:</label>
        <input type="email" name="email" required><br><br>

        <label>Teléfono:</label>
        <input type="text" name="telefon"><br><br>

        <label>Fecha de nacimiento:</label>
        <input type="date" name="naixement"><br><br>

        <label>Donación</label>
        <select name="euros">
            <option value="">-- Selecciona --</option>
            <option value="cinco">5 Euros</option>
            <option value="diez">10 Euros</option>
            <option value="veinte">20 Euros</option>
            <option value="cincuenta">50 Euros</option>
        </select><br><br>
        
        <label for="animal">Elige el animal que quieres apadrinar:</label>
        <select name="animal" id="animal">
            <option value="">-- Selecciona un animal --</option>
            <option value="gorila">Gorila</option>
            <option value="tortuga">Tortuga</option>
            <option value="tigre">Tigre</option>
        </select><br><br>

        <label>Continente </label>
        <input type="radio" name="Continente" value="Europa"> Europa
        <input type="radio" name="Continente" value="Asia"> Asia
        <input type="radio" name="Continente" value="Africa"> Africa
        <input type="radio" name="Continente" value="America"> America
        <input type="radio" name="Continente" value="Oceania"> Oceania <br><br>

        <!-- ✅ NUEVO APARTADO: Checkboxes de animales en peligro de extinción -->
        <fieldset>
            <legend>Animales en peligro de extinción</legend>
            <label><input type="checkbox" name="animals[]" value="gorila"> Gorila de montaña</label><br>
            <label><input type="checkbox" name="animals[]" value="tigre"> Tigre de Bengala</label><br>
            <label><input type="checkbox" name="animals[]" value="rinoceronte"> Rinoceronte negro</label><br>
            <label><input type="checkbox" name="animals[]" value="tortuga"> Tortuga carey</label><br>
            <label><input type="checkbox" name="animals[]" value="oso"> Oso polar</label><br>
        </fieldset><br>

        <p>Elige el estilo de la página de resultados:</p>
        <label><input type="radio" name="estilo" value="1"> Estilo 1 (rojo)</label><br>
        <label><input type="radio" name="estilo" value="2"> Estilo 2 (verde)</label><br><br>

        <input type="submit" value="Enviar">
        <input type="reset" value="Borrar">
    </form>
</main>
