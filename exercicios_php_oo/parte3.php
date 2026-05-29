<h1>8</h1>
<?php

class Livro {
        private $titulo;
        private $autor;
        private $paginas;

        public function __construct($titulo, $autor, $paginas) {
                $this->titulo = $titulo;
                $this->autor = $autor;
                $this->paginas = $paginas;
        }
        public function getTitulo() {
                return $this->titulo;
        }
        public function getAutor() {
                return $this->autor;
        }
        public function getPaginas() {
                return $this->paginas;
        }
        public function setTitulo($titulo) {
                $this->titulo = $titulo;
        }
        public function setAutor($autor) {
                $this->autor = $autor;
        }
        public function setPaginas($paginas) {
                $this->paginas = $paginas;
        }
        public function exibirInformacoes() {
                echo "Título: " . $this->titulo . "<br>";
                echo "Autor: " . $this->autor . "<br>";
                echo "Número de páginas: " . $this->paginas . "<br>";
        }
}

$livro1 = new Livro("O Senhor dos Anéis", "J.R.R. Tolkien", 1178);
$livro1->exibirInformacoes();
$livro2 = new Livro("1984", "George Orwell", 328);
$livro2->exibirInformacoes();
?>

<h1>9</h1>

<?php

class ContaBancaria{
        private $titular;
        private $saldo;
        
        public function __construct($titular) {
                $this->titular = $titular;
                $this->saldo = 0;
        }
        public function getTitular() {
                return $this->titular;
        }
        public function getSaldo() {
                return $this->saldo;
        }
        public function depositar($valor) {
                if ($valor > 0) {
                        $this->saldo += $valor;
                } else {
                        echo "Valor de depósito inválido.<br>";
                }
        }
        public function sacar($valor) {
                if ($valor > 0 && $valor <= $this->saldo) {
                        $this->saldo -= $valor;
                } else {
                        echo "Valor de saque inválido ou saldo insuficiente.<br>";
                }
        }
        public function exibir() {
                echo "Titular: " . $this->titular . "<br>";
                echo "Saldo: R$" . $this->saldo . "<br>";
        }
}


$conta1 = new ContaBancaria("João");
$conta1->depositar(500);
$conta1->sacar(200);
$conta1->exibir();
?>

<h1>10</h1>

<?php


class Aluno {
        private $nome;
        private $nota1;
        private $nota2;

        public function __construct($nome, $nota1, $nota2) {
                $this->nome = $nome;
                $this->nota1 = $nota1;
                $this->nota2 = $nota2;
        }

        public function getNome() {
                return $this->nome;
        }
        public function getNota1() {
                return $this->nota1;
        }
        public function getNota2() {
                return $this->nota2;
        }
        public function setNome($nome) {
                $this->nome = $nome;
        }
        public function setNota1($nota1) {
                $this->nota1 = $nota1;
        }
        public function setNota2($nota2) {
                $this->nota2 = $nota2;
        }       

        public function calcularMedia($nota1,$nota2) {
                $media = ($nota1 + $nota2) / 2;
                return $media;
        }

        public function situacaoFinal(){
                $media = $this->calcularMedia($this->nota1, $this->nota2);
                if ($media >= 5) {
                        return "Aprovado";
                } else {
                        return "Reprovado";
                }
        }
}
?>

<h1>11</h1>

<?php

class Retangulo {
        private $largura;
        private $altura;

        public function __construct($largura, $altura) {
                if ($largura > 0 && $altura > 0) {
                $this->largura = $largura;
                $this->altura = $altura;
                } else {
                        echo "Erro";
                }
        }
        public function getLargura() {
                return $this->largura;
        }
        public function getAltura() {
                return $this->altura;
        }
        public function setLargura($largura) {
                $this->largura = $largura;
        }
        public function setAltura($altura) {
                $this->altura = $altura;
        }
        public function calcularArea() {
                return $this->largura * $this->altura;
        }
        public function calcularPerimetro() {
                return 2 * ($this->largura + $this->altura);
        }
}

$retangulo1 = new Retangulo(5, 3);
echo "Área: " . $retangulo1->calcularArea() . "<br>";
echo "Perímetro: " . $retangulo1->calcularPerimetro() . "<br>";

$retangulo2 = new Retangulo(4, 6);
echo "Área: " . $retangulo2->calcularArea() . "<br>";
echo "Perímetro: " . $retangulo2->calcularPerimetro() . "<br>";

