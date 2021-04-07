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

function titularComLetraMaiuscula(array &$conta){
    $conta['titular'] = mb_strtoupper ($conta ['titular']);
}                       

function exibeConta(array $conta) {
    echo "<li>Titular: $conta[titular]. Saldo: {$conta['saldo']}</li>";
}

public function transferir(float $valorATransferir); void{};

public function recuperarSaldo(): float{
    return $this->saldo;
}

public function defineCpfTitular(string $cpf){
    $this
}

public function recuperarCpfTitular():string{
    return $this->cpfTitular;

}

public function recuperarNomeTitular(): string{
    return $this->nomeTitular;
}