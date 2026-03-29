<?php

class Produto {
    public $nome;
    public $preco;
    public $quantidade;

    public function comprar($valor) {
        $this->quantidade+=$valor;
    }
    
    public function vender($valor) {
        $this->quantidade-=$valor;
    }

    public function exibir() {
        echo $this->nome . "<br>";
        echo "Preço:" . $this->preco . "<br>";
        echo "Quant: " . $this->quantidade . "<br>";
    }
}

$fandangos = new Produto;
$fandangos->nome="Fandangos de Presunto";
$fandangos->preco=13.50;
$fandangos->quantidade=20;


$fandangos->exibir();
$fandangos->comprar(2);
$fandangos->exibir();
$fandangos->vender(6);
$fandangos->exibir();
