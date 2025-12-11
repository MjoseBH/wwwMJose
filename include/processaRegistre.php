<?php
// Recogemos el estilo elegido
$cssExtra = ""; // por defecto
if (isset($_POST['estilo'])) {
    if ($_POST['estilo'] == "1") {
        $cssExtra = "../css/estilsregistre1.css";
    } elseif ($_POST['estilo'] == "2") {
        $cssExtra = "../css/estilsregistre2.css";
    }
}

// Comprobamos el campo select "animal"
if (isset($_POST['animal']) && $_POST['animal'] !== "") {
    $animal = htmlspecialchars($_POST['animal']);
    switch ($animal) {
        case "gorila":
            $imagen = "../imatges/gorila.jpg";
            $nombreAnimal = "Gorila";
            break;
        case "tortuga":
            $imagen = "../imatges/tortuga.jpg";
            $nombreAnimal = "Tortuga";
            break;
        case "tigre":
            $imagen = "../imatges/tigre.jpg";
            $nombreAnimal = "Tigre";
            break;
        default:
            $imagen = "../imatges/interrogacion.jpg";
            $nombreAnimal = "Sin valor";
            break;
    }
} else {
    // Si no hay valor seleccionado → imagen por defecto
    $imagen = "../imatges/interrogacion.jpg";
    $nombreAnimal = "Sin valor";
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Resultado del registro</title>
    <!-- Estilo principal -->
    <link rel="stylesheet" href="../css/estils.css">
    <!-- Estilo específico de registro -->
    <link rel="stylesheet" href="../css/registro.css">
    <!-- Estilo extra si se eligió -->
    <?php if ($cssExtra !== ""): ?>
        <link rel="stylesheet" href="<?= $cssExtra ?>">
    <?php endif; ?>
</head>
<body>
    <?php include("partials/cap.partial.php"); ?>
    <?php include("partials/menu.partial.php"); ?>

    <main>
        <h2>Animal elegido</h2>
        <p>Has elegido: <strong><?= $nombreAnimal ?></strong></p>
        <img src="<?= $imagen ?>" alt="Animal apadrinado" class="animal-img">

        <h3>Estilo aplicado</h3>
    </main>

    <?php include("partials/peu.partial.php"); ?>
</body>
</html>
