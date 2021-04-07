<?php   

spl_autoload_register(function (string $nomeCompletoDaClasse){
    //Alura\Banco\modelo\Endereco
    //php/avancando/modelo/endereco.php
    $caminhoArquivo = str_replace('Alura\\Banco', 'php', $nomeCompletoDaClasse);
    $caminhoArquivo = str_replace('\\', DIRECTORY_SEPARATOR, $nomeCompletoDaClasse);
    
    echo $nomeCompletoDaClasse;
    exit();
});

use Alura\Banco\Modelo\Conta\Titular;
use Alura\Banco\Modelo\Endereco;
use Alura\Banco\Modelo\CPF;
use Alura\Banco\Modelo\Conta\conta;

$endereco = new Endereco('general salgado', 'meu bairro', ' minha rua', '147');    
$arthur = new Titular(new CPF('123.456.789-10'), 'Arthur', $endereco);
$primeiraConta->deposita(500);
$primeiraConta->saca(300); 

echo $primeiraConta->recuperaNomeTitular();
echo $primeiraConta->defineCpfTitular();
echo $primeiraConta->recuperaSaldo();

//$primeiraConta->validaNomeTitular();
$vitoria = new Titular(new CPF('321.654.987-30'), 'Vitoria', $endereco);
$segundaConta = new conta($Vitoria);
var_dump($segundaConta);

echo Conta::$recuperaNumeroDeConta; 