<?php

function calcular($numero) {
    $cuadrado = $numero * $numero;
    $cubo = $numero * $numero * $numero;
    $raiz = sqrt($numero);

    echo "Número: $numero <br>";
    echo "Cuadrado: $cuadrado <br>";
    echo "Cubo: $cubo <br>";
    echo "Raíz cuadrada: $raiz <br>";
}


calcular(4);
?>