<?php
$duracion = 5; 

if ($duracion <= 3) {
    $costo = 300;
} else {
    $minutos_adicionales = $duracion - 3;
    $costo = 300 + ($minutos_adicionales * 50);
}

echo "Duración: " . $duracion . " minutos<br>";
echo "Costo a pagar: $" . $costo;
?>