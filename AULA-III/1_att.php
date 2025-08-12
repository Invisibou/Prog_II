<?php
class Carro
{
    public $marca;
    public $modelo;
    public $ano;   
    function __construct($marca, $modelo, $ano)
    {   
        $this ->marca = $marca;
        $this ->modelo = $modelo;
        $this ->ano = $ano;
    }
    public function exibirinformacoes()
    {
        return "$this->marca; $this->modelo; $this->ano;";
    }
}

$meuCarro = new Carro("Volkswagen", "Gol", "2020");   
echo $meuCarro->exibirinformacoes(); // Deve mostrar os dados do carro