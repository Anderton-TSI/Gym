<?php


class Usuario {

    private $nome;
    private $datadeNascimento;
    private $endereco;
    private $genero; 
    private $email;
    private $senha;
    private $contato;

    public function __construct(string $nome, string $datadeNascimento, string $endereco, string $genero, string $email, string $senha, string $contato)
    {
        $this->nome = $nome;
        $this->datadeNascimento=$datadeNascimento;
        $this->endereco=$endereco;
        $this->genero=$genero;
        $this->email = $email;
        $this->senha = $senha;
        $this->contato = $contato;
    }

    public function getEmail() : string {
        return $this->email;
    }

    public function getNome() : string{
        return $this->nome;
    }

    public function getDatadenascimento() : string{
        return $this->datadeNascimento;
    }

    public function getEndereco() : string{
        return $this->endereco;
    }

    public function getGenero() :string{
        return $this->genero;
    }

    public function getSenha() : string {
        return $this->senha;
    }
    public function getContato() : string {
        return $this->contato;
    }

    public static function getUsuario($usuarios, $email) : Usuario {
        $usuario = null;
        foreach ($usuarios as $u) {
            if ($u->getEmail() == $email) {
                $usuario = $u;
                break;
            }
        }
        return $usuario;
    }

    public static function autenticar($usuarios, $email, $senha) : Usuario {
        $usuario = null;
        foreach ($usuarios as $u) {
            if ($u->getEmail() == $email and $u->getSenha() == $senha) {
                $usuario = $u;
                break;
            }
        }
        return $usuario;
    }

}