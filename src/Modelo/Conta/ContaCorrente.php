<?php

namespace Alura\Banco\Modelo\Conta;

use Alura\Banco\Modelo\Conta\Conta;

class ContaCorrente extends Conta 
{
    protected function percentualTarifa(): float
    {
        return 0.05; 
    }

    public function transferir(float $valorASerTransferido, Conta $contaDestino): void
    {
        if ($valorASerTransferido > $this->saldo) {
            echo 'Saldo indisponível!' . PHP_EOL;
            return;
        }

        $this->sacar($valorASerTransferido);
        $contaDestino->depositar($valorASerTransferido);
    }
}