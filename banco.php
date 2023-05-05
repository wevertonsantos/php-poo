<?php

require_once 'src/Conta.php';

$primeiraConta = new Conta('123.456.789-10', 'Weverton');
$primeiraConta->depositar(1000);

echo $primeiraConta->recuperarCpfTitular() . PHP_EOL;
echo $primeiraConta->recuperarNomeTitular() . PHP_EOL;
echo $primeiraConta->recupararSaldo() . PHP_EOL;

echo Conta::numeroDeContas() . PHP_EOL;