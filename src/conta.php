<?php

require_once 'src/Titular.php';

class Conta
{
    private float $saldo = 0;
    private static $numeroDeContas = 0;
    private $titular;

    public function __construct(Titular $titular)
    {
        $this->titular = $titular;
        $this->saldo = 0;

        self::$numeroDeContas++;
    }

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

    public function transferir(float $valorATransferir, Conta $contaDestino) : void
    {
        if($valorATransferir > $this->saldo){
            echo 'Saldo insuficiente' . PHP_EOL;
            return;
        }

        $this->sacarSaldo($valorATransferir);
        $contaDestino->depositar($valorATransferir);
    }

    public function recupararSaldo() : float
    {
        return $this->saldo;
    }

    public function recupararCpfTitular()
    {
        return $this->titular->recuperarCpf();
    }

    public function recupararNomeTitular() : string
    {
        return $this->titular->recuperarNome();
    }


    public static function numeroDeContas() : int
    {
        return self::$numeroDeContas;
    }

}