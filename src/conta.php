<?php

class Conta
{
    private int $saldo;
    private string $titular;
    private string $cpf;

    public function __construct(string $nome, string $cpf)
    {
        $this->saldo = 0;
        $this->titular = $nome;
        $this->cpf = $cpf;
    }

    public function getSaldo(): Int
    {
        return $this->saldo; 
    }

    public function depositar(float $valor){
        if ($valor <= 0)
        {
            echo 'Não é possível depositar um valor menor/igual a zero!' . PHP_EOL;
            return;
        }
        
        $this->saldo += $valor;
    }

    public function sacar(float $valor){
        if ($valor <= 0) 
        {   
            echo 'Não é possível sacar um valor menor/igual a zero!' . PHP_EOL;
            return;
        } 
            $this->saldo -= $valor;
    }

    public function transferir(float $valorASerTransferido, Conta $contaDestino): void
    {
        if($valorASerTransferido > $this->saldo)
        {
            echo 'Saldo indisponível!' . PHP_EOL;
            return;
        }
            $this->sacar($valorASerTransferido);
            $contaDestino->depositar($valorASerTransferido);
    }

    public function exibirDadosDaConta(){
        echo "saldo: " . $this->saldo . PHP_EOL;
        echo "titular: " . $this->titular . PHP_EOL;
        echo "numero da conta: " . $this->cpf . PHP_EOL;
    }
}


