<?php
require_once 'Irrigacao.php';

$primeiro = new Gotejamento(100);
echo $primeiro->calcularConsumo();

echo "<br>";

$segundo = new Aspersao(100);
echo $segundo->calcularConsumo();
?>