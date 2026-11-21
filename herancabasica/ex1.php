<?php

class Funcionario {
    public static $nome;
    public static $salario;

    public static function calcularBonus() {
        return self::$salario * 0.10;
    }

}

class Gerente extends Funcionario {}

class Desenvolvedor extends Funcionario {}

$joao = new Gerente();
$joao::$salario = 20000;
$joao::$nome = "João";
echo "Nome: {$joao::$nome} <br> Bônus do gerente: R$ " . $joao::calcularBonus() . "\n" . "<br>";

$maria = new Desenvolvedor();
$maria::$salario = 8000;
$maria::$nome = "Maria";
echo "Nome: {$maria::$nome} <br> Bônus do desenvolvedor: R$ " . $maria::calcularBonus() . "\n" . "<br>";