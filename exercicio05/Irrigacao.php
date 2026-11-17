<?php

abstract class Irrigacao{
    protected float $area;

    public function __construct($area){
        $this->area = $area;
    }

    abstract function calcularConsumo();
}

class Gotejamento extends Irrigacao{
    private float $consumo ;

    public function __construct($area, $consumo = 5){
        parent:: __construct($area);
        $this->consumo = $consumo;
    }

    public function calcularConsumo(){
        return "Consumo: " . $this->area * $this->consumo . " M^2";
    }
}

class Aspersao extends Irrigacao{
    private float $consumo;

    public function __construct($area, $consumo = 8){
        parent:: __construct($area);
        $this->consumo = $consumo;
    }

    public function calcularConsumo(){
        return "Consumo: " . $this->area * $this->consumo . " M^2";
    }
}
?>