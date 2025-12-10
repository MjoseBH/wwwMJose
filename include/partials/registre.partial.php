<main>
    <h2>Formulario de registro</h2>
    <form method="post" action="include/processaRegistre.php">
        <label>Nombre completo:</label>
        <input type="text" name="nom" required><br>

        <label>Contraseña:</label>
        <input type="password" name="contrasenya" required><br>

        <label>Email:</label>
        <input type="email" name="email"><br>

        <label>Teléfono:</label>
        <input type="text" name="telefon"><br>

        <label>Fecha de nacimiento:</label>
        <input type="date" name="naixement"><br>

        <label>País:</label>
        <select name="pais">
            <option value="espanya">España</option>
            <option value="frança">Francia</option>
            <option value="italia">Italia</option>
            <option value="alemanya">Alemania</option>
        </select><br>

        <label>Género:</label>
        <input type="radio" name="genere" value="hombre"> Hombre
        <input type="radio" name="genere" value="mujer"> Mujer
        <input type="radio" name="genere" value="otros"> Otros<br><br>

        <input type="submit" value="Registrar">
        <input type="reset" value="Borrar">
    </form>
</main>
