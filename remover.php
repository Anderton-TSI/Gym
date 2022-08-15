<?php
require_once('Academia.php');
require_once('Cliente.php');
require_once('Treinos.php');
$academia = Academia::desserializar();
$usuario=$_GET['u'];  
$chave=$_GET['t'];
$usuario=$academia->getUsuario($usuario);
$usuario->removerTreino($chave);
$academia->atualizarUsuario($usuario,$_GET['u']);
$academia->serializar($academia);
header("location: PaginaPesonais.php");
?>