<?php

class Dispositivo{
    protected string $marca;
    protected string $modelo;

    public function __construct($marca, $modelo){
        $this->marca = $marca;
        $this->modelo = $modelo;
    }

    public function exibirInformacoes(){
        echo " | Marca: " . $this->marca . " | Modelo: " . $this->modelo;
    }
}


class Lampadainteligente extends Dispositivo{
    protected string $cor;

    public function __construct($marca, $modelo, $cor){
        parent:: __construct($marca, $modelo);
        $this->cor = $cor;
    }

    public function exibirCor(){
        parent:: exibirInformacoes();
        return " | Cor: " . $this->cor;
    }
}

class ArCondicionado extends Dispositivo{
    protected int $temperatura;

    public function __construct($marca, $modelo, $temperatura){
        parent:: __construct($marca, $modelo);
        $this->temperatura = $temperatura;
    }

    public function exibirTemperatura(){
        parent:: exibirInformacoes();
        return " | Temperatura: " . $this->temperatura . "C";
    }
}

?>