<?php

$times = [
    ["nome" => "Time A", "vitorias" => 5, "empates" => 2, "derrotas" => 1],
    ["nome" => "Time B", "vitorias" => 4, "empates" => 4, "derrotas" => 0],
    ["nome" => "Time C", "vitorias" => 6, "empates" => 0, "derrotas" => 2],
    ["nome" => "Time D", "vitorias" => 3, "empates" => 3, "derrotas" => 2]
];

$maiorPontos = -1;
$menorPontos = 999;
$maiorVitorias = -1;

$timeMaiorPontos = "";
$timeMenorPontos = "";
$timeMaisVitorias = "";

$totalPontos = 0;

foreach ($times as $time) {

    $pontos = ($time["vitorias"] * 3) + $time["empates"];

    echo $time["nome"] . " - " . $pontos . " pontos<br>";

    $totalPontos += $pontos;

    if (
        $pontos > $maiorPontos ||
        ($pontos == $maiorPontos && $time["vitorias"] > $maiorVitorias)
    ) {
        $maiorPontos = $pontos;
        $timeMaiorPontos = $time["nome"];
    }

    if ($pontos < $menorPontos) {
        $menorPontos = $pontos;
        $timeMenorPontos = $time["nome"];
    }

    if ($time["vitorias"] > $maiorVitorias) {
        $maiorVitorias = $time["vitorias"];
        $timeMaisVitorias = $time["nome"];
    }
}

echo "<br>";
echo "Time com mais pontos: $timeMaiorPontos<br>";
echo "Time com menos pontos: $timeMenorPontos<br>";
echo "Time com mais vitórias: $timeMaisVitorias<br>";
echo "Total de pontos: $totalPontos";

?>