<?php

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
