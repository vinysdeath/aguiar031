<?php

class Circulo {
    public $raio;

    public function area() {
        $area = 3.141 * pow($this->raio, 2);
        echo $area . "<br>";
    }
    public function perimetro() {
        $perimetro = 2 * 3.141 * $this->raio;
        echo $perimetro . "<br>";
    }
}

$bola = new Circulo();
$bola->raio=16;
$bola->area();
$bola->perimetro();