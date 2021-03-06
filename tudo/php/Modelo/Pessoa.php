<?php

namespace Alura\Banco\Modelo;

class Pessoa{

    protected $nome;
    private $cpf;

    public function __construct(string $nome, CPF $cpf){
        $this->nome = $nome;
        $this->cpf = $cpf;
    }

    public function recuperaNome(): string {
        return $this->nome;
    }

    public function recuperaCpf(): string{
        return $this->cpf->recuperaNumero();
    }

    final protected function validaNome(string $nomeTitular){
        if(strlen($nomeTitular) < 5){
            echo "Nome precisa ter no minimo 5 caracteres";
            exit;
        }
    }
    
    public function __get(string $nomeAtributo){
        $metodo = 'recupera' . ucfirst($nomeAtributo); 
        echo $nomeAtributo;
        exit();
    }
}