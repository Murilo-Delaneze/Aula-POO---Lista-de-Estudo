<?php

class SessaoCinema{
    private string $filme;
    private string $horario;
    private int $sala;

    public function __construct($filme, $horario, $sala){
        $this->filme = $filme;
        $this->horario = $horario;
        $this->sala = $sala;
    }

    public function exibirSessao(){
        $informacoes = "Filme: " . $this->filme . " | Horario: " . $this->horario . " | Sala: " . $this->sala;
        return $informacoes;
    }
}

?>