<main>
    <h2>Formulario de contacto</h2>
    <form method="post" action="include/processaContacte.php">
        <label>Email:</label>
        <input type="email" name="email" required><br>

        <label>Asunto:</label>
        <input type="text" name="assumpte" required><br>

        <label>Mensaje:</label><br>
        <textarea name="missatge" rows="5" cols="40" required></textarea><br>

        <input type="submit" value="Enviar">
        <input type="reset" value="Borrar">
    </form>
</main>
