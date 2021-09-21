<?php declare(strict_types=1);

namespace Alura;

require_once 'autoload.php';

$correntistas_compras = [
    "Giovanni",
    "João",
    12, 
    "Maria",
    25,
    "Luis",
    "Luisa",
    "12"
];

echo "<pre>";
var_dump($correntistas_compras);

ArrayUtils::remover(12, $correntistas_compras);

var_dump($correntistas_compras);


