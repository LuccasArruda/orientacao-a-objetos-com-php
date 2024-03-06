<?php

namespace Alura\Banco\Modelo;

trait AcessoPropriedadesPrivadas
{
    public function __get(string $nomeMetodo)
    {
        $metodo = 'recupera' . ucfirst($nomeMetodo);
        return $this->$metodo();
    }
}