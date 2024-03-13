<?php

class Pessoa{
    protected float $salario;
    protected string $nome;

    __construct($salario,$nome){
        $this->nome = $nome;
        $this->salario = $salario;
    }
}