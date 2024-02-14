<?php

class Funcionario extends Pessoa
{
    private string $cargo;

    public function __construct(string $nome, CPF $cpf, string $cargo)
    {
        parent::__construct($nome, $cpf);
        $this->cargo = $cargo;
    }

    public function retornaCargo(): string
    {
        return $this->cargo;
    }

    public function alteraNome(string $nome)
    {
        $this->validaNome($nome);
        $this->nome = $nome;
    }
}