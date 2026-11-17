<?php

require_once 'dispositivo.php';

$dispositivo01 = new Lampadainteligente("luzBR", "LED", "Branca");
echo $dispositivo01->exibirCor();

echo "<br>";

$dispositivo02 = new ArCondicionado("LG", "BTU3000", 21);
echo $dispositivo02->exibirTemperatura();

?>