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

$id = $_GET['id'];

$sql = "SELECT * FROM contatos WHERE id = $id";

$resultado = mysqli_query($conexao, $sql);

if (mysqli_num_rows($resultado) == 1) {
    $contato = mysqli_fetch_assoc($resultado);
} else {
    echo "Contato não encontrado.";
    exit;
}

if (isset($_POST['atualizar'])) {
    $novo_nome=$_POST['nome'];
    $novo_endereco=$_POST['endereco'];
    $novo_telefone=$_POST['telefone'];

    $sql2 = "UPDATE contatos 
    SET nome='$novo_nome', endereco='$novo_endereco', telefone='$novo_telefone' 
    WHERE id = $id";

    if (mysqli_query($conexao,$sql2)) {
        echo "<h2>Contato atualizado com sucesso!</h2>";
        echo "<a href='index.php'>Voltar</a>";
        exit;
    } else {
        echo "<h2>Erro ao atualizar contato." . mysqli_error($conexao);
        echo "<a href='index.php'>Voltar</a>";
        exit;
    }
}

?>

<form method="POST">
    Nome: <input type="text" name="nome" value="<?php echo $contato['nome'];?>"><br>
    Endereço: <input type="text" name="endereco" value="<?php echo $contato['endereco'];?>"><br>
    Telefone: <input type="text" name="telefone" value="<?php echo $contato['telefone'];?>"><br>
    <input type="submit" name="atualizar" value="Atualizar">
</form>
</div>
</div>
</body>
</html>