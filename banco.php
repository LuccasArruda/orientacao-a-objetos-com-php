<?php

require_once 'src/Conta.php';
require_once 'src/Titular.php';
require_once 'src/Cpf.php';
require_once 'src/Endereco.php';

$enderecoLuccas = new Endereco('Araras', 'Rua aparecida', 'Luciano Grebásio', '123');
$luccas = new Titular('Luccas', new CPF('492.215.345-03'), $enderecoLuccas);
$primeiraConta = new Conta($luccas);
$primeiraConta->depositar(5000);

$enderecoFernanda = new Endereco('Araras', 'Pq. das Árvores', 'Revarie Baraldi Gabbani', '135');
$fernanda = new Titular('Fernanda', new CPF('123.833.043-78'), $enderecoFernanda);
$segundaConta = new Conta($fernanda);
$segundaConta->depositar(50034);

echo $segundaConta::retornaNumeroDeContas() . PHP_EOL;