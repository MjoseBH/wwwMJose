<?php
// Obtenim l'apartat seleccionat per GET
$apartat = "";
if (isset($_GET['apartat'])) {
    $apartat = $_GET['apartat'];
}
?>
<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="UTF-8">
    <title>Apadrina un animal</title>
    <link rel="stylesheet" href="css/estils.css">
</head>
<body>
    <?php include("include/partials/cap.partial.php"); ?>
    <?php include("include/partials/menu.partial.php"); ?>

    <main>
        <?php
        switch ($apartat) {
            case "registre":
                include("include/partials/registre.partial.php");
                break;
            case "contacte":
                include("include/partials/contacte.partial.php");
                break;
            case "apadrina":
                include("include/partials/apadrina.partial.php");
                break;
            default:
                include("include/partials/inici.partial.php");
                break;
        }
        ?>
    </main>

    <?php include("include/partials/peu.partial.php"); ?>
</body>
</html>
