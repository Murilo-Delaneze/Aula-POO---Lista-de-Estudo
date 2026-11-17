<?php

require_once 'SessaoCinema.php';

$cinema1 = new SessaoCinema("Carros 2", "16:40", 04);
echo $cinema1->exibirSessao();
echo "<br>";

$cinema2 = new SessaoCinema("Juraassic Park", "20:00", 19);
echo $cinema2->exibirSessao();
echo "<br>";

$cinema3 = new SessaoCinema("Carros 3", "00:40", 22);
echo $cinema3->exibirSessao();

?>