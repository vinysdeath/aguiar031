<?php

class Funcionario {
    public static $nome;
    public static $salario;

    public static function calcularBonus() {
        return self::$salario * 0.10;
    }
    public static function exibirDados() {
        echo "Nome: " . self::$nome . "<br>";
        echo "Salário: R$ " . self::$salario . "<br>";
    }
}

class Gerente extends Funcionario {
    public static function calcularBonus() {
        return self::$salario * 0.20;
    }
        public static function exibirDados() {
        echo "Nome: " . self::$nome . "<br>";
        echo "Salário: R$ " . self::$salario . "<br>";
        echo "Bônus: R$ " . self::calcularBonus() . "<br><br>";
    }
}

class Desenvolvedor extends Funcionario {
    public static function calcularBonus() {
        return self::$salario * 0.15;
    }
        public static function exibirDados() {
        echo "Nome: " . self::$nome . "<br>";
        echo "Salário: R$ " . self::$salario . "<br>";
        echo "Bônus: R$ " . self::calcularBonus() . "<br><br>";
    }
}

$joao = new Gerente();
$joao::$salario = 4000;
$joao::$nome = "João";

$joao::exibirDados();

$maria = new Desenvolvedor();
$maria::$salario = 4000;
$maria::$nome = "Maria";

$maria::exibirDados();