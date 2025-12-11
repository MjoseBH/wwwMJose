<?php
// Inicializamos la variable
$nom = "";

// Comprobamos si el campo existe en la petición
if (isset($_POST['nom'])) {
    // Limpiamos el valor para evitar inyecciones
    $nom = trim(htmlspecialchars($_POST['nom']));
}

// Mostramos el resultado
if ($nom === "") {
    echo "El campo está vacío";
} else {
    echo "Tu nombre es: " . $nom;
}
?>
