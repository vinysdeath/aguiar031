<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="exercicio1.php" method="get">
        Nome: <input type="text" name="name"> <br>
        Endereço: <input type="text" name="address"> <br>
        Idade: <input type="number" name="age"> <br>
        Sexo: <input type="radio" id="masc" value="masc"> Masculino <input type="radio" id="fem" value="fem"> Feminino<br>  
        <input type="submit"> <br>
    </form>
<?php
$name = $_GET["name"];
$address = $_GET["address"];
$age = $_GET["age"];
$sex = $_GET["sex"];
echo "Nome: $name <br>";
echo "Minha idade é: $age <br>";
if ($age < 18) {
echo "Menor de idade";
} else {
echo "Endereço: $address <br> Sexo: $sex";
}
?>
</body>
</html>