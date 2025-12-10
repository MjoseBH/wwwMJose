<?php
// Funció per validar i netejar els camps
function obtenirValor($nomCamp, $tipus="text") {
    if (!isset($_POST[$nomCamp]) || trim($_POST[$nomCamp]) === "") {
        return "Valor Buit";
    }
    $valor = trim($_POST[$nomCamp]);
    $valor = htmlspecialchars($valor);

    // Validacions específiques
    if ($tipus === "email" && !filter_var($valor, FILTER_VALIDATE_EMAIL)) {
        return "Email invàlid";
    }
    if ($tipus === "telefon" && !preg_match("/^[0-9]{9}$/", $valor)) {
        return "Telèfon invàlid";
    }
    return $valor;
}

// Rebem les dades del formulari
$nom        = obtenirValor("nom");
$contrasenya= obtenirValor("contrasenya");
$email      = obtenirValor("email", "email");
$telefon    = obtenirValor("telefon", "telefon");
$naixement  = obtenirValor("naixement");
$pais       = obtenirValor("pais");
$genere     = obtenirValor("genere");
?>
<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="UTF-8">
    <title>Resultat del registre</title>
    <!-- Estils generals -->
    <link rel="stylesheet" href="../css/estils.css">
    <!-- Estils específics per al registre -->
    <link rel="stylesheet" href="../css/registre.css">
</head>
<body>
    <!-- ⚠️ Atenció: la ruta dels partials canvia perquè estem dins de include/ -->
    <?php include("partials/cap.partial.php"); ?>
    <?php include("partials/menu.partial.php"); ?>

    <main>
        <h2>Dades rebudes del formulari de registre</h2>
        <ul>
            <li><strong>Nom:</strong> <?= $nom ?></li>
            <li><strong>Contrasenya:</strong> <?= $contrasenya ?></li>
            <li><strong>Email:</strong> <?= $email ?></li>
            <li><strong>Telèfon:</strong> <?= $telefon ?></li>
            <li><strong>Data de naixement:</strong> <?= $naixement ?></li>
            <li><strong>País:</strong> <?= $pais ?></li>
            <li><strong>Gènere:</strong> <?= $genere ?></li>
        </ul>