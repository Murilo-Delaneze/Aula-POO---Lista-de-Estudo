<?php

class Personagem{
    private string $nome;
    private int $vida;

    public function __construct($nome, $vida){
        $this->nome = $nome;
        $this->vida = $vida;
    }


    public function receberDano($valor){
        if ($valor > 0){
            if ($valor < $this->vida){
                return $this->vida = $this->vida - $valor;
            }else{
                return $this->vida = 0;
            }
        }else{
            echo "Valores tem que serem Positivos!";
        }
 
    }

    public function recuperarVida($valor){
        if ($valor > 0){
            return $this->vida = $this->vida + $valor;
        }else{
            echo "Valores tem que serem Positivos!";
        }
        
    }

    public function getVida(){
        return "Vida: " . $this->vida;
    }
}

?>