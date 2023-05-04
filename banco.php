<?php

require_once 'src/Conta.php';

$primeiraConta = new Conta();
$primeiraConta->depositar(1000);
$primeiraConta->definirCpfTitular('123.456.789-10');

echo $primeiraConta->recuperarCpfTitular() . PHP_EOL;