<?php
require_once 'ObraArte.php';

$obra01 = new Pintura("Brainhot", "67 Aura", "IA");
$obra01->apresentar();

echo "<br>";

$obra02 = new Escultura("Desenho Escolar", "Mateus", "Papel");
$obra02->apresentar();

?>