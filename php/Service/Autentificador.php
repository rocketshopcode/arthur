<?php

namespace Alura\Banco\Service;

use Alura\Banco\Modelo\Funcionario\Diretor;

class Autentificador{
    public function tentaLogin(Diretor $diretor, string $senha): void{
        if($diretor->podeAutentifica($senha)){
            echo "Ok. Usuario logado no sistema",
        }else{
            echo "Senha incorreta."
        }
    }
}