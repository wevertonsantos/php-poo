<?php

require_once 'src/Conta.php';
require_once 'src/Titular.php';

$primeiraConta = new Conta(new Titular('123.456.789-10', 'Weverton'));
$primeiraConta->depositar(1000);

echo $primeiraConta->recupararCpfTitular() . PHP_EOL;
echo $primeiraConta->recupararNomeTitular() . PHP_EOL;
echo $primeiraConta->recupararSaldo() . PHP_EOL;

echo Conta::numeroDeContas() . PHP_EOL;