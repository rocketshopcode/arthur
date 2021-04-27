<?php

spl_autoload_register(function (string $nomeCompletoDaClasse){
    //Alura\Banco\modelo\Endereco
    //php/modelo/endereco.php
    $caminhoArquivo = str_replace('Alura\\Banco', 'php', $nomeCompletoDaClasse);
    $caminhoArquivo = str_replace('\\', DIRECTORY_SEPARATOR, $caminhoArquivo );
    $caminhoArquivo .= '.php';

    if(file_exists($caminhoArquivo )){
        require_once $caminhoArquivo ;
    } 
});