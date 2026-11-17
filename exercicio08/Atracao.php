<?php

abstract class Atracao{
    private string $nome;
    private int $capacidade;

    public function __construct($nome, $capacidade){
        $this->nome = $nome;
        $this->capacidade = $capacidade;
    }

    public function getNome(){
        return $this->nome;
    }

    public function getCapacidade(){
        return $this->capacidade;
    }

    abstract function podeEntrar($idade, $altura);
}

class MontanhaRussa extends Atracao{
    private int $idade;
    private float $altura;

    public function __construct($nome, $capacidade, $idade, $altura){
        parent:: __construct($nome, $capacidade);
        $this->idade = $idade;
        $this->altura = $altura;
    }

    public function podeEntrar($idade, $altura){
        if ($idade >= 12 && $altura >= 1.40){
            echo "Pode Entrar! ";
        }else{
            echo "Não pode entrar!";
        }
    }
}

class CasaAssombrada extends Atracao{
    private int $idade;
    private float $altura;

    public function __construct($nome, $capacidade, $idade, $altura){
        parent:: __construct($nome, $capacidade);
        $this->idade = $idade;
        $this->altura = $altura;
    }

    public function podeEntrar($idade, $altura){
        if ($idade >= 10 && $altura > 0){
            echo "Pode Entrar! ";
        }else{
            echo "Não pode entrar!";
        }
    }
}

class RodaGigante extends Atracao{
    private int $idade;
    private float $altura;

    public function __construct($nome, $capacidade, $idade, $altura){
        parent:: __construct($nome, $capacidade);
        $this->idade = $idade;
        $this->altura = $altura;
    }

    public function podeEntrar($idade, $altura){
        echo "Pode Entrar!";
    }
}
?>