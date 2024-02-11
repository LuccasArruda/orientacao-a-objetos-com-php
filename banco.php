<?php

require_once 'src/Conta.php';
require_once 'src/Titular.php';
require_once 'src/Cpf.php';

$luccas = new Titular('Luccas', new CPF('492.805.048-78'));
$primeiraConta = new Conta($luccas);
$primeiraConta->depositar(5000);

$fernanda = new Titular('Fernanda', new CPF('123.833.043-78'));
$segundaConta = new Conta($fernanda);
$segundaConta->depositar(50034);
echo $segundaConta->recuperaTitular() . PHP_EOL;
echo $primeiraConta->recuperaCpf() . PHP_EOL;

echo $primeiraConta->recuperaTitular() . PHP_EOL;
echo $segundaConta->recuperaCpf() . PHP_EOL;

echo $segundaConta::retornaNumeroDeContas() . PHP_EOL;