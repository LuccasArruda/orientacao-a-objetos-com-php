<?php

require_once 'src/Modelo/Conta/Conta.php';
require_once 'src/Modelo/Endereco.php';
require_once 'src/Modelo/Conta/Titular.php';
require_once 'src/Modelo/Pessoa.php';
require_once 'src/Modelo/Cpf.php';

use Alura\Banco\Modelo\Conta\Titular;
use Alura\Banco\Modelo\Endereco;
use Alura\Banco\Modelo\CPF;
use Alura\Banco\Modelo\Conta\Conta;

$enderecoLuccas = new Endereco('Araras', 'Rua aparecida', 'Luciano Grebásio', '123');
$luccas = new Titular('Luccas', new CPF('492.215.345-03'), $enderecoLuccas);
$primeiraConta = new Conta($luccas);
$primeiraConta->depositar(5000);

$enderecoFernanda = new Endereco('Araras', 'Pq. das Árvores', 'Revarie Baraldi Gabbani', '135');
$fernanda = new Titular('Fernanda', new CPF('123.833.043-78'), $enderecoFernanda);
$segundaConta = new Conta($fernanda);
$segundaConta->depositar(50034);

echo $fernanda->recuperaNome() . PHP_EOL;

echo $segundaConta::retornaNumeroDeContas() . PHP_EOL;