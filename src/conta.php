<?php

class Conta
{
    public $cpfTitular;
    public $nomeTitular;
    public $saldo = 0;

    public function sacarSaldo(float $valorASacar)
    {
        if($valorASacar > $this->saldo){
            echo 'Você não pode sacar esse valor' . PHP_EOL;
        }else{
            $this->saldo -= $valorASacar;
        }
    }

    public function depositar(float $valorADepositar)
    {
        if($valorADepositar < 0){
            'Valor precisa ser positivo' . PHP_EOL;
        }else{
            $this->saldo += $valorADepositar;
        }
    }
}

$primeiraConta = new Conta();

$primeiraConta->cpfTitular = '123.456.789-10';
$primeiraConta->nomeTitular = 'Weverton';
$primeiraConta->saldo = 500;

var_dump($primeiraConta);