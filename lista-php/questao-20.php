<?php

$candidatos = [
    ["numero" => 10, "nome" => "Ana", "votos" => 0],
    ["numero" => 20, "nome" => "Carlos", "votos" => 0],
    ["numero" => 30, "nome" => "Maria", "votos" => 0]
];

$votos = [10, 20, 10, 30, 30, 30, 20, 10, 50, 30, 20, 30, 50, 10];

$votosNulos = 0;

foreach ($votos as $voto) {

    $encontrado = false;

    foreach ($candidatos as $indice => $candidato) {

        if ($voto == $candidato["numero"]) {
            $candidatos[$indice]["votos"]++;
            $encontrado = true;
            break;
        }
    }

    if (!$encontrado) {
        $votosNulos++;
    }
}

$totalValidos = count($votos) - $votosNulos;
$totalGeral = count($votos);

$maiorVotos = -1;
$vencedor = "";

foreach ($candidatos as $candidato) {

    if ($candidato["votos"] > $maiorVotos) {
        $maiorVotos = $candidato["votos"];
        $vencedor = $candidato["nome"];
    }
}

echo "RESULTADO DA ELEIÇÃO<br><br>";

foreach ($candidatos as $candidato) {

    if ($totalValidos > 0) {
        $percentual = ($candidato["votos"] / $totalValidos) * 100;
    } else {
        $percentual = 0;
    }

    echo $candidato["nome"] . ": " . $candidato["votos"] . " votos - ";
    echo number_format($percentual, 2, ",", ".") . "%<br>";
}

echo "<br>";
echo "Votos nulos: $votosNulos<br>";
echo "Total de votos válidos: $totalValidos<br>";
echo "Total geral de votos: $totalGeral<br>";
echo "Candidato vencedor: $vencedor";

?>