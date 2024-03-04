<?php

use Alura\Banco\Modelo\Funcionario\Diretor;
use Alura\Banco\Modelo\Funcionario\Gerente;
use Alura\Banco\Servico\Autenticador;
use Alura\Banco\Modelo\Conta\Titular;
use Alura\Banco\Modelo\CPF;
use Alura\Banco\Modelo\Endereco;

require_once 'autoload.php';

$autenticador = new Autenticador();
$umDiretor = new Diretor('Wilson Castro', new CPF('12343566255'), 10000);
$umTitular = new Titular('Sergio', new CPF('19283798213'), new Endereco('Araras', 'Bairro 2', 'Rua 3', '263A'));
$umGerente = new Gerente('Carlos', new CPF('34238948923'), 10000);

$autenticador->tentaLogin($umDiretor, '1234');
$autenticador->tentaLogin($umTitular, '1234');
$autenticador->tentaLogin($umGerente, '1234');