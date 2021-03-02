<?php

function sacar(array $conta, float $valorASacar): array{
    if ($valorASacar > $conta['saldo']) {
        exibeMensagem("Você não pode sacar este valor");
    } else {
        $conta['saldo'] -= $valorASacar;
    }

    return $conta;
} 

function exibeMensagem(string $mensagem){
    echo $mensagem, '<br>';
}

function depositar(array $conta,float $valorADepositar): array{
   if($valorADepositar > 0){
        $conta['saldo'] += $valorADepositar; 
   }else{
       exibeMensagem("O saldo tem q ser positivo");
   }
        return $conta;
}