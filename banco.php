<?php

require_once 'autoload.php';

use Alura\Banco\Modelo\Conta\Titular;
use Alura\Banco\Modelo\Endereco;
use Alura\Banco\Modelo\CPF;
use Alura\Banco\Modelo\Conta\{ContaCorrente, ContaPoupanca};

$enderecoLuccas = new Endereco('Araras', 'Rua aparecida', 'Luciano Grebásio', '123');
$luccas = new Titular('Luccas', new CPF('492.215.345-03'), $enderecoLuccas);
$primeiraConta = new ContaCorrente($luccas);
$primeiraConta->depositar(5000);

$enderecoFernanda = new Endereco('Araras', 'Pq. das Ýrvores', 'Revarie Baraldi Gabbani', '135');
$fernanda = new Titular('Fernanda', new CPF('123.833.043-78'), $enderecoFernanda);
$segundaConta = new ContaPoupanca($fernanda);
$segundaConta->depositar(50034);

echo $fernanda->recuperaNome() . PHP_EOL;

echo $segundaConta::retornaNumeroDeContas() . PHP_EOL;