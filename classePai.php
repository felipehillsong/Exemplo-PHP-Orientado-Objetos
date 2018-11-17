<?php
class Usuario{
    private $nome;
    private $cpf;
    private $endereco;
    //metodo construtor, nao precisa do get e do set, se tirar o null nao vai funcionar o usuario2 na classeFilha, pois ele passa o valor forçado se na classe filha nao tiver nada
    public function __construct($nome = null, $cpf = null, $endereco = null){
        $this->nome = $nome;
        $this->cpf = $cpf;
        $this->endereco = $endereco;
    }

    public function getNome(){
        return $this->nome;
    }

    public function setNome($Nome){
        $this->nome = $Nome;
    }

    public function getCpf(){
        return $this->cpf;
    }

    public function setCpf($Cpf){
        $this->cpf = $Cpf;
    }

    public function getEndereco(){
        return $this->endereco;
    }

    public function setEndereco($Endereco){
        $this->endereco = $Endereco;
    }
}

?>