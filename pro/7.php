<?php

class Triangulo {
    public $b;
    public $h;

    public function area(){
        $area = ($this->b * $this->h)/2;
        echo $area;
    }
    public function tipo(){
        if (($this->b)==($this->h)) {
            echo "equilatero";
        } elseif (($this->b)<($this->h)) {
            echo "isosceles";
        } else {
            echo "escaleno";
        }
    }
}

$triomgulos = new Triangulo();
$triomgulos->b=12;
$triomgulos->h=6;
$triomgulos->tipo();