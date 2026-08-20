<?php

$produtos = [
    ["nome" => "Teclado", "preco" => 120, "quantidade" => 5],
    ["nome" => "Mouse", "preco" => 60, "quantidade" => 0],
    ["nome" => "Monitor", "preco" => 900, "quantidade" => 3],
    ["nome" => "Cabo HDMI", "preco" => 35, "quantidade" => 10],
    ["nome" => "Headset", "preco" => 250, "quantidade" => 2]
];

$totalEstoque = 0;
$maiorValor = 0;
$produtoMaior = "";

foreach ($produtos as $produto) {

    if ($produto["quantidade"] == 0) {
        echo "Sem estoque: " . $produto["nome"] . "<br>";
    } else {

        $valorTotal = $produto["preco"] * $produto["quantidade"];

        echo "Produto: " . $produto["nome"] . "<br>";
        echo "Valor em estoque: R$ " . $valorTotal . "<br><br>";

        $totalEstoque += $valorTotal;

        if ($valorTotal > $maiorValor) {
            $maiorValor = $valorTotal;
            $produtoMaior = $produto["nome"];
        }
    }
}

echo "Valor total do estoque: R$ $totalEstoque<br>";
echo "Produto com maior valor financeiro: $produtoMaior";
?>