<?php


class Usuario {
    public $nome = "Ana";

    public static function exibirNome() {
        echo $this->nome; 
    }
}



echo 'A) O erro cometido no código acima acontece porque está chamando this dentro de um método estático.

B) A pseudo-variável $this funciona apenas em contextos de instância, onde são POO (programação orientada a objetos).';


?>