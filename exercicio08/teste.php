<?php
require_once 'Atracao.php';

$montanhaRussa = new MontanhaRussa("Montanha-Russa", 20, 12, 1.40);
$casaAssombrada = new CasaAssombrada("Casa Assombrada", 15, 10, 0);
$rodaGigante = new RodaGigante("Roda-Gigante", 30, 0, 0);

$atracoes = [$montanhaRussa, $casaAssombrada, $rodaGigante];

$visitantes = [
    ["nome" => "João", "idade" => 9,  "altura" => 1.30],
    ["nome" => "Ana",  "idade" => 11, "altura" => 1.45],
    ["nome" => "Pedro", "idade" => 15, "altura" => 1.65]
];

foreach ($visitantes as $visitante) {
    echo "Visitante: " . $visitante['nome'] . " (" . $visitante['idade'] . " anos, " . $visitante['altura'] . "m)";
    echo "<br>";

    foreach ($atracoes as $atracao) {
        echo $atracao->getNome() . ": ";
        $atracao->podeEntrar($visitante['idade'], $visitante['altura']);
        echo "<br>";
    }

    echo "<br>";
}

?>