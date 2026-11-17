<?php

class Instrumento{
    public function tocar(){
        echo "Nenhum som...";
    }
}

class Violao extends Instrumento{
    public function tocar(){
        return "O violão está tocando acordes.";
    }
}

class Piano extends Instrumento{
    public function tocar(){
        return "O piano está tocando uma melodia.";
    }
}

class Bateria extends Instrumento{
    public function tocar(){
        return "A bateria está marcando o ritmo.";
    }
}

?>