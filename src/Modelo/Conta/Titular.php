<?php

namespace Alura\Banco\Modelo\Conta;

require_once 'src/Modelo/Pessoa.php';

use Alura\Banco\Modelo\Autenticavel;
use Alura\Banco\Modelo\Pessoa;
use Alura\Banco\Modelo\Endereco;
use Alura\Banco\Modelo\CPF;

class Titular extends Pessoa implements Autenticavel
{
    private Endereco $endereco;

    public function __construct(string $nome, CPF $cpf, Endereco $endereco)
    {
        parent::__construct($nome, $cpf);
        $this->endereco = $endereco;
    }

    public function recuperaEndereco(): Endereco
    {
        return $this->endereco;
    }

    public function podeAutenticar(string $senha): bool
    {
        return $senha === '3284';
    }
}



