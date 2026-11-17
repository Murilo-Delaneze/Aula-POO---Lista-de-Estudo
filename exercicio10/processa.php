<?php

require_once 'Servico.php';

$responsavel = $_POST["responsavel"];
$equipamento = $_POST["equipamento"];
$quantidade = $_POST["quantidade"];
$tipoServico = $_POST["tipo_servico"];

if (!$responsavel || !$equipamento || !$quantidade || !$tipoServico){
    exit('Dados Incorretos!');
}

if ($quantidade <= 0) {
    exit('Dados Incorretos');
}

if ($tipoServico == "Preventiva") {
    $servico = new Preventiva($quantidade);
} elseif ($tipoServico == "Corretiva") {
    $servico = new Corretiva($quantidade);
} else {
    $servico = new Instalacao($quantidade);
}

echo "Responsável: " . $responsavel . "<br>";
echo "Equipamento: " . $equipamento . "<br>";
echo "Quantidade: " . $servico->getQuantidade() . "<br>";
echo "Tipo de serviço: " . $tipoServico . "<br>";
echo "Tempo total estimado: " . $servico->calcularTempo() . " horas<br><br>";
echo "<a href='index.html'>Voltar</a>";

?>