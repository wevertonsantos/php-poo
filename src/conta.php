<?php

class Conta
{
    public $cpfTitular;
    public $nomeTitular;
    public $saldo;
}

$primeiraConta = new Conta();

$primeiraConta->cpfTitular = '123.456.789-10';
$primeiraConta->nomeTitular = 'Weverton';
$primeiraConta->saldo = 500;

var_dump($primeiraConta);