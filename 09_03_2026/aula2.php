<?php
$numeros = [2, 3, 5, 7];
$numeros[] = 11;

unset($numeros[2]);

foreach ($numeros as $numero) {
    echo $numero . "<br>";
}

?>