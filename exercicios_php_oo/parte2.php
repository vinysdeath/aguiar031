<h1>4</h1>

<?php

class Produto {

    private $nome;

    private $preco;

 

    public function __construct($nome, $preco) {

        $this->nome = $nome;

        $this->preco = $preco;

    }

    public function getNome(){
        return $this->nome;
    }

}

 

$p = new Produto('Teclado', 150.00);

echo $p->getNome(); // ESTA LINHA TINHA ERRO 

?>

<h1>5</h1>

<?php

class Aluno {

    private $nome;

    private $nota;

 

    public function __construct($nome, $nota) {

        $this->nome = $nome;

        $this->nota = $nota;

    }

 

    public function exibir() {

        echo 'Aluno: ' . $this->nome . ' - Nota: ' . $this->nota; // TINHA ERRO AQUI

    }

}

 

$a = new Aluno('Carlos', 8.5);

$a->exibir();

?>

<h1>6</h1>

<?php

class Pessoa {

    private $idade;
 

    public function setIdade($novaIdade) {

        if ($novaIdade < 0) {

            echo 'Idade invalida!';

        } else {
        $this->idade = $novaIdade; // não atribui nada, e dá echo em 'Idade invalida!';
            }
    }

 

    public function getIdade() {

        return $this->idade;

    }

}

 

$p = new Pessoa();

$p->setIdade(-5);

echo $p->getIdade(); // não imprime nada

?>

<h1>7</h1>


<?php

class Carro {

    private $modelo;

 

    public function __construct($modelo) {

        $this->modelo = $modelo;

    }

 

    public function getModelo() {

        return $this->modelo;

    }

}

$c = new Carro('Fusca'); // Sem erro

echo $c->getModelo();

?>