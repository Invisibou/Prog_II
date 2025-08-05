<?php
// Primeira Classe
// Crie uma classe Pessoa com atributos nome e idade e método apresentar().
class pessoa {
    public $nome;
    private $idade;
    function __construct($nome, $idade) {
        $this->nome = $nome;
        $this->idade = $idade;
    }
    function apresentar(){
        return "Olá, sou $this->nome, tenho $this->idade anos.";
    }
}

$Thigas = new pessoa("thigas", 20);

echo $Thigas->apresentar();