<?php

require_once("Usuario.php");

class Personal extends Usuario{

	public function __construct(string $nome, string $datadeNascimento, string $endereco, string $genero, string $email, string $senha, string $contato){
		parent::__construct($nome, $datadeNascimento, $endereco, $genero, $email, $senha, $contato);
	}

}

?>