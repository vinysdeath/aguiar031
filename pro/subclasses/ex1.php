<?php


class Funcionario {
    private $nome;
    private $salario;

    public function calcularBonus(){
        return ($this->salario)*0.1;
    }

    public function __construct($nome, $salario) {
        $this->nome = $nome;
        $this->salario = $salario;
    }

    public function getNome(){
        return $this->nome;
    }

    public function getSalario(){
        return $this->salario;
    }
    public function exibir(){
        return "Nome: {$this->nome} <br> Salario: {$this->salario} <br>";
    }
}

class Gerente extends Funcionario {
    public $cargo = "Gerente";

    public function exibir(){
    return parent::exibir() . "{$this->cargo}";
    }
}

class Desenvolvedor extends Funcionario {
    public $cargo = "Desenvolvedor";
    public function exibir(){
    return parent::exibir() . "{$this->cargo}";
    }
}

$joao = new Gerente("João", 20000);
echo $joao->exibir();

echo "<br><br>";

$maria = new Desenvolvedor("Maria", 8000);
echo $maria->exibir();


?>