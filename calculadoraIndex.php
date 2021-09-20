<?php

require 'Calculadora.php';

//$notas = [9, 3, 10, 5, 10, 8];
$notas = [];

$calculadora = new Calculadora();
$media = $calculadora->calculaMedia($notas);

if ($media) {
    echo "A média é: $media";
} else {
    echo "Não foi possível calcular a média.";
}

// $notaPortugues = 9;
// $notaMatematica = 3;
// $notaGeografia = 10;
// $notaHistoria = 5;
// $notaQuimica = 10;
//$notas = array(9, 3, 10, 5, 10);

