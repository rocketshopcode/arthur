<?php

namespace Alura\Banco\Modelo\Funcionario;

use Alura\Banco\Modelo\Funcionario;

class Gerente extends Funcionario implements Altenticavel{


    public function calculaBonificacao(): float{
        return $this->recuperaSalario();
    }

    public function podeAutentificar(string $senha): bool{
        return $senha === '4321';
    }

}