<?php

namespace Alura\Banco\Modelo;

final class Endereco{

    use AcessoPropriedades;

    private string $cidade;
    private string $bairro;
    private string $rua; 
    private string $numero;

    public function __construct(string $cidade, string $bairro, string $rua, string $numero ){
        $this->bairro = $bairro;
        $this->rua = $rua
        $this->numero = $numero
        $this->cidade = $cidade
    }

    public function recuperacidade():string{
        return $this->cidade;
    }

    public function recuperanumero():string{
        return $this->numero;
    }

    public function recuperabairro():string{
        return $this->bairro;
    }

    public function recuperarua():string{
        return $this->rua;
    }

    public function __toString(): string{
        return "{$this->rua}, {$this->numero}, {$this->bairro}, {$this->cidade}"

    }

    public function __get(string $nomeAtributo){
        $metodo = 'recupera' . ucfirst($nomeAtributo); 
        echo $nomeAtributo;
        exit();
    }

}