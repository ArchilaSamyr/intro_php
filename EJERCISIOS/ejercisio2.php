<?php

$numeros = array();

for ($i = 1; $i <= 100; $i++) {
    $numeros[] = $i;
}

for ($i = 0; $i < count($numeros); $i++) {
    echo $numeros[$i] . "<br>";
}
?>