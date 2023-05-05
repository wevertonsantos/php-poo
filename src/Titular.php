<?php

class Titular
{

    private Nome $nome;
    private Cpf $cpf;

    public function __construct(Cpf $cpf, Nome $nome){

        $this->cpf = $cpf;
        $this->nome = $nome;
        $this->validaNome($nome);

    }

    public function recuperarCpf() : string
    {
        return $this->cpf->recuperarCpf();
    }

    public function recuperarNome() : string
    {
        return $this->nome->recuperarNome();
    }


    private function validaNome($nome)
    {
        if(strlen($this->nome->recuperarNome()) < 5){
            echo 'Numero insuficiente de caracteres' . PHP_EOL;
            exit;
        }
        
    }

}