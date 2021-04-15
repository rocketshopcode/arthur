<?php

use Alura\Banco\Service\ControladorDeBonificacoes;
use Alura\Banco\Modelo\{CPF};
use Alura\Banco\Modelo\Funcionario\{Funcionario, Gerente, DesenvolvedorDesenvolvedor};   

$umFuncionario = new Funcionario(
    'Arthur',
        new CPF('123.456.789-10'),
            'desenvolvedor', 
            1000
);

$umaFuncionaria = new Gerente(
    'Vitoria',
        new CPF('321.654.987-30'),
            'gerente', 
            3000
);

$umDiretor = new Diretor(
    'vitor',
        new CPF('369.258.147-26')
);



$controlador = new ControladorDeBonificacoes();
$controlador->adicionaBonificacaoDe($umFuncionario);
$controlador->adicionaBonificacaoDe($umaFuncionaria);
$controlador->adicionaBonificacaoDe($umDiretor);


echo $controlador->recuperaTotal;