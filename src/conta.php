<?php

class Conta
{
    public $cpfTitular;
    public $nomeTitular;
    public $saldo = 0;

    public function sacarSaldo(float $valorASacar) : void
    {
        if($valorASacar > $this->saldo){
            echo 'Você não pode sacar esse valor' . PHP_EOL;
            return;
        }

        $this->saldo -= $valorASacar;
    }

    public function depositar(float $valorADepositar) : void
    {
        if($valorADepositar < 0){
            'Valor precisa ser positivo' . PHP_EOL;
            return;
        }
        
        $this->saldo += $valorADepositar;
    }

    public function transferir(float $valorATransferir, Conta $contaDestino) : void{
        if($valorATransferir > $this->saldo){
            echo 'Saldo insuficiente' . PHP_EOL;
            return;
        }
        
        $this->sacarSaldo($valorATransferir);
        $contaDestino->depositar($valorATransferir);
    }

}

$primeiraConta = new Conta();

$primeiraConta->cpfTitular = '123.456.789-10';
$primeiraConta->nomeTitular = 'Weverton';
$primeiraConta->saldo = 500;

var_dump($primeiraConta);