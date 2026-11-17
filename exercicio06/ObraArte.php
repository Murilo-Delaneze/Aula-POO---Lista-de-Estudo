<?php

class ObraArte{
    private string $titulo;
    private string $artista;

    public function __construct($titulo, $artista){
        $this->titulo = $titulo;
        $this->artista = $artista;
    }

    public function getTitulo(){
        return $this->titulo;
    }

    public function getArtista(){
        return $this->artista;
    }
}

class Pintura extends ObraArte{
    private string $tecnica;

    public function __construct($titulo, $artista, $tecnica){
        parent:: __construct($titulo, $artista);
        $this->tecnica = $tecnica;
    }

    public function apresentar(){
        echo "Titulo: " . $this->getTitulo() . " | Artista: " . $this->getArtista() . " | Tecnica: " . $this->tecnica;
    }
}

class Escultura extends ObraArte{
    private string $material;

    public function __construct($titulo, $artista, $material){
        parent:: __construct($titulo, $artista);
        $this->material = $material;
    }

    public function apresentar(){
        echo "Titulo: " . $this->getTitulo() . " | Artista: " . $this->getArtista() . " | Material: " . $this->material;
    }
}
?>