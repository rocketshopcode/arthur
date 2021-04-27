<?php

use Alura\Banco\Modelo\Endereco;

require_once 'autoload.php';

$umEndereco = new Endereco('General Salgado', 'bairro num sei', 'rua tambem num sei', '54');
$outroEndereco = new Endereco('Represa Corrego Lagoinha', 'bairro brejo paulista', 'rua do lambari', '48');

$umEndereco->rua;
echo $umEndereco->bairro

echo $umEndereco,'<br>';
echo $outroEndereco;