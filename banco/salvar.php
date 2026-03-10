<?php

include ('conexao.php');

$nome = $_POST['nome'];
$endereco = $_POST['endereco'];
$fone = $_POST['fone'];

$sql = "INSERT INTO contatos (nome, endereco, telefone) 
VALUES (    '$nome', '$endereco', '$fone')";

if (mysqli_query($conexao,$sql)){
    echo "<h2>Cadastro realizado.</h2>" . "<a href='index.php'>Voltar </a>";
} else {
    echo "<h2>Erro ao salvar.</h2>" . mysqli_error($conexao) . "<a href='index.php'>Voltar </a>";

}
