<?php

class Robo{
    private string $nome;
    private int $bateria;
    private int $pontos;

    public function __construct($nome, $bateria = 100, $pontos = 0){
        $this->nome = $nome;
        $this->bateria = $bateria;
        $this->pontos = $pontos;
    }

    public function executarDesafio(){
        if ($this->bateria > 20){
            $this->bateria = $this->bateria - 20;
            $this->pontos = $this->pontos + 10;
        }else{
            echo "Recarregue a Bateria!";
        }

    }

    public function recarregar(){
        $this->bateria = 100;
    }

    public function getNome(){
        return $this->nome . ":";
    }

    public function getBateria(){
        return $this->bateria;
    }

    public function getPontos(){
        return $this->pontos . " pontos";
    }
}
?>