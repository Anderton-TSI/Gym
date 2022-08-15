<?php
error_reporting(E_ALL);
require_once("anonimo.php");
$academia = Academia::desserializar();
if ($_POST['tipo'] == 'P') {
    $academia->adicionarUsuario(new Personal($_POST['nome'],$_POST['datadeNascimento'] ,$_POST['endereco'], $_POST['genero'] ,$_POST['email'],$_POST['senha'],$_POST['contato']));
} else {
    $academia->adicionarUsuario(new Cliente($_POST['nome'],$_POST['datadeNascimento'] ,$_POST['endereco'], $_POST['genero'] ,$_POST['email'],$_POST['senha'],$_POST['contato'],$_POST['peso'], $_POST['altura'], $_POST['cpf'], $_POST['informacoes']));
}
Academia::serializar($academia);
header("Location: /GYM"); 
