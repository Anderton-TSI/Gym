<?php
require_once('seguranca.php');
require_once('Academia.php');
require_once('Treinos.php');
$academia = Academia::desserializar();
$usuario=$academia->getUsuario($_GET['u']);
$treino = new Treino(!is_null($_POST['domingo']),!is_null($_POST['segunda']),!is_null($_POST['terca']),!is_null($_POST['quarta']),!is_null($_POST['quinta']),!is_null($_POST['sexta']),!is_null($_POST['sabado']));
$e=new Exercicio( $_POST['nome'], $_POST['equipamento'], $_POST['serie'],$_POST['tempoDescanco']);
$treino->addExercicio($e);
$usuario->adicionarTreino($treino);
$academia->atualizar($usuario->getEmail(),$usuario);
$usuario=$academia->getUsuario($_GET['u']);
Academia::serializar($academia);
header("Location: PaginaPesonais.php");
?>