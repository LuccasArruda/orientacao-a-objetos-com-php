<?php

namespace Alura\Banco\Modelo;

class Funcionario extends Pessoa
{
    private string $cargo;
    private float $salario;

    public function __construct(string $nome, CPF $cpf, string $cargo, float $salario)
    {
        parent::__construct($nome, $cpf);
        $this->cargo = $cargo;
        $this->salario = $salario;
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
        return $this->salario *= 0.01;
    }
}