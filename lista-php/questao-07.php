<?php

$numero = 20;

while ($numero >= 0) {

    if ($numero % 5 == 0) {
        echo "$numero - Múltiplo de 5<br>";
    } else {
        echo "$numero<br>";
    }

    $numero--;
}

echo "Contagem encerrada!";

?>