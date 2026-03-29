<?php

class Carro {
    public $marca;
    public $modelo;
    public $ano;
    public $cor;
    public $maxima;

    public function frear() {
        echo $this->modelo . " a frear";
    }
    public function acelerar() {
        echo $this->modelo . " a acelerar";
    }
    public function exibir() {
        echo $this->marca . "<br>";
        echo $this->modelo . "<br>";
        echo $this->ano . "<br>";
        echo $this->cor . "<br>";
        echo $this->maxima . "<br>";
    }
}

$fusca = new Carro();
$fusca->marca="Volkswagen";
$fusca->modelo="Fusca";
$fusca->ano=1960;
$fusca->cor="Azul";
$fusca->maxima=60;


echo $fusca->frear() . "<br>";
echo $fusca->acelerar() . "<br>";
echo $fusca->exibir() . "<br>";