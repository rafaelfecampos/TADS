<?php

abstract class Pessoa{
    protected float $salario;
    protected string $nome;

    public function __construct($salario,$nome){
        $this->nome = $nome;
        $this->salario = $salario;
    }

    abstract public function setSalario(float $salario);
    abstract public function getSalario(): float;
    abstract public function setNome(string $nome)   ;
    abstract public function getNome(): string;

    function imprimeNome(){
        echo "<p> {$this->nome}<p>";
    }
}