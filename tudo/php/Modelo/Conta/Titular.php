<?php

namespace Alura\Banco\Modelo\Conta;

use Alura\Banco\Modelo\pessoa;
use Alura\Banco\Modelo\CPF;
use Alura\Banco\Modelo\endereco;
use Alura\Banco\Modelo\Autenticavel;


class titular extends pessoa implements Autenticavel{

    private $endereco;

    public function __construct(CPF $cpf, string $nome, Endereco $endereco){
        parent::__construct($nome, $cpf);
        $this->endereco = $endereco;
    }

    public function recuperaEndereco(): Endereco{
        return $this->endereco;
         
    }

    public function podeAutentificar(string $senha): bool{
        return $senha === 'abcd';
    }


}