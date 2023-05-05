<?php

class Titular
{

    private string $cpf;
    private string $nome;

    public function __construct(string $cpf, string $nome){

        $this->cpf = $cpf;
        $this->nome = $nome;
        $this->validaNome($nome);

    }

    public function recuperarCpf() : string
    {
        return $this->cpf;
    }

    public function recuperarNome() : string
    {
        return $this->nome;
    }


    private function validaNome(string $nome)
    {
        if(strlen($nome) < 5){
            echo 'Numero insuficiente de caracteres' . PHP_EOL;
            exit;
        }
        
    }

}