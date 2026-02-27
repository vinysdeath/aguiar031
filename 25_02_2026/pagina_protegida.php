<?php

$user = $_GET["user"];
$pass = $_GET["pass"];

if ($user == "admin" && $pass == "admin") {
    echo "Seja bem-vindo(a) administrador(a)";
} elseif ($user == "user" && $pass == "user") {
    echo "Seja bem-vindo(a) usuário";
} else {
    echo "Erro no login";
}

?>