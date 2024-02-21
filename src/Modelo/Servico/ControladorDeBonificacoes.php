<?php

namespace Alura\Banco\Servico;

use Alura\Banco\Modelo\Funcionario;

class ControladorDeBonificacao 
{
    private int $totalBonificacoes;

    public function adicionaBOnificacaoDe(Funcionario $funcionario)
    {
        $this->totalBonificacoes += $funcionario->bonificacao();
    }
}