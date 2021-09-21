<?php

namespace Alura;

require 'autoload.php';

$correntistas = [
    'Giovanni',
    'João',
    'Maria',
    'Luis',
    'Luisa',
    'Rafael'
];

$saldos = [
    2500,
    3000,
    4400,
    1000,
    8700,
    9000
];

//Juntou os arrays sem relacionamento entre os dados
//$relacionados = array_merge($correntistas, $saldos);

// relacionou os arrays em um unico array. Combinou as posições. Porém o primeiro array se transformou em chave. 
//Array Associativo ou Map
$relacionados = array_combine($correntistas, $saldos);
$relacionados["Matheus"] = 4500; 

echo "<pre>";
var_dump($relacionados);
echo "</pre>";

echo "O saldo do Giovanni é: {$relacionados["Giovanni"]}<br>";

if (array_key_exists("Joao", $relacionados)) {
    echo "O saldo do João é: {$relacionados["Joao"]}";
    
} else {
    echo "Não encontrado";
}

$maiores = ArrayUtils::encontrarPessoasComSaldoMaior(3000, $relacionados);

echo "<pre>";
var_dump($maiores);
echo "</pre>";
