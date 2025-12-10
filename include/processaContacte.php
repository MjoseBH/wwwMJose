<?php
// Funció per comprovar si el camp té valor
function obtenirValor($nomCamp) {
    if (isset($_POST[$nomCamp]) && trim($_POST[$nomCamp]) !== "") {
        return htmlspecialchars(trim($_POST[$nomCamp]));
    } else {
        return "Valor Buit";
    }
}

// Rebem les dades del formulari
$email    = obtenirValor("email");
$assumpte = obtenirValor("assumpte");
$missatge = obtenirValor("missatge");
?>
<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="UTF-8">
    <title>Resultat del contacte</title>
    <!-- Estils generals -->
    <link rel="stylesheet" href="../css/estils.css">
    <!-- Estils específics per al contacte -->
    <link rel="stylesheet" href="../css/registre.css">
</head>
<body>
    <!-- ⚠️ Atenció: la ruta dels partials canvia perquè estem dins de include/ -->
    <?php include("partials/cap.partial.php"); ?>
    <?php include("partials/menu.partial.php"); ?>

    <main>
        <h2>Dades rebudes del formulari de contacte</h2>
        <ul>
            <li><strong>Correu electrònic:</strong> <?= $email ?></li>
            <li><strong>Assumpte:</strong> <?= $assumpte ?></li>
            <li><strong>Missatge:</strong> <?= $missatge ?></li>
        </ul>
    </main>

    <?php include("partials/peu.partial.php"); ?>
</body>
</html>
