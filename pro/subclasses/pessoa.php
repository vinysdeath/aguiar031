<?php 

class Pessoa {
    
    public $nome;
    public $idade;
    
    public function apresentar() {
        return "Olá, meu nome é {$this->nome} e tenho {$this->idade} anos.";
    }
}  

class Estudante extends Pessoa {
    public $escola;

    public function apresentar() {
        return parent::apresentar() . " Estudo na escola {$this->escola}.";
    }
}

$p = new Estudante();
$p->nome = "Jeffrey Jack Jolly Jew Jr.";
$p->idade = 42;
$p->escola = "CESB";
echo $p->apresentar();



?>

