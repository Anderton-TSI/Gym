<?php

require_once ("Exercicio.php");

class Treino {

    private $dias;
    private $valido;
    private $exercicios;

    public function __construct(bool $domingo, bool $segunda, bool $terca, bool $quarta, bool $quinta, bool $sexta, bool $sabado){
        $this->dias = [$domingo, $segunda, $terca, $quarta, $quinta, $sexta, $sabado];
        $this->valido = true;
        $this->exercicios = [];
    }

    public function addExercicio(Exercicio $exercicio):void{
        array_push($this->exercicios, $exercicio);
    }
    public function getdias() : array {
        return $this->dias;
    }
    public function getExercicios(){
        return $this->exercicios;
    }
    public function setDia(int $dia, bool $dado=true):void{
        $this->dias[$dia]=$dado;
    }
    public function removeTreino(int $key) : void {
        unset($this->exercicios[$key]);
        array_values($this->exercicios);
    }
}

?>