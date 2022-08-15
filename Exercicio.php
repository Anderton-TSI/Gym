<?php
class Exercicio{

    private $nome;
    private $equipamento;
    private $serie;
    private $tempoDescanco;

    public function __construct(string $nome, string $equipamento, string $serie, string $tempoDescanco){

        $this->nome = $nome;
        $this->equipamento = $equipamento;
        $this->serie = $serie;
        $this->tempoDescanco = $tempoDescanco;

    }
    public function listarExercicios() : array {
        return [$this->nome,$this->equipamento,$this->serie,$this->tempoDescanco];
    }

    public function mudarExercicio($newNome, $newEquipamento, $newSerie, $newTempoDescanco){

        $this->nome = $newNome;
        $this->equipamento = $newEquipamento;
        $this->serie = $newSerie;
        $this->tempoDescanco = $newTempoDescanco;

    }
    public function getNome(){
        return $this->nome;
    }
    public function getEquipamento(){
        return $this->equipamento;
    }
    public function getSerie(){
        return $this->serie;
    }
    public function getTempoDescanco(){
        return $this->tempoDescanco;
    }
}

?>