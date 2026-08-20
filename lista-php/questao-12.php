<?php

$notas = [7.5, 4.0, 8.5, 6.0, 9.0, 3.5, 10.0, 5.5];

$soma = 0;
$maior = $notas[0];
$menor = $notas[0];

$maioresOuIguais6 = 0;
$menores6 = 0;

for ($i = 0; $i < count($notas); $i++) {

    $soma += $notas[$i];

    if ($notas[$i] >= 6) {
        $maioresOuIguais6++;
    } else {
        $menores6++;
    }

    if ($notas[$i] > $maior) {
        $maior = $notas[$i];
    }

    if ($notas[$i] < $menor) {
        $menor = $notas[$i];
    }
}

$media = $soma / count($notas);

echo "Média da turma: $media<br>";
echo "Notas maiores ou iguais a 6: $maioresOuIguais6<br>";
echo "Notas menores que 6: $menores6<br>";
echo "Maior nota: $maior<br>";
echo "Menor nota: $menor<br>";

?>