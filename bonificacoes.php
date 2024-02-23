<?php

require_once 'autoload.php';

use Alura\Banco\Modelo\CPF;
use Alura\Banco\Modelo\Funcionario\{Desenvolvedor, Gerente, Diretor};
use Alura\Banco\Servico\ControladorDeBonificacoes;

$umFuncionario = new Gerente('Luccas', new CPF('327493493242'), 'Gerente', 1000);
$outroFuncionario = new Diretor('Cleversson', new CPF('4234865677'), 'Diretor', 3000);
$desenvolvedor = new Desenvolvedor('Jefferson', new CPF('32948743524'), 'Desenvolvedor', 10000);

$controlador = new ControladorDeBonificacoes();
$controlador->adicionaBonificacaoDe($umFuncionario);
$controlador->adicionaBonificacaoDe($outroFuncionario);
$controlador->adicionaBonificacaoDe($desenvolvedor);

echo 'Salário Gerente: ' . $umFuncionario->recuperaSalario() . PHP_EOL;
echo 'Salário Diretor: ' . $outroFuncionario->recuperaSalario() . PHP_EOL;
echo 'Salário Funcionário: ' . $desenvolvedor->recuperaSalario() . PHP_EOL;

echo 'Total em Bonificações: ' . $controlador->recuperaTotal();