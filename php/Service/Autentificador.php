<?php

namespace Alura\Banco\Service;

use Alura\Banco\Modelo\Funcionario\Diretor;

class Autentificador{
    
    public function tentaLogin(Autenticavel $autenticavel, string $senha): void{
        if($autenticavel->podeAutentificar($senha)){
            echo "Ok. Usuario logado no sistema",
        }else{
            echo "Senha incorreta."
        }
    }
}