<?php   

require_once 'autoload.php';

use Alura\Banco\Modelo\Conta\{ContaPoupanca, ContaCorrente, Titular};
use Alura\Banco\Modelo\CPF;
use Alura\Banco\Modelo\Endereco;

$enderecoTitular = new Endereco('Araras', 'Bairro 2', 'Rua 2', '943');
$titular = new Titular('Nelson', new CPF('435.543.430-54'), $enderecoTitular);
$conta = new ContaPoupanca($titular);
$conta->depositar(20000);
$conta->exibirDadosDaConta();
$conta->sacar(100);
$conta->exibirDadosDaConta();

$enderecoTitular = new Endereco('Leme', 'Bairro 12', 'Rua 3', '333');
$titular = new Titular('Cláudio', new CPF('442.531.431-45'), $enderecoTitular);
$conta = new ContaCorrente($titular);
$conta->depositar(20000);
$conta->exibirDadosDaConta();
$conta->sacar(100);
$conta->exibirDadosDaConta();