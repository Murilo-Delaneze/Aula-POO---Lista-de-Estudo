<?php

class Corrida{
    private string $atleta;
    private int $distancia;
    private int $tempo;

    public function __construct($atleta, $distancia, $tempo){
        $this->atleta = $atleta;
        $this->distancia = $distancia;
        $this->tempo = $tempo;
    }

    public function getAtleta(){
        return $this->atleta;
    }

    public function getDistancia(){
        return $this->distancia;
    }

    public function getTempo(){
        return $this->tempo;
    }

    public function calcularVelocidade(){
        $resultado = $this->distancia / $this->tempo;
        return $resultado;
    }
}

?>