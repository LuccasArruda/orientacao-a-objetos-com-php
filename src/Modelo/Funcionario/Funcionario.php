<?php

namespace Alura\Banco\Modelo\Funcionario;

use Alura\Banco\Modelo\Pessoa;
use Alura\Banco\Modelo\CPF;

abstract class Funcionario extends Pessoa
{
    private string $cargo;
    private float $salario;

    public function __construct(string $nome, CPF $cpf, string $cargo, float $salario)
    {
        parent::__construct($nome, $cpf);
        $this->cargo = $cargo;
        $this->salario = $salario;
    }

    public function recebeAumento(float $valorAumento): void
    {
        if ($valorAumento < 0){
            echo "Aumento deve ser positivo!";
            return;
        }  
        
        $this->salario =+ $valorAumento;
    }

    public function retornaCargo(): string
    {
        return $this->cargo;
    }

    public function recuperaSalario(): float{
        return $this->salario;
    }

    public function alteraNome(string $nome)
    {
        $this->validaNome($nome);
        $this->nome = $nome;
    }

    public function calculaBonificacao(): float{
        return $this->salario *= 0.1;
    }
}