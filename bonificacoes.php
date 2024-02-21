<?php

require_once 'autoload.php';

use Alura\Banco\Modelo\Funcionario;
use Alura\Banco\Modelo\CPF;

$umFuncionario = new Funcionario('Luccas', new CPF('327493493242'), 'Gerente', 2500);
echo $umFuncionario->bonificacao();