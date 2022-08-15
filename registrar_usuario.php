<?php
require_once('anonimo.php');

if ($_POST['tipo'] == 'P') {
    $nome = $_POST['nome'];
    $datadeNascimento = $_POST['datadeNascimento'];
    $endereco = $_POST['endereco'];
    $genero = $_POST['genero'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];
}else{
    $nome = $_POST['nome'];
    $datadeNascimento = $_POST['datadeNascimento'];
    $endereco = $_POST['endereco'];
    $genero = $_POST['genero'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $peso = $_POST['peso'];
    $altura = $_POST['altura'];
    $cpf = $_POST['cpf'];
    $informacoes= $_POST['informacoes'];
}
if ($_POST['tipo'] == 'P') {
    $usuario = new Usuario($nome, $datadeNascimento, $endereco, $genero, $email,md5($senha));
}else{
    $usuario = new Usuario($nome, $datadeNascimento, $endereco, $genero, $email,md5($senha), $peso, $altura, $cpf, $informacoes);
}
$salvou = Usuario::salvar($usuario);
if ($salvou) {
    header('Location: /GYM/login.php');
    return;
}
header('Location: /GYM/Cadastrar.php');