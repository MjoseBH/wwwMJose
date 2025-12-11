<?php
// Arrays con nombres de los días y meses en español
$dias = array("Domingo", "Lunes", "Martes", "Miércoles", "Jueves", "Viernes", "Sábado");
$meses = array(
    "Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio",
    "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre"
);

// Obtenemos las partes de la fecha actual
$diaSemana = date('w'); // 0 (Domingo) a 6 (Sábado)
$diaMes    = date('j'); // 1 a 31
$mesActual = date('n'); // 1 a 12
$anioActual = date('Y'); // año completo

// Construimos la cadena con concatenación
$fechaFormateada = $dias[$diaSemana] . ", " . $diaMes . " de " . $meses[$mesActual - 1] . " de " . $anioActual;

// Mostramos la fecha
echo "<p class='fecha-actual'>$fechaFormateada</p>";
?>
