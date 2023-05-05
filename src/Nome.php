<?php

class Nome
{
    private string $nome;

    public function __construct(string $nome)
    {
        $this->nome = $nome;
    }

    public function recuperarNome()
    {
        return $this->nome;
    }
}