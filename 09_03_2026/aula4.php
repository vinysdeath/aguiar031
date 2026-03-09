<?php
$alunos = [
    ["nota"=>6.7, "nome"=>"Dante"],
    ["nota"=>5.5, "nome"=>"Arthur"],
    ["nota"=>10, "nome"=>"Cesar"]
];

$soma = 0;

foreach ($alunos as $aluno) {
    $soma += $aluno["nota"];
}

$media = $soma / count($alunos);

echo "Media: $media";

?>