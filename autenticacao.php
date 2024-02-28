<?php

use Alura\Banco\Modelo\Funcionario\Diretor;
use Alura\Banco\Servico\Autenticador;
use Alura\Banco\Modelo\Conta\Titular;
use Alura\Banco\Modelo\CPF;
use Alura\Banco\Modelo\Endereco;

require_once 'autoload.php';

$autenticador = new Autenticador();
$umDiretor = new Diretor('Wilson Castro', new CPF('12343566255'), 10000);
$umTitular = new Titular('ARIVALDO', new CPF('19283798213'), new Endereco('Araras', 'Bairro 2', 'Rua 3', '263A'));

$autenticador->tentaLogin($umDiretor, '1234');