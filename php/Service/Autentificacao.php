<?php

use Alura\Banco\Modelo\Funcionario\Diretor;
use Alura\Banco\Service\Autentificador;

require_once 'autoload.php';

$autentificador = new Autentificador();
$umDiretor = new Diretor(
    'Ronaldo', 
    new CPF('369.789.258-98'),
    10000
);

$autentificador->tenteLogin($umDiretor, '4321');
