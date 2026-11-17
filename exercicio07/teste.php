<?php
require_once 'Robo.php';

$robo1 = new Robo("Robim");
$robo1->executarDesafio();
$robo1->executarDesafio();
echo $robo1->getNome();
echo "<br>";
echo $robo1->getPontos();

echo "<br>";
echo "<br>";

$robo2 = new Robo("Rodolfo");
$robo2->executarDesafio();
$robo2->executarDesafio();
$robo2->executarDesafio();
$robo2->recarregar();
$robo2->executarDesafio();
$robo2->executarDesafio();
echo $robo2->getNome();
echo "<br>";
echo $robo2->getPontos();

echo "<br>";
echo "<br>";

$robo3 = new Robo("Roberto");
$robo3->executarDesafio();
$robo3->executarDesafio();
$robo3->executarDesafio();
echo $robo3->getNome();
echo "<br>";
echo $robo3->getPontos();

echo "<br>";
echo "<br>";

$robos = [$robo1, $robo2, $robo3];
$vencedor = $robos[0];

foreach ($robos as $robo) {
    if ($robo->getPontos() > $vencedor->getPontos()) {
        $vencedor = $robo;
    }
}

echo "Vencedor: " . $vencedor->getNome() . " com " . $vencedor->getPontos() . "!";
?>