<?php

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