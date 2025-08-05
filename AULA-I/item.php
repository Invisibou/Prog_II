<?php

class produto{
   public $preco
   public $desoncto
   
   public function precoFinal($valor, $desc)
    {
        $this->preco = $valor
        $this->desconto = $this->preco * $desc / 100;
        return $this->preco - $this->desconto;
        

  
    }
    
   

}


$camiseta = new Produto();

echo $camiseta ->precoFinal(100,10)

echo $final;//talvez nao 
s?>