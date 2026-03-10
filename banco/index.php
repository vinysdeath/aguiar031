<?php
/*
banco: agenda_31
local: localhost
usuario: root
senha: 
    contatos 
        id INT NOT NULL AUTO_INCREMENT
        nome VARCHAR(50) 
        endereco VARCHAR(150)
        telefone VARCHAR(20)
        PRIMARY KEY (id)

mysqli_connect();
mysqli_query();
mysqli_fetch_assoc();
mysqli_num_rows();

*/
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página Principal</title>
</head>
<body>
    <h2>Cadastro de contatos</h2>
    <form action="salvar.php" method="post">
        Nome: <input type="text" name="nome"> <br>
        Endereço: <input type="text" name="endereco"> <br>
        Telefone: <input type="text" name="fone"> <br>
        <input type="submit" value="Cadastrar">
    </form>

    <h2>Lista de contatos</h2>
<?php

include ('conexao.php');
$sql = "SELECT * FROM contatos"; 

$resultado = mysqli_query($conexao, $sql);

if (mysqli_num_rows($resultado) > 0) {
        echo "<table> <tr> <th>Id</th> <th>Nome</th> <th>Endereço</th> <th>Telefone</th> </tr>";     
    while ($linha = mysqli_fetch_assoc($resultado) ){
        echo "<tr> <td>" . $linha['id'] . "</td>" . 
        "<td>" . $linha['nome'] . "</td>" . 
        "<td>" . $linha['endereco'] . "</td>" .
        "<td>" . $linha['telefone'] . "</td> </tr>";
    }
} else {    
    echo "<h3>Nenhum contato encontrado</h3>";
}

?>

</body>
</html>