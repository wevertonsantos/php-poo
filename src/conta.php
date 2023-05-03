<?php

class Conta
{
    public $cpfTitular;
    public $nomeTitular;
    public $saldo;

    public function sacarSaldo(float $valorASacar)
    {
        if($valorASacar > $this->saldo){
            echo 'Você não pode sacar esse valor' . PHP_EOL;
        }else{
            $this->saldo -= $valorASacar;
        }
    }
}

$primeiraConta = new Conta();

$primeiraConta->cpfTitular = '123.456.789-10';
$primeiraConta->nomeTitular = 'Weverton';
$primeiraConta->saldo = 500;

var_dump($primeiraConta);