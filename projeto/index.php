<?php

$correntistas = [
    "Giovanni",
    'João',
    'Maria',
    'Luiz',
    'Luiza',
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

$relacionados = array_combine($correntistas, $saldos);

$relacionados["Mateus"] = 4500;

echo "<pre>";
var_dump($relacionados);
echo "</pre>";