if ($retangulo1->calcularArea() > $retangulo2->calcularArea()) {
        echo "O retângulo 1 tem a maior área.<br>";
} elseif ($retangulo1->calcularArea() < $retangulo2->calcularArea()) {
        echo "O retângulo 2 tem a maior área.<br>";
} else {
        echo "Os retângulos têm a mesma área.<br>";
}

?>

<h1>12</h1>

<?php

class Funcionario {
        private $nome;
        private $salario;
        private $cargo;

        public function __construct($nome, $salario, $cargo) {
                $this->nome = $nome;
                $this->salario = $salario;
                $this->cargo = $cargo;
        }

        public function getNome() {
                return $this->nome;
        }
        public function getSalario() {
                return $this->salario;
        }
        public function getCargo() {
                return $this->cargo;
        }
        public function aumentarSalario($percentual) {
                if ($percentual > 0) {
                        $this->salario += $this->salario * ($percentual / 100);
                } else {
                        echo "Percentual de aumento inválido.<br>";
                }
        }
        public function exibirInformacoes() {
                echo "Nome: " . $this->nome . "<br>";
                echo "Salário: " . $this->salario . "<br>";
                echo "Cargo: " . $this->cargo . "<br>";
        }
}

$funcionario1 = new Funcionario("Maria", 1000, "Analista");
$funcionario1->aumentarSalario(15);
$funcionario1->exibirInformacoes();
?>

<h1>13</h1>

<?php

class Temperatura {
        private $celsius;

        public function __construct($celsius) {
                $this->celsius = $celsius;
        }
        public function getCelsius() {
                return $this->celsius;
        }
        public function setCelsius($celsius) {
                $this->celsius = $celsius;
        }
        public function paraFahrenheit() {
                return ($this->celsius * 9/5) + 32;
        }
        public function paraKelvin() {
                return $this->celsius + 273.15;
        }
}

$zero = new Temperatura(0);
echo "0°C em Fahrenheit: " . $zero->paraFahrenheit() . "°F<br>";
echo "0°C em Kelvin: " . $zero->paraKelvin() . "K<br>";

$cem = new Temperatura(100);
echo "100°C em Fahrenheit: " . $cem->paraFahrenheit() . "°F<br>";
echo "100°C em Kelvin: " . $cem->paraKelvin() . "K<br>";

$trintaesete = new Temperatura(37);
echo "37°C em Fahrenheit: " . $trintaesete->paraFahrenheit() . "°F<br>";
echo "37°C em Kelvin: " . $trintaesete->paraKelvin() . "K<br>";

?>

<h1>14</h1>

<?php
class Estoque {
        private $produtos;
        public function __construct() {
                $this->produtos = array();
        }
        public function adicionarProduto($produto, $quantidade) {
                if (isset($this->produtos[$produto])) {
                        $this->produtos[$produto] += $quantidade;
                } else {
                        $this->produtos[$produto] = $quantidade;
                }
        }
        public function listarProdutos() {
                foreach ($this->produtos as $produto => $quantidade) {
                        echo "Produto: " . $produto . " - Quantidade: " . $quantidade . "<br>";
                }
        }
        public function totalItens(){
                $total = 0;
                foreach ($this->produtos as $quantidade) {
                        $total += $quantidade;
                }
                return $total;
        }
}

$mercado = new Estoque();
$mercado->adicionarProduto("Arroz", 10);
$mercado->adicionarProduto("Feijão", 5);
$mercado->adicionarProduto("Macarrão", 8);
$mercado->listarProdutos();
echo "Total de itens no estoque: " . $mercado->totalItens() . "<br>";
?>

<h1>15</h1>
<?php

class Contato {
        private $nome;
        private $telefone;

        public function __construct($nome, $telefone) {
                $this->nome = $nome;
                $this->telefone = $telefone;
        }

        public function getNome() {
                return $this->nome;
        }
        public function getTelefone() {
                return $this->telefone;
        }
}

class Agenda {
        private $contatos;

        public function __construct() {
                $this->contatos = array();
        }
        public function adicionarContato($contato) {
                $this->contatos[] = $contato;
        }
        public function listarContatos() {
                foreach ($this->contatos as $contato) {
                        echo "Nome: " . $contato->getNome() . " - Telefone: " . $contato->getTelefone() . "<br>";
                }
        }
}

$contato1 = new Contato("Alice Diniz", "1234-5678");
$contato2 = new Contato("Vitória Bonato", "9876-5432");
$contato3 = new Contato("Yuri Molina", "5555-5555");

$agenda = new Agenda();

$agenda->adicionarContato($contato1);
$agenda->adicionarContato($contato2);
$agenda->adicionarContato($contato3);
$agenda->listarContatos();