<?php

class Produto
{
    public $nome;
    public $preco;
    public $quantidade;

    public function __construct($nome, $preco, $quantidade)
    {
        $this->nome = $nome;
        $this->preco = $preco;
        $this->quantidade = $quantidade;
    }
}

$produtos = [
    new Produto("Teclado", 120, 2),
    new Produto("Mouse", 60, 3),
    new Produto("Monitor", 900, 1),
    new Produto("Headset", 250, 2),
    new Produto("Cabo HDMI", 35, 4)
];

$total = 0;
$maiorGasto = 0;
$produtoMaiorGasto = "";

foreach ($produtos as $produto) {

    $subtotal = $produto->preco * $produto->quantidade;

    echo "Produto: " . $produto->nome . "<br>";
    echo "Quantidade: " . $produto->quantidade . "<br>";
    echo "Preço unitário: R$ " . $produto->preco . "<br>";
    echo "Subtotal: R$ " . $subtotal . "<br><br>";

    $total += $subtotal;

    if ($subtotal > $maiorGasto) {
        $maiorGasto = $subtotal;
        $produtoMaiorGasto = $produto->nome;
    }
}

if ($total <= 200) {
    $percentual = 0;
} elseif ($total <= 500) {
    $percentual = 5;
} elseif ($total <= 1000) {
    $percentual = 10;
} else {
    $percentual = 15;
}

$desconto = $total * ($percentual / 100);
$totalFinal = $total - $desconto;

echo "Valor sem desconto: R$ $total<br>";
echo "Desconto: $percentual%<br>";
echo "Valor economizado: R$ $desconto<br>";
echo "Valor final: R$ $totalFinal<br>";
echo "Produto com maior gasto: $produtoMaiorGasto";

?>