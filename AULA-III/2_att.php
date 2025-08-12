<?php

class Aluno {
    public $nome;
    public $media;

    public function verificarAprovacao($nome, $media) 
    {
        $this ->nome = $nome;
        $this ->media = $media;

        if ($this->media >= 7) {
            echo "Aluno $this->nome Aprovado";
        }
        else ($this->media < 7) {
            echo "Aluno $this->nome Reprovado";
        }
    }
    
    
}
