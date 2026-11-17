<?php
require_once 'Instrumento.php';

$primeiro = new Violao();
$segundo = new Piano();
$terceiro = new Bateria();


$array = [$primeiro, $segundo, $terceiro];

foreach ($array as $toques){
    echo $toques->tocar();
    echo "<br>";
};


?>