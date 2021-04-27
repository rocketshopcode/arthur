<?php

namespace Alura\Banco\Service;

use Alura\Banco\Modelo\Funcionario\Funcionario;

class ControladorDeBonificacoes {

    private $totalBonificacoes = 0; 

    public function adicionaBonificacaoDe(Funcionario $funcionario){
        $this->totalDeBonificacoes += $funcionario->calculaBonificacao();
    }
}