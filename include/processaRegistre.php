<?php
// Recibimos el estilo elegido (por defecto 1 si no se selecciona nada)
$estilo = isset($_POST['estilo']) ? $_POST['estilo'] : "1";

// Función para comprobar si el campo tiene valor
function obtenerValor($nombreCampo) {
    if (isset($_POST[$nombreCampo]) && trim($_POST[$nombreCampo]) !== "") {
        return htmlspecialchars(trim($_POST[$nombreCampo]));
    } else {
        return "Valor vacío";
    }
}

// Recibimos los datos del formulario
$nombre      = obtenerValor("nombre");
$apellidos   = obtenerValor("apellidos");
$contrasenya = obtenerValor("contrasenya");
$email       = obtenerValor("email");
$telefon     = obtenerValor("telefon");
$naixement   = obtenerValor("naixement");
$euros       = obtenerValor("euros");

// ⚠️ Para el animal apadrinado recogemos directamente el valor
$animal      = isset($_POST['animal']) && $_POST['animal'] !== "" ? $_POST['animal'] : "";

$continente  = obtenerValor("Continente");

// Imagen por defecto
$imagenDefecto = "../imatges/interrogacion.jpg";

// Incluimos el array asociativo con información de los animales
include("dadesAnimals.php");
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Resultado del registro</title>
    <link rel="stylesheet" href="../css/estils.css">
    <link rel="stylesheet" href="../css/registre.css">
    <?php
    // ✅ Cargar la hoja de estilos según el valor elegido
    if ($estilo == "1") {
        echo '<link rel="stylesheet" href="../css/estilsregistre1.css">';
    } elseif ($estilo == "2") {
        echo '<link rel="stylesheet" href="../css/estilsregistre2.css">';
    }
    ?>
</head>
<body>
    <?php include("partials/cap.partial.php"); ?>
    <?php include "./partials/data.partial.php";?>
    <?php include("partials/menu.partial.php"); ?>

    <main>
        <h2>Datos recibidos del formulario de registro</h2>
        <ul>
            <li><strong>Nombre:</strong> <?= $nombre ?></li>
            <li><strong>Apellidos:</strong> <?= $apellidos ?></li>
            <li><strong>Contraseña:</strong> <?= $contrasenya ?></li>
            <li><strong>Email:</strong> <?= $email ?></li>
            <li><strong>Teléfono:</strong> <?= $telefon ?></li>
            <li><strong>Fecha de nacimiento:</strong> <?= $naixement ?></li>
            <li><strong>Donación:</strong> <?= $euros ?></li>
            <li><strong>Animal apadrinado:</strong> <?= $animal !== "" ? $animal : "Sin valor" ?></li>
            <li><strong>Continente:</strong> <?= $continente ?></li>
            <li><strong>Estilo:</strong> <?= $estilo ?></li>
        </ul>

        <h3>Imagen del animal apadrinado</h3>
        <?php
        switch ($animal) {
            case "gorila":
                $imagen = "../imatges/gorila.jpg";
                break;
            case "tortuga":
                $imagen = "../imatges/tortuga.jpg";
                break;
            case "tigre":
                $imagen = "../imatges/tigre.jpg";
                break;
            case "rinoceronte":
                $imagen = "../imatges/rinoceronte.jpg";
                break;
            default:
                $imagen = $imagenDefecto;
        }
        echo "<img src='$imagen' alt='$animal' class='animal-img'>";

        // Mostrar información del animal desde dadesAnimals.php
        if ($animal !== "" && isset($dadesAnimals[$animal])) {
            echo "<h3>Información del animal apadrinado</h3>";
            echo "<table border='1' class='tabla-animal'>";
            foreach ($dadesAnimals[$animal] as $clau => $valor) {
                echo "<tr><td><strong>$clau</strong></td><td>$valor</td></tr>";
            }
            echo "</table>";
        } else {
            echo "<p>No se seleccionó un animal válido.</p>";
        }
        ?>

        <h3>Animales en peligro de extinción seleccionados</h3>
        <?php
        if (isset($_POST['animals']) && is_array($_POST['animals'])) {
            echo "<div class='animales-grid'>";
            foreach ($_POST['animals'] as $animalSel) {
                switch ($animalSel) {
                    case "gorila":
                        $imagen = "../imatges/gorila.jpg";
                        break;
                    case "tigre":
                        $imagen = "../imatges/tigre.jpg";
                        break;
                    case "rinoceronte":
                        $imagen = "../imatges/rinoceronte.jpg";
                        break;
                    case "tortuga":
                        $imagen = "../imatges/tortuga.jpg";
                        break;
                    case "oso":
                        $imagen = "../imatges/oso.jpg";
                        break;
                    default:
                        $imagen = $imagenDefecto;
                }
                echo "<img src='$imagen' alt='$animalSel' class='animal-img'>";
            }
            echo "</div>";
        } else {
            echo "<p>No seleccionaste ningún animal en peligro de extinción.</p>";
            echo "<img src='$imagenDefecto' alt='sin valor'>";
        }
        ?>
    </main>

    <?php include("partials/peu.partial.php"); ?>
</body>
</html>
