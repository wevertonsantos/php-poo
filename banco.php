<?php

require_once 'src/Conta.php';
require_once 'src/Titular.php';

$nome = new Nome('Weverton');
$cpf = new Cpf('123.456.789-10');
$weverton = new Titular($cpf, $nome);
$primeiraConta = new Conta($weverton);
$primeiraConta->depositar(1000);

echo $primeiraConta->recupararCpfTitular() . PHP_EOL;
echo $primeiraConta->recupararNomeTitular() . PHP_EOL;
echo $primeiraConta->recupararSaldo() . PHP_EOL;

echo Conta::numeroDeContas() . PHP_EOL;