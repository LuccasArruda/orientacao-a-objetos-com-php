<?php

namespace Alura\Banco\Modelo\Conta;

abstract class Conta
{
    private Titular $titular;
    protected int $saldo = 0;
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

    public function sacar(float $valorASacar)
    {
        $tarifaDeSaque = $valorASacar * $this->percentualTarifa();
        $valorASacar += $tarifaDeSaque;
        if ($valorASacar <= 0) {
            echo 'Não é possível sacar um valor menor/igual a zero!' . PHP_EOL;
            return;
        }

        $this->saldo -= $valorASacar;
    } 

    abstract protected function percentualTarifa(): float;

    public function exibirDadosDaConta(){
        echo "saldo: " . $this->saldo . PHP_EOL;
        echo "nome do titular: " . $this->titular->recuperaNome() . PHP_EOL;
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


