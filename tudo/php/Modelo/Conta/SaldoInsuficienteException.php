<?php

namespace Alura\Banco\modelo\Conta;

use throwable;

class SaldoInsuficienteException extends \DomainException{
    public function __construct(float $valorSaque, float $saldoAtual){
        $mensagem = "Você tentou sacar $valorSaque, mas tem apenas $saldoAtual em conta."
        perent::__construct($message);
    }
}