<?php

use Alura\Banco\Modelo\Funcionario\Diretor;
use Alura\Banco\Servico\Autenticador;
use Alura\Banco\Modelo\CPF;

require_once 'autoload.php';

$autenticador = new Autenticador();
$umDiretor = new Diretor('Wilson Castro', new CPF('12343566255'), 10000);

$autenticador->tentaLogin($umDiretor, '1234');