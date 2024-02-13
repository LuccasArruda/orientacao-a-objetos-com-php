<?php

class Pessoa
{
    public string $nome;
    public CPF $cpf;

    public function __construct(string $nome, CPF $cpf)
    {
        $this->nome = $nome;
        $this->cpf = $cpf;
    }

    public function validaNome(string $nome)
    {
        if (strlen($nome) < 5) {
            echo 'O Nome deve ter pelo menos 5 caractéres';
            exit();
        }
    }

    public function retornaNome(): string
    {
        return $this->nome; 
    }

    public function retornaCPF(): string
    {
        return $this->cpf->recuperaCpf();
    }
}