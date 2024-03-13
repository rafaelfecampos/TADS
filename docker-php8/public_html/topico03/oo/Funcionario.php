<?php

class Funcionario extends Pessoa {


    public function __construct(float $salario, string $nome){
        parent::__construct($salario,$nome);
    }


    public function getSalario(): float{
        return $this->salario;
    }

    public function setSalario (float $valor){
        if($valor >= 1000){
            $this->salario = $valor;
        }
    }
}