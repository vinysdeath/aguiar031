<?php

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