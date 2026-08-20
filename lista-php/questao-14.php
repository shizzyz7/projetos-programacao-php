<?php

$numeros = [2, 5, 2, 8, 5, 2, 10, 8, 5, 5];

$contados = [];

foreach ($numeros as $numero) {

    if (in_array($numero, $contados)) {
        continue;
    }

    $quantidade = 0;

    foreach ($numeros as $valor) {

        if ($valor == $numero) {
            $quantidade++;
        }

    }

    echo "$numero aparece $quantidade vez";

    if ($quantidade > 1) {
        echo "es";
    }

    echo "<br>";

    $contados[] = $numero;
}

?>