<h1>Aula 17/08/2026</h1>

<?php


class Calculadora {
    public function somar(int $a, int $b) {
        return $a + $b;
    }

    public function concatenar(string $x, string $y) {
        return $x . $y;
    }
}

$c = new Calculadora();
echo $c->somar(5,3);
echo $c->concatenar("5", "3");

class Saudacao {
    public function mensagem(string $nome): string {
        return "Olá, $nome!";
    }
}

echo "<br>";


$s = new Saudacao();
echo $s->mensagem("Joao");



?>



<br>

Objetivo
Criar uma classe chamada Produto para controlar o estoque de uma loja.

Requisitos
Propriedades Tipadas:

string $nome

float $preco

int $quantidade

Métodos Tipados:

adicionarEstoque(int $qtd): void: adiciona a quantidade informada ao estoque atual.

removerEstoque(int $qtd): bool: remove a quantidade informada do estoque caso haja saldo suficiente (retorna true). 
Se a quantidade solicitada for maior que o estoque atual, não altera o estoque e retorna false.

calcularValorTotal(): float: retorna o valor total do estoque deste produto (preco * quantidade). <br>

<?php

class Produto {
    public string $nome;
    public float $preco;
    public int $quantidade;

    public function __construct(string $nome, float $preco, int $quantidade = 0) {
        $this->nome = $nome;
        $this->preco = $preco;
        $this->quantidade = $quantidade;
    }

    public function adicionarEstoque(int $qtd): void {
        $this->quantidade += $qtd;
    }

    public function removerEstoque(int $qtd): bool {
        if ($qtd <= $this->quantidade) {
            $this->quantidade -= $qtd;
            return true;
        }
        return false;
    }

    public function calcularValorTotal(): float {
        return $this->preco * $this->quantidade;
    }
}

$produto = new Produto("Paçoca", 2.50, 100);
echo "Quantidade: " . $produto->quantidade . "<br>";

// Adicionando itens ao estoque
$produto->adicionarEstoque(5); // Estoque passa a ser 15
echo "Quantidade: " . $produto->quantidade . "<br>"; 


// Removendo estoque
var_dump($produto->removerEstoque(3)); 
echo "Quantidade: " . $produto->quantidade . "<br>";


var_dump($produto->removerEstoque(666)); 
echo "Quantidade: " . $produto->quantidade . "<br>";


// Valor final em dinheiros reais
echo "R$" . $produto->calcularValorTotal();