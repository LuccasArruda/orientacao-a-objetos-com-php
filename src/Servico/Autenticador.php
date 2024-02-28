<?php

namespace Alura\Banco\Servico;

use Alura\Banco\Modelo\Autenticavel;

class Autenticador
{
    public function tentaLogin(Autenticavel $autenticavel, string $senha): void 
    {
        if($autenticavel->podeAutenticar($senha)){
            echo "Autenticado!" . PHP_EOL;
        } else {
            echo "Senha inválida!" . PHP_EOL;
        }
    }
}