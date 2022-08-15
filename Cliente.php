<?php

require_once("Usuario.php");

class Cliente extends Usuario{

	private $peso;
	private $altura;
	private $cpf;
	private $informacoes;
	private $treinos;

	public function __construct(string $nome, string $datadeNascimento, string $endereco, string $genero, string $email, string $senha, string $contato,string $peso, string $altura,string $cpf, string $informacoes){
		parent::__construct($nome, $datadeNascimento, $endereco, $genero, $email, $senha, $contato);
		$this->peso = $peso;
		$this->altura = $altura;
		$this->cpf = $cpf;
		$this->informacoes = $informacoes;
		$this->treinos = [];
	}

	public function getPeso() : string {
		return $this->peso;
	}

	public function getAltura() : string {
		return $this->altura;
	}

	public function getCpf() : string {
		return $this->cpf;
	}

	public function getInformacoes() : string {
		return $this->informacoes;
	}
	public function getTreinos(): array{
		return $this->treinos;
	}
	//Função usada para remover o treino do aluno
	public function removerTreino(int $key) : void{
        //unset($this->treinos[$key]);
		//array_values($this->treinos);
		$indice= array_search($key, $this->treinos);
		   array_splice($this->treinos, $indice, 1);	   
	}
	//Adiciona treino a o array de treinos do cliente
	public function adicionarTreino(Treino $treino) : void{
		$this->treinos[]=$treino;
	}

}

?>