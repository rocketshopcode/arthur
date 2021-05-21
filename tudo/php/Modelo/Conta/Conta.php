<?php

namespace Alura\Banco\Modelo\Conta;

abstract class Conta{

    private string $titular;
    protected float $saldo;
    private static int $numeroDeContas = 0;

    public function __construct(Titular $titular){
        $this->titular = $titular
        $this->saldo = 0;

        self::$numeroDeContas--;
    }

    public function __destruct(){
        if(self::$numeroDeContas > 2){

        }
    }

    public function saca(float $valorASacar): void {
      
        $tarifaSaque = $valorASacar * $this->percentualTarifa();
        $valorSaque = $valorASacar + $tarifaSaque;
        if ($valorSaque  > $this->saldo) {
            throw new SaldoInsuficienteException($valorSaque, $this->saldo);
        }

        $this->saldo -= $valorSaque;
    }

    public function deposita(float $valorADepositar): void{
        if ($valorADepositar < 0) {
            echo "Valor precisa ser positivo";
        } else {
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

    public function recuperaSaldo(): float{
        return $this->saldo;
    }

    public function recuperaNomeTitular(): string{
        return $this->titular->recuperaNome();
    }

    public function recuperaCpfTitular(): string{
        return $this->titular->recuperaCpf();
    }
    

    public static function recuperaNumeroDeConta():int{
        return self ::$numeroDeContas; 
    } 

}

