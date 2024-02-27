<?php

require_once 'autoload.php';

use Alura\Banco\Modelo\CPF;
use Alura\Banco\Modelo\Funcionario\{Desenvolvedor, Gerente, Diretor, EditorVideo};
use Alura\Banco\Servico\ControladorDeBonificacoes;

$umFuncionario = new Gerente('Luccas', new CPF('327493493242'), 1000);
$outroFuncionario = new Diretor('Cleversson', new CPF('4234865677'), 3000);
$desenvolvedor = new Desenvolvedor('Jefferson', new CPF('32948743524'), 10000);
$umEditor = new EditorVideo('Gilmar', new CPF('9304814939'), 2500);

$controlador = new ControladorDeBonificacoes();
$controlador->adicionaBonificacaoDe($umFuncionario);
$controlador->adicionaBonificacaoDe($outroFuncionario);
$controlador->adicionaBonificacaoDe($desenvolvedor);
$controlador->adicionaBonificacaoDe($umEditor);

echo 'Salário Gerente: ' . $umFuncionario->recuperaSalario() . PHP_EOL;
echo 'Salário Diretor: ' . $outroFuncionario->recuperaSalario() . PHP_EOL;
echo 'Salário Funcionário: ' . $desenvolvedor->recuperaSalario() . PHP_EOL;
echo 'Salário Funcionário: ' . $umEditor->recuperaSalario() . PHP_EOL;

echo 'Total em Bonificações: ' . $controlador->recuperaTotal();