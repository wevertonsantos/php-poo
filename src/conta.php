<?php

class Conta
{
    private string $cpfTitular;
    private string $nomeTitular;
    private float $saldo = 0;
    private static $numeroDeContas = 0;

    public function __construct(string $cpfTitular, string $nomeTitular)
    {
        $this->cpfTitular = $cpfTitular;
        $this->validaNome($nomeTitular);
        $this->nomeTitular = $nomeTitular;
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

    public function recuperarCpfTitular() : string
    {
        return $this->cpfTitular;
    }

    public function recuperarNomeTitular() : string
    {
        return $this->nomeTitular;
    }

    private function validaNome(string $nomeTitular)
    {
        if(strlen($nomeTitular) < 5){
            echo 'Numero insuficiente de caracteres' . PHP_EOL;
            exit;
        }
        
    }

    public static function numeroDeContas() : int
    {
        return self::$numeroDeContas;
    }

}