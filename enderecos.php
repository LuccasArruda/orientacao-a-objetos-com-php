<?php
use Alura\Banco\Modelo\Endereco;

require_once 'autoload.php';

$umEndereco = new Endereco('Araras', 'José Ometto', 'Rua Tiradentes', '231');
$outroEndereco = new Endereco('Leme', 'Barão Heggerston', 'Tales Oliveira', '324');

echo $umEndereco . PHP_EOL;
echo $outroEndereco . PHP_EOL;