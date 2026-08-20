<?php

class Funcionario
{
    public $nome;
    public $salario;
    public $cargo;

    public function __construct($nome, $salario, $cargo)
    {
        $this->nome = $nome;
        $this->salario = $salario;
        $this->cargo = $cargo;
    }
}

$funcionarios = [
    new Funcionario("Ana", 1800, "Auxiliar"),
    new Funcionario("Carlos", 2500, "Técnico"),
    new Funcionario("Maria", 4500, "Analista"),
    new Funcionario("João", 6000, "Gerente"),
    new Funcionario("Pedro", 3500, "Desenvolvedor")
];

$soma = 0;

$maiorSalario = $funcionarios[0]->salario;
$menorSalario = $funcionarios[0]->salario;

$funcionarioMaior = $funcionarios[0]->nome;
$funcionarioMenor = $funcionarios[0]->nome;

foreach ($funcionarios as $funcionario) {

    echo "Nome: " . $funcionario->nome . "<br>";
    echo "Cargo: " . $funcionario->cargo . "<br>";
    echo "Salário: R$ " . $funcionario->salario . "<br><br>";

    $soma += $funcionario->salario;

    if ($funcionario->salario > $maiorSalario) {
        $maiorSalario = $funcionario->salario;
        $funcionarioMaior = $funcionario->nome;
    }

    if ($funcionario->salario < $menorSalario) {
        $menorSalario = $funcionario->salario;
        $funcionarioMenor = $funcionario->nome;
    }
}

$media = $soma / count($funcionarios);

$acimaMedia = 0;

foreach ($funcionarios as $funcionario) {
    if ($funcionario->salario > $media) {
        $acimaMedia++;
    }
}

echo "Média salarial: R$ $media<br>";
echo "Maior salário: $funcionarioMaior - R$ $maiorSalario<br>";
echo "Menor salário: $funcionarioMenor - R$ $menorSalario<br>";
echo "Funcionários acima da média: $acimaMedia<br><br>";

foreach ($funcionarios as $funcionario) {

    $salarioAntigo = $funcionario->salario;

    if ($funcionario->salario < 2000) {
        $funcionario->salario *= 1.15;
    } elseif ($funcionario->salario <= 5000) {
        $funcionario->salario *= 1.10;
    } else {
        $funcionario->salario *= 1.05;
    }

    echo $funcionario->nome . "<br>";
    echo "Salário antigo: R$ " . $salarioAntigo . "<br>";
    echo "Novo salário: R$ " . $funcionario->salario . "<br><br>";
}

?>