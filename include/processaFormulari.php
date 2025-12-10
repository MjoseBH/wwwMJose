<?php
// Inicialitzem variables
$nom = "";
$email = "";

// Comprovem si els camps existeixen i tenen valor
if (isset($_POST['nom'])) {
    $nom = trim(htmlspecialchars($_POST['nom']));
} else {
    $nom = "Valor Buit";
}

if (isset($_POST['email'])) {
    $email = trim(htmlspecialchars($_POST['email']));
} else {
    $email = "Valor Buit";
}
?>
<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="UTF-8">
    <title>Resultat del formulari</title>
    <link rel="stylesheet" href="../css/estils.css">
</head>
<body>
    <h2>Dades rebudes</h2>
    <p><strong>Nom:</strong> <?= $nom ?></p>
    <p><strong>Email:</strong> <?= $email ?></p>
</body>
</html>
