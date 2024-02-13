<?php

class Titular extends Pessoa

{
    private Endereco $endereco;

    public function __construct(string $nome, CPF $cpf, Endereco $endereco)
    {
        $this->validaNome($nome);
        $this->nome = $nome;
        $this->cpf = $cpf;
        $this->endereco = $endereco;
    }

    public function recuperaEndereco(): Endereco
    {
        return $this->endereco;
    }
}



