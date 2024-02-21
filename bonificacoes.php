<?php

require_once 'autoload.php';

use Alura\Banco\Modelo\{CPF, Funcionario};
use Alura\Banco\Servico\ControladorDeBonificacoes;

$umFuncionario = new Funcionario('Luccas', new CPF('327493493242'), 'Gerente', 3500.93);
$outroFuncionario = new Funcionario('Cleversson', new CPF('4234865677'), 'Auxiliar Geral', 5000.83);

$controlador = new ControladorDeBonificacoes();
$controlador->adicionaBonificacaoDe($umFuncionario);
$controlador->adicionaBonificacaoDe($outroFuncionario);

echo $controlador->recuperaTotal();