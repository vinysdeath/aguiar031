<?php

class contaBancaria {
    public $titular;
    public $saldo;

    public function depositar($valor) {
        $this->saldo+=$valor;
    }
    
    public function sacar($valor) {
        $this->saldo-=$valor;
    }
}

$conta = new contaBancaria();
$conta->titular="Vinícius";
$conta->saldo=130;

$conta->depositar(100);
echo $conta->saldo . "<br>";
$conta->sacar(130);
echo $conta->saldo . "<br>";