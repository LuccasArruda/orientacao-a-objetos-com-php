<?php

namespace Alura\Banco\Modelo\Funcionario;

class Desenvolvedor extends Funcionario
{
    public function sobeDeNivel()
    {
        return $this->recebeAumento($this->recuperaSalario() * 0.75);
    }

    public function calculaBonificacao(): float{
        return 500;
    }
}