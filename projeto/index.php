<?php

namespace Alura;

spl_autoload_register(
    function(string $namespaceclass): void{
        
    }
);

$correntistas_e_compras = [
    "Gionanni",
    "João",
    12,
    "Maria",
    25,
    "Luiz",
    "luiza",
    12
];

echo "<pre>";

var_dump($correntistas_e_compras);

ArrayUtils::remover(12, $correntistas_e_compras);

var_dump($correntistas_e_compras);

echo "<pre>";