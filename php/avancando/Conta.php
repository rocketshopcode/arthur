<?php

class Conta{

        public  $cpfTitular;
        public  $nomeTitular;
        public  $saldo = 0;

    public function sacar($contaASacar, float $valorASacar){
        if ($valorASacar > $this->sacar){
            echo "Saldo indisponivel";
        }else{
            $this - $valorASacar;
        }
    }

    public function depositar(float $valorADepositar): void{
        if ($valorADepositar < 0) {
            echo "Valor precisa ser positivo";
        }else {
            $this->saldo += $valorADepositar;
        }
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

