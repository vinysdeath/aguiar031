<?php

/* 1 */

class Livro {
    public $titulo;
    public $autor;
    public $paginas;
    public $ano;
}

$metamorfose = new Livro();
$metamorfose->titulo="A Metamorfose";
$metamorfose->autor="Franz Kafka";
$metamorfose->paginas=100;
$metamorfose->ano=1997;

echo $metamorfose->titulo . "<br>";
echo $metamorfose->autor . "<br>";
echo $metamorfose->paginas . "<br>";
echo $metamorfose->ano . "<br>";

echo "<br>";

/* 2 */

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

echo "<br>";

/* 3 */

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

/* 4 */

class Aluno {
    public $nome;
    public $matricula;
    public $media;

    public function calcularMedia() {
        if ($this->media >= 7) {
            echo "Aprovado";
        }  else {
            echo "Reprovado";
        }
    }
}

$vini = new Aluno();
$vini->nome="Vinicius";
$vini->matricula=2024563930;
$vini->media=9.5;

echo $vini->nome . "<br>";
echo $vini->matricula . "<br>";
echo $vini->media . "<br>";
echo $vini->calcularMedia() . "<br>";

/* 5 */



class Retangulo {
    public $x;
    public $y;

    public function perimetro(){
        $perimetro = $this->x + $this->y;
        echo $perimetro;
    }
    public function area(){
        $area = $this->x * $this->y;
        echo $area;
    }
}

$quadrado = new Retangulo();
$quadrado->x=5;
$quadrado->y=5;
echo $quadrado->perimetro() . "<br>";
echo $quadrado->area() . "<br>";