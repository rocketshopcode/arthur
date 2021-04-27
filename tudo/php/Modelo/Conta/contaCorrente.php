<?php

namespace Alura\Banco\modelo\Conta;

class ContaCorrente{
    protected function percentualTarifa(): float{
        return 0.05;
    }
 
    public function transferir(float $valorATransferir, Conta $contaDestino): void{
        if ($valorATransferir > $this->saldo) {
            echo "Saldo indisponível";
        }else {
            $this->sacar($valorATransferir);
            $contaDestino->depositar($valorATransferir);
        }
    }
}