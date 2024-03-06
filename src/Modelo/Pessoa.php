<?php

namespace Alura\Banco\Modelo;

class Pessoa
{
    use AcessoPropriedadesPrivadas;

    protected string $nome;
    protected CPF $cpf;

    public function __construct(string $nome, CPF $cpf)
    {
        $this->validaNome($nome);
        $this->nome = $nome;
        $this->cpf = $cpf;
    }

    final public function validaNome(string $nome)
    {
        if (strlen($nome) < 5) {
            echo 'O Nome deve ter pelo menos 5 caractéres';
            exit();
        }
    }

    public function recuperaNome(): string
    {
        return $this->nome; 
    }

    public function recuperaCPF(): string
    {
        return $this->cpf->recuperaCpf();
    }
}