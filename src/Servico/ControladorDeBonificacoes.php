<?php

namespace Alura\Banco\Servico;

use Alura\Banco\Modelo\Funcionario;

class ControladorDeBonificacoes 
{
    private float $totalBonificacoes = 0;

    public function adicionaBonificacaoDe(Funcionario $funcionario)
    {
        $this->totalBonificacoes += $funcionario->calculaBonificacao();
    }

    public function recuperaTotal(): float
    {
        return $this->totalBonificacoes;
    }
}