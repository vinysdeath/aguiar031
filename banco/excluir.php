<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro realizado</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>
<header>Banco de dados</header>
<div class="container">
<div class="cadastro">
<?php
include('conexao.php');

if (isset($_GET['id'])) {


    $id = $_GET['id'];

    // echo "<script>confirm('Deseja realmente excluir o contato $id?');</script>";

    $sql = "DELETE FROM contatos WHERE id = $id";


    if (mysqli_query($conexao, $sql)) {
        echo "<h2>Contato excluído com sucesso.</h2>";
        echo "<a href='index.php'>Voltar</a>";
        exit;
    } else {
        echo "<h2>Erro ao excluir o contato.</h2>" . mysqli_error($conexao);
        echo "<a href='index.php'>Voltar</a>";
        exit;
    }
}
?>
</div>
</div>
</body>
</html>