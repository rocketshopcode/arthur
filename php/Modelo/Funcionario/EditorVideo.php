<?php

namespace Alura\Banco\Modelo\Funcionario;

class EditorVideo extends funcionario {
    abstract public function calculaBonificacao(): float{
        return 600;
    } 
}