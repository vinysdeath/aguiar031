<?php

class Conversor {
    public static function dolarParaReal($valor) {
        return $valor * 5.00;
    }
}

// Opção A 
$v1 = new Conversor();
echo $v1->dolarParaReal(10);

// Opção B
echo Conversor::dolarParaReal(10); 

echo "A boa prática, e melhor opção, é a segunda alternativa, pois não é necessário instanciar a classe para utilizar o método estático.";