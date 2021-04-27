<?php

use Alura\Banco\Service\ControladorDeBonificacoes;
use Alura\Banco\Modelo\{CPF};
use Alura\Banco\Modelo\Funcionario\{Gerente, Desenvolvedor};


$umFuncionario = new Funcionario(
    'Arthur',
        new CPF('123.456.789-10'),
        1000
);

$umaFuncionaria = new Gerente(
    'Vitoria',
        new CPF('321.654.987-30'), 
        3000
);

$umDiretor = new Diretor(
    'vitor',
        new CPF('369.258.147-26'),
        5000
);

$umEditor = new EditorVideo(
    'Gabriel',
    new CPF('789.456.123-85'),
    1500
);



$controlador = new ControladorDeBonificacoes();
$controlador->adicionaBonificacaoDe($umFuncionario);
$controlador->adicionaBonificacaoDe($umaFuncionaria);
$controlador->adicionaBonificacaoDe($umDiretor);
$controlador->adicionaBonificacaoDe($umEditor);


echo $controlador->recuperaTotal;