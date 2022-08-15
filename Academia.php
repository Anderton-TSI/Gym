<?php

require_once ("Usuario.php");
require_once ("Personal.php");
require_once ("Cliente.php");

class Academia{

    private $usuarios;

    public function __construct(){

        $this->usuarios = array();

    }
    //Adiciona o usuario a o array de usuarios
    public function adicionarUsuario(Usuario $usuario){
        array_push($this->usuarios, $usuario);
    }
    //Atualiza o usuario
    public function atualizarUsuario(Usuario $usuario,int $key) : void{
        $this->usuarios[$key]=$usuario;
    }
    //Pega os usuarios
    public function getUsuarios() : array {
        return $this->usuarios;
    }

    public function atualizar(string $login, Usuario $u){
        foreach ($this->usuarios as $key => $value) {
            if($value->getEmail()==$login){
                $this->usuarios[$key]=$u;
                return;
            }
        }
    }

    //Remove usuario do array
    public function removerUsuario(Usuario $usuario): void{
        $indice = array_search($usuario, $this->usuarios);
        array_splice($this->usuarios, $indice, 1);
    }
    public static function serializar(Academia $academia) : void {
        $file = fopen("academia.data", "w");
        $content = serialize($academia);
        fwrite($file, $content);
        fclose($file);

    }
    public static function desserializar(): Academia {
        if (file_exists("academia.data")) {
            $file = fopen("academia.data", 'r');
            $content = fread($file, filesize("academia.data"));
            $academia = unserialize($content);
            fclose($file);
            return $academia;
        } else {
            return new Academia();
        }
    }

    public function getUsuario(int $key) : Usuario{
        return $this->usuarios[$key];
    }
}

?>