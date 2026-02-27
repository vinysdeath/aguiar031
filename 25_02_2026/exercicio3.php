<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="exercicio3.php" method="get">
        Média Final: <input type="number" name="media">
        <input type="submit">
    </form>
<?php

$media = $_GET["media"];
if ($media <= 1.7) {
    echo "Reprovado";
} elseif ($media > 1.7 && $media < 7) {
    echo "Em exame";
} else {
    echo "Aprovado";
}


?>
</body>
</html>