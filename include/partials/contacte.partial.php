<main>
    <h2>Formulario de contacto</h2>
    <form method="post" action="include/processaContacte.php">
        <label>Email:</label>
        <input type="email" name="email" required><br>

        <label>Asunto:</label>
        <input type="text" name="assumpte" required><br>

        <label for="puntuacion">Puntúa la página (1 a 5):</label>
        <input type="number" name="puntuacion" id="puntuacion" min="1" max="5" required>

        <label for="multiplicador">Multiplicador:</label>
        <input type="range" name="multiplicador" id="multiplicador" min="1" max="100" value="1"><br><br>

        <label>Mensaje:</label><br>
        <textarea name="missatge" rows="5" cols="40" required></textarea><br>

        <input type="submit" value="Enviar">
        <input type="reset" value="Borrar">
    </form>
</main>
