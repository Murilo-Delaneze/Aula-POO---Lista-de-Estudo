<?php
require_once 'Corrida.php';

$nome = $_POST['nome'];
$distancia = $_POST['distancia'];
$tempo = $_POST['tempo'];

if (!$nome || !$distancia || !$tempo){
    exit('Dados Incorretos!');
}

if ($distancia <= 0 && $tempo <= 0){
    exit('Dados Incorretos');
}

$corredor1 = new Corrida($nome, $distancia, $tempo);
echo $corredor1->getAtleta();
echo "<br>";
echo $corredor1->getDistancia() . " Km";
echo "<br>";
echo $corredor1->getTempo() . " h";
echo "<br>";
echo $corredor1->calcularVelocidade() . " Km/h";
echo "<br>";
echo "<br>";

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dados Finais</title>
</head>
<body>
    <a href="index.php">Voltar Para o Fomulário</a>
</body>
</html>