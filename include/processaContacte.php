<?php
// Función para comprobar si el campo tiene valor
function obtenerValor($nombreCampo) {
    if (isset($_POST[$nombreCampo]) && trim($_POST[$nombreCampo]) !== "") {
        return htmlspecialchars(trim($_POST[$nombreCampo]));
    } else {
        return "Valor vacío";
    }
}

// Recibimos los datos del formulario
$email     = obtenerValor("email");
$asunto    = obtenerValor("assumpte");
$mensaje   = obtenerValor("missatge");

// Recibimos la puntuación y el multiplicador
$puntuacion   = isset($_POST['puntuacion']) ? (int) $_POST['puntuacion'] : 0;
$multiplicador = isset($_POST['multiplicador']) ? (int) $_POST['multiplicador'] : 1;

// Calculamos el total de imágenes a mostrar
$totalImagenes = $puntuacion * $multiplicador;

// Definimos las imágenes
$imagenPatita   = "../imatges/patita.jpg";        // imagen de patita
$imagenDefecto  = "../imatges/interrogacion.jpg"; // imagen por defecto
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Resultado del contacto</title>
    <!-- Estilos generales -->
    <link rel="stylesheet" href="../css/estils.css">
    <!-- Estilos específicos para el contacto -->
    <link rel="stylesheet" href="../css/contacto.css">
</head>
<body>
    <?php include("partials/cap.partial.php"); ?>
    <?php include("partials/menu.partial.php"); ?>

    <main>
        <h2>Datos recibidos del formulario de contacto</h2>
        <ul>
            <li><strong>Correo electrónico:</strong> <?= $email ?></li>
            <li><strong>Asunto:</strong> <?= $asunto ?></li>
            <li><strong>Mensaje original:</strong> <?= $mensaje ?></li>
        </ul>

        <h3>Puntuación de la página</h3>
        <p>Puntuación: <strong><?= $puntuacion ?></strong></p>
        <p>Multiplicador: <strong><?= $multiplicador ?></strong></p>
        <p>Total de imágenes: <strong><?= $totalImagenes ?></strong></p>

        <!-- Mostrar las patitas en varias columnas -->
        <?php
        if ($totalImagenes > 0) {
            echo "<div class='patitas-grid'>";
            for ($i = 0; $i < $totalImagenes; $i++) {
                echo "<img src='$imagenPatita' alt='patita' class='patita'>";
            }
            echo "</div>";
        } else {
            echo "<img src='$imagenDefecto' alt='sin valor'>";
        }
        ?>

        <h3>Mensaje procesado palabra por palabra</h3>
        <ul class="mensaje-procesado">
            <?php
            // Separamos el mensaje en palabras
            $palabras = explode(" ", $mensaje);
            $contador = 1;
            foreach ($palabras as $palabra) {
                $clase = "estilo" . ($contador % 8); // estilos en bucle de 1 a 8

                // Palabras clave: animal o apadrinar (case-insensitive)
                if (strcasecmp($palabra, "animal") == 0 || strcasecmp($palabra, "apadrinar") == 0) {
                    $clase = "clave";
                }

                // Palabras largas (>= 10 caracteres)
                if (strlen($palabra) >= 10) {
                    $clase = "larga";
                }

                echo "<li><span class='$clase'>$palabra</span></li>";
                $contador++;
            }
            ?>
        </ul>
    </main>

    <?php include("partials/peu.partial.php"); ?>
</body>
</html>
