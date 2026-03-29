<?php

class Pessoa {
    public $nome;
    public $idade;
    public $genero;

    public function exibir() {
        echo $this->nome . "<br>";
        echo $this->idade . "<br>";
        echo $this->genero . "<br>";
    }
    public function idadeMeses() {
        $idadeMes = ($this->idade)*12;
        echo $idadeMes . "<br>";
    }
    public function idadeDias() {
        $idadeDia = ($this->idade)*365;
        echo $idadeDia . "<br>";
    }
}

$vini = new Pessoa();
$vini->nome="Vinícius";
$vini->idade=17;
$vini->genero="M";

$vini->exibir();
$vini->idadeMeses();
$vini->idadeDias();