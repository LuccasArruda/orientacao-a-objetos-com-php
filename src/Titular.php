<?php

class Titular{
    private CPF $cpf;
    private string $nome;

    public function __construct(string $nome, CPF $cpf)
    {
        $this->validaNomeTitular($nome);
        $this->nome = $nome;
        $this->cpf = $cpf;
    }

    private function validaNomeTitular(string $nome)
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

    public function recuperaCpf(): string
    {
        return $this->cpf->recuperaCpf();
    }
}



