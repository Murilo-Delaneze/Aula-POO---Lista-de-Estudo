<?php
require_once "personagem.php";

$personagem1 = new Personagem("JP", 100);
$personagem1->receberDano(30);
$personagem1->recuperarVida(15);
echo $personagem1->getVida();

?>