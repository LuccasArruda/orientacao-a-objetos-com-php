<?php

namespace Alura\Banco\Servico;

use Alura\Banco\Modelo\Funcionario\Diretor;

class Autenticador
{
    public function tentaLogin(Diretor $diretor, string $senha): void 
    {
        if($diretor->podeAutenticar($senha)){
            echo "Autenticado!" . PHP_EOL;
        } else {
            echo "Senha inválida!" . PHP_EOL;
        }
    }
}