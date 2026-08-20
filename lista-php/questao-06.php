<?php

$a = 15;
$b = 32;
$c = 21;

if ($a >= $b && $a >= $c) {
    $maior = $a;
} elseif ($b >= $a && $b >= $c) {
    $maior = $b;
} else {
    $maior = $c;
}

echo "O maior número é: $maior";

?>