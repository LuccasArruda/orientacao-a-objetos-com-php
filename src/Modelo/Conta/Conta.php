<?php

namespace Alura\Banco\Modelo\Conta;

class Conta
{
    private Titular $titular;
    private int $saldo = 0;
    private static $numeroDeContas; //atributo da classe

    public function __construct(Titular $titular)
    {
        $this->titular = $titular;
        Conta::$numeroDeContas++;
    }

    public function recuperarSaldo(): Int
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
    }

    public static function retornaNumeroDeContas(): int
    {
        return Conta::$numeroDeContas;
    }

    public function __destruct()
    {
        self::$numeroDeContas--;
    }
}


