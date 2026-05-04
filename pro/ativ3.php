<?php

class Funcionario {
    
// Atributos privados 
    
    private $nome;
    private $idade;
    private $salario;

    // Métodos públicos
    
    public function setNome($novoNome){
        if (!empty($novoNome)) {
            $this->nome = $novoNome;
        } else {
            echo "Nome inválido.";
        } 
    }
    public function setIdade($novaIdade){
        if (is_numeric($novaIdade) && ($novaIdade<=120 && $novaIdade>=0)) {
            $this->idade = $novaIdade; 
                } else {
            echo "Idade inválida";
        }
    }
    private function setSalario($novoSalario){
        if ($novoSalario>0) {
            $this->salario = $novoSalario;
        } else {
            echo "O salário não pode ser definido.";
        }
    }
    public function aumentarSalario($valor){
        if ($valor>0) {
            $this->salario += $valor; 
        } else {
            echo "erro";
        }
    }

    public function getNome(){
        return $this->nome;
    }
    public function getIdade(){
        return $this->idade;
    }
    public function getSalario(){
        return $this->salario;
    }

    public function exibirFuncionario($objeto){
        echo $objeto->getNome();
        echo $objeto->getIdade();
        echo $objeto->getSalario();
    }
}

$pedro = new Funcionario;
$pedro->setNome(""); // caso $pedro->setNome(); dá erro no código por não haver argumentos para o código do if funcionar
$pedro->setIdade(121);

$joao = new Funcionario;
$joao->setNome("João de Carvalho");
$joao->setIdade(67);
$joao->aumentarSalario(4267);

$joao->exibirFuncionario($joao);