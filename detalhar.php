<?php
require_once('Academia.php');
require_once('Cliente.php');
require_once('Treinos.php');
$academia = Academia::desserializar();  
$chave=$_GET['u'];
$usuario=$academia->getUsuario($chave);
foreach ($usuario->getTreinos() as $key => $value) {
	foreach ($value->getExercicios() as $key => $exercio) {
		$e=$exercio->listarExercicios()
		?>
<div class="card my-5 py-5 sp-5">
	<div class="card-body">
		<h5 class="card-title py-5"><?=$e[0]?></h5>
		<div class="card-text">
			<p>Equipamento <?=$e[1]?></p>
			<p>Serie <?=$e[2]?></p>
			<p>Tempo de descanso <?=$e[3]?></p>
		</div>
		<div class="card-footer">
			<a href="remover.php?u=<?=$chave?>&t=<?=$key?>" class="btn-outline-danger remover" data-value="<?=$chave?>">Excluir</a>
		</div>
	</div>
</div>		
<?php
	}
}
?>
<a href="adicionar_treino.php?u=<?=$chave?>" class="btn btn-outline-success">Adicionar Treino</a>
<?php
?>
<script>

$('.remover').on('click', function(evt) {
                if (!confirm("Deseja realmente excluir?")) {
                    evt.preventDefault();
                }
            });

</script>