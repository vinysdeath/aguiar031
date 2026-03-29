<?php

class Funcionario {
    public $nome;
    public $cargo;
    public $salario;
    public $admissao;
    public function salarioanual() {
        $salario = $this->salario*12;
        echo $salario;
    }
}

$jeff = new Funcionario();
$jeff->nome="Jeff";
$jeff->cargo="Limpa-vidro";
$jeff->salario=100.50;
$jeff->admissao="12/05/2009";

echo $jeff->nome . "<br>";
echo $jeff->cargo . "<br>";
echo $jeff->salario . "<br>";
echo $jeff->admissao . "<br>";
echo $jeff->salarioanual() . "<br>";

echo "<br>";

$bill = new Funcionario();
$bill->nome="Bill";
$bill->cargo="C.E.O";
$bill->salario=6545.40;
$bill->admissao="05/02/1996";

echo $bill->nome . "<br>";
echo $bill->cargo . "<br>";
echo $bill->salario . "<br>";
echo $bill->admissao . "<br>";
echo $bill->salarioanual() . "<br>";