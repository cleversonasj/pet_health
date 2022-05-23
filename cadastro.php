<?php

require_once './classes/Usuario.php';

$usuario = new App\Formulario\Usuario($_POST['nome'], $_POST['sobrenome'], $_POST['telefone'], $_POST['email'], $_POST['cep'], $_POST['logradouro'], $_POST['bairro'], $_POST['localidade'], $_POST['uf']);

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oswald&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="./css/cadastro.css" />
    <title>PET Health - Cadastro</title>
</head>
<body>
<div class=container>
    <div class="container-left">
        <div>
            <img class="logo_img" src="./image/logo.png" />
        </div>
        <div class="logo">
            <h2 class="header_logo">PET Health</h2>
        </div>
    </div>
    <div class="dados-cadastrados">
        <div class="container-list">
            <h1>Cadastro realizado.</h1>
            <ul>
                <li><b>Nome: </b><?= $usuario->getNomeCompleto() ?></li>
                <li><b>Telefone: </b><?= $usuario->getTelefone() ?></li>
                <li><b>E-mail: </b><?= $usuario->getEmail() ?></li>
                <li><b>Endereço: </b><?= $usuario->getEndereco() ?></li>
            </ul>
        </div>
        <a href="index.php"><button class="btn">Voltar</button></a>
    </div>
</div>
</body>
</html>
