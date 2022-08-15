<?php
//require_once('anonimo.php');
require_once('Academia.php');
session_start();
$email = $_POST['email'];
$senha = $_POST['senha'];

$academia = Academia::desserializar();
$usuario = Usuario::autenticar($academia->getUsuarios(),$email, $senha);

if ($usuario != null) {
    $_SESSION['usuario'] = serialize($usuario);
    if($usuario instanceof Personal){
        header('Location: PaginaPesonais.php');
    }else{
        header('Location: Interface_treinos.php');
    }
    return;
}
header('Location: login.php');